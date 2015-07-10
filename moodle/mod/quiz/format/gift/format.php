<?php // $Id: format.php,v 1.31.2.2 2005/09/16 09:46:02 thepurpleblob Exp $
//
///////////////////////////////////////////////////////////////
// The GIFT import filter was designed as an easy to use method 
// for teachers writing questions as a text file. It supports most
// question types and the missing word format.
//
// Multiple Choice / Missing Word
//     Who's buried in Grant's tomb?{~Grant ~Jefferson =no one}
//     Grant is {~buried =entombed ~living} in Grant's tomb.
// True-False:
//     Grant is buried in Grant's tomb.{FALSE}
// Short-Answer.
//     Who's buried in Grant's tomb?{=no one =nobody}
// Numerical
//     When was Ulysses S. Grant born?{#1822:5}
// Matching
//     Match the following countries with their corresponding
//     capitals.{=Canada->Ottawa =Italy->Rome =Japan->Tokyo}
//
// Comment lines start with a double backslash (//). 
// Optional question names are enclosed in double colon(::). 
// Answer feedback is indicated with hash mark (#).
// Percentage answer weights immediately follow the tilde (for
// multiple choice) or equal sign (for short answer and numerical),
// and are enclosed in percent signs (% %). See docs and examples.txt for more.
// 
// This filter was written through the collaboration of numerous 
// members of the Moodle community. It was originally based on 
// the missingword format, which included code from Thomas Robb
// and others. Paul Tsuchido Shew wrote this filter in December 2003.
//////////////////////////////////////////////////////////////////////////
// Based on default.php, included by ../import.php

class quiz_format_gift extends quiz_default_format {

    function provide_import() {
      return true;
    }

    function provide_export() {
      return true;
    }

    function answerweightparser(&$answer) {
        $answer = substr($answer, 1);                        // removes initial %
        $end_position  = strpos($answer, "%");
        $answer_weight = substr($answer, 0, $end_position);  // gets weight as integer
        $answer_weight = $answer_weight/100;                 // converts to percent
        $answer = substr($answer, $end_position+1);          // removes comment from answer
        return $answer_weight;
    }


    function commentparser(&$answer) {
        if (strpos($answer,"#") > 0){
            $hashpos = strpos($answer,"#");
            $comment = substr($answer, $hashpos+1);
            $comment = addslashes(trim($this->escapedchar_post($comment)));
            $answer  = substr($answer, 0, $hashpos);
        } else {
            $comment = " ";
        }
        return $comment;
    }

    function split_truefalse_comment($comment){
      // splits up comment around # marks
      // returns an array of true/false feedback
      $feedback = explode('#',$comment);
      if (count($feedback)>=2) {
        $true_feedback = $feedback[0];
        $false_feedback = $feedback[1];
      }
      else {
        $true_feedback = $feedback[0];
        $false_feedback = '';
      }
      return array( 'true'=>$true_feedback, 'false'=>$false_feedback );
    }
    
    function escapedchar_pre($string) {
        //Replaces escaped control characters with a placeholder BEFORE processing
        
        $escapedcharacters = array("\\#",    "\\=",    "\\{",    "\\}",    "\\~"   );
        $placeholders      = array("&&035;", "&&061;", "&&123;", "&&125;", "&&126;");

        $string = str_replace("\\\\", "&&092;", $string);
        $string = str_replace($escapedcharacters, $placeholders, $string);
        $string = str_replace("&&092;", "\\", $string);
        return $string;
    }

    function escapedchar_post($string) {
        //Replaces placeholders with corresponding character AFTER processing is done
        $placeholders = array("&&035;", "&&061;", "&&123;", "&&125;", "&&126;");
        $characters   = array("#",      "=",      "{",      "}",      "~"     );
        $string = str_replace($placeholders, $characters, $string);
        return $string;
    }

    function check_answer_count( $min, $answers, $text ) {
      $countanswers = count($answers);
      if ($countanswers < $min) {
        if ($this->displayerrors) {
          $errormessage = get_string( 'importminerror', 'quiz' );
            echo "<p>$text</p>\n"; 
            echo "<p>$errormessage</p>\n"; 
         }
         return false;
       }

       return true;
    }


    function readquestion($lines) {
    // Given an array of lines known to define a question in this format, this function
    // converts it into a question object suitable for processing and insertion into Moodle.

        $question = NULL;
        $comment = NULL;
        // define replaced by simple assignment, stop redefine notices
        $gift_answerweight_regex = "^%\-*([0-9]{1,2})\.?([0-9]*)%";        

        // REMOVED COMMENTED LINES and IMPLODE
        foreach ($lines as $key => $line) {
           $line = trim($line);
           if (substr($line, 0, 2) == "//") {
                // echo "Commented line removed.<br />";
                $lines[$key] = " ";
                }
        }

        $text = trim(implode(" ", $lines));

        if ($text == "") {
            // echo "<p>Empty line.</p>";
            return false;
        }

        // Substitute escaped control characters with placeholders
        $text = $this->escapedchar_pre($text);

        // QUESTION NAME parser
        if (substr($text, 0, 2) == "::") {
            $text = substr($text, 2);

            $namefinish = strpos($text, "::");
            if ($namefinish === false) {
                $question->name = false;
                // name will be assigned after processing question text below
             } else {
                $questionname = substr($text, 0, $namefinish);
                $question->name = addslashes(trim($this->escapedchar_post($questionname)));
                $text = trim(substr($text, $namefinish+2)); // Remove name from text
            }
        } else {
            $question->name = false;
        }


        // FIND ANSWER section
        $answerstart = strpos($text, "{");
        if ($answerstart === false) {
            if ($this->displayerrors) {
                echo "<p>$text<p>Could not find a {";
            }
            return false;
        }

        $answerfinish = strpos($text, "}");
        if ($answerfinish === false) {
            if ($this->displayerrors) {
                echo "<p>$text<p>Could not find a }";
            }
            return false;
        }

        $answerlength = $answerfinish - $answerstart;
        $answertext = trim(substr($text, $answerstart + 1, $answerlength - 1));

        // Format QUESTION TEXT without answer, inserting "_____" as necessary
        if (substr($text, -1) == "}") {
            // no blank line if answers follow question, outside of closing punctuation
            $questiontext = substr_replace($text, "", $answerstart, $answerlength+1);
        } else {
            // inserts blank line for missing word format
            $questiontext = substr_replace($text, "_____", $answerstart, $answerlength+1);
        }

        // get questiontext format from questiontext
        $oldquestiontext = $questiontext;
        $questiontextformat = 0;
        if (substr($questiontext,0,1)=='[') {
          $questiontext = substr( $questiontext,1 );
          $rh_brace = strpos( $questiontext, ']' );
          $qtformat= substr( $questiontext, 0, $rh_brace );
          $questiontext = substr( $questiontext, $rh_brace+1 );
          if (!$questiontextformat = text_format_name( $qtformat )) {
            $questiontext = $oldquestiontext;
          }          
        }
        $question->questiontextformat = $questiontextformat;
        $question->questiontext = addslashes(trim($this->escapedchar_post($questiontext)));

        // set question name if not already set
        if ($question->name === false) {
            $question->name = $question->questiontext;
            }


         // determine QUESTION TYPE
        $question->qtype = NULL;

        if ($answertext{0} == "#"){
            $question->qtype = NUMERICAL;

        } elseif (strpos($answertext, "~") !== false)  {
            // only Multiplechoice questions contain tilde ~
            $question->qtype = MULTICHOICE;
    
        } elseif (strpos($answertext, "=")  !== false 
              AND strpos($answertext, "->") !== false) {
              // only Matching contains both = and ->
            $question->qtype = MATCH;

        } else { // either TRUEFALSE or SHORTANSWER
    
            // TRUEFALSE question check
            $truefalse_check = $answertext;
            if (strpos($answertext,"#") > 0){ 
                // strip comments to check for TrueFalse question
                $truefalse_check = trim(substr($answertext, 0, strpos($answertext,"#")));
            }

            $valid_tf_answers = array("T", "TRUE", "F", "FALSE");
            if (in_array($truefalse_check, $valid_tf_answers)) {
                $question->qtype = TRUEFALSE;

            } else { // Must be SHORTANSWER
                    $question->qtype = SHORTANSWER;
            }
        }

        if (!isset($question->qtype)) {
            if ($this->displayerrors) {
                echo "<p>$text<p>Question type not set.";
                }
            return false;
        }

        switch ($question->qtype) {
            case MULTICHOICE:
                if (strpos($answertext,"=") === false) {
                    $question->single = 0;   // multiple answers are enabled if no single answer is 100% correct                        
                } else {
                    $question->single = 1;   // only one answer allowed (the default)
                }

                $answertext = str_replace("=", "~=", $answertext);
                $answers = explode("~", $answertext);
                if (isset($answers[0])) {
                    $answers[0] = trim($answers[0]);
                }
                if (empty($answers[0])) {
                    array_shift($answers);
                }
    
                $countanswers = count($answers);
                
		if (!$this->check_answer_count( 2,$answers,$text )) {
  		  return false;
 		  break;
                }

                foreach ($answers as $key => $answer) {
                    $answer = trim($answer);

                    // determine answer weight
                    if ($answer[0] == "=") {
                        $answer_weight = 1;
                        $answer = substr($answer, 1);
    
                    } elseif (ereg($gift_answerweight_regex, $answer)) {    // check for properly formatted answer weight
                        $answer_weight = $this->answerweightparser($answer);
                    
                    } else {     //default, i.e., wrong anwer
                        $answer_weight = 0;
                    }
                    $question->fraction[$key] = $answer_weight;
                    $question->feedback[$key] = $this->commentparser($answer); // commentparser also removes comment from $answer
                    $question->answer[$key]   = addslashes($this->escapedchar_post($answer));    
                }  // end foreach answer
    
                $question->defaultgrade = 1;
                $question->image = "";   // No images with this format
                return $question;
                break;

            case MATCH:
                $answers = explode("=", $answertext);
                if (isset($answers[0])) {
                    $answers[0] = trim($answers[0]);
                }
                if (empty($answers[0])) {
                    array_shift($answers);
                }
    
		if (!$this->check_answer_count( 2,$answers,$text )) {
  		  return false;
 		  break;
                }
    
                foreach ($answers as $key => $answer) {
                    $answer = trim($answer);
                    if (strpos($answer, "->") <= 0) {
                        if ($this->displayerrors) {
                        echo "<p>$text<p>Error processing Matching question.<br />
                            Improperly formatted answer: $answer";
                        }
                        return false;
                        break 2;
                    }

                    $marker = strpos($answer,"->");
                    $question->subquestions[$key] = addslashes(trim($this->escapedchar_post(substr($answer, 0, $marker))));
                    $question->subanswers[$key]   = addslashes(trim($this->escapedchar_post(substr($answer, $marker+2))));

                }  // end foreach answer
    
                $question->defaultgrade = 1;
                $question->image = "";   // No images with this format
                return $question;
                break;
            
            case TRUEFALSE:
                $answer = $answertext;
                $comment = $this->commentparser($answer); // commentparser also removes comment from $answer
                $feedback = $this->split_truefalse_comment( $comment );

                if ($answer == "T" OR $answer == "TRUE") {
                    $question->answer = 1;
                    $question->feedbackfalse = $feedback['true'];; //feedback if answer is wrong
                    $question->feedbacktrue = $feedback['false']; // make sure this exists to stop notifications
                } else {
                    $question->answer = 0;
                    $question->feedbacktrue = $feedback['true']; //feedback if answer is wrong
                    $question->feedbackfalse = $feedback['false']; // make sure this exists to stop notifications
                }
                $question->defaultgrade = 1;
                $question->image = "";   // No images with this format
                return $question;
                break;
                
            case SHORTANSWER:
                // SHORTANSWER Question
                $answers = explode("=", $answertext);
                if (isset($answers[0])) {
                    $answers[0] = trim($answers[0]);
                }
                if (empty($answers[0])) {
                    array_shift($answers);
                }
    
		if (!$this->check_answer_count( 1,$answers,$text )) {
  		  return false;
 		  break;
                }

                foreach ($answers as $key => $answer) {
                    $answer = trim($answer);

                    // Answer Weight
                    if (ereg($gift_answerweight_regex, $answer)) {    // check for properly formatted answer weight
                        $answer_weight = $this->answerweightparser($answer);
                    } else {     //default, i.e., full-credit anwer
                        $answer_weight = 1;
                    }
                    $question->fraction[$key] = $answer_weight;
                    $question->feedback[$key] = $this->commentparser($answer); //commentparser also removes comment from $answer
                    $question->answer[$key]   = addslashes($this->escapedchar_post($answer));
                }     // end foreach

                $question->usecase = 0;  // Ignore case
                $question->defaultgrade = 1;
                $question->image = "";   // No images with this format
                return $question;
                break;

            case NUMERICAL:
                // Note similarities to ShortAnswer
                $answertext = substr($answertext, 1); // remove leading "#"

                $answers = explode("=", $answertext);
                if (isset($answers[0])) {
                    $answers[0] = trim($answers[0]);
                }
                if (empty($answers[0])) {
                    array_shift($answers);
                }
    
                if (count($answers) == 0) {
                    // invalid question
                    if ($this->displayerrors) {
                        echo "<p>$text<p>No answers found in answertext (Numerical answer)";
                    }
                    return false;
                    break;
                }

                foreach ($answers as $key => $answer) {
                    $answer = trim($answer);

                    // Answer weight
                    if (ereg($gift_answerweight_regex, $answer)) {    // check for properly formatted answer weight
                        $answer_weight = $this->answerweightparser($answer);
                    } else {     //default, i.e., full-credit anwer
                        $answer_weight = 1;
                    }
                    $question->fraction[$key] = $answer_weight;
                    $question->feedback[$key] = $this->commentparser($answer); //commentparser also removes comment from $answer

                    //Calculate Answer and Min/Max values
                    if (strpos($answer,"..") > 0) { // optional [min]..[max] format
                        $marker = strpos($answer,"..");
                        $max = trim(substr($answer, $marker+2));
                        $min = trim(substr($answer, 0, $marker));
                        $ans = ($max + $min)/2;
                        $tol = $max - $ans;
                    } elseif (strpos($answer,":") > 0){ // standard [answer]:[errormargin] format
                        $marker = strpos($answer,":");
                        $tol = trim(substr($answer, $marker+1));
                        $ans = trim(substr($answer, 0, $marker));
                    } else { // only one valid answer (zero errormargin)
                        $tol = 0;
                        $ans = trim($answer);
                    }
    
                    if (!is_numeric($ans) 
                     OR !is_numeric($tol)) {
                        if ($this->displayerrors) {
                            $err = get_string( 'errornotnumbers' );
                            echo "<p>$text</p><p>$err</p>
                                <p>Answer: <u>$answer</u></p><p>Tolerance: <u>$tol</u></p> ";
                        }
                        return false;
                        break;
                    }
                    
                    // store results
                    $question->answer[$key] = $ans;
                    $question->tolerance[$key] = $tol;
                } // end foreach

                $question->defaultgrade = 1;
                $question->image = "";   // No images with this format
                $question->multiplier = array(); // no numeric multipliers with GIFT
                return $question;
                break;

                default:
                if ($this->displayerrors) {
                    echo "<p>$text<p> No valid question type. Error in switch(question->qtype)";
                }
                return false;
                break;                
        
        } // end switch ($question->qtype)

    }    // end function readquestion($lines)

function repchar( $text, $format=0 ) {
    // escapes 'reserved' characters # = ~ { ) and removes new lines
    // also pushes text through format routine
    $reserved = array( '#','=','~','{','}',"\n","\r" );
    $escaped = array( '\#','\=','\~','\{','\}',' ','' );

    $newtext = str_replace( $reserved, $escaped, $text ); 
    $format = 0; // turn this off for now
    if ($format) {
      $newtext = format_text( $format );
    }
    return $newtext;
    }

function writequestion( $question ) {
    // turns question into string
    // question reflects database fields for general question and specific to type

    // initial string;
    $expout = "";

    // add comment
    $expout .= "// question: $question->id  name: $question->name \n";

    // get  question text format
    $textformat = $question->questiontextformat;
    $tfname = "";
    if ($textformat!=FORMAT_MOODLE) {
      $tfname = text_format_name( (int)$textformat );
      $tfname = "[$tfname]";
    }

    // output depends on question type
    switch($question->qtype) {
    case TRUEFALSE:
        $answers = $question->options->answers;
        if ($answers['true']->fraction==1) {
            $answertext = 'TRUE';
            $wrong_feedback = $this->repchar( $answers['false']->feedback );
            $right_feedback = $this->repchar( $answers['true']->feedback );
        }
        else {
            $answertext = 'FALSE';
            $wrong_feedback = $this->repchar( $answers['true']->feedback );
            $right_feedback = $this->repchar( $answers['false']->feedback );
        }
        $expout .= "::".$question->name."::".$tfname.$this->repchar( $question->questiontext,$textformat )."{".$this->repchar( $answertext );
        if ($wrong_feedback!="") {
            $expout .= "#".$wrong_feedback;
        }
        if ($right_feedback!="") {
            $expout .= "#".$right_feedback;
        }
        $expout .= "}\n";
        break;
    case MULTICHOICE:
        $expout .= "::".$question->name."::".$tfname.$this->repchar( $question->questiontext, $textformat )."{\n";
        foreach($question->options->answers as $answer) {
            if ($answer->fraction==1) {
                $answertext = '=';
            }
            elseif ($answer->fraction==0) {
                $answertext = '~';
            }
            else {
              $export_weight = $answer->fraction*100;
              $answertext = "~%$export_weight%";
            }
            $expout .= "\t".$answertext.$this->repchar( $answer->answer );
            if ($answer->feedback!="") {
                $expout .= "#".$this->repchar( $answer->feedback );
            }
            $expout .= "\n";
        }
        $expout .= "}\n";
        break;
    case SHORTANSWER:
        $expout .= "::".$question->name."::".$tfname.$this->repchar( $question->questiontext, $textformat )."{\n";
        foreach($question->options->answers as $answer) {
            $weight = 100 * $answer->fraction;
            $expout .= "\t=%".$weight."%".$this->repchar( $answer->answer )."#".$this->repchar( $answer->feedback )."\n";
        }
        $expout .= "}\n";
        break;
    case NUMERICAL:
        $answer = array_pop( $question->options->answers );
        $tolerance = $answer->tolerance;
        $min = $answer->answer - $tolerance;
        $max = $answer->answer + $tolerance;
        $expout .= "::".$question->name."::".$tfname.$this->repchar( $question->questiontext, $textformat )."{\n";
        $expout .= "\t#".$min."..".$max."#".$this->repchar( $answer->feedback )."\n";
        $expout .= "}\n";
        break;
    case MATCH:
        $expout .= "::".$question->name."::".$tfname.$this->repchar( $question->questiontext, $textformat )."{\n";
        foreach($question->options->subquestions as $subquestion) {
            $expout .= "\t=".$this->repchar( $subquestion->questiontext )." -> ".$this->repchar( $subquestion->answertext )."\n";
        }
        $expout .= "}\n";
        break;
    case DESCRIPTION:
        $expout .= "// DESCRIPTION type is not supported\n";
        break;
    case MULTIANSWER:
        $expout .= "// CLOZE type is not supported\n";
        break;
    default:
        notify("No handler for qtype $question->qtype for GIFT export" );
    }
    // add empty line to delimit questions
    $expout .= "\n";
    return $expout;
}
}
?>
