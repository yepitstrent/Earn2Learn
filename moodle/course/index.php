<?php // $Id: index.php,v 1.39.2.2 2006/02/08 04:19:56 patrickslee Exp $
      // For most people, just lists the course categories
      // Allows the admin to create, delete and rename course categories
    //echo "MOODLE/COURSE/INDEX.PHP\n";
    require_once("../config.php");
    require_once("lib.php");

    if (!$site = get_site()) {
        error("Site isn't defined!");
    }

    if ($CFG->forcelogin) {
        require_login();
    }

    if (isadmin()) {
        if (isset($_GET['edit']) and confirm_sesskey()) {
            if ($edit == "on") {
                $USER->categoriesediting = true;
            } else if ($edit == "off") {
                $USER->categoriesediting = false;
            }
        }
    }

    $adminediting = (isadmin() and !empty($USER->categoriesediting));


/// Unless it's an editing admin, just print the regular listing of courses/categories
    
    if (!$adminediting) {
        //echo "<div style='background: blue;'>";
        $countcategories = count_records("course_categories");

        if ($countcategories > 1 || ($countcategories == 1 && count_records('course') > 200)) {
	    
	    $strcourses = get_string("courses");
            $strcategories = get_string("categories");
            /*print_header("$site->shortname: $strcategories", $strcourses, 
                          $strcategories, "", "", true, update_categories_button());
            print_heading($strcategories);*/
            print_simple_box_start("center", "50%", "#FFFFFF", 5, "categorybox");
            //print_whole_category_list();
	    print_my_moodle();
            print_simple_box_end();
            print_course_search();
	    
        } else {
            $strfulllistofcourses = get_string("fulllistofcourses");
            print_header("$site->shortname: $strfulllistofcourses", $strfulllistofcourses, $strfulllistofcourses,
                         '', '', true, update_categories_button());
            print_courses(0, "80%");
        }

        if (iscreator()) {       // Print link to create a new course
            echo "<center>";
            print_single_button("edit.php", NULL, get_string("addnewcourse"), "get");
            echo "</center>";
        }
            
        print_footer();
	//echo "</div>";
        exit;
    }

/// From now on is all the admin functions

    require_login();

    if (!isadmin()) {
        error("Only administrators can use this page!");
    }

/// Print headings

    $stradministration = get_string("administration");
    $strcategories = get_string("categories");
    $strcategory = get_string("category");
    $strcourses = get_string("courses");
    $stredit = get_string("edit");
    $strdelete = get_string("delete");
    $straction = get_string("action");
    $straddnewcategory = get_string("addnewcategory");

    print_header("$site->shortname: $strcategories", "$site->fullname", 
                 "<a href=\"../$CFG->admin/index.php\">$stradministration</a> -> $strcategories",
                 "addform.addcategory", "", true, update_categories_button());

    print_heading($strcategories);


/// If data for a new category was submitted, then add it
    if ($form = data_submitted() and confirm_sesskey()) {
        if (!empty($form->addcategory)) {
            unset($newcategory);
            $newcategory->name = $form->addcategory;
            $newcategory->sortorder = 999;
            if (!insert_record("course_categories", $newcategory)) {
                notify("Could not insert the new category '$newcategory->name'");
            } else {
                notify(get_string("categoryadded", "", $newcategory->name));
            }
        }
    }


/// Delete a category if necessary

    if (isset($delete) and confirm_sesskey()) {
        if ($deletecat = get_record("course_categories", "id", $delete)) {
            if (!empty($sure) && $sure == md5($deletecat->timemodified)) {
                /// Send the children categories to live with their grandparent
                if ($childcats = get_records("course_categories", "parent", $deletecat->id)) {
                    foreach ($childcats as $childcat) {
                        if (! set_field("course_categories", "parent", $deletecat->parent, "id", $childcat->id)) {
                            error("Could not update a child category!", "index.php");
                        }
                    }
                }
                
                ///  If the grandparent is a valid (non-zero) category, then 
                ///  send the children courses to live with their grandparent as well
                if ($deletecat->parent) {
                    if ($childcourses = get_records("course", "category", $deletecat->id)) {
                        foreach ($childcourses as $childcourse) {
                            if (! set_field("course", "category", $deletecat->parent, "id", $childcourse->id)) {
                                error("Could not update a child course!", "index.php");
                            }
                        }
                    }
                }
                
                /// Finally delete the category itself
                if (delete_records("course_categories", "id", $deletecat->id)) {
                    notify(get_string("categorydeleted", "", $deletecat->name));
                }
            }
            else {
                $strdeletecategorycheck = get_string("deletecategorycheck","",$deletecat->name);
                notice_yesno("$strdeletecategorycheck",
                             "index.php?delete=$delete&amp;sure=".md5($deletecat->timemodified)."&amp;sesskey=$USER->sesskey",
                             "index.php?sesskey=$USER->sesskey");
                exit();
            }
        }
    }


/// Create a default category if necessary
    if (!$categories = get_categories()) {    /// No category yet!
        // Try and make one
        unset($tempcat);
        $tempcat->name = get_string("miscellaneous");
        if (!$tempcat->id = insert_record("course_categories", $tempcat)) {
            error("Serious error: Could not create a default category!");
        }
    }


/// Move a category to a new parent if required

    if (isset($move) and isset($moveto) and confirm_sesskey()) {
        if ($tempcat = get_record("course_categories", "id", $move)) {
            if ($tempcat->parent != $moveto) {
                if (! set_field("course_categories", "parent", $moveto, "id", $tempcat->id)) {
                    notify("Could not update that category!");
                }
            }
        }
    }


/// Hide or show a category 
    if ((isset($hide) or isset($show)) and confirm_sesskey()) {
        if (isset($hide)) {
            $tempcat = get_record("course_categories", "id", $hide);
            $visible = 0;
        } else {
            $tempcat = get_record("course_categories", "id", $show);
            $visible = 1;
        }
        if ($tempcat) {
            if (! set_field("course_categories", "visible", $visible, "id", $tempcat->id)) {
                notify("Could not update that category!");
            }
            if (! set_field("course", "visible", $visible, "category", $tempcat->id)) {
                notify("Could not hide/show any courses in this category !");
            }
        }
    }


/// Move a category up or down

    if ((isset($moveup) or isset($movedown)) and confirm_sesskey()) {
        
        $swapcategory = NULL;
        $movecategory = NULL;

        if (isset($moveup)) {
            if ($movecategory = get_record("course_categories", "id", $moveup)) {
                $categories = get_categories("$movecategory->parent");

                foreach ($categories as $category) {
                    if ($category->id == $movecategory->id) {
                        break;
                    }
                    $swapcategory = $category;
                }
            }
        }
        if (isset($movedown)) {
            if ($movecategory = get_record("course_categories", "id", $movedown)) {
                $categories = get_categories("$movecategory->parent");

                $choosenext = false;
                foreach ($categories as $category) {
                    if ($choosenext) {
                        $swapcategory = $category;
                        break;
                    }
                    if ($category->id == $movecategory->id) {
                        $choosenext = true;
                    }
                }
            }
        }
        if ($swapcategory and $movecategory) {        // Renumber everything for robustness
            $count=0;
            foreach ($categories as $category) {
                $count++;
                if ($category->id == $swapcategory->id) {
                    $category = $movecategory;
                } else if ($category->id == $movecategory->id) {
                    $category = $swapcategory;
                }
                if (! set_field("course_categories", "sortorder", $count, "id", $category->id)) {
                    notify("Could not update that category!");
                }
            }
        }
    }

/// Find the default category (the one with the lowest ID)
    $categories = get_categories();
    $default = 99999;
    foreach ($categories as $category) {
        if ($category->id < $default) {
            $default = $category->id;
        }
    }

/// Find any orphan courses that don't yet have a valid category and set to default
    if ($courses = get_courses(NULL,NULL,'c.id, c.category, c.sortorder')) {
        foreach ($courses as $course) {
            if ($course->category and !isset($categories[$course->category])) {
                set_field("course", "category", $default, "id", $course->id);
            }
        }
    }
    
    fix_course_sortorder();

/// Print form for creating new categories

    echo "<center>";
    echo "<form name=\"addform\" action=\"index.php\" method=\"post\">";
    echo "<input type=\"text\" size=\"30\" alt=\"$straddnewcategory\" name=\"addcategory\" />";
    echo "<input type=\"submit\" value=\"$straddnewcategory\" />";
    echo "<input type=\"hidden\" name=\"sesskey\" value=\"$USER->sesskey\" />";
    echo "</form>";
    echo "</center>";

    echo "<br />";


/// Print out the categories with all the knobs

    $strcategories = get_string("categories");
    $strcourses = get_string("courses");
    $strmovecategoryto = get_string("movecategoryto");
    $stredit = get_string("edit");

    $displaylist = array();
    $parentlist = array();

    $displaylist[0] = get_string("top");
    make_categories_list($displaylist, $parentlist, "");

    echo "<table align=\"center\" border=\"0\" cellspacing=\"2\" cellpadding=\"5\" class=\"generalbox\"><tr>";
    echo "<th>$strcategories</th>";
    echo "<th>$strcourses</th>";
    echo "<th>$stredit</th>";
    echo "<th>$strmovecategoryto</th>";
    echo "</tr>";

    print_category_edit(NULL, $displaylist, $parentlist);

    echo "</table>";
    echo "<br />";
    
    /// Print link to create a new course
    echo "<center>";
    unset($options);
    $options["category"] = $category->id;
    print_single_button("edit.php", $options, get_string("addnewcourse"), "get");
    echo "<br />";
    echo "</center>";

    print_footer();



function print_category_edit($category, $displaylist, $parentslist, $depth=-1, $up=false, $down=false) {
/// Recursive function to print all the categories ready for editing

    global $CFG, $USER;

    static $str = '';
    
    if (empty($str)) {
        $str->delete   = get_string("delete");
        $str->moveup   = get_string("moveup");
        $str->movedown = get_string("movedown");
        $str->edit     = get_string("editthiscategory");
        $str->hide     = get_string("hide");
        $str->show     = get_string("show");
    }
    
    if ($category) {
        echo "<tr><td align=\"left\" nowrap=\"nowrap\">";
        for ($i=0; $i<$depth;$i++) {
            echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        }
        $linkcss = $category->visible ? "" : " class=\"dimmed\" ";
        echo "<a $linkcss title=\"$str->edit\" href=\"category.php?id=$category->id&amp;edit=on&amp;sesskey=$USER->sesskey\">$category->name</a>";
        echo "</td>";

        echo "<td align=\"right\">$category->coursecount</td>";

        echo "<td nowrap=\"nowrap\">";    /// Print little icons

        echo "<a title=\"$str->delete\" href=\"index.php?delete=$category->id&amp;sesskey=$USER->sesskey\"><img".
             " src=\"$CFG->pixpath/t/delete.gif\" height=\"11\" width=\"11\" border=\"0\" alt=\"\" /></a> ";

        if (!empty($category->visible)) {
            echo "<a title=\"$str->hide\" href=\"index.php?hide=$category->id&amp;sesskey=$USER->sesskey\"><img".
                 " src=\"$CFG->pixpath/t/hide.gif\" height=\"11\" width=\"11\" border=\"0\" alt=\"\" /></a> ";
        } else {
            echo "<a title=\"$str->show\" href=\"index.php?show=$category->id&amp;sesskey=$USER->sesskey\"><img".
                 " src=\"$CFG->pixpath/t/show.gif\" height=\"11\" width=\"11\" border=\"0\"alt=\"\" /></a> ";
        }

        if ($up) {
            echo "<a title=\"$str->moveup\" href=\"index.php?moveup=$category->id&amp;sesskey=$USER->sesskey\"><img".
                 " src=\"$CFG->pixpath/t/up.gif\" height=\"11\" width=\"11\" border=\"0\" alt=\"\" /></a> ";
        }
        if ($down) {
            echo "<a title=\"$str->movedown\" href=\"index.php?movedown=$category->id&amp;sesskey=$USER->sesskey\"><img".
                 " src=\"$CFG->pixpath/t/down.gif\" height=\"11\" width=\"11\" border=\"0\"alt=\"\" /></a> ";
        }
        echo "</td>";

        echo "<td align=\"left\" width=\"0\">";
        $tempdisplaylist = $displaylist;
        unset($tempdisplaylist[$category->id]);
        foreach ($parentslist as $key => $parents) {
            if (in_array($category->id, $parents)) {
                unset($tempdisplaylist[$key]);
            }
        }
        popup_form ("index.php?move=$category->id&amp;sesskey=$USER->sesskey&amp;moveto=", $tempdisplaylist, "moveform$category->id", "$category->parent", "", "", "", false);
        echo "</td>";
        echo "</tr>";
    } else {
        $category->id = "0";
    }

    if ($categories = get_categories($category->id)) {   // Print all the children recursively
        $countcats = count($categories);
        $count = 0;
        $first = true;
        $last = false;
        foreach ($categories as $cat) {
            $count++;
            if ($count == $countcats) {
                $last = true;
            }
            $up = $first ? false : true;
            $down = $last ? false : true;
            $first = false;

            print_category_edit($cat, $displaylist, $parentslist, $depth+1, $up, $down);         
        }
    }
}


?>
<style>
    body{
        background-color: #76D4D6;
    }
</style>
