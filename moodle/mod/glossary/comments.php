<?php // $Id: comments.php,v 1.13.2.1 2005/12/07 05:57:19 moodler Exp $

/// This page prints a particular instance of glossary
    require_once('../../config.php');
    require_once('lib.php');

    $id  = required_param('id', PARAM_INT);           // Course Module ID
    $eid = required_param('eid', PARAM_INT);          // Entry ID

    global $USER, $CFG;

    if (! $cm = get_record("course_modules", "id", $id)) {
        error("Course Module ID was incorrect");
    }

    if (! $course = get_record("course", "id", $cm->course)) {
        error("Course is misconfigured");
    }

    if (! $glossary = get_record("glossary", "id", $cm->instance)) {
        error("Course module is incorrect");
    }

    if (! $entry = get_record("glossary_entries", "id", $eid)) {
        error("Entry is incorrect");
    }


    require_login($course->id, false, $cm);

    add_to_log($course->id, "glossary", "view", "view.php?id=$cm->id", "$glossary->id",$cm->id);

    $strglossaries = get_string("modulenameplural", "glossary");
    $strglossary = get_string("modulename", "glossary");
    $strallcategories = get_string("allcategories", "glossary");
    $straddentry = get_string("addentry", "glossary");
    $strnoentries = get_string("noentries", "glossary");
    $strsearchconcept = get_string("searchconcept", "glossary");
    $strsearchindefinition = get_string("searchindefinition", "glossary");
    $strsearch = get_string("search");
    $strcomments = get_string("comments", "glossary");
    $straddcomment = get_string("addcomment", "glossary");

    print_header_simple(strip_tags("$strcomments: $entry->concept"), "",
        "<a href=index.php?id=$course->id>$strglossaries</a> -> <a href=view.php?id=$cm->id>".format_string($glossary->name,true)."</a> -> $strcomments",
        "", "", true, update_module_button($cm->id, $course->id, $strglossary),
        navmenu($course, $cm));

/// original glossary entry

    echo "<center>";
    glossary_print_entry($course, $cm, $glossary, $entry, "", "", false);
    echo "</center>";

/// comments

    print_heading(get_string('commentson','glossary')." <b>\"$entry->concept\"</b>");

    if ($glossary->allowcomments || isteacher($glossary->course)) {
        print_heading("<a href=\"comment.php?id=$cm->id&amp;eid=$entry->id\">$straddcomment</a> <img title=\"$straddcomment\" src=\"comment.gif\" height=\"11\" width=\"11\" border=\"0\" alt=\"\" />");
    }

    if ($comments = get_records("glossary_comments","entryid",$entry->id,"timemodified ASC")) {
        foreach ($comments as $comment) {
            glossary_print_comment($course, $cm, $glossary, $entry, $comment);
            echo '<br />';
        }
    } else {
        print_heading(get_string("nocomments","glossary"));
    }


/// Finish the page

    print_footer($course);

?>
