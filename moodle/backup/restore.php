<?php //$Id: restore.php,v 1.31.2.2 2005/07/29 16:57:24 moodler Exp $
    //This script is used to configure and execute the restore proccess.

    //Define some globals for all the script

    //Units used
    require_once ("../config.php");
    require_once ("../lib/xmlize.php");
    require_once ("../course/lib.php");
    require_once ("lib.php");
    require_once ("restorelib.php");
    require_once ("bb/restore_bb.php");
    require_once("$CFG->libdir/blocklib.php");
    require_once("$CFG->libdir/wiki_to_markdown.php" );

    //Optional
    $id = optional_param( 'id' );
    $file = optional_param( 'file' );;
    $cancel = optional_param( 'cancel' );
    $launch = optional_param( 'launch' );
    $to = optional_param( 'to' );

    //Check login       
    require_login();

    if (!$to && isset($SESSION->restore->restoreto) && isset($SESSION->restore->importing) && isset($SESSION->restore->course_id)) {
        $to = $SESSION->restore->course_id;
    }

    if (!empty($id)) {
        if (!isteacheredit($id)) {
            if (empty($to)) {
                error("You need to be a teacher or admin user to use this page.", "$CFG->wwwroot/login/index.php");
            } else {
                if (!isteacheredit($to)) {
                    error("You need to be a teacher or admin user to use this page.", "$CFG->wwwroot/login/index.php");
                }
            }
        }
    } else {
        if (!isadmin()) {
            error("You need to be an admin user to use this page.", "$CFG->wwwroot/login/index.php");
        }
    }

    //Check site
    if (!$site = get_site()) {
        error("Site not found!");
    }

    //Check necessary functions exists. Thanks to gregb@crowncollege.edu
    backup_required_functions();
    
    //Check backup_version
    if ($file) {
        $linkto = "restore.php?id=".$id."&amp;file=".$file;
    } else {
        $linkto = "restore.php";
    }
    upgrade_backup_db($linkto);

    //Get strings
    if (empty($to)) {
        $strcourserestore = get_string("courserestore");
    } else {
        $strcourserestore = get_string("importdata");
    }
    $stradministration = get_string("administration");

    //If no file has been selected from the FileManager, inform and end
    if (!$file) {
        print_header("$site->shortname: $strcourserestore", $site->fullname,
                     "<a href=\"$CFG->wwwroot/$CFG->admin/index.php\">$stradministration</a> -> $strcourserestore");
        print_heading(get_string("nofilesselected"));
        print_continue("$CFG->wwwroot/$CFG->admin/index.php");
        print_footer();
        exit;
    }

    //If cancel has been selected, inform and end
    if ($cancel) {
        print_header("$site->shortname: $strcourserestore", $site->fullname,
                     "<a href=\"$CFG->wwwroot/$CFG->admin/index.php\">$stradministration</a> -> $strcourserestore");
        print_heading(get_string("restorecancelled"));
        print_continue("$CFG->wwwroot/$CFG->admin/index.php");
        print_footer();
        exit;
    }

    //We are here, so me have a file.

    //Get and check course
    if (! $course = get_record("course", "id", $id)) {
        error("Course ID was incorrect (can't find it)");
    }

    check_for_restricted_user($USER->username, "$CFG->wwwroot/course/view.php?id=$course->id");

    //Print header
    if (isadmin()) {
        print_header("$site->shortname: $strcourserestore", $site->fullname,
                     "<a href=\"$CFG->wwwroot/$CFG->admin/index.php\">$stradministration</a> ->
                      $strcourserestore -> ".basename($file));
    } else {
        print_header("$course->shortname: $strcourserestore", $course->fullname,
                     "<a href=\"$CFG->wwwroot/course/view.php?id=$course->id\">$course->shortname</a> ->
                     $strcourserestore");
    }
    //Print form
    print_heading("$strcourserestore".((empty($to) ? ': '.basename($file) : '')));
    print_simple_box_start('center');
    
    //Adjust some php variables to the execution of this script
    @ini_set("max_execution_time","3000");
    raise_memory_limit("128M");

    //Call the form, depending the step we are


    if (!$launch) {
        include_once("restore_precheck.html");
    } else if ($launch == "form") {
        if ($SESSION->restore->importing) {
            // set up all the config stuff and skip asking the user about it.
            restore_setup_for_check($SESSION->restore,$backup_unique_code);
            include_once("restore_execute.html");
        } else {
            include_once("restore_form.html");
        }
    } else if ($launch == "check") {
        include_once("restore_check.html");
        //To avoid multiple restore executions...
        $SESSION->cancontinue = true;
    } else if ($launch == "execute") {
        //Prevent multiple restore executions...
        if (empty($SESSION->cancontinue)) {
            error("Multiple restore execution not allowed!");
        }
        //Unset this for the future
        unset($SESSION->cancontinue);
        include_once("restore_execute.html");
    }
    print_simple_box_end();

    //Print footer  
    print_footer();

?>
