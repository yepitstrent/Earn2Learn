<?php   // $Id: export.php,v 1.13.2.1 2005/12/07 05:57:19 moodler Exp $

    require_once("../../config.php");
    require_once("lib.php");
    global $CFG, $USER;

    $id = required_param('id', PARAM_INT);      // Course Module ID

    $l   = optional_param('l','', PARAM_ALPHANUM);
    $cat = optional_param('cat',0, PARAM_ALPHANUM);

    if (! $cm = get_record("course_modules", "id", $id)) {
        error("Course Module ID was incorrect");
    }

    if (! $course = get_record("course", "id", $cm->course)) {
        error("Course is misconfigured");
    }

    if (! $glossary = get_record("glossary", "id", $cm->instance)) {
        error("Course module is incorrect");
    }

    require_login($course->id, false);
    if (!isteacher($course->id)) {
        error("You must be a teacher to use this page.");
    }

    $strglossaries = get_string("modulenameplural", "glossary");
    $strglossary = get_string("modulename", "glossary");
    $strallcategories = get_string("allcategories", "glossary");
    $straddentry = get_string("addentry", "glossary");
    $strnoentries = get_string("noentries", "glossary");
    $strsearchconcept = get_string("searchconcept", "glossary");
    $strsearchindefinition = get_string("searchindefinition", "glossary");
    $strsearch = get_string("search");

    $navigation = "";
    if ($course->category) {
        $navigation = "<a href=\"../../course/view.php?id=$course->id\">$course->shortname</a> ->";
        require_login($course->id);
    }

    print_header("$course->shortname: ".format_string($glossary->name), "$course->fullname",
        "$navigation <a href=\"index.php?id=$course->id\">$strglossaries</a> -> ".format_string($glossary->name),
        "", "", true, update_module_button($cm->id, $course->id, $strglossary),
        navmenu($course, $cm));

    print_heading(format_string($glossary->name));

/// Info box

    if ( $glossary->intro ) {
        print_simple_box(format_text($glossary->intro), 'center', '70%', '', 5, 'generalbox', 'intro');
        echo '<br />';
    }

/// Tabbed browsing sections
    $lastl   = $l;
    $lastcat = $cat;
    $tab = GLOSSARY_EXPORT_VIEW;
    include("tabs.html");

    glossary_generate_export_file($glossary,$lastl,$lastcat);
    print_string("glosssaryexported","glossary");

    $ffurl = "/$course->id/glossary/" . clean_filename(strip_tags(format_string($glossary->name,true))) ."/glossary.xml";
    if ($CFG->slasharguments) {
        $ffurl = "../../file.php$ffurl" ;
    } else {
        $ffurl = "../../file.php?file=$ffurl";
    }
    echo '<p align="center"><a href="' . $ffurl . '" target="_blank">' . get_string("exportedfile","glossary") .  '</a></p>';

    echo '</center>';
    glossary_print_tabbed_table_end();
    print_footer();
?>
