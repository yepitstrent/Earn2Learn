<?php // $Id: site.php,v 1.45.2.1 2005/06/11 18:58:37 moodler Exp $

    require_once("../config.php");
    require_once("../course/lib.php");

    if ($site = get_site()) {
        require_login();
        if (!isadmin()) {
            error("You need to be admin to edit this page");
        }
        $site->format = "social";   // override
    }

/// If data submitted, then process and store.

    if ($form = data_submitted()) {

        if (!empty($USER->id)) {             // Additional identity check
            if (!confirm_sesskey()) {
                error(get_string('confirmsesskeybad', 'error'));
            }
        }

        validate_form($form, $err);

        if (count($err) == 0) {

            set_config("frontpage", $form->frontpage);
            if ($form->frontpage == FRONTPAGETOPICONLY) {
                $form->numsections = 1;    // Force the topic display for this format
            }

            $form->timemodified = time();

            if ($form->id) {
                if (update_record("course", $form)) {
                    redirect("$CFG->wwwroot/", get_string("changessaved"));
                } else {
                    error("Serious Error! Could not update the site record! (id = $form->id)");
                }
            } else {
                // We are about to create the site "course"
                require_once($CFG->dirroot.'/lib/blocklib.php');

                if ($newid = insert_record('course', $form)) {

                    // Site created, add blocks for it
                    $page = page_create_object(PAGE_COURSE_VIEW, $newid);
                    blocks_repopulate_page($page); // Return value not checked because you can always edit later

                    $cat->name = get_string('miscellaneous');
                    if (insert_record('course_categories', $cat)) {
                        redirect("$CFG->wwwroot/$CFG->admin/index.php", get_string("changessaved"), 1);
                    } else {
                        error("Serious Error! Could not set up a default course category!");
                    }
                } else {
                    error("Serious Error! Could not set up the site!");
                }
            }
            die;

        } else {
            foreach ($err as $key => $value) {
                $focus = "form.$key";
            }
        }
    }

/// Otherwise fill and print the form.

    if ($site and empty($form)) {
        $form = $site;
        $course = $site;
        $firsttime = false;
    } else {
        $form->fullname = "";
        $form->shortname = "";
        $form->summary = "";
        $form->newsitems = 3;
        $form->numsections = 0;
        $form->id = "";
        $form->category = 0;
        $form->format = 'site';  // Only for this course
        $form->teacher = get_string("defaultcourseteacher");
        $form->teachers = get_string("defaultcourseteachers");
        $form->student = get_string("defaultcoursestudent");
        $form->students = get_string("defaultcoursestudents");
        $firsttime = true;
    }

    if (isset($CFG->frontpage)) {
        $form->frontpage = $CFG->frontpage;

    } else {
        $form->frontpage = FRONTPAGECOURSELIST;  // Show course list by default
        set_config("frontpage", $form->frontpage);
    }

    if (empty($focus)) {
        $focus = "form.fullname";
    }

    $stradmin = get_string("administration");
    $strconfiguration = get_string("configuration");
    $strsitesettings = get_string("sitesettings");

    if ($firsttime) {
        print_header();
        print_heading($strsitesettings);
        print_simple_box(get_string("configintrosite", 'admin'), "center", "50%");
        echo "<br />";
    } else {
        print_header("$site->shortname: $strsitesettings", "$site->fullname",
                      "<a href=\"index.php\">$stradmin</a> -> ".
                      "<a href=\"configure.php\">$strconfiguration</a> -> $strsitesettings", "$focus");
        print_heading($strsitesettings);
    }

    if (empty($USER->id)) {  // New undefined admin user
        $USER->htmleditor = true;
        $sesskey = '';
    } else {
        $sesskey = $USER->sesskey;
    }
    $usehtmleditor = can_use_html_editor();
    $defaultformat = FORMAT_HTML;

    print_simple_box_start("center", "");
    include("site.html");
    print_simple_box_end();

    if ($usehtmleditor) { 
        use_html_editor();
    }

    if (!$firsttime) {
        print_footer();
    }

    exit;

/// Functions /////////////////////////////////////////////////////////////////

function validate_form(&$form, &$err) {

    if (empty($form->fullname))
        $err["fullname"] = get_string("missingsitename");

    if (empty($form->shortname))
        $err["shortname"] = get_string("missingshortsitename");

    return;
}


?>
