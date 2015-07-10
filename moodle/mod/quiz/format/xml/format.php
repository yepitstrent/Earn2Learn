<?php // $Id: format.php,v 1.12 2005/05/17 15:47:31 thepurpleblob Exp $
//
///////////////////////////////////////////////////////////////
// XML import/export
//
//////////////////////////////////////////////////////////////////////////
// Based on default.php, included by ../import.php


require_once( "$CFG->libdir/xmlize.php" );

class quiz_format_xml extends quiz_default_format {

 function provide_import() {
   return true;
 }

 function provide_export() {
   return true;
 }

// IMPORT FUNCTIONS START HERE

function trans_format( $name ) {
  // translate text format string to its internal code

  $name = trim($name); 
 
  if ($name=='moodle_auto_format') {
    $id = 0;
  }
  elseif ($name=='html') {
    $id = 1;
  }
  elseif ($name=='plain_text') {
    $id = 2;
  }
  elseif ($name=='wiki_like') {
    $id = 3;
  }
  elseif ($name=='markdown') {
    $id = 4;
  }
  else {
    $id = 0; // or maybe warning required
  }
  return $id;
}

function trans_single( $name ) {
  // translate single string to its internal format

  $name = trim($name);

  if ($name=="true") {
    $id = 1;
  }
  elseif ($name=="false") {
    $id = 0;
  }
  else {
    $id = 0; // or maybe warning required
  }
  return $id;
}

function import_text( $text ) {
  // handle xml 'text' element
  $data = $text[0]['#'];
  $data = html_entity_decode( $data );
  return addslashes(trim( $data ));
}

function import_headers( $question ) {
  // read bits that are common to all questions

  // this routine initialises the question object
  $name = $this->import_text( $question['#']['name'][0]['#']['text'] );
  $qtext = $this->import_text( $question['#']['questiontext'][0]['#']['text'] );
  $qformat = $question['#']['questiontext'][0]['@']['format'];
  $image = $question['#']['image'][0]['#'];
  $penalty = $question['#']['penalty'][0]['#'];

  $qo = null;
  $qo->name = $name;
  $qo->questiontext = $qtext;
  $qo->questiontextformat = $this->trans_format( $qformat );
  $qo->image = ((!empty($image)) ?  $image : '');
  $qo->penalty = $penalty;

  return $qo;
}


function import_answer( $answer ) {
  // import answer part of question

  $fraction = $answer['@']['fraction'];
  $text = $this->import_text( $answer['#']['text']);
  $feedback = $this->import_text( $answer['#']['feedback'][0]['#']['text'] );

  $ans = null;
  $ans->answer = $text;
  $ans->fraction = $fraction / 100;
  $ans->feedback = $feedback;
  
  return $ans;
}

function import_multichoice( $question ) {
  // import multichoice type questions

  // get common parts
  $qo = $this->import_headers( $question );

  // 'header' parts particular to multichoice
  $qo->qtype = MULTICHOICE;
  $single = $question['#']['single'][0]['#'];
  $qo->single = $this->trans_single( $single );

  // run through the answers
  $answers = $question['#']['answer'];  
  $a_count = 0;
  foreach ($answers as $answer) {
     $ans = $this->import_answer( $answer );
     $qo->answer[$a_count] = $ans->answer;
     $qo->fraction[$a_count] = $ans->fraction;
     $qo->feedback[$a_count] = $ans->feedback;
     ++$a_count;
  }

  return $qo;
}

function import_truefalse( $question ) {
  // import true/false type question

  // get common parts
  $qo = $this->import_headers( $question );

  // 'header' parts particular to true/false
  $qo->qtype = TRUEFALSE;

  // get answer info
  $answers = $question['#']['answer'];
  $fraction0 = $answers[0]['@']['fraction'];
  $feedback0 = $this->import_text($answers[0]['#']['feedback'][0]['#']['text']);
  $fraction1 = $answers[1]['@']['fraction'];
  $feedback1 = $this->import_text($answers[1]['#']['feedback'][0]['#']['text']);

  // sort out which is true and build object accordingly
  if ($fraction0==100) { // then 0 index is true
    $qo->answer = 1;
    $qo->feedbacktrue=$feedback0;
    $qo->feedbackfalse=$feedback1;
  }
  else {
    $qo->answer = 0;
    $qo->feedbacktrue = $feedback1;
    $qo->feedbackfalse = $feedback0;
  }

  return $qo;
}

function import_shortanswer( $question ) {
  // import short answer question

  // get common parts
  $qo = $this->import_headers( $question );

  // header parts particular to shortanswer
  $qo->qtype = SHORTANSWER;

  // get usecase
  $qo->usecase = $question['#']['usecase'][0]['#'];

  // run through the answers
  $answers = $question['#']['answer'];  
  $a_count = 0;
  foreach ($answers as $answer) {
     $ans = $this->import_answer( $answer );
     $qo->answer[$a_count] = $ans->answer;
     $qo->fraction[$a_count] = $ans->fraction;
     $qo->feedback[$a_count] = $ans->feedback;
     ++$a_count;
  }

  return $qo;
}

function import_numerical( $question ) {
  // import numerical question

  // get common parts
  $qo = $this->import_headers( $question );

  // header parts particular to numerical
  $qo->qtype = NUMERICAL;

  // get answers array
  $answers = $question['#']['answer'];
  $qo->answer = array();
  $qo->feedback = array();
  $qo->fraction = array();
  $qo->tolerance = array();
  foreach ($answers as $answer) {
    $qo->answer[] = $answer['#'][0];
    $qo->feedback[] = $answer['#']['feedback'][0]['#']['text'][0]['#'];
    $qo->fraction[] = $answer['#']['fraction'][0]['#'];
    $qo->tolerance[] = $answer['#']['tolerance'][0]['#'];
  }

  // get units array
  $units = $question['#']['units'][0]['#']['unit'];
  $qo->unit = array();
  $qo->multiplier = array();
  foreach ($units as $unit) {
    $qo->multiplier[] = $unit['#']['multiplier'][0]['#'];
    $qo->unit[] = $unit['#']['unit_name'][0]['#'];
  }

  return $qo;
}

function readquestions($lines) {
  // parse the array of lines into an array of questions
  // this *could* burn memory - but it won't happen that much
  // so fingers crossed!

  // we just need it as one big string
  $text = implode($lines, " ");
  unset( $lines );

  // this converts xml to big nasty data structure
  // the 0 means keep white space as it is (important for markdown format)
  // print_r it if you want to see what it looks like!
  $xml = xmlize( $text, 0 ); 

  // set up array to hold all our questions
  $questions = array();

  // iterate through questions
  foreach ($xml['quiz']['#']['question'] as $question) {
    $question_type = $question['@']['type'];
    $questiontype = get_string( 'questiontype','quiz',$question_type );
    echo "<p>$questiontype</p>"; 

    if ($question_type=='multichoice') {
      $qo = $this->import_multichoice( $question );
    }  
    elseif ($question_type=='truefalse') {
      $qo = $this->import_truefalse( $question );
    }
    elseif ($question_type=='shortanswer') {
      $qo = $this->import_shortanswer( $question );
    }
    elseif ($question_type=='numerical') {
      $qo = $this->import_numerical( $question );
    }
    else {
      $notsupported = get_string( 'xmlnotsupported','quiz',$question_type );
      echo "<p>$notsupported</p>";
      $qo = null;
    }

    // stick the result in the $questions array
    if ($qo) {
      $questions[] = $qo;
    }
  }

  return $questions;
}

// EXPORT FUNCTIONS START HERE

function indent_xhtml($source, $indenter = ' ') { 
    // xml tidier-upper
    // (c) Ari Koivula http://ventionline.com
    
    // Remove all pre-existing formatting. 
    // Remove all newlines. 
    $source = str_replace("\n", '', $source); 
    $source = str_replace("\r", '', $source); 
    // Remove all tabs. 
    $source = str_replace("\t", '', $source); 
    // Remove all space after ">" and before "<". 
    $source = ereg_replace(">( )*", ">", $source); 
    $source = ereg_replace("( )*<", "<", $source); 

    // Iterate through the source. 
    $level = 0; 
    $source_len = strlen($source); 
    $pt = 0; 
    while ($pt < $source_len) { 
        if ($source{$pt} === '<') { 
            // We have entered a tag. 
            // Remember the point where the tag starts. 
            $started_at = $pt; 
            $tag_level = 1; 
            // If the second letter of the tag is "/", assume its an ending tag. 
            if ($source{$pt+1} === '/') { 
                $tag_level = -1; 
            } 
            // If the second letter of the tag is "!", assume its an "invisible" tag. 
            if ($source{$pt+1} === '!') { 
                $tag_level = 0; 
            } 
            // Iterate throught the source until the end of tag. 
            while ($source{$pt} !== '>') { 
                $pt++; 
            } 
            // If the second last letter is "/", assume its a self ending tag. 
            if ($source{$pt-1} === '/') { 
                $tag_level = 0; 
            } 
            $tag_lenght = $pt+1-$started_at; 
             
            // Decide the level of indention for this tag. 
            // If this was an ending tag, decrease indent level for this tag.. 
            if ($tag_level === -1) { 
                $level--; 
            } 
            // Place the tag in an array with proper indention. 
            $array[] = str_repeat($indenter, $level).substr($source, $started_at, $tag_lenght); 
            // If this was a starting tag, increase the indent level after this tag. 
            if ($tag_level === 1) { 
                $level++; 
            } 
            // if it was a self closing tag, dont do shit. 
        } 
        // Were out of the tag. 
        // If next letter exists... 
        if (($pt+1) < $source_len) { 
            // ... and its not an "<". 
            if ($source{$pt+1} !== '<') { 
                $started_at = $pt+1; 
                // Iterate through the source until the start of new tag or until we reach the end of file. 
                while ($source{$pt} !== '<' && $pt < $source_len) { 
                    $pt++; 
                } 
                // If we found a "<" (we didnt find the end of file) 
                if ($source{$pt} === '<') { 
                    $tag_lenght = $pt-$started_at; 
                    // Place the stuff in an array with proper indention. 
                    $array[] = str_repeat($indenter, $level).substr($source, $started_at, $tag_lenght); 
                } 
            // If the next tag is "<", just advance pointer and let the tag indenter take care of it. 
            } else { 
                $pt++; 
            } 
        // If the next letter doesnt exist... Were done... well, almost.. 
        } else { 
            break; 
        } 
    } 
    // Replace old source with the new one we just collected into our array. 
    $source = implode($array, "\n"); 
    return $source; 
} 


function export_file_extension() {
    // override default type so extension is .xml
    
    return ".xml";
}

function get_qtype( $type_id ) {
    // translates question type code number into actual name
   
    switch( $type_id ) {
    case TRUEFALSE:
        $name = 'truefalse';
        break;
    case MULTICHOICE:
        $name = 'multichoice';
        break;
    case SHORTANSWER:
        $name = 'shortanswer';
        break;
    case NUMERICAL:
        $name = 'numerical';
        break;
    case MATCH:
        $name = 'matching';
        break;
    case DESCRIPTION:
        $name = 'description';
        break;
    case MULTIANSWER:
        $name = 'cloze';
        break;
    default:
        $name = 'unknown';
    }
    return $name;
}

function get_format( $id ) {
  // translates question text format id number into something sensible

  switch( $id ) {
  case 0:
    $name = "moodle_auto_format";
    break;
  case 1:
    $name = "html";
    break;
  case 2:
    $name = "plain_text";
    break;
  case 3:
    $name = "wiki_like";
    break;
  case 4:
    $name = "markdown";
    break;
  default:
    $name = "unknown";
  }
  return $name;
}

function get_single( $id ) {
  // translate single value into something sensible

  switch( $id ) {
  case 0:
    $name = "false";
    break;
  case 1:
    $name = "true";
    break;
  default:
    $name = "unknown";
  }
  return $name;
}

function writetext( $raw, $ilev=0, $short=true) {
    // generates <text></text> tags, processing raw text therein 
    // $ilev is the current indent level
    // $short=true sticks it on one line
    $indent = str_repeat( "  ",$ilev );

    // encode the text to 'disguise' HTML content 
    $raw = htmlspecialchars( $raw );

    if ($short) {
      $xml = "$indent<text>$raw</text>\n";
    }
    else {
      $xml = "$indent<text>\n$raw\n$indent</text>\n";
    }

    return $xml;
}

function presave_process( $content ) {
    // override method to allow us to add xml headers and footers

    $content = "<?xml version=\"1.0\"?>\n" .
               "<quiz>\n" .
               $content . "\n" .
               "</quiz>";

    return $content;
}

function writequestion( $question ) {
    // turns question into string
    // question reflects database fields for general question and specific to type

    // initial string;
    $expout = "";

    // add comment
    $expout .= "\n\n<!-- question: $question->id  -->\n";

    // add opening tag
    $question_type = $this->get_qtype( $question->qtype );
    $name_text = $this->writetext( $question->name );
    $qtformat = $this->get_format($question->questiontextformat);
    $question_text = $this->writetext( $question->questiontext );
    $expout .= "  <question type=\"$question_type\">\n";   
    $expout .= "    <name>$name_text</name>\n";
    $expout .= "    <questiontext format=\"$qtformat\">\n";
    $expout .= $question_text;
    $expout .= "    </questiontext>\n";   
    $expout .= "    <image>".$question->image."</image>\n";
    $expout .= "    <penalty>{$question->penalty}</penalty>\n";
    $expout .= "    <hidden>{$question->hidden}</hidden>\n";

    // output depends on question type
    switch($question->qtype) {
    case TRUEFALSE:
        $answer = $question->options->answers;
        $true_percent = round( $answer['true']->fraction * 100 );
        $false_percent = round( $answer['false']->fraction * 100 );
        // true answer
        $expout .= "    <answer fraction=\"$true_percent\">\n";
        $expout .= $this->writetext("true",3)."\n";
        $expout .= "      <feedback>\n";
        $expout .= $this->writetext( $answer['true']->feedback,4,false );
        $expout .= "      </feedback>\n";
        $expout .= "    </answer>\n";


        // false answer
        $expout .= "    <answer fraction=\"$false_percent\">\n";
        $expout .= $this->writetext("false")."\n";
        $expout .= "      <feedback>\n";
        $expout .= $this->writetext( $answer['false']->feedback,4,false );
        $expout .= "      </feedback>\n";
        $expout .= "    </answer>\n";
        break;
    case MULTICHOICE:
        $expout .= "    <single>".$this->get_single($question->options->single)."</single>\n";
        foreach($question->options->answers as $answer) {
            $percent = $answer->fraction * 100;
            $expout .= "      <answer fraction=\"$percent\">\n";
            $expout .= $this->writetext( $answer->answer,4,false );
            $expout .= "      <feedback>\n";
            $expout .= $this->writetext( $answer->feedback,4,false );
            $expout .= "      </feedback>\n";
            $expout .= "    </answer>\n";
            }
        break;
    case SHORTANSWER:
        $expout .= "    <usecase>{$question->options->usecase}</usecase>\n ";
        foreach($question->options->answers as $answer) {
            $percent = 100 * $answer->fraction;
            $expout .= "    <answer fraction=\"$percent\">\n";
            $expout .= $this->writetext( $answer->answer,3,false );
            $expout .= "      <feedback>\n";
            $expout .= $this->writetext( $answer->feedback,4,false );
            $expout .= "      </feedback>\n";
            $expout .= "    </answer>\n";
        }
        break;
    case NUMERICAL:
        foreach ($question->options->answers as $answer) {
            $tolerance = $answer->tolerance;
            $expout .= "<answer>\n";
            $expout .= "    {$answer->answer}\n";
            $expout .= "    <tolerance>$tolerance</tolerance>\n";
            $expout .= "    <feedback>".$this->writetext( $answer->feedback )."</feedback>\n";
            $expout .= "    <fraction>{$answer->fraction}</fraction>\n";
            $expout .= "</answer>\n";
         }

        $units = $question->options->units;
        if (count($units)) {
          $expout .= "<units>\n";
          foreach ($units as $unit) {
            $expout .= "  <unit>\n";
            $expout .= "    <multiplier>{$unit->multiplier}</multiplier>\n";
            $expout .= "    <unit_name>{$unit->unit}</unit_name>\n";
            $expout .= "  </unit>\n";
          }
          $expout .= "</units>\n";
        }
        break;
    case MATCH:
        foreach($question->options->subquestions as $subquestion) {
            $expout .= "<subquestion>\n";
            $expout .= $this->writetext( $subquestion->questiontext );
            $expout .= "<answer>".$this->writetext( $subquestion->answertext )."</answer>\n";
            $expout .= "</subquestion>\n";
        }
        break;
    case DESCRIPTION:
        // nothing more to do for this type
        break;
    case MULTIANSWER:
        $expout .= "<!-- CLOZE type is not supported -->\n";
        break;
    default:
        $expout .= "<!-- Question type is unknown or not supported (Type=$question->qtype) -->\n";
    }
    // close the question tag
    $expout .= "</question>\n";

    // run through xml tidy function
    // $tidy_expout = $this->indent_xhtml( $expout, '    ' ) . "\n\n";

    return $expout;
}
}

?>
