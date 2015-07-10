<?php //$Id: backup.php,v 1.30.2.2 2005/06/19 17:50:53 stronk7 Exp $
    //This script is used to configure and execute the backup proccess.

    //Define some globals for all the script

    require_once ("../config.php");
    require_once ("lib.php");
    require_once ("backuplib.php");
    require_once ("$CFG->libdir/blocklib.php");

    $id = optional_param( 'id' );       // course id
    $to = optional_param( 'to' ); // id of course to import into afterwards.
    $cancel = optional_param( 'cancel' );
    $launch = optional_param( 'launch' );

    require_login();

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
    if ($id) {
        $linkto = "backup.php?id=".$id.((!empty($to)) ? '&to='.$to : '');
    } else {
        $linkto = "backup.php";
    }
    upgrade_backup_db($linkto);

    //Get strings
    if (empty($to)) {
        $strcoursebackup = get_string("coursebackup");
    }
    else {
        $strcoursebackup = get_string('importdata');
    }
    $stradministration = get_string("administration");

    //If cancel has been selected, go back to course main page (bug 2817)
    if ($cancel) {
        if ($id) {
            $redirecto = $CFG->wwwroot . '/course/view.php?id=' . $id; //Course page
        } else {
            $redirecto = $CFG->wwwroot;
        }
        redirect ($redirecto, get_string('backupcancelled')); //Site page
        exit;
    }

    //If no course has been selected, show a list of available courses

    if (!$id) {
        print_header("$site->shortname: $strcoursebackup", $site->fullname,
                     "<a href=\"$CFG->wwwroot/$CFG->admin/index.php\">$stradministration</a> -> $strcoursebackup");

        if ($courses = get_courses('all','c.shortname','c.id,c.shortname,c.fullname')) {
            print_heading(get_string("choosecourse"));
            print_simple_box_start("center");
            foreach ($courses as $course) {
            echo "<a href=\"backup.php?id=$course->id\">$course->fullname ($course->shortname)</a><br />";
            }
            print_simple_box_end();
        } else {
            print_heading(get_string("nocoursesyet"));
            print_continue("$CFG->wwwroot/$CFG->admin/index.php");
        }
        print_footer();
        exit;
    }

    //Get and check course
    if (! $course = get_record("course", "id", $id)) {
        error("Course ID was incorrect (can't find it)");
    }

    check_for_restricted_user($USER->username, "$CFG->wwwroot/course/view.php?id=$course->id");

    //Print header
    if (isadmin()) {
        print_header("$site->shortname: $strcoursebackup", $site->fullname,
                     "<a href=\"$CFG->wwwroot/$CFG->admin/index.php\">$stradministration</a> ->
                      <a href=\"backup.php\">$strcoursebackup</a> -> $course->fullname ($course->shortname)");
    } else {
        print_header("$course->shortname: $strcoursebackup", $course->fullname,
                     "<a href=\"$CFG->wwwroot/course/view.php?id=$course->id\">$course->shortname</a> -> 
                     $strcoursebackup");
    }

    //Print form     
    print_heading("$strcoursebackup: $course->fullname ($course->shortname)");
    print_simple_box_start("center");

    //Adjust some php variables to the execution of this script
    @ini_set("max_execution_time","3000");
    raise_memory_limit("128M");

    //Call the form, depending the step we are
    if (!$launch) {
        include_once("backup_form.html");
    } else if ($launch == "check") {
        include_once("backup_check.html");
    } else if ($launch == "execute") {
        include_once("backup_execute.html");
    }
    print_simple_box_end();

    //Print footer  
    print_footer();

?>
