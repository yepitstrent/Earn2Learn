<?php   // $Id: report.php,v 1.7.2.3 2005/12/07 05:57:19 moodler Exp $
//  For a given entry, shows a report of all the ratings it has

    require_once("../../config.php");
    require_once("lib.php");

    $id = required_param('id', PARAM_INT);
    global $USER;
    
    if (! $entry = get_record("glossary_entries", "id", $id)) {
        error("Entry ID was incorrect");
    }

    if (! $glossary = get_record("glossary", "id", $entry->glossaryid)) {
        error("Glossary ID was incorrect");
    }

    if (! $course = get_record("course", "id", $glossary->course)) {
        error("Course ID was incorrect");
    }

    if (!isteacher($course->id) and $USER->id != $entry->userid) {
        error("You can only look at results for your own entries");
    }

    if (!isset($sort)) {
        $sort = "r.time";
    }

    $scalemenu = make_grades_menu($glossary->scale);

    $strratings = get_string("ratings", "glossary");
    $strrating = get_string("rating", "glossary");
    $strname = get_string("name");
    $strtime = get_string("time");

    print_header("$strratings: $entry->concept");

    if (!$ratings = glossary_get_ratings($entry->id, $sort)) {
        error("No ratings for this entry: \"$entry->concept\"");

    } else {
        echo "<table border=\"0\" cellpadding=\"3\" cellspacing=\"3\" class=\"generalbox\" width=\"100%\">";
        echo "<tr>";
        echo "<th class=\"header\">&nbsp;</th>";
        echo "<th class=\"header\"><a href=\"report.php?id=$entry->id&amp;sort=u.firstname\">$strname</a></th>";
        echo "<th width=\"100%\" class=\"header\"><a href=\"report.php?id=$entry->id&amp;sort=r.rating\">$strrating</a></th>";
        echo "<th class=\"header\"><a href=\"report.php?id=$entry->id&amp;sort=r.time\">$strtime</a></th>";
        foreach ($ratings as $rating) {
            if (isteacher($glossary->course, $rating->id)) {
                echo '<tr class="teacher">';
            } else {
                echo '<tr>';
            }
            echo '<td class="picture">';
            print_user_picture($rating->id, $glossary->course, $rating->picture, false, false, true, true);
            echo '</td>';
            echo '<td nowrap="nowrap" class="author"><a target="_blank" href="'.$CFG->wwwroot.'/user/view.php?id='.$rating->id.'&amp;course='.$glossary->course.'">'.fullname($rating).'</a></td>';
            echo '<td nowrap="nowrap" align="center" class="rating">'.$scalemenu[$rating->rating].'</td>';
            echo '<td nowrap="nowrap" align="center" class="time">'.userdate($rating->time).'</td>';
            echo "</tr>\n";
        }
        echo "</table>";
        echo "<br />";
    }

    close_window_button();

?>
