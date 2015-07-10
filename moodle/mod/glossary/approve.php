<?php  // $Id: approve.php,v 1.11.2.1 2005/12/07 05:57:19 moodler Exp $

    require_once("../../config.php");
    require_once("lib.php");

    $id  = required_param('id', PARAM_INT);     // Course Module ID
    $eid = optional_param('eid', 0,  PARAM_INT);    // Entry ID

    $mode = optional_param('mode','approval', PARAM_ALPHA);
    $hook = optional_param('hook','ALL', PARAM_CLEAN);

    if (! $cm = get_record("course_modules", "id", $id)) {
        error("Course Module ID was incorrect");
    }

    if (! $course = get_record("course", "id", $cm->course)) {
        error("Course is misconfigured");
    }

    if (! $glossary = get_record("glossary", "id", $cm->instance)) {
        error("Course module is incorrect");
    }

    require_login($course->id, false, $cm);
    if (!isteacher($course->id)) {
        error("You must be a teacher to use this page.");
    }
    $newentry->id = $eid;
    $newentry->approved = 1;

    if (! update_record("glossary_entries", $newentry)) {
        error("Could not update your glossary");
    } else {
        add_to_log($course->id, "glossary", "approve entry", "showentry.php?id=$cm->id&amp;eid=$eid", "$eid",$cm->id);
    }
    redirect("view.php?id=$cm->id&amp;mode=$mode&amp;hook=$hook",get_string("entryapproved","glossary"),1);
    die;
?>
