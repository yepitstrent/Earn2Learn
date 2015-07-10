<?php  // $Id: view.php,v 1.42 2005/04/13 07:45:46 moodler Exp $

    require_once("../../config.php");
    require_once("lib.php");

    require_variable($id);    // Course Module ID

    if (! $cm = get_record("course_modules", "id", $id)) {
        error("Course Module ID was incorrect");
    }

    if (! $course = get_record("course", "id", $cm->course)) {
        error("Course is misconfigured");
    }

    require_login($course->id, true, $cm);

    if (! $journal = get_record("journal", "id", $cm->instance)) {
        error("Course module is incorrect");
    }

    add_to_log($course->id, "journal", "view", "view.php?id=$cm->id", $journal->id, $cm->id);

    if (! $cw = get_record("course_sections", "id", $cm->section)) {
        error("Course module is incorrect");
    }

    $strjournal = get_string("modulename", "journal");
    $strjournals = get_string("modulenameplural", "journal");

    print_header_simple(format_string($journal->name), '',
                 "<a href=\"index.php?id=$course->id\">$strjournals</a> -> ".format_string($journal->name), '', '', true,
                  update_module_button($cm->id, $course->id, $strjournal), navmenu($course, $cm));

    if (isteacher($course->id)) {
        $currentgroup = get_current_group($course->id);
        if ($currentgroup and isteacheredit($course->id)) {
            $group = get_record("groups", "id", $currentgroup);
            $groupname = " ($group->name)";
        } else {
            $groupname = "";
        }
        $entrycount = journal_count_entries($journal, $currentgroup);

        echo '<div class="reportlink"><a href="report.php?id='.$cm->id.'">'.
              get_string('viewallentries','journal', $entrycount)."</a>$groupname</div>";

    } else if (!$cm->visible) {
        notice(get_string('activityiscurrentlyhidden'));
    }

    $journal->intro = trim($journal->intro);

    if (!empty($journal->intro)) {
        print_simple_box( format_text($journal->intro,  $journal->introformat), 'center', '70%', '', 5, 'generalbox', 'intro');
    }

    echo '<br />';

    $timenow = time();

    if ($course->format == 'weeks' and $journal->days) {
        $timestart = $course->startdate + (($cw->section - 1) * 604800);
        if ($journal->days) {
            $timefinish = $timestart + (3600 * 24 * $journal->days);
        } else {
            $timefinish = $course->enddate;
        }
    } else {  // Have no time limits on the journals

        $timestart = $timenow - 1;
        $timefinish = $timenow + 1;
        $journal->days = 0;
    }

    if ($timenow > $timestart) {

        print_simple_box_start('center');

        if ($timenow < $timefinish) {
            $options = array ('id' => "$cm->id");
            echo '<center>';
            if (!isguest()) {
                print_single_button('edit.php', $options, get_string('startoredit','journal'));
            }
            echo '</center>';
        }


        if ($entry = get_record('journal_entries', 'userid', $USER->id, 'journal', $journal->id)) {

            if (empty($entry->text)) {
                echo '<p align="center"><b>'.get_string('blankentry','journal').'</b></p>';
            } else {
                echo format_text($entry->text, $entry->format);
            }

        } else {
            echo '<span class="warning">'.get_string('notstarted','journal').'</span>';
        }

        print_simple_box_end();

        if ($timenow < $timefinish) {
            if ($entry->modified) {
                echo '<div class="lastedit"><strong>'.get_string('lastedited').':</strong> ';
                echo userdate($entry->modified);
                echo ' ('.get_string('numwords', '', count_words($entry->text)).')';
                echo "</div>";
            }
            if ($journal->days) {
                echo '<div class="editend"><strong>'.get_string('editingends', 'journal').':</strong> ';
                echo userdate($timefinish).'</div>';
            }
        } else {
            echo '<div class="editend"><strong>'.get_string('editingended', 'journal').':</strong> ';
            echo userdate($timefinish).'</div>';
        }

        if ($entry->comment or $entry->rating) {
            $grades = make_grades_menu($journal->assessed);
            print_heading(get_string('feedback'));
            journal_print_feedback($course, $entry, $grades);
        }


    } else {
        echo '<div class="warning">'.get_string('notopenuntil', 'journal').': ';
        echo userdate($timestart).'</div>';
    }


    print_footer($course);

?>
