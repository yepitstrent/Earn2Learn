<?php // $Id: search.php,v 1.55.2.2 2005/07/20 06:42:02 moodler Exp $

    require_once('../../config.php');
    require_once('lib.php');

    $id = required_param('id', PARAM_INT);                  // course id
    $search = trim(optional_param('search', '', PARAM_NOTAGS));  // search string
    $page = optional_param('page', 0, PARAM_INT);   // which page to show
    $perpage = optional_param('perpage', 10, PARAM_INT);   // how many per page
    $showform = optional_param('showform', 0, PARAM_INT);   // Just show the form

    $user    = trim(optional_param('user', '', PARAM_NOTAGS));    // Names to search for
    $userid  = trim(optional_param('userid', 0, PARAM_INT));      // UserID to search for
    $forumid = trim(optional_param('forumid', 0, PARAM_INT));      // ForumID to search for
    $subject = trim(optional_param('subject', '', PARAM_NOTAGS)); // Subject
    $phrase  = trim(optional_param('phrase', '', PARAM_NOTAGS));  // Phrase
    $words   = trim(optional_param('words', '', PARAM_NOTAGS));   // Words
    $fullwords = trim(optional_param('fullwords', '', PARAM_NOTAGS)); // Whole words
    $notwords = trim(optional_param('notwords', '', PARAM_NOTAGS));   // Words we don't want

    $timefromrestrict = optional_param('timefromrestrict', 0, PARAM_INT); // Use starting date
    $fromday = optional_param('fromday', 0, PARAM_INT);      // Starting date
    $frommonth = optional_param('frommonth', 0, PARAM_INT);      // Starting date
    $fromyear = optional_param('fromyear', 0, PARAM_INT);      // Starting date
    $fromhour = optional_param('fromhour', 0, PARAM_INT);      // Starting date
    $fromminute = optional_param('fromminute', 0, PARAM_INT);      // Starting date
    if ($timefromrestrict) {
        $datefrom = make_timestamp($fromyear, $frommonth, $fromday, $fromhour, $fromminute);
    } else {
        $datefrom = optional_param('datefrom', 0, PARAM_INT);      // Starting date
    }

    $timetorestrict = optional_param('timetorestrict', 0, PARAM_INT); // Use ending date
    $today = optional_param('today', 0, PARAM_INT);      // Ending date
    $tomonth = optional_param('tomonth', 0, PARAM_INT);      // Ending date
    $toyear = optional_param('toyear', 0, PARAM_INT);      // Ending date
    $tohour = optional_param('tohour', 0, PARAM_INT);      // Ending date
    $tominute = optional_param('tominute', 0, PARAM_INT);      // Ending date
    if ($timetorestrict) {
        $dateto = make_timestamp($toyear, $tomonth, $today, $tohour, $tominute);
    } else {
        $dateto = optional_param('datefrom', 0, PARAM_INT);      // Ending date
    }



    if (empty($search)) {   // Check the other parameters instead
        if (!empty($words)) {
            $search .= ' '.$words;
        }
        if (!empty($userid)) {
            $search .= ' userid:'.$userid;
        }
        if (!empty($forumid)) {
            $search .= ' forumid:'.$forumid;
        }
        if (!empty($user)) {
            $search .= ' '.forum_clean_search_terms($user, 'user:');
        }
        if (!empty($subject)) {
            $search .= ' '.forum_clean_search_terms($subject, 'subject:');
        }
        if (!empty($fullwords)) {
            $search .= ' '.forum_clean_search_terms($fullwords, '+');
        }
        if (!empty($notwords)) {
            $search .= ' '.forum_clean_search_terms($notwords, '-');
        }
        if (!empty($phrase)) {
            $search .= ' "'.$phrase.'"';
        }
        if (!empty($datefrom)) {
            $search .= ' datefrom:'.$datefrom;
        }
        if (!empty($dateto)) {
            $search .= ' dateto:'.$dateto;
        }
        $individualparams = true;
    } else {
        $individualparams = false;
    }

    if ($search) {
        $search = forum_clean_search_terms($search);
    }

    if (! $course = get_record("course", "id", $id)) {
        error("Course id is incorrect.");
    }

    require_course_login($course);

    add_to_log($course->id, "forum", "search", "search.php?id=$course->id&amp;search=".urlencode($search), $search);

    $strforums = get_string("modulenameplural", "forum");
    $strsearch = get_string("search", "forum");
    $strsearchresults = get_string("searchresults", "forum");
    $strpage = get_string("page");

    if (!$search || $showform) {
        print_header_simple("$strsearch", "",
                 "<a href=\"index.php?id=$course->id\">$strforums</a> -> $strsearch", 'search.words',
                  "", "", "&nbsp;", navmenu($course));

        forum_print_big_search_form($course);
        print_footer($course);
        exit;
    }

/// We need to do a search now and print results

    $searchterms = str_replace('forumid:', 'instance:', $search);
    $searchterms = explode(' ', $searchterms);

    $searchform = forum_search_form($course, $search);

    if ($group = user_group($course->id, $USER->id)) {
        $groupid = $group->id;
    } else {
        $groupid = 0;
    }

    if (!$posts = forum_search_posts($searchterms, $course->id, $page*$perpage, $perpage, $totalcount, $groupid)) {

        print_header_simple("$strsearchresults", "",
                "<a href=\"index.php?id=$course->id\">$strforums</a> ->
                <a href=\"search.php?id=$course->id\">$strsearch</a> -> ".s($search), 'search.words',
                "", "", "&nbsp;", navmenu($course));
        print_heading(get_string("nopostscontaining", "forum", $search));

        if (!$individualparams) {
            $words = $search;
        }

        forum_print_big_search_form($course);

        print_footer($course);
        exit;
    }

    print_header_simple("$strsearchresults", "",
            "<a href=\"index.php?id=$course->id\">$strforums</a> ->
            <a href=\"search.php?id=$course->id\">$strsearch</a> -> ".s($search), '',
            "", "",  $searchform, navmenu($course));

    echo '<div class="reportlink">';
    echo '<a href="search.php?id='.$course->id.
                             '&amp;user='.urlencode($user).
                             '&amp;userid='.$userid.
                             '&amp;forumid='.$forumid.
                             '&amp;subject='.urlencode($subject).
                             '&amp;phrase='.urlencode($phrase).
                             '&amp;words='.urlencode($words).
                             '&amp;fullwords='.urlencode($fullwords).
                             '&amp;notwords='.urlencode($notwords).
                             '&amp;dateto='.$dateto.
                             '&amp;datefrom='.$datefrom.
                             '&amp;showform=1'.
                             '">'.get_string('advancedsearch','forum').'...</a>';
    echo '</div>';

    print_heading("$strsearchresults: $totalcount");

    print_paging_bar($totalcount, $page, $perpage, "search.php?search=".urlencode(stripslashes($search))."&amp;id=$course->id&amp;perpage=$perpage&amp;");

    //added to implement highlighting of search terms found only in HTML markup
    //fiedorow - 9/2/2005
    $strippedsearch = str_replace('user:','',$search);
    $strippedsearch = str_replace('subject:','',$strippedsearch);
    $strippedsearch = str_replace('&quot;','',$strippedsearch);
    $searchterms = explode(' ', $strippedsearch);    // Search for words independently
    foreach ($searchterms as $key => $searchterm) {
        if (preg_match('/^\-/',$searchterm)) {
            unset($searchterms[$key]);
        } else {
            $searchterms[$key] = preg_replace('/^\+/','',$searchterm);
        }
    }
    $strippedsearch = implode(' ', $searchterms);    // Rebuild the string

    foreach ($posts as $post) {

        if (! $discussion = get_record('forum_discussions', 'id', $post->discussion)) {
            error('Discussion ID was incorrect');
        }
        if (! $forum = get_record('forum', 'id', "$discussion->forum")) {
            error("Could not find forum $discussion->forum");
        }

        $post->subject = highlight($strippedsearch, $post->subject);
        $discussion->name = highlight($strippedsearch, $discussion->name);

        $fullsubject = "<a href=\"view.php?f=$forum->id\">".format_string($forum->name,true)."</a>";
        if ($forum->type != 'single') {
            $fullsubject .= " -> <a href=\"discuss.php?d=$discussion->id\">".format_string($discussion->name,true)."</a>";
            if ($post->parent != 0) {
                $fullsubject .= " -> <a href=\"discuss.php?d=$post->discussion&amp;parent=$post->id\">".format_string($post->subject,true)."</a>";
            }
        }

        $post->subject = $fullsubject;

        //Indicate search terms only found in HTML markup
        //Use highlight() with nonsense tags to spot search terms in the
        //actual text content first.          fiedorow - 9/2/2005
        $missing_terms = "";
        $message = highlight($strippedsearch,format_text($post->message, $post->format, NULL, $course->id),
                0,'<fgw9sdpq4>','</fgw9sdpq4>');

        foreach ($searchterms as $searchterm) {
            if (preg_match("/$searchterm/i",$message) && !preg_match('/<fgw9sdpq4>'.$searchterm.'<\/fgw9sdpq4>/i',$message)) {
                $missing_terms .= " $searchterm";
            }
        }

        $message = str_replace('<fgw9sdpq4>','<span class="highlight">',$message);
        $message = str_replace('</fgw9sdpq4>','</span>',$message);

        if ($missing_terms) {
            $strmissingsearchterms = get_string('missingsearchterms','forum');
            $post->message = '<p class="highlight2">'.$strmissingsearchterms.' '.$missing_terms.'</p>'.$message;
        } else {
            $post->message = $message;
        }

        $fulllink = "<a href=\"discuss.php?d=$post->discussion#$post->id\">".get_string("postincontext", "forum")."</a>";
        //search terms already highlighted - fiedorow - 9/2/2005
        forum_print_post($post, $course->id, false, false, false, false, $fulllink);

        echo "<br />";
    }

    print_paging_bar($totalcount, $page, $perpage, "search.php?search=".urlencode(stripslashes($search))."&amp;id=$course->id&amp;perpage=$perpage&amp;");

    print_footer($course);



function forum_print_big_search_form($course) {
    global $words, $subject, $phrase, $user, $userid, $fullwords, $notwords, $datefrom, $dateto;

    print_simple_box(get_string('searchforumintro', 'forum'), 'center', '', '', 'searchbox', 'intro');

    print_simple_box_start("center");

    echo "<script type=\"text/javascript\" language=\"javascript\">\n";
    echo "var timefromitems = ['fromday','frommonth','fromyear','fromhour', 'fromminute'];\n";
    echo "var timetoitems = ['today','tomonth','toyear','tohour','tominute'];\n";
    echo "</script>\n";

    echo '<form name="search" action="search.php" method="get">';
    echo '<input type="hidden" value="'.$course->id.'" name="id" alt="">';
    echo '<table cellpadding="10" class="searchbox" id="form">';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchwords', 'forum').':</td>';
    echo '<td class="c1"><input type="text" size="35" name="words" value="'.s($words).'" alt=""></td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchphrase', 'forum').':</td>';
    echo '<td class="c1"><input type="text" size="35" name="phrase" value="'.s($phrase).'" alt=""></td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchnotwords', 'forum').':</td>';
    echo '<td class="c1"><input type="text" size="35" name="notwords" value="'.s($notwords).'" alt=""></td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchfullwords', 'forum').':</td>';
    echo '<td class="c1"><input type="text" size="35" name="fullwords" value="'.s($fullwords).'" alt=""></td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchdatefrom', 'forum').':</td>';
    echo '<td class="c1">';
    echo '<input name="timefromrestrict" type="checkbox" value="1" alt="'.get_string('searchdatefrom', 'forum').'" onclick="return lockoptions(\'search\', \'timefromrestrict\', timefromitems)" /> ';
    if (empty($dateto)) {
        $datefrom = make_timestamp(2000, 1, 1, 0, 0, 0);
    }
    print_date_selector('fromday', 'frommonth', 'fromyear', $datefrom);
    print_time_selector('fromhour', 'fromminute', $datefrom);

    echo '<input type="hidden" name="hfromday" value="0" />';
    echo '<input type="hidden" name="hfrommonth" value="0" />';
    echo '<input type="hidden" name="hfromyear" value="0" />';
    echo '<input type="hidden" name="hfromhour" value="0" />';
    echo '<input type="hidden" name="hfromminute" value="0" />';

    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchdateto', 'forum').':</td>';
    echo '<td class="c1">';
    echo '<input name="timetorestrict" type="checkbox" value="1" alt="'.get_string('searchdateto', 'forum').'" onclick="return lockoptions(\'search\', \'timetorestrict\', timetoitems)" /> ';
    if (empty($dateto)) {
        $dateto = time()+3600;
    }
    print_date_selector('today', 'tomonth', 'toyear', $dateto);
    print_time_selector('tohour', 'tominute', $dateto);

    echo '<input type="hidden" name="htoday" value="0" />';
    echo '<input type="hidden" name="htomonth" value="0" />';
    echo '<input type="hidden" name="htoyear" value="0" />';
    echo '<input type="hidden" name="htohour" value="0" />';
    echo '<input type="hidden" name="htominute" value="0" />';

    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchwhichforums', 'forum').':</td>';
    echo '<td class="c1">';
    choose_from_menu(forum_menu_list($course), 'forumid', '', get_string('allforums', 'forum'), '');
    echo '</td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchsubject', 'forum').':</td>';
    echo '<td class="c1"><input type="text" size="35" name="subject" value="'.s($subject).'" alt=""></td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="c0">'.get_string('searchuser', 'forum').':</td>';
    echo '<td class="c1"><input type="text" size="35" name="user" value="'.s($user).'" alt=""></td>';
    echo '</tr>';

    echo '<tr>';
    echo '<td class="submit" colspan="2" align="center">';
    echo '<input type="submit" value="'.get_string('searchforums', 'forum').'" alt=""></td>';
    echo '</tr>';

    echo '</table>';
    echo '</form>';

    echo "<script type=\"text/javascript\">";
    echo "lockoptions('search','timefromrestrict', timefromitems);";
    echo "lockoptions('search','timetorestrict', timetoitems);";
    echo "</script>\n";

    print_simple_box_end();
}


function forum_clean_search_terms($words, $prefix='') {
    $searchterms = explode(' ', $words);
    foreach ($searchterms as $key => $searchterm) {
        if (strlen($searchterm) < 2) {
            unset($searchterms[$key]);
        } else if ($prefix) {
            $searchterms[$key] = $prefix.$searchterm;
        }
    }
    return trim(implode(' ', $searchterms));
}

function forum_menu_list($course)  {

    $menu = array();

    $currentgroup = get_current_group($course->id);
    $isteacher = isteacher($course->id);

    if ($isteacher) {   // Add teacher forum
        if ($forum = forum_get_course_forum($course->id, 'teacher')) {
            $menu[$forum->id] = format_string($forum->name,true);
        }
    }

    if ($forums = get_all_instances_in_course("forum", $course)) {
        if ($course->format == 'weeks') {
            $strsection = get_string('week');
        } else {
            $strsection = get_string('topic');
        }

        foreach ($forums as $forum) {
            if (!$isteacher) {   // Non-teachers
                if ($forum->type == "teacher") {
                    continue;
                }
                if (!isset($forum->visible)) {
                    if (! instance_is_visible("forum", $forum)) {
                        continue;
                    }
                }
                if ($cm = get_coursemodule_from_instance('forum', $forum->id, $course->id)) {
                    $groupmode = groupmode($course, $cm);   // Groups are being used
                    if (($groupmode == SEPARATEGROUPS) and ($currentgroup === false)) {
                        continue;
                    }
                }
            }

            $menu[$forum->id] = format_string($forum->name,true);
        }
    }

    return $menu;
}

?>

