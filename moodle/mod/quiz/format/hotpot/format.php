<?PHP // $Id: format.php,v 1.4.2.4 2006/01/02 14:38:01 gbateson Exp $
////////////////////////////////////////////////////////////////////////////
/// Hotpotatoes 6.0 Format
///
/// This Moodle class provides all functions necessary to import (and export)
///
///
////////////////////////////////////////////////////////////////////////////

// Based on default.php, included by ../import.php

class quiz_format_hotpot extends quiz_default_format {

    function provide_import() {
        return true;
    }

    function readquestions ($lines) {
        /// Parses an array of lines into an array of questions,
        /// where each item is a question object as defined by
        /// readquestion().

        // parse the xml source
        $source = implode($lines, " ");
        $xml = new hotpot_xml_tree($source);

        // determine the quiz type
        $xml->quiztype = '';
        $keys = array_keys($xml->xml);
        foreach ($keys as $key) {
            if (preg_match('/^(hotpot|textoys)-(\w+)-file$/i', $key, $matches)) {
                $xml->quiztype = strtolower($matches[2]);
                $xml->xml_root = "['$key']['#']";
                break;
            }
        }

        // convert xml to questions array
        $questions = array();
        switch ($xml->quiztype) {
            case 'jcloze':
                process_jcloze($xml, $questions);
                break;
            case 'jcross':
                process_jcross($xml, $questions);
                break;
            case 'jmatch':
                process_jmatch($xml, $questions);
                break;
            case 'jmix':
                process_jmix($xml, $questions);
                break;
            case 'jbc':
            case 'jquiz':
                process_jquiz($xml, $questions);
                break;
            default:
                if (empty($xml->quiztype)) {
                    notice("Input file not recognized as a Hot Potatoes XML file");
                } else {
                    notice("Unknown quiz type '$xml->quiztype'");
                }
        } // end switch
        return $questions;
    }
} // end class

function process_jcloze(&$xml, &$questions) {
    // define default grade (per cloze gap)
    $defaultgrade = 1;
    $gap_count = 0;

    // detect old Moodles (1.4 and earlier)
    global $CFG, $db;
    $moodle_14 = false;
    if ($columns = $db->MetaColumns("{$CFG->prefix}quiz_multianswers")) {
        foreach ($columns as $column) {
            if ($column->name=='answers' || $column->name=='positionkey' || $column->name=='answertype' || $column->name=='norm') {
                $moodle_14 = true;
            }
        }
    }

    // xml tags for the start of the gap-fill exercise
    $tags = 'data,gap-fill';

    $x = 0;
    while (($exercise = "[$x]['#']") && $xml->xml_value($tags, $exercise)) {
        // there is usually only one exercise in a file

        $question = new stdClass();

        $question->qtype = MULTIANSWER;
        $question->usecase = 0; // Ignore case
        $question->image = "";  // No images with this format

        $question->name = get_hotpotatoes_title($xml, $x);
        $question->questiontext = get_hotpotatoes_reading($xml);

        // setup answer arrays
        if ($moodle_14) {
            $question->answers = array();
        } else {
            global $course; // set in mod/quiz/import.php
            $question->course = $course->id;
            $question->options = new stdClass();
            $question->options->questions = array(); // one for each gap
        }

        $q = 0;
        while ($text = $xml->xml_value($tags, $exercise."[$q]")) {
            // add next bit of text
            $question->questiontext .= addslashes($text);

            // check for a gap
            $question_record = $exercise."['question-record'][$q]['#']";
            if ($xml->xml_value($tags, $question_record)) {

                // add gap
                $gap_count ++;
                $positionkey = $q+1;
                $question->questiontext .= '{#'.$positionkey.'}';
    
                // initialize answer settings
                if ($moodle_14) {
                    $question->answers[$q]->positionkey = $positionkey;
                    $question->answers[$q]->answertype = SHORTANSWER;
                    $question->answers[$q]->norm = $defaultgrade;
                    $question->answers[$q]->alternatives = array();
                } else {
                    $wrapped = new stdClass();
                    $wrapped->qtype = SHORTANSWER;
                    $wrapped->usecase = 0;
                    $wrapped->defaultgrade = $defaultgrade;
                    $wrapped->questiontextformat = 0;
                    $wrapped->answer = array();
                    $wrapped->fraction = array();
                    $wrapped->feedback = array();
                    $answers = array();
                }
    
                // add answers
                $a = 0;
                while (($answer=$question_record."['answer'][$a]['#']") && $xml->xml_value($tags, $answer)) {
                    $text = addslashes($xml->xml_value($tags,  $answer."['text'][0]['#']"));
                    $correct = $xml->xml_value($tags,  $answer."['correct'][0]['#']");
                    $feedback = addslashes($xml->xml_value($tags,  $answer."['feedback'][0]['#']"));
                    if ($text) {
                        // set score (0=0%, 1=100%)
                        $fraction = empty($correct) ? 0 : 1;
                        // store answer
                        if ($moodle_14) {
                            $question->answers[$q]->alternatives[$a] = new stdClass();
                            $question->answers[$q]->alternatives[$a]->answer = $text;
                            $question->answers[$q]->alternatives[$a]->fraction = $fraction;
                            $question->answers[$q]->alternatives[$a]->feedback = $feedback;
                        } else {
                            $wrapped->answer[] = $text;
                            $wrapped->fraction[] = $fraction;
                            $wrapped->feedback[] = $feedback;
                            $answers[] = (empty($fraction) ? '' : '=').$text.(empty($feedback) ? '' : ('#'.$feedback));
                        }
                    }
                    $a++;
                }
                // compile answers into question text, if necessary
                if ($moodle_14) {
                    // do nothing
                } else {
                    $wrapped->questiontext = '{'.$defaultgrade.':SHORTANSWER:'.implode('~', $answers).'}';
                    $question->options->questions[] = $wrapped;
                }
            } // end if gap
            $q++;
        } // end while $text

        // define total grade for this exercise
        $question->defaultgrade = $gap_count * $defaultgrade;

        $questions[] = $question;
        $x++;
    } // end while $exercise
}

function process_jcross(&$xml, &$questions) {
    // xml tags to the start of the crossword exercise clue items
    $tags = 'data,crossword,clues,item';

    $x = 0;
    while (($item = "[$x]['#']") && $xml->xml_value($tags, $item)) {

        $text = $xml->xml_value($tags, $item."['def'][0]['#']");
        $answer = $xml->xml_value($tags, $item."['word'][0]['#']");

        if ($text && $answer) {
            $question = new stdClass();
            $question->qtype = SHORTANSWER;
            $question->usecase = 0; // Ignore case
            $question->image = "";  // No images with this format
            $question->name = get_hotpotatoes_title($xml, $x, true);

            $question->questiontext = addslashes($text);
            $question->answer = array(addslashes($answer));
            $question->fraction = array(1);
            $question->feedback = array('');

            $questions[] = $question;
        }
        $x++;
    }
}

function process_jmatch(&$xml, &$questions) {
    // define default grade (per matched pair)
    $defaultgrade = 1;
    $match_count = 0;

    // xml tags to the start of the matching exercise
    $tags = 'data,matching-exercise';

    $x = 0;
    while (($exercise = "[$x]['#']") && $xml->xml_value($tags, $exercise)) {
        // there is usually only one exercise in a file

        $question = new stdClass();

        $question->qtype = MATCH;
        $question->usecase = 0; // Ignore case
        $question->image = "";  // No images with this format
        $question->name = get_hotpotatoes_title($xml, $x);

        $question->questiontext = get_hotpotatoes_reading($xml);
        $question->questiontext .= get_hotpotatoes_instructions($xml);

        $question->subquestions = array();
        $question->subanswers = array();
        $p = 0;
        while (($pair = $exercise."['pair'][$p]['#']") && $xml->xml_value($tags, $pair)) {
            $left = $xml->xml_value($tags, $pair."['left-item'][0]['#']['text'][0]['#']");
            $right = $xml->xml_value($tags, $pair."['right-item'][0]['#']['text'][0]['#']");
            if ($left && $right) {
                $match_count++;
                $question->subquestions[$p] = addslashes($left);
                $question->subanswers[$p] = addslashes($right);
            }
            $p++;
        }
        $question->defaultgrade = $match_count * $defaultgrade;
        $questions[] = $question;
        $x++;
    }
}

function process_jmix(&$xml, &$questions) {
    // define default grade (per segment)
    $defaultgrade = 1;
    $segment_count = 0;

    // xml tags to the start of the jumbled order exercise
    $tags = 'data,jumbled-order-exercise';

    $x = 0;
    while (($exercise = "[$x]['#']") && $xml->xml_value($tags, $exercise)) {
        // there is usually only one exercise in a file

        $question = new stdClass();
        $question->qtype = SHORTANSWER;
        $question->usecase = 0; // Ignore case
        $question->image = "";  // No images with this format
        $question->name = get_hotpotatoes_title($xml, $x);

        $question->answer = array();
        $question->fraction = array();
        $question->feedback = array();

        $i = 0;
        $segments = array();
        while ($segment = $xml->xml_value($tags, $exercise."['main-order'][0]['#']['segment'][$i]['#']")) {
            $segments[] = addslashes($segment);
            $segment_count++;
            $i++;
        }
        $answer = implode(' ', $segments);

        seed_hotpotatoes_RNG();
        shuffle($segments);

        $question->questiontext = get_hotpotatoes_reading($xml);
        $question->questiontext .= get_hotpotatoes_instructions($xml);
        $question->questiontext .= ' &nbsp; <NOBR><B>[ &nbsp; '.implode(' &nbsp; ', $segments).' &nbsp; ]</B></NOBR>';

        $a = 0;
        while (!empty($answer)) {
            $question->answer[$a] = $answer;
            $question->fraction[$a] = 1;
            $question->feedback[$a] = '';
            $answer = addslashes($xml->xml_value($tags, $exercise."['alternate'][$a]['#']"));
            $a++;
        }
        $question->defaultgrade = $segment_count * $defaultgrade;
        $questions[] = $question;
        $x++;
    }
}
function process_jquiz(&$xml, &$questions) {
    // define default grade (per question)
    $defaultgrade = 1;

    // xml tags to the start of the questions
    $tags = 'data,questions';

    $x = 0;
    while (($exercise = "[$x]['#']") && $xml->xml_value($tags, $exercise)) {
        // there is usually only one 'questions' object in a single exercise

        $q = 0;
        while (($question_record = $exercise."['question-record'][$q]['#']") && $xml->xml_value($tags, $question_record)) {

            $question = new stdClass();
            $question->defaultgrade = $defaultgrade;
            $question->usecase = 0; // Ignore case
            $question->image = "";  // No images with this format
            $question->name = get_hotpotatoes_title($xml, $q, true);

            $text = $xml->xml_value($tags, $question_record."['question'][0]['#']");
            $question->questiontext = addslashes($text);

            if ($xml->xml_value($tags, $question_record."['answers']")) {
                // HP6 JQuiz
                $answers = $question_record."['answers'][0]['#']";
            } else {
                // HP5 JBC or JQuiz
                $answers = $question_record;
            }
            if($xml->xml_value($tags, $question_record."['question-type']")) {
                // HP6 JQuiz
                $type = $xml->xml_value($tags, $question_record."['question-type'][0]['#']");
                //  1 : multiple choice
                //  2 : short-answer
                //  3 : hybrid
                //  4 : multiple select
            } else {
                // HP5
                switch ($xml->quiztype) {
                    case 'jbc':
                        $must_select_all = $xml->xml_value($tags, $question_record."['must-select-all'][0]['#']");
                        if (empty($must_select_all)) {
                            $type = 1; // multichoice
                        } else {
                            $type = 4; // multiselect
                        }
                        break;
                    case 'jquiz':
                        $type = 2; // shortanswer
                        break;
                    default:
                        $type = 0; // unknown
                }
            }
            $question->qtype = ($type==2 ? SHORTANSWER : MULTICHOICE);
            $question->single = ($type==4 ? 0 : 1);

            // workaround required to calculate scores for multiple select answers
            $no_of_correct_answers = 0;
            if ($type==4) {
                $a = 0;
                while (($answer = $answers."['answer'][$a]['#']") && $xml->xml_value($tags, $answer)) {
                    $correct = $xml->xml_value($tags, $answer."['correct'][0]['#']");
                    if (empty($correct)) {
                        // do nothing
                    } else {
                        $no_of_correct_answers++;
                    }
                    $a++;
                }
            }
            $a = 0;
            $question->answer = array();
            $question->fraction = array();
            $question->feedback = array();
            while (($answer = $answers."['answer'][$a]['#']") && $xml->xml_value($tags, $answer)) {
                $correct = $xml->xml_value($tags, $answer."['correct'][0]['#']");
                if (empty($correct)) {
                    $fraction = 0;
                } else if ($type==4) { // multiple select
                    // strange behavior if the $fraction isn't exact to 5 decimal places
                    $fraction = round(1/$no_of_correct_answers, 5);
                } else {
                    if ($xml->xml_value($tags, $answer."['percent-correct']")) {
                        // HP6 JQuiz
                        $percent = $xml->xml_value($tags, $answer."['percent-correct'][0]['#']");
                        $fraction = $percent/100;
                    } else {
                        // HP5 JBC or JQuiz
                        $fraction = 1;
                    }
                }
                $question->fraction[] = $fraction;
                $question->feedback[] = addslashes($xml->xml_value($tags, $answer."['feedback'][0]['#']"));
                $question->answer[] = addslashes($xml->xml_value($tags, $answer."['text'][0]['#']"));
                $a++;
            }
            $questions[] = $question;
            $q++;
        }
        $x++;
    }
}

function seed_hotpotatoes_RNG() {
    static $seeded_hotpotatoes_RNG = FALSE;
    if (!$seeded_hotpotatoes_RNG) {
        srand((double) microtime() * 1000000);
        $seeded_hotpotatoes_RNG = TRUE;
    }
}
function get_hotpotatoes_title(&$xml, $x, $flag=false) {
    $title = $xml->xml_value('data,title');
    if ($x || $flag) {
        $title .= ' ('.($x+1).')';
    }
    return addslashes($title);
}
function get_hotpotatoes_instructions(&$xml) {
    $text = $xml->xml_value('hotpot-config-file,instructions');
    if (empty($text)) {
        $text = "Hot Potatoes $xml->quiztype";
    }
    return addslashes($text);
}
function get_hotpotatoes_reading(&$xml) {
    $str = '';
    $tags = 'data,reading';
    if ($xml->xml_value("$tags,include-reading")) {
        if ($title = $xml->xml_value("$tags,reading-title")) {
            $str .= "<H3>$title</H3>";
        }
        if ($text = $xml->xml_value("$tags,reading-text")) {
            $str .= "<P>$text</P>";
        }
    }
    return addslashes($str);
}

// get the standard XML parser supplied with Moodle
require_once("$CFG->libdir/xmlize.php");

class hotpot_xml_tree {
    function hotpot_xml_tree($str, $xml_root='') {
        if (empty($str)) {
            $this->xml =  array();
        } else {
            // encode htmlentities in JCloze
            $this->encode_cdata($str, 'gap-fill');
            // encode as utf8
            $str = utf8_encode($str);
            // xmlize (=convert xml to tree)
            $this->xml =  xmlize($str, 0);
        }
        $this->xml_root = $xml_root;
    }
    function xml_value($tags, $more_tags="[0]['#']") {

        $tags = empty($tags) ? '' : "['".str_replace(",", "'][0]['#']['", $tags)."']";
        eval('$value = &$this->xml'.$this->xml_root.$tags.$more_tags.';');

        if (is_string($value)) {
            $value = utf8_decode($value);

            // decode angle brackets
            $value = strtr($value, array('&#x003C;'=>'<', '&#x003E;'=>'>'));

            // remove white space between <table>, <ul|OL|DL> and <OBJECT|EMBED> parts 
            // (so it doesn't get converted to <br />)
            $htmltags = '('
            .    'TABLE|/?CAPTION|/?COL|/?COLGROUP|/?TBODY|/?TFOOT|/?THEAD|/?TD|/?TH|/?TR'
            .    '|OL|UL|/?LI'
            .    '|DL|/?DT|/?DD'
            .    '|EMBED|OBJECT|APPLET|/?PARAM'
            //.    '|SELECT|/?OPTION'
            //.    '|FIELDSET|/?LEGEND'
            //.    '|FRAMESET|/?FRAME'
            .    ')'
            ;
            $search = '#(<'.$htmltags.'[^>]*'.'>)\s+'.'(?='.'<'.')#is';
            $value = preg_replace($search, '\\1', $value);

            // replace remaining newlines with <br />
            $value = str_replace("\n", '<br />', $value);

            // encode unicode characters as HTML entities
            // (in particular, accented charaters that have not been encoded by HP)

            // multibyte unicode characters can be detected by checking the hex value of the first character
            //    00 - 7F : ascii char (roman alphabet + punctuation)
            //    80 - BF : byte 2, 3 or 4 of a unicode char
            //    C0 - DF : 1st byte of 2-byte char
            //    E0 - EF : 1st byte of 3-byte char
            //    F0 - FF : 1st byte of 4-byte char
            // if the string doesn't match the above, it might be
            //    80 - FF : single-byte, non-ascii char
            $search = '#('.'[\xc0-\xdf][\x80-\xbf]'.'|'.'[\xe0-\xef][\x80-\xbf]{2}'.'|'.'[\xf0-\xff][\x80-\xbf]{3}'.'|'.'[\x80-\xff]'.')#se';
            $value = preg_replace($search, "hotpot_utf8_to_html_entity('\\1')", $value);
        }
        return $value;
    }
    function encode_cdata(&$str, $tag) {

        // conversion tables
        static $HTML_ENTITIES = array(
            '&apos;' => "'",
            '&quot;' => '"',
            '&lt;'   => '<',
            '&gt;'   => '>',
            '&amp;'  => '&',
        );
        static $ILLEGAL_STRINGS = array(
            "\r"  => '',
            "\n"  => '&lt;br /&gt;',
            ']]>' => '&#93;&#93;&#62;',
        );

        // extract the $tag from the $str(ing), if possible
        $pattern = '|(^.*<'.$tag.'[^>]*)(>.*<)(/'.$tag.'>.*$)|is';
        if (preg_match($pattern, $str, $matches)) {

            // encode problematic CDATA chars and strings
            $matches[2] = strtr($matches[2], $ILLEGAL_STRINGS);


            // if there are any ampersands in "open text"
            // surround them by CDATA start and end markers
            // (and convert HTML entities to plain text)
            $search = '/>([^<]*&[^<]*)</e';
            $replace = '"><![CDATA[".strtr("$1", $HTML_ENTITIES)."]]><"';
            $matches[2] = preg_replace($search, $replace, $matches[2]);

            $str = $matches[1].$matches[2].$matches[3];
        }
    }
}

function hotpot_utf8_to_html_entity($char) {
    // http://www.zend.com/codex.php?id=835&single=1

    // array used to figure what number to decrement from character order value 
    // according to number of characters used to map unicode to ascii by utf-8 
    static $HOTPOT_UTF8_DECREMENT = array(
        1=>0, 2=>192, 3=>224, 4=>240
    );

    // the number of bits to shift each character by 
    static $HOTPOT_UTF8_SHIFT = array(
        1=>array(0=>0),
        2=>array(0=>6,  1=>0),
        3=>array(0=>12, 1=>6,  2=>0),
        4=>array(0=>18, 1=>12, 2=>6, 3=>0)
    );
     
    $dec = 0; 
    $len = strlen($char);
    for ($pos=0; $pos<$len; $pos++) {
        $ord = ord ($char{$pos});
        $ord -= ($pos ? 128 : $HOTPOT_UTF8_DECREMENT[$len]); 
        $dec += ($ord << $HOTPOT_UTF8_SHIFT[$len][$pos]); 
    }
    return '&#x'.sprintf('%04X', $dec).';';
}

// allow importing in Moodle v1.4 (and less)
// same core functions but different class name
if (!class_exists("quiz_file_format")) {
    class quiz_file_format extends quiz_default_format {
        function readquestions ($lines) {
            $format = new quiz_format_hotpot();
            return $format->readquestions($lines);
        }
    }
}

?>
