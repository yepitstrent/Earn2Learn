<?php // $Id: delete.php,v 1.19.2.1 2005/08/03 00:09:33 patrickslee Exp $
      // Admin-only code to delete a course utterly

    require_once("../config.php");

    require_variable($id);       // course id
    optional_variable($delete);   // delete confirmation

    require_login();

    if (!isadmin()) {
        error("You must be an administrator to use this page.");
    }

    if (!$site = get_site()) {
        error("Site not found!");
    }

    $strdeletecourse = get_string("deletecourse");
    $stradministration = get_string("administration");
    $strcategories = get_string("categories");

    if (! $course = get_record("course", "id", $id)) {
        error("Course ID was incorrect (can't find it)");
    }

    $category = get_record("course_categories", "id", $course->category);

    if (! $delete) {
        $strdeletecheck = get_string("deletecheck", "", $course->shortname);
        $strdeletecoursecheck = get_string("deletecoursecheck");

        
        print_header("$site->shortname: $strdeletecheck", $site->fullname, 
                     "<a href=\"../$CFG->admin/index.php\">$stradministration</a> -> ".
                     "<a href=\"index.php\">$strcategories</a> -> ".
                     "<a href=\"category.php?id=$course->category\">$category->name</a> -> ".
                     "$strdeletecheck");

        notice_yesno("$strdeletecoursecheck<br /><br />$course->fullname ($course->shortname)", 
                     "delete.php?id=$course->id&amp;delete=".md5($course->timemodified)."&amp;sesskey=$USER->sesskey", 
                     "category.php?id=$course->category");

        print_footer($course);
        exit;
    }

    if ($delete != md5($course->timemodified)) {
        error("The check variable was wrong - try again");
    }

    if (!confirm_sesskey()) {
        error(get_string('confirmsesskeybad', 'error'));
    }

    // OK checks done, delete the course now.

    add_to_log(SITEID, "course", "delete", "view.php?id=$course->id", "$course->fullname (ID $course->id)");

    $strdeletingcourse = get_string("deletingcourse", "", $course->shortname);

    print_header("$site->shortname: $strdeletingcourse", $site->fullname, 
                 "<a href=\"../$CFG->admin/index.php\">$stradministration</a> -> ".
                 "<a href=\"index.php\">$strcategories</a> -> ".
                 "<a href=\"category.php?id=$course->category\">$category->name</a> -> ".
                 "$strdeletingcourse");

    print_heading($strdeletingcourse);

    if (!remove_course_contents($course->id)) {
        notify("An error occurred while deleting some of the course contents.");
    }

    if (!delete_records("course", "id", $course->id)) {
        notify("An error occurred while deleting the main course record.");
    }

    if (!fulldelete($CFG->dataroot.'/'.$course->id)) {
        notify("An error occurred while deleting the course files.");
    }

    print_heading( get_string("deletedcourse", "", $course->shortname) );

    print_continue("category.php?id=$course->category");

    print_footer();

?>
