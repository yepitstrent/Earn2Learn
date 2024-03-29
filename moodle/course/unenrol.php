<?php // $Id: unenrol.php,v 1.18.2.1 2005/11/15 21:53:39 patrickslee Exp $

//  Removes a student from a class
//  This will not delete any of their data from the course, 
//  but will remove them from the student list and prevent 
//  any course email being sent to them.

    require_once("../config.php");
    require_once("lib.php");

    require_variable($id);               //course
    optional_variable($user, $USER->id); //user

    if (! $course = get_record("course", "id", $id) ) {
        error("That's an invalid course id");
    }
    if (! $user = get_record("user", "id", $user) ) {
        error("That's an invalid user id");
    }

    require_login($course->id);

    if ($user->id != $USER->id and !isteacheredit($course->id)) {
        error("You must be a teacher with editing rights to do this");
    }

    if ($user->id == $USER->id and !$CFG->allowunenroll or $course->metacourse) {
        error("You are not allowed to unenroll");
    }

    if (isset($confirm) and confirm_sesskey()) {

        if (! unenrol_student($user->id, $course->id)) {
            error("An error occurred while trying to unenrol you.");
        }

        add_to_log($course->id, "course", "unenrol", "view.php?id=$course->id", "$user->id");

        if ($user->id == $USER->id) {
            unset($USER->student["$id"]);
            redirect("$CFG->wwwroot/");
        }
        
        redirect("$CFG->wwwroot/user/index.php?id=$course->id");
    }


    $strunenrol = get_string("unenrol");

    print_header("$course->shortname: $strunenrol", "$course->fullname", 
                 "<a href=\"$CFG->wwwroot/course/view.php?id=$course->id\">$course->shortname</a> -> $strunenrol"); 

    if ($user->id == $USER->id) {
        $strunenrolsure  = get_string("unenrolsure", "", get_string("yourself"));
    } else {
        $strunenrolsure = get_string("unenrolsure", "", fullname($user, true));
    }

    notice_yesno ($strunenrolsure, "unenrol.php?id=$id&amp;user=$user->id&amp;confirm=yes&amp;sesskey=$USER->sesskey", "$HTTP_REFERER");

    print_footer($course);

?>
