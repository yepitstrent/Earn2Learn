<?php // $Id: question.php,v 1.67.2.3 2006/02/12 22:37:20 gustav_delius Exp $
/*
* Page for editing questions
*
* This page shows the question editing form or processes the following actions:
* - create new question (category, qtype)
* - edit question (id, contextquiz (optional))
* - delete question from quiz (delete, sesskey)
* - delete question (in two steps)
*   - if question is in use: display this conflict (allow to hide the question?)
*   - else: confirm deletion and delete from database (sesskey, id, delete, confirm)
* - cancel (cancel)
* @version $Id: question.php,v 1.67.2.3 2006/02/12 22:37:20 gustav_delius Exp $
* @author Martin Dougiamas and many others. This has recently been extensively
*         rewritten by members of the Serving Mathematics project
*         {@link http://maths.york.ac.uk/serving_maths}
* @license http://www.gnu.org/copyleft/gpl.html GNU Public License
* @package quiz
*/

    require_once("../../config.php");
    require_once("locallib.php");
    require_once($CFG->libdir.'/filelib.php');

    $id = optional_param('id');        // question id

    $qtype = optional_param('qtype');
    $category = optional_param('category');

    // a qtype > 99 means a remote question
    if ($qtype > 99) {
    $typeid = $qtype - 100;
    $qtype = RQP;
    }

    $contextquiz = optional_param('contextquiz'); // the quiz from which this question is being edited

    if (isset($_REQUEST['cancel'])) {
        redirect("edit.php");
    }

    if(!empty($id) && isset($_REQUEST['hide']) && confirm_sesskey()) {
        if(!set_field('quiz_questions', 'hidden', $_REQUEST['hide'], 'id', $id)) {
            error("Faild to hide the question.");
        }
        redirect('edit.php');
    }

    if ($id) {
        if (! $question = get_record("quiz_questions", "id", $id)) {
            error("This question doesn't exist");
        }
        if (!empty($category)) {
            $question->category = $category;
        }
        if (! $category = get_record("quiz_categories", "id", $question->category)) {
            error("This question doesn't belong to a valid category!");
        }
        if (! $course = get_record("course", "id", $category->course)) {
            error("This question category doesn't belong to a valid course!");
        }

        $qtype = $question->qtype;


    } else if ($category) { // only for creating new questions
        if (! $category = get_record("quiz_categories", "id", $category)) {
            error("This wasn't a valid category!");
        }
        if (! $course = get_record("course", "id", $category->course)) {
            error("This category doesn't belong to a valid course!");
        }

        $question->category = $category->id;
        $question->qtype    = $qtype;

    } else {
        error("Must specify question id or category");
    }

    if (empty($qtype)) {
        error("No question type was specified!");
    } else if (!isset($QUIZ_QTYPES[$qtype])) {
        error("Could not find question type: '$qtype'");
    }

    require_login($course->id, false);

    if (!isteacheredit($course->id)) {
        error("You can't modify these questions!");
    }

    $strquizzes = get_string('modulenameplural', 'quiz');
    $streditingquestion = get_string('editingquestion', 'quiz');
    if (isset($SESSION->modform->instance)) {
        $strediting = '<a href="edit.php">'.get_string('editingquiz', 'quiz').'</a> -> '.
            $streditingquestion;
    } else {
        $strediting = '<a href="edit.php?courseid='.$course->id.'">'.
            get_string("editquestions", "quiz").'</a> -> '.$streditingquestion;
    }

    print_header_simple("$streditingquestion", "",
                 "<a href=\"$CFG->wwwroot/mod/quiz/index.php?id=$course->id\">$strquizzes</a>".
                  " -> ".$strediting);

    if (isset($_REQUEST['delete'])) {
        if (isset($confirm) and confirm_sesskey()) {
            if ($confirm == md5($delete)) {
                if (record_exists('quiz_question_instances', 'question', $question->id) or
                    record_exists('quiz_states', 'originalquestion', $question->id)) {
                    if (!set_field('quiz_questions', 'hidden', 1, 'id', $delete)) {
                        error('Was not able to hide question');
                    }
                } else {
                    if (!delete_records("quiz_questions", "id", $question->id)) {
                        error("An error occurred trying to delete question (id $question->id)");
                    }
                    if (!delete_records("quiz_questions", "parent", $question->id)) {
                        error("An error occurred trying to delete question (id $question->id)");
                    }
                }
                redirect("edit.php");
            } else {
                error("Confirmation string was incorrect");
            }

        } else {
            if ($quiznames = quizzes_question_used($id)) {
                $a->questionname = $question->name;
                $a->quiznames = implode(', ', $quiznames);
                notify(get_string('questioninuse', 'quiz', $a));
            }

            notice_yesno(get_string("deletequestioncheck", "quiz", $question->name),
                        "question.php?sesskey=$USER->sesskey&amp;id=$question->id&amp;delete=$delete&amp;confirm=".md5($delete), "edit.php");
        }
        print_footer($course);
        exit;
    }

    if ($form = data_submitted() and confirm_sesskey()) {

        if (isset($form->versioning) && isset($question->id) and false) { // disable versioning until it is fixed.
            // use new code that handles whether to overwrite or copy a question
            // and keeps track of the versions in the quiz_question_version table

            // $replaceinquiz is an array with the ids of all quizzes in which
            // the teacher has chosen to replace the old version
            $replaceinquiz = array();
            foreach($form as $key => $val) {
                if ($tmp = quiz_parse_fieldname($key, 'q')) {
                    if ($tmp['mode'] == 'replace') {
                        $replaceinquiz[$tmp['id']] = $tmp['id'];
                        unset($form->$key);
                    }
                }
            }

            // $quizlist is an array with the ids of quizzes which use this question
            $quizlist = array();
            if ($instances = get_records('quiz_question_instances', 'question', $question->id)) {
                foreach($instances as $instance) {
                    $quizlist[$instance->quiz] = $instance->quiz;
                }
            }

            if (isset($form->makecopy)) { // explicitly requested copies should be unhidden
                $question->hidden = 0;
            }

            // Logic to determine whether old version should be overwritten
            $makecopy = isset($form->makecopy) || (!$form->id); unset($form->makecopy);
            if ($makecopy) {
                $replaceold = false;
            } else {
                // this should be improved to exclude teacher preview responses and empty responses
                // the current code leaves many unneeded questions in the database
                $hasresponses = record_exists('quiz_states', 'question', $form->id) or
                         record_exists('quiz_states', 'originalquestion', $form->id);
                $replaceinall = ($quizlist == $replaceinquiz); // question is being replaced in all quizzes
                $replaceold   = !$hasresponses && $replaceinall;
            }

            if (!$replaceold) { // create a new question
                $oldquestionid = $question->id;
                if (!$makecopy) {
                    if (!set_field("quiz_questions", 'hidden', 1, 'id', $question->id)) {
                        error("Could not hide question!");
                    }
                }
                unset($question->id);
            }
            unset($makecopy, $hasresponses, $replaceinall, $replaceold);
            $question = $QUIZ_QTYPES[$qtype]->save_question($question, $form, $course);
            if(!isset($question->id)) {
                error("Failed to save the question!");
            }

            if(isset($oldquestionid)) {
                // create version entries for different quizzes
                $version = new object();
                $version->oldquestion = $oldquestionid;
                $version->newquestion = $question->id;
                $version->userid      = $USER->id;
                $version->timestamp   = time();

                foreach($replaceinquiz as $qid) {
                    $version->quiz = $qid;
                    if(!insert_record("quiz_question_versions", $version)) {
                        error("Could not store version information of question $oldquestionid in quiz $qid!");
                    }
                }

                /// now update the question references in the quizzes
                if (!empty($replaceinquiz) and $quizzes = get_records_list("quiz", "id", implode(',', $replaceinquiz))) {

                    foreach($quizzes as $quiz) {
                        $questionlist = ",$quiz->questions,"; // a little hack with the commas here. not nice but effective
                        $questionlist = str_replace(",$oldquestionid,", ",$question->id,", $questionlist);
                        $questionlist = substr($questionlist, 1, -1); // and get rid of the surrounding commas again
                        if (!set_field("quiz", 'questions', $questionlist, 'id', $quiz->id)) {
                        error("Could not update questionlist in quiz $quiz->id!");
                        }

                        // the quiz_question_instances table needs to be updated too (aah, the joys of duplication :)
                        if (!set_field('quiz_question_instances', 'question', $question->id, 'quiz', $quiz->id, 'question', $oldquestionid)) {
                        error("Could not update question instance!");
                        }
                        if (isset($SESSION->modform) && (int)$SESSION->modform->instance === (int)$quiz->id) {
                        $SESSION->modform->questions = $questionlist;
                        $SESSION->modform->grades[$question->id] = $SESSION->modform->grades[$oldquestionid];
                        unset($SESSION->modform->grades[$oldquestionid]);
                        }
                    }

                    // change question in attempts
                    if ($attempts = get_records_list('quiz_attempts', 'quiz', implode(',', $replaceinquiz))) {
                        foreach ($attempts as $attempt) {

                            // replace question id in $attempt->layout
                            $questionlist = ",$attempt->layout,"; // a little hack with the commas here. not nice but effective
                            $questionlist = str_replace(",$oldquestionid,", ",$question->id,", $questionlist);
                            $questionlist = substr($questionlist, 1, -1); // and get rid of the surrounding commas again
                            if (!set_field('quiz_attempts', 'layout', $questionlist, 'id', $attempt->id)) {
                                error("Could not update layout in attempt $attempt->id!");
                            }

                            // set originalquestion in states
                            set_field('quiz_states', 'originalquestion', $oldquestionid, 'attempt', $attempt->id, 'question', $question->id, 'originalquestion', '0');

                            // replace question id in states
                            set_field('quiz_states', 'question', $question->id, 'attempt', $attempt->id, 'question', $oldquestionid);

                            // replace question id in newest_states
                            set_field('quiz_newest_states', 'questionid', $question->id, 'attemptid', $attempt->id, 'questionid', $oldquestionid);

                        }

                        // Now do anything question-type specific that is required to replace the question
                        // For example questions that use the quiz_answers table to hold part of their question will
                        // have to recode the answer ids in the states
                        $QUIZ_QTYPES[$question->qtype]->change_states_question($oldquestionid, $question, $attempts);
                    }
                }
            }
        } else {
            // use the old code which simply overwrites old versions
            // it is also used for creating new questions
            $question = $QUIZ_QTYPES[$qtype]->save_question($question, $form, $course);
            $replaceinquiz = 'all';
        }

        if (empty($question->errors) && $QUIZ_QTYPES[$qtype]->finished_edit_wizard($form)) {
            // DISABLED AUTOMATIC REGRADING
            // Automagically regrade all attempts (and states) in the affected quizzes
            //if (!empty($replaceinquiz)) {
            //    $QUIZ_QTYPES[$question->qtype]->get_question_options($question);
            //    quiz_regrade_question_in_quizzes($question, $replaceinquiz);
            //}
            redirect("edit.php");
        }
    }

    $grades = array(1,0.9,0.8,0.75,0.70,0.66666,0.60,0.50,0.40,0.33333,0.30,0.25,0.20,0.16666,0.142857,0.125,0.11111,0.10,0.05,0);
    foreach ($grades as $grade) {
        $percentage = 100 * $grade;
        $neggrade = -$grade;
        $gradeoptions["$grade"] = "$percentage %";
        $gradeoptionsfull["$grade"] = "$percentage %";
        $gradeoptionsfull["$neggrade"] = -$percentage." %";
    }
    $gradeoptionsfull["0"] = $gradeoptions["0"] = get_string("none");

    arsort($gradeoptions, SORT_NUMERIC);
    arsort($gradeoptionsfull, SORT_NUMERIC);

    if (!$categories = quiz_get_category_menu($course->id, false)) {
        error("No categories!");
    }


    make_upload_directory("$course->id");    // Just in case
    $coursefiles = get_directory_list("$CFG->dataroot/$course->id", $CFG->moddata);
    foreach ($coursefiles as $filename) {
        if (mimeinfo("icon", $filename) == "image.gif") {
            $images["$filename"] = $filename;
        }
    }

    // Print the question editing form

    if (empty($question->id)) {
        $question->id = "";
    }
    if (empty($question->name)) {
        $question->name = "";
    }
    if (empty($question->questiontext)) {
        $question->questiontext = "";
    }
    if (empty($question->image)) {
        $question->image = "";
    }
    if (!isset($question->penalty)) {
        $question->penalty = 0.1;
    }

    // Set up some Richtext editing if necessary
    if ($usehtmleditor = can_use_richtext_editor()) {
        $defaultformat = FORMAT_HTML;
    } else {
        $defaultformat = FORMAT_MOODLE;
    }

    if (isset($question->errors)) {
        $err = $question->errors;
    }

    echo '<br />';
    print_simple_box_start('center');
    require('questiontypes/'.$QUIZ_QTYPES[$qtype]->name().'/editquestion.php');
    print_simple_box_end();

    if ($usehtmleditor) {
        use_html_editor('questiontext');
    }

    print_footer($course);

?>
