<?php // $Id: format.php,v 1.28.2.1 2005/10/29 16:33:19 skodak Exp $
      // format.php - course format featuring social forum
      //              included from view.php

    require_once($CFG->dirroot.'/mod/forum/lib.php');

    // Bounds for block widths
    define('BLOCK_L_MIN_WIDTH', 100);
    define('BLOCK_L_MAX_WIDTH', 210);
    define('BLOCK_R_MIN_WIDTH', 100);
    define('BLOCK_R_MAX_WIDTH', 210);

    $preferred_width_left  = bounded_number(BLOCK_L_MIN_WIDTH, blocks_preferred_width($pageblocks[BLOCK_POS_LEFT]),  
                                            BLOCK_L_MAX_WIDTH);
    $preferred_width_right = bounded_number(BLOCK_R_MIN_WIDTH, blocks_preferred_width($pageblocks[BLOCK_POS_RIGHT]), 
                                            BLOCK_R_MAX_WIDTH);

    $strgroups  = get_string('groups');
    $strgroupmy = get_string('groupmy');
    $editing    = $PAGE->user_is_editing();

    echo '<table id="layout-table" cellspacing="0">';
    echo '<tr>';

    if (blocks_have_content($pageblocks, BLOCK_POS_LEFT) || $editing) {
        echo '<td style="width: '.$preferred_width_left.'px;" id="left-column">';
        blocks_print_group($PAGE, $pageblocks, BLOCK_POS_LEFT);
        echo '</td>';
    }

    echo '<td id="middle-column">';
    if ($forum = forum_get_course_forum($course->id, 'social')) {
        if (forum_is_forcesubscribed($forum->id)) {
            $subtext = '<div class="link">'.get_string('everyoneissubscribed', 'forum').'</div>';
        } else if (forum_is_subscribed($USER->id, $forum->id)) {
            $subtext = '<div class="link"><a href="../mod/forum/subscribe.php?id='.$forum->id.'">'.get_string('unsubscribe', 'forum').'</a></div>';
        } else {
            $subtext = '<div class="link"><a href="../mod/forum/subscribe.php?id='.$forum->id.'">'.get_string('subscribe', 'forum').'</a></div>';
        }
        $headertext = '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>'.
                      '<td><div class="title">'.get_string('socialheadline').'</div></td>'.
                      '<td>'.$subtext.'</td></tr></table>';
        print_heading_block($headertext);

        forum_print_latest_discussions($course, $forum, 10, 'plain', '', false);

    } else {
        notify('Could not find or create a social forum here');
    }
    echo '</td>';

    // The right column
    if (blocks_have_content($pageblocks, BLOCK_POS_RIGHT) || $editing) {
        echo '<td style="width: '.$preferred_width_right.'px;" id="right-column">';
        blocks_print_group($PAGE, $pageblocks, BLOCK_POS_RIGHT);
        echo '</td>';
    }

    echo '</tr>';
    echo '</table>';

?>
