<?php  // $Id: submissions.php,v 1.40 2005/04/17 15:38:02 moodler Exp $

    require_once("../../config.php");
    require_once("lib.php");

    $id      = optional_param('id');            // Course module ID
    $a       = optional_param('a');             // Assignment ID
    $mode    = optional_param('mode', 'all');   // What mode are we in?
//echo $mode;
    if ($id) {
    //echo "IDDD";
        if (! $cm = get_record("course_modules", "id", $id)) {
            error("Course Module ID was incorrect");
        }

        if (! $assignment = get_record("assignment", "id", $cm->instance)) {
            error("assignment ID was incorrect");
        }

        if (! $course = get_record("course", "id", $assignment->course)) {
            error("Course is misconfigured");
        }
    } else {
        if (!$assignment = get_record("assignment", "id", $a)) {
            error("Course module is incorrect");
        }
        if (! $course = get_record("course", "id", $assignment->course)) {
            error("Course is misconfigured");
        }
        if (! $cm = get_coursemodule_from_instance("assignment", $assignment->id, $course->id)) {
            error("Course Module ID was incorrect");
        }
    }

    require_login($course->id, false, $cm);

    if (!isteacher($course->id)) {
        error("Only teachers can look at this page");
    }
//echo $CFG->dirroot.'/mod/assignment/type/'.$assignment->assignmenttype.'/assignment.class.php'; 
/// Load up the required assignment code
    require($CFG->dirroot.'/mod/assignment/type/'.$assignment->assignmenttype.'/assignment.class.php');
    $assignmentclass = 'assignment_'.$assignment->assignmenttype;
    $assignmentinstance = new $assignmentclass($cm->id, $assignment, $cm, $course);

    $assignmentinstance->submissions($mode);   // Display or process the submissions
//echo var_dump($assignmentinstance->assignment->dollar);

?>
