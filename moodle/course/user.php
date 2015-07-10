<?php // $Id: user.php,v 1.38.2.2 2005/09/09 16:15:20 moodler Exp $

// Display user activity reports for a course

    require_once("../config.php");
    require_once("lib.php");

    $modes = array("outline", "complete", "todaylogs", "alllogs");

    require_variable($id);       // course id
    require_variable($user);     // user id
    optional_variable($mode, "todaylogs");
    optional_variable($page, "0");
    optional_variable($perpage, "100");

    require_login();

    if (! $course = get_record("course", "id", $id)) {
        error("Course id is incorrect.");
    }

    if (! $user = get_record("user", "id", $user)) {
        error("User ID is incorrect");
    }

    if (! (isteacher($course->id) or ($course->showreports and $USER->id == $user->id))) {
        error("You are not allowed to look at this page");
    }

    add_to_log($course->id, "course", "user report", "user.php?id=$course->id&amp;user=$user->id&amp;mode=$mode", "$user->id"); 

    $stractivityreport = get_string("activityreport");
    $strparticipants   = get_string("participants");
    $stroutline        = get_string("outline");
    $strcomplete       = get_string("complete");
    $stralllogs        = get_string("alllogs");
    $strtodaylogs      = get_string("todaylogs");
    $strmode           = get_string($mode);
    $fullname          = fullname($user, true);

    if ($course->category) {
        print_header("$course->shortname: $stractivityreport ($mode)", "$course->fullname",
                 "<a href=\"../course/view.php?id=$course->id\">$course->shortname</a> ->
                  <a href=\"../user/index.php?id=$course->id\">$strparticipants</a> ->
                  <a href=\"../user/view.php?id=$user->id&amp;course=$course->id\">$fullname</a> -> 
                  $stractivityreport -> $strmode");
    } else {
        print_header("$course->shortname: $stractivityreport ($mode)", "$course->fullname",
                 "<a href=\"../user/view.php?id=$user->id&amp;course=$course->id\">$fullname</a> -> 
                  $stractivityreport -> $strmode");
    }


/// Print tabs at top
/// This same call is made in:
///     /user/view.php
///     /user/edit.php
///     /course/user.php
    $currenttab = $mode;
    include($CFG->dirroot.'/user/tabs.php');


    get_all_mods($course->id, $mods, $modnames, $modnamesplural, $modnamesused);

    switch ($mode) {
        case "todaylogs" :
            echo '<div class="graph">';
            print_log_graph($course, $user->id, "userday.png");
            echo '</div>';
            print_log($course, $user->id, usergetmidnight(time()), "l.time DESC", $page, $perpage, 
                      "user.php?id=$course->id&amp;user=$user->id&amp;mode=$mode");
            break;

        case "alllogs" :
            echo '<div class="graph">';
            print_log_graph($course, $user->id, "usercourse.png");
            echo '</div>';
            print_log($course, $user->id, 0, "l.time DESC", $page, $perpage, 
                      "user.php?id=$course->id&amp;user=$user->id&amp;mode=$mode");
            break;

        case "outline" :
        case "complete" :
        default:
            $sections = get_all_sections($course->id);

            for ($i=0; $i<=$course->numsections; $i++) {

                if (isset($sections[$i])) {   // should always be true

                    $section = $sections[$i];
                    $showsection = (isteacher($course->id) or $section->visible or !$course->hiddensections);

                    if ($showsection) { // prevent hidden sections in user activity. Thanks to Geoff Wilbert!

                        if ($section->sequence) {
                            echo '<div class="section">';
                            echo '<h2>';
                            switch ($course->format) {
                                case "weeks": print_string("week"); break;
                                case "topics": print_string("topic"); break;
                                default: print_string("section"); break;
                            }
                            echo " $i</h2>";
    
                            echo '<div class="content">';

                            if ($mode == "outline") {
                                echo "<table cellpadding=\"4\" cellspacing=\"0\">";
                            }

                            $sectionmods = explode(",", $section->sequence);
                            foreach ($sectionmods as $sectionmod) {
                                if (empty($mods[$sectionmod])) {
                                    continue;
                                }
                                $mod = $mods[$sectionmod];
    
                                if (empty($mod->visible)) {
                                    continue;
                                }

                                $instance = get_record("$mod->modname", "id", "$mod->instance");
                                $libfile = "$CFG->dirroot/mod/$mod->modname/lib.php";

                                if (file_exists($libfile)) {
                                    require_once($libfile);

                                    switch ($mode) {
                                        case "outline":
                                            $user_outline = $mod->modname."_user_outline";
                                            if (function_exists($user_outline)) {
                                                $output = $user_outline($course, $user, $mod, $instance);
                                                print_outline_row($mod, $instance, $output);
                                            }
                                            break;
                                        case "complete":
                                            $user_complete = $mod->modname."_user_complete";
                                            if (function_exists($user_complete)) {
                                                $image = "<img src=\"../mod/$mod->modname/icon.gif\" ".
                                                         "height=\"16\" width=\"16\" alt=\"$mod->modfullname\" />";
                                                echo "<h4>$image $mod->modfullname: ".
                                                     "<a href=\"$CFG->wwwroot/mod/$mod->modname/view.php?id=$mod->id\">".
                                                     format_string($instance->name,true)."</a></h4>";
                                                echo "<ul>";
                                                $user_complete($course, $user, $mod, $instance);
                                                echo "</ul>";
                                            }
                                            break;
                                        }
                                    }
                                }
    
                            if ($mode == "outline") {
                                echo "</table>";
                                print_simple_box_end();
                            }
                            echo '</div>';  // content
                            echo '</div>';  // section
                        }
                    }
                }
            }
            break;
    }


    print_footer($course);


function print_outline_row($mod, $instance, $result) {
    $image = "<img src=\"../mod/$mod->modname/icon.gif\" height=\"16\" width=\"16\" alt=\"$mod->modfullname\" />";

    echo "<tr>";
    echo "<td valign=\"top\">$image</td>";
    echo "<td valign=\"top\" width=\"300\">";
    echo "   <a title=\"$mod->modfullname\"";
    echo "   href=\"../mod/$mod->modname/view.php?id=$mod->id\">".format_string($instance->name,true)."</a></td>";
    echo "<td>&nbsp;&nbsp;&nbsp;</td>";
    echo "<td valign=\"top\">";
    if (isset($result->info)) {
        echo "$result->info";
    } else {
        echo "<p align=\"center\">-</p>";
    }
    echo "</td>";
    echo "<td>&nbsp;&nbsp;&nbsp;</td>";
    if (!empty($result->time)) {
        $timeago = format_time(time() - $result->time);
        echo "<td valign=\"top\" nowrap=\"nowrap\">".userdate($result->time)." ($timeago)</td>";
    }
    echo "</tr>";
}

?>

