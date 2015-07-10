<?php // $Id: details.php,v 1.4.2.1 2005/07/05 05:44:23 skodak Exp $
      // This script prints the setup screen for any assignment
      // It does this by calling the setup method in the appropriate class

    require_once("../../config.php");
    require_once("lib.php");

    if (!$form = data_submitted($CFG->wwwroot.'/course/mod.php')) {
        error("This script was called wrongly");
    }

    if (!$course = get_record('course', 'id', $form->course)) {
        error("Non-existent course!");
    }

    require_login($course->id);

    if (!isteacheredit($course->id)) {
        redirect($CFG->wwwroot.'/course/view.php?id='.$course->id);
    }

    $form->assignmenttype = clean_param($form->assignmenttype, PARAM_SAFEDIR);

    require_once("$CFG->dirroot/mod/assignment/type/$form->assignmenttype/assignment.class.php");

    $assignmentclass = "assignment_$form->assignmenttype";

    $assignmentinstance = new $assignmentclass();

    echo $assignmentinstance->setup($form);     /// The actual form is all printed here


?>
