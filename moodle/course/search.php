<?php // $Id: search.php,v 1.10.2.2 2005/11/02 15:40:59 skodak Exp $

/// Displays external information about a course

    require_once("../config.php");
    require_once("lib.php");

    $search  = optional_param('search', '', PARAM_RAW);  // search words
    $page    = optional_param('page', 0, PARAM_INT);     // which page to show
    $perpage = optional_param('perpage', 10, PARAM_INT); // how many per page

    $search = trim(strip_tags($search)); // trim & clean raw searched string

    if ($search) {
        $searchterms = explode(" ", $search);    // Search for words independently
        foreach ($searchterms as $key => $searchterm) {
            if (strlen($searchterm) < 2) {
                unset($searchterms[$key]);
            }
        }
        $search = trim(implode(" ", $searchterms));
    }

    $site = get_site();

    if ($CFG->forcelogin) {
        require_login();
    }

    $displaylist = array();
    $parentlist = array();
    make_categories_list($displaylist, $parentlist, "");

    $strcourses = get_string("courses");
    $strsearch = get_string("search");
    $strsearchresults = get_string("searchresults");
    $strcategory = get_string("category");

    if (!$search) {
        print_header("$site->fullname : $strsearch", $site->fullname, 
                     "<a href=\"index.php\">$strcourses</a> -> $strsearch", "", "");
        print_simple_box_start("center");
        echo "<center>";
        echo "<br />";
        print_course_search("", false, "plain");
        echo "<br /><p>";
        print_string("searchhelp");
        echo "</p>";
        echo "</center>";
        print_simple_box_end();
        print_footer();
        exit;
    }

    $searchform = print_course_search($search, true, "navbar");

    print_header("$site->fullname : $strsearchresults", $site->fullname, 
                 "<a href=\"index.php\">$strcourses</a> -> <a href=\"search.php\">$strsearch</a> -> '".s($search)."'", "", "", "", $searchform);


    $lastcategory = -1;
    if ($courses = get_courses_search($searchterms, "fullname ASC", 
                                      $page*$perpage, $perpage, $totalcount)) {

        print_heading("$strsearchresults: $totalcount");

        $encodedsearch = urlencode(stripslashes($search));
        print_paging_bar($totalcount, $page, $perpage, "search.php?search=$encodedsearch&amp;perpage=$perpage&");

        foreach ($courses as $course) {
            $course->fullname = highlight("$search", $course->fullname);
            $course->summary = highlight("$search", $course->summary);
            $course->summary .= "<br /><p align=\"right\">";
            $course->summary .= "$strcategory: <a href=\"category.php?id=$course->category\">";
            $course->summary .= $displaylist[$course->category];
            $course->summary .= "</a></p>";
            print_course($course);
            print_spacer(5,5);
        }

        print_paging_bar($totalcount, $page, $perpage, "search.php?search=$encodedsearch&amp;perpage=$perpage&");

    } else {
        print_heading(get_string("nocoursesfound", "", s($search)));
    }

    echo "<br /><br />";

    print_course_search($search);

    print_footer();


?>

