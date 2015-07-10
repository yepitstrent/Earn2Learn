<?php // $Id: editsection.php,v 1.16.2.2 2005/11/11 01:24:38 skodak Exp $
      // Edit the introduction of a section

    require_once("../config.php");
    require_once("lib.php");

    require_variable($id);    // Week ID

    require_login();

    if (! $section = get_record("course_sections", "id", $id)) {
        error("Course section is incorrect");
    }

    if (! $course = get_record("course", "id", $section->course)) {
        error("Could not find the course!");
    }

    if (!isteacher($course->id)) {
        error("Only teachers can edit this!");
    }


/// If data submitted, then process and store.

    if ($form = data_submitted() and confirm_sesskey()) {

        $timenow = time();

        if (! set_field("course_sections", "summary", $form->summary, "id", $section->id)) {
            error("Could not update the summary!");
        }

        add_to_log($course->id, "course", "editsection", "editsection.php?id=$section->id", "$section->section");
        
        redirect("view.php?id=$course->id");
        exit;
    }

/// Otherwise fill and print the form.

    if (empty($form)) {
        $form = $section;
    }

    $form->sesskey = !empty($USER->id) ? $USER->sesskey : '';

    $usehtmleditor = can_use_html_editor();

/// Inelegant hack for bug 3408
    if ($course->format == 'site') {
        $sectionname  = get_string('site');
        $stredit      = get_string('edit', '', " $sectionname");
        $strsummaryof = get_string('summaryof', '', " $sectionname");
    } else {
        $sectionname  = get_string("name$course->format");
        $stredit      = get_string('edit', '', " $sectionname $section->section");
        $strsummaryof = get_string('summaryof', '', " $sectionname $form->section");
    }

    print_header_simple($stredit, '', $stredit);

    print_heading($strsummaryof);
    print_simple_box_start('center');
    include('editsection.html');
    print_simple_box_end();

    if ($usehtmleditor) { 
        use_html_editor("summary");
    }
    print_footer($course);

?>
