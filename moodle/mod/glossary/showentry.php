<?php  // $Id: showentry.php,v 1.25.2.5 2006/04/30 10:05:17 stronk7 Exp $
    require_once("../../config.php");
    require_once("lib.php");

    $concept  = optional_param('concept', '', PARAM_CLEAN);
    $courseid = optional_param('courseid', 0, PARAM_INT);
    $eid      = optional_param('eid', 0, PARAM_INT); // glossary entry id
    $displayformat = optional_param('displayformat',-1, PARAM_SAFEDIR);

    if ($CFG->forcelogin) {
        require_login();
    }

    if ($eid) {
        $entry = get_record("glossary_entries", "id", $eid);
        $glossary = get_record('glossary','id',$entry->glossaryid);
        $entry->glossaryname = format_string($glossary->name,true);
        if (!$cm = get_coursemodule_from_instance("glossary", $glossary->id)) {
            error("Could not determine which course module this belonged to!");
        }
        if (!$cm->visible and !isteacher($cm->course)) {
            redirect($CFG->wwwroot.'/course/view.php?id='.$cm->course, get_string('activityiscurrentlyhidden'));
        }
        $entry->cmid = $cm->id;
        $entry->courseid = $cm->course;
        $entries[] = $entry;
    } else if ($concept) {
        $entries = glossary_get_entries_search($concept, $courseid);
    } else {
        error('No valid entry specified');
    }

    if ($entries) {
        foreach ($entries as $key => $entry) {
            //$entries[$key]->footer = "<p align=\"right\">&raquo;&nbsp;<a onClick=\"if (window.opener) {window.opener.location.href='$CFG->wwwroot/mod/glossary/view.php?g=$entry->glossaryid'; return false;} else {openpopup('/mod/glossary/view.php?g=$entry->glossaryid', 'glossary', 'menubar=1,location=1,toolbar=1,scrollbars=1,directories=1,status=1,resizable=1', 0); return false;}\" href=\"$CFG->wwwroot/mod/glossary/view.php?g=$entry->glossaryid\" target=\"_blank\">".format_string($entry->glossaryname,true)."</a></p>";  // Could not get this to work satisfactorily in all cases  - Martin
            $entries[$key]->footer = "<p align=\"right\">&raquo;&nbsp;<a target=\"_blank\" href=\"$CFG->wwwroot/mod/glossary/view.php?g=$entry->glossaryid\">".format_string($entry->glossaryname,true)."</a></p>";
            add_to_log($entry->courseid, "glossary", "view entry", "showentry.php?eid=$entry->id", $entry->id, $entry->cmid);
        }
    }

    if (!empty($courseid)) {
        $course = get_record("course", "id", $courseid);
        if ($course->category) {
            require_login($courseid);
        }

        $strglossaries = get_string("modulenameplural", "glossary");
        $strsearch = get_string("search");

        $CFG->framename = "newwindow";
        if ($course->category) {
            print_header(strip_tags("$course->shortname: $strglossaries $strsearch"), "$course->fullname",
            "<a target=\"newwindow\" href=\"$CFG->wwwroot/course/view.php?id=$course->id\">$course->shortname</a> -> $strglossaries -> $strsearch", "", "", true, "&nbsp;", "&nbsp;");
        } else {
            print_header(strip_tags("$course->shortname: $strglossaries $strsearch"), "$course->fullname",
            "$strglossaries -> $strsearch", "", "", true, "&nbsp;", "&nbsp;");
        }

    } else {
        print_header();    // Needs to be something here to allow linking back to the whole glossary
    }

    if ($entries) {
        glossary_print_dynaentry($courseid, $entries, $displayformat);
    }

    close_window_button();

?>
