<?php  // $Id: file.php,v 1.1.2.2 2005/07/10 18:40:55 skodak Exp $

    require("../../../../config.php");
    require("../../lib.php");
    require("assignment.class.php");

    $id     = required_param('id', PARAM_INT);      // Course Module ID
    $userid = required_param('userid', PARAM_INT);  // User ID

    if (! $cm = get_record("course_modules", "id", $id)) {
        error("Course Module ID was incorrect");
    }

    if (! $assignment = get_record("assignment", "id", $cm->instance)) {
        error("Assignment ID was incorrect");
    }

    if (! $course = get_record("course", "id", $assignment->course)) {
        error("Course is misconfigured");
    }

    if (! $user = get_record("user", "id", $userid)) {
        error("User is misconfigured");
    }

    require_login($course->id, false, $cm);

    if (($USER->id != $user->id) && !isteacher($course->id)) {
        error("You can not view this assignment");
    }

    if ($assignment->assignmenttype != 'online') {
        error("Incorrect assignment type");
    }

    $assignmentinstance = new assignment_online($cm->id, $assignment, $cm, $course);
//echo var_dump($assignmentinstance);
    if ($submission = $assignmentinstance->get_submission($user->id)) {
        print_header(fullname($user,true).': '.$assignment->name);

        print_simple_box_start('center', '', '', '', 'generalbox', 'dates');
        echo '<table>';
        if ($assignment->timedue) {
            echo '<tr><td class="c0">'.get_string('duedate','assignment').':</td>';
            echo '    <td class="c1">'.userdate($assignment->timedue).'</td></tr>';
        }
        echo '<tr><td class="c0">'.get_string('lastedited').':</td>';
        echo '    <td class="c1">'.userdate($submission->timemodified);
        echo ' ('.get_string('numwords', '', count_words(format_text($submission->data1, $submission->data2))).')</td></tr>';
        echo '</table>';
	echo "HERERE";
        print_simple_box_end();

        print_simple_box(format_text($submission->data1, $submission->data2), 'center', '100%');
        close_window_button();
        print_footer('none');
    } else {
        print_string('emptysubmission', 'assignment');
    }

?>
