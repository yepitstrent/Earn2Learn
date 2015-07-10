<?php // $Id: loginas.php,v 1.32.2.1 2006/04/09 07:27:27 moodler Exp $
      // Allows a teacher/admin to login as another user (in stealth mode)

    require_once("../config.php");
    require_once("lib.php");

    require_variable($id);      // course id
    optional_variable($user);   // login as this user
    optional_variable($return); // return to the page we came from

    if (! $course = get_record("course", "id", $id)) {
        error("Course ID was incorrect");
    }

    if ($course->category) {
        require_login($course->id);
    }

    if (isset($USER->realuser)) {   /// Reset user back to their real self
        $USER = get_complete_user_data('id', $USER->realuser);

        if (isset($SESSION->oldcurrentgroup)) {      // Restore previous "current group" cache.
            $SESSION->currentgroup = $SESSION->oldcurrentgroup;
            unset($SESSION->oldcurrentgroup);
        }
        if (isset($SESSION->oldtimeaccess)) {        // Restore previous timeaccess settings
            $USER->timeaccess = $SESSION->oldtimeaccess;
            unset($SESSION->oldtimeaccess);
        }

        if ($return) {       /// That's all we wanted to do, so let's go back
            redirect($_SERVER["HTTP_REFERER"]);
            exit;
        }
    }

    // $user must be defined to go on

    if (!isteacher($course->id)) {
        error("Only teachers can use this page!");
    }

    check_for_restricted_user($USER->username, "$CFG->wwwroot/user/view.php?id=$user&amp;course=$course->id");

    if ($course->category and !isstudent($course->id, $user) and !isadmin()) {
        error("This student is not in this course!");
    }

    if (iscreator($user)) {
        error("You can not login as this person!");
    }

    // Remember current timeaccess settings for later

    if (isset($USER->timeaccess)) {
        $SESSION->oldtimeaccess = $USER->timeaccess;
    }

    // Login as this student and return to course home page.

    $teacher_name = fullname($USER, true);
    $teacher_id   = "$USER->id";

    $USER = get_complete_user_data('id', $user);    // Create the new USER object with all details
    $USER->realuser = $teacher_id;

    if (isset($SESSION->currentgroup)) {    // Remember current cache setting for later
        $SESSION->oldcurrentgroup = $SESSION->currentgroup;
        unset($SESSION->currentgroup);
    }

    $student_name = fullname($USER, true);

    add_to_log($course->id, "course", "loginas", "../user/view.php?id=$course->id&amp;user=$user", "$teacher_name -> $student_name");


    $strloginas    = get_string("loginas");
    $strloggedinas = get_string("loggedinas", "", $student_name);

    print_header_simple("$strloginas $student_name", '', "$strloginas $student_name", '', '', 
                       true, '&nbsp;', navmenu($course));
    notice($strloggedinas, "$CFG->wwwroot/course/view.php?id=$course->id");


?>
