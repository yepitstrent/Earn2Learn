<?php // $Id: student.php,v 1.29 2005/04/19 22:15:20 defacer Exp $
      // Script to assign students to courses

    require_once("../config.php");

    define("MAX_USERS_PER_PAGE", 5000);

    require_variable($id);         // course id
    optional_variable($add, "");
    optional_variable($remove, "");
    optional_variable($search, ""); // search string

    if (! $site = get_site()) {
        redirect("$CFG->wwwroot/$CFG->admin/index.php");
    }

    if (! $course = get_record("course", "id", $id)) {
        error("Course ID was incorrect (can't find it)");
    }

    if ($course->metacourse) {
        redirect("$CFG->wwwroot/course/importstudents.php?id=$course->id");
    }

    require_login($course->id);

    if (!isteacheredit($course->id)) {
        error("You must be an editing teacher in this course, or an admin");
    }

    $strassignstudents = get_string("assignstudents");
    $strexistingstudents   = get_string("existingstudents");
    $strnoexistingstudents = get_string("noexistingstudents");
    $strpotentialstudents  = get_string("potentialstudents");
    $strnopotentialstudents  = get_string("nopotentialstudents");
    $straddstudent    = get_string("addstudent");
    $strremovestudent = get_string("removestudent");
    $strsearch        = get_string("search");
    $strsearchresults  = get_string("searchresults");
    $strstudents   = get_string("students");
    $strshowall = get_string("showall");


    if ($course->students != $strstudents) {
        $strassignstudents .= " ($course->students)";
        $strpotentialstudents .= " ($course->students)";
        $strexistingstudents .= " ($course->students)";
    }

    print_header("$course->shortname: $strassignstudents",
                 "$site->fullname",
                 "<a href=\"view.php?id=$course->id\">$course->shortname</a> -> $strassignstudents",
                 "studentform.searchtext");

/// Don't allow restricted teachers to even see this page (because it contains
/// a lot of email addresses and access to all student on the server

    check_for_restricted_user($USER->username, "$CFG->wwwroot/course/view.php?id=$course->id");

/// Print a help notice about the need to use this page

    if (!$frm = data_submitted()) {
        $note = get_string("assignstudentsnote");

        if ($course->password) {
            $note .= "<p>".get_string("assignstudentspass", "",
                                      "<a href=\"edit.php?id=$course->id\">$course->password</a>");
        }
        print_simple_box($note, "center", "50%");

/// A form was submitted so process the input

    } else {
        if (!empty($frm->add) and !empty($frm->addselect) and confirm_sesskey()) {
            if ($course->enrolperiod) {
                $timestart = time();
                $timeend   = $timestart + $course->enrolperiod;
            } else {
                $timestart = $timeend = 0;
            }
            foreach ($frm->addselect as $addstudent) {
                if (! enrol_student($addstudent, $course->id, $timestart, $timeend)) {
                    error("Could not add student with id $addstudent to this course!");
                }
            }
        } else if (!empty($frm->remove) and !empty($frm->removeselect) and confirm_sesskey()) {
            foreach ($frm->removeselect as $removestudent) {
                if (! unenrol_student($removestudent, $course->id)) {
                    error("Could not remove student with id $removestudent from this course!");
                }
            }
        } else if (!empty($frm->showall)) {
            unset($frm->searchtext);
            $frm->previoussearch = 0;
        }
    }

    $previoussearch = (!empty($frm) && (!empty($frm->search) or ($frm->previoussearch == 1))) ;

/// Get all existing students and teachers for this course.
    if (!$students = get_course_students($course->id, "u.firstname ASC, u.lastname ASC", "", 0, 99999,
                                         '', '', NULL, '', 'u.id,u.firstname,u.lastname,u.email')) {
        $students = array();
    }
    if (!$teachers = get_course_teachers($course->id)) {
        $teachers = array();
    }
    $existinguserarray = array();
    foreach ($students as $student) {
        $existinguserarray[] = $student->id;
    }
    foreach ($teachers as $teacher) {
        $existinguserarray[] = $teacher->id;
    }
    $existinguserlist = implode(',', $existinguserarray);

    unset($existinguserarray);


/// Get search results excluding any users already in this course
    if (!empty($frm->searchtext) and $previoussearch) {
        $searchusers = get_users(true, $frm->searchtext, true, $existinguserlist, 'firstname ASC, lastname ASC',
                                      '', '', 0, 99999, 'id, firstname, lastname, email');
        $usercount = get_users(false, '', true, $existinguserlist);
    }

/// If no search results then get potential students for this course excluding users already in course
    if (empty($searchusers)) {

        $usercount = get_users(false, '', true, $existinguserlist, 'firstname ASC, lastname ASC', '', '',
                              0, 99999, 'id, firstname, lastname, email') ;
        $users = array();

        if ($usercount <= MAX_USERS_PER_PAGE) {
            $users = get_users(true, '', true, $existinguserlist, 'firstname ASC, lastname ASC', '', '',
                               0, 99999, 'id, firstname, lastname, email');
        }

    }


    $searchtext = (isset($frm->searchtext)) ? $frm->searchtext : "";
    $previoussearch = ($previoussearch) ? '1' : '0';

    print_simple_box_start("center");

    $sesskey = !empty($USER->id) ? $USER->sesskey : '';

    include('student.html');

    print_simple_box_end();

    print_footer($course);

?>
