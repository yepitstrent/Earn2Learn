<?php  // $Id: assess.php,v 1.5.2.1 2005/10/15 10:37:01 stronk7 Exp $

    require("../../config.php");
    require("lib.php");
    require("locallib.php");

    require_variable($sid);   // Submission ID
    optional_variable($allowcomments, false);
    optional_variable($redirect, '');

    if (! $submission = get_record('workshop_submissions', 'id', $sid)) {
        error("Incorrect submission id");
    }
    if (! $workshop = get_record("workshop", "id", $submission->workshopid)) {
        error("Submission is incorrect");
    }
    if (! $course = get_record("course", "id", $workshop->course)) {
        error("Workshop is misconfigured");
    }
    if (! $cm = get_coursemodule_from_instance("workshop", $workshop->id, $course->id)) {
        error("No coursemodule found");
    }

    if (!$redirect) {
        $redirect = urlencode($_SERVER["HTTP_REFERER"].'#sid='.$submission->id);
    }

    require_login($course->id, false, $cm);

    $strworkshops = get_string("modulenameplural", "workshop");
    $strworkshop  = get_string("modulename", "workshop");
    $strassess = get_string("assess", "workshop");

    /// Now check whether we need to display a frameset

    if (empty($_GET['frameset'])) {
        echo "<head><title>{$course->shortname}: ".format_string($workshop->name,true)."</title></head>\n";
        echo "<frameset rows=\"50%,*\" border=\"10\">";
        echo "<frame src=\"assess.php?id=$id&amp;sid=$sid&amp;frameset=top&amp;redirect=$redirect\" border=\"10\">";
        echo "<frame src=\"assess.php?id=$id&amp;sid=$sid&amp;frameset=bottom&amp;redirect=$redirect\">";
        echo "</frameset>";
        exit;
    }

    /// top frame with the navigation bar and the assessment form

    if (!empty($_GET['frameset']) and $_GET['frameset'] == "top") {

        print_header_simple(format_string($workshop->name), "",
                     "<a href=\"index.php?id=$course->id\">$strworkshops</a> ->
                      <a href=\"view.php?id=$cm->id\">".format_string($workshop->name,true)."</a> -> $strassess",
                      "", '<base target="_parent" />', true);

        // there can be an assessment record (for teacher submissions), if there isn't...
        if (!$assessment = get_record("workshop_assessments", "submissionid", $submission->id, "userid",
                    $USER->id)) {
            // if it's the teacher see if the user has done a self assessment if so copy it
            if (isteacher($course->id) and  ($assessment = get_record("workshop_assessments", "submissionid",
                            $submission->id, "userid", $submission->userid))) {
                $assessment = workshop_copy_assessment($assessment, $submission, true);
                // need to set owner of assessment
                set_field("workshop_assessments", "userid", $USER->id, "id", $assessment->id);
                $assessment->resubmission = 0; // not set by workshop_copy_assessment
                $assessment->timegraded = 0; // not set by workshop_copy_assessment
                $assessment->timeagreed = 0; // not set by workshop_copy_assessment
            } else {
                $yearfromnow = time() + 365 * 86400;
                // ...create one and set timecreated way in the future, this is reset when record is updated
                $assessment->workshopid = $workshop->id;
                $assessment->submissionid = $submission->id;
                $assessment->userid = $USER->id;
                $assessment->timecreated = $yearfromnow;
                $assessment->grade = -1; // set impossible grade
                $assessment->timegraded = 0;
                $assessment->timeagreed = 0;
                $assessment->resubmission = 0;
                if (!$assessment->id = insert_record("workshop_assessments", $assessment)) {
                    error("Could not insert workshop assessment!");
                }
                // if it's the teacher and the workshop is error banded set all the elements to Yes
                if (isteacher($course->id) and ($workshop->gradingstrategy == 2)) {
                    for ($i =0; $i < $workshop->nelements; $i++) {
                        unset($element);
                        $element->workshopid = $workshop->id;
                        $element->assessmentid = $assessment->id;
                        $element->elementno = $i;
                        $element->feedback = '';
                        $element->grade = 1;
                        if (!$element->id = insert_record("workshop_grades", $element)) {
                            error("Could not insert workshop grade!");
                        }
                    }
                    // now set the adjustment
                    unset($element);
                    $i = $workshop->nelements;
                    $element->workshopid = $workshop->id;
                    $element->assessmentid = $assessment->id;
                    $element->elementno = $i;
                    $element->grade = 0;
                    if (!$element->id = insert_record("workshop_grades", $element)) {
                        error("Could not insert workshop grade!");
                    }
                }
            }
        }

        print_heading_with_help(get_string("assessthissubmission", "workshop"), "grading", "workshop");

        // show assessment and allow changes
        workshop_print_assessment($workshop, $assessment, true, $allowcomments, $redirect);

        print_heading("<a target=\"{$CFG->framename}\" href=\"$redirect\">".get_string("cancel")."</a>");
        print_footer($course);
        exit;
    }

    /// print bottom frame with the submission

    print_header('', '', '', '', '<base target="_parent" />');
    $title = '"'.$submission->title.'" ';
    if (isteacher($course->id)) {
        $title .= ' '.get_string('by', 'workshop').' '.workshop_fullname($submission->userid, $course->id);
    }
    print_heading($title);
    workshop_print_submission($workshop, $submission);

    if (isteacher($course->id)) {
        echo '<br /><center><b>'.get_string('assessments', 'workshop').': </b><br />';
        echo workshop_print_submission_assessments($workshop, $submission, "all");
        echo '</center>';
    }


    print_footer('none');

?>

