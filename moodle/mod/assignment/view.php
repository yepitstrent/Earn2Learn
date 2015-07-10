<?php  // $Id: view.php,v 1.39 2005/04/21 08:41:06 moodler Exp $
//echo "<h1>TOP OF VIEW.PHP</h1>";
    require_once("../../config.php");
    require_once("lib.php");
 
    $id = optional_param('id');    // Course Module ID
    $a  = optional_param('a');

//echo "ID:".$id." a:".$a;
    if ($id) {
//    echo "HERER##";
        if (! $cm = get_record("course_modules", "id", $id)) {
            error("Course Module ID was incorrect");
        }

        if (! $assignment = get_record("assignment", "id", $cm->instance)) {
            error("assignment ID was incorrect");
        }
//echo "STILL HERER".var_dump($assignment);

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

    require_login($course->id);

    require ("$CFG->dirroot/mod/assignment/type/$assignment->assignmenttype/assignment.class.php");
    $assignmentclass = "assignment_$assignment->assignmenttype";
    $assignmentinstance = new $assignmentclass($cm->id, $assignment, $cm, $course);

    $assignmentinstance->view();   // Actually display the assignment!

?>

<style>

body {
    background-color: #33CCFF;
}

</style>
