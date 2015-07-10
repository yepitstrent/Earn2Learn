<?php // $Id: index.php,v 1.10 2005/04/24 18:08:59 stronk7 Exp $

    require_once("../../config.php");

    require_variable($id);   // course

    if (! $course = get_record("course", "id", $id)) {
        error("Course ID is incorrect");
    }

    require_course_login($course);

    add_to_log($course->id, "scorm", "view all", "index.php?id=$course->id", "");

    $strscorm = get_string("modulename", "scorm");
    $strscorms = get_string("modulenameplural", "scorm");
    $strweek = get_string("week");
    $strtopic = get_string("topic");
    $strname = get_string("name");
    $strsummary = get_string("summary");
    $strlastmodified = get_string("lastmodified");

    print_header_simple("$strscorms", "", "$strscorms",
                 "", "", true, "", navmenu($course));

    if ($course->format == "weeks" or $course->format == "topics") {
        $sortorder = "cw.section ASC";
    } else {
        $sortorder = "m.timemodified DESC";
    }

    if (! $scorms = get_all_instances_in_course("scorm", $course)) {
        notice("There are no scorms", "../../course/view.php?id=$course->id");
        exit;
    }

    if ($course->format == "weeks") {
        $table->head  = array ($strweek, $strname, $strsummary);
        $table->align = array ("center", "left", "left");
    } else if ($course->format == "topics") {
        $table->head  = array ($strtopic, $strname, $strsummary);
        $table->align = array ("center", "left", "left");
    } else {
        $table->head  = array ($strlastmodified, $strname, $strsummary);
        $table->align = array ("left", "left", "left");
    }

    foreach ($scorms as $scorm) {

        $tt = "";
        if ($course->format == "weeks" or $course->format == "topics") {
            if ($scorm->section) {
                $tt = "$scorm->section";
            }
        } else {
            $tt = "<font size=\"1\">".userdate($scorm->timemodified);
        }
        if (!$scorm->visible) {
           //Show dimmed if the mod is hidden
           $table->data[] = array ($tt, "<a class=\"dimmed\" href=\"view.php?id=$scorm->coursemodule\">".format_string($scorm->name,true)."</a>",
                                   format_text($scorm->summary));
        } else {
           //Show normal if the mod is visible
           $table->data[] = array ($tt, "<a href=\"view.php?id=$scorm->coursemodule\">".format_string($scorm->name,true)."</a>",
                                   format_text($scorm->summary));
        }
    }

    echo "<br />";

    print_table($table);

    print_footer($course);


?>

