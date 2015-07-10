<?php  // $Id: index.php,v 1.156.2.2 2006/02/08 04:19:56 patrickslee Exp $
       // index.php - the front page.
    //echo "MOODLE/INDEX.PHP\n";
    
    if (!file_exists('./config.php')) {
        header('Location: install.php');
        die;
    }

/// Bounds for block widths on this page
    define('BLOCK_L_MIN_WIDTH', 160);
    define('BLOCK_L_MAX_WIDTH', 210);
    define('BLOCK_R_MIN_WIDTH', 160);
    define('BLOCK_R_MAX_WIDTH', 210);

    require_once('config.php');
    require_once($CFG->dirroot .'/course/lib.php');
    require_once($CFG->dirroot .'/lib/blocklib.php');

    if (empty($SITE)) {
        redirect($CFG->wwwroot .'/'. $CFG->admin .'/index.php');
    }

    if ($CFG->forcelogin) {
        require_login();
    }

    if (isadmin()) {
       //DON'T UPGRADE MOODLE!! UPGRADING WILL DELETE Earn2Learn... 
       /*if (moodle_needs_upgrading()) {
            redirect($CFG->wwwroot .'/'. $CFG->admin .'/index.php');
        }*/
    }

    if (get_moodle_cookie() == '') {   
        set_moodle_cookie('nobody');   // To help search for cookies on login page
    }

    if (!empty($USER->id)) {
        add_to_log(SITEID, 'course', 'view', 'view.php?id='.SITEID, SITEID);
    }

    if (empty($CFG->langmenu)) {
        $langmenu = '';
    } else {
        $currlang = current_language();
        $langs = get_list_of_languages();
        $langmenu = popup_form ($CFG->wwwroot .'/index.php?lang=', $langs, 'chooselang', $currlang, '', '', '', true);
    }

    $PAGE       = page_create_object(PAGE_COURSE_VIEW, SITEID);
    $pageblocks = blocks_setup($PAGE);
    $editing    = $PAGE->user_is_editing();
    $preferred_width_left  = bounded_number(BLOCK_L_MIN_WIDTH, blocks_preferred_width($pageblocks[BLOCK_POS_LEFT]),  
                                            BLOCK_L_MAX_WIDTH);
    $preferred_width_right = bounded_number(BLOCK_R_MIN_WIDTH, blocks_preferred_width($pageblocks[BLOCK_POS_RIGHT]), 
                                            BLOCK_R_MAX_WIDTH);
?> 
    <?php /*print_header(strip_tags($SITE->fullname), $SITE->fullname, 'home', '',
                 '<meta name="description" content="'. s(strip_tags($SITE->summary)) .'" />',
                 true, '', user_login_string($SITE));*/
		 
    print_header(strip_tags($SITE->fullname), $SITE->fullname, 'home', '',
                 '<meta name="description" content="'. s(strip_tags($SITE->summary)) .'" />',
                 true, '', user_login_string($SITE)); 		 
?>
  



<table id="layout-table">
  <tr>
  <?php
    if (isloggedin() && isset($USER->admin) ) {

        if (blocks_have_content($pageblocks, BLOCK_POS_LEFT) || $editing) {
        echo '<td style="width: '.$preferred_width_left.'px;" id="left-column">';
        blocks_print_group($PAGE, $pageblocks, BLOCK_POS_LEFT);
        echo '</td>';
        }
    }
    echo '<td id="middle-column">';


/// Print Section
    if ($SITE->numsections > 0) {

        if (!$section = get_record('course_sections', 'course', $SITE->id, 'section', 1)) {
            delete_records('course_sections', 'course', $SITE->id, 'section', 1); // Just in case
            $section->course = $SITE->id;
            $section->section = 1;
            $section->summary = '';
            $section->sequence = '';
            $section->visible = 1;
            $section->id = insert_record('course_sections', $section);
        }

        if (!empty($section->sequence) or !empty($section->summary) or $editing) {
            print_simple_box_start('center', '100%', '', 5, 'sitetopic');

            /// If currently moving a file then show the current clipboard
            if (ismoving($SITE->id)) {
                $stractivityclipboard = strip_tags(get_string('activityclipboard', '', addslashes($USER->activitycopyname)));
                echo '<p><font size="2">';
                echo "$stractivityclipboard&nbsp;&nbsp;(<a href=\"course/mod.php?cancelcopy=true&amp;sesskey=$USER->sesskey\">". get_string('cancel') .'</a>)';
                echo '</font></p>';
            }

            $options = NULL;
            $options->noclean = true;
            echo format_text($section->summary, FORMAT_HTML, $options);

            if ($editing) {
                $streditsummary = get_string('editsummary');
                echo "<a title=\"$streditsummary\" ".
                     " href=\"course/editsection.php?id=$section->id\"><img src=\"$CFG->pixpath/t/edit.gif\" ".
                     " height=\"11\" width=\"11\" border=\"0\" alt=\"$streditsummary\" /></a><br /><br />";
            }

            get_all_mods($SITE->id, $mods, $modnames, $modnamesplural, $modnamesused);
            print_section($SITE, $section, $mods, $modnamesused, true);
    
            if ($editing) {
                print_section_add_menus($SITE, $section->section, $modnames);
            }
            print_simple_box_end();
        }
    }

    switch ($CFG->frontpage) {     /// Display the main part of the front page.
        case FRONTPAGENEWS:
            echo "FRONTPAGENEWS\n";
            if ($SITE->newsitems) { // Print forums only when needed
                require_once($CFG->dirroot .'/mod/forum/lib.php');
    
                if (! $newsforum = forum_get_course_forum($SITE->id, 'news')) {
                    error('Could not find or create a main news forum for the site');
                }
    
                if (isset($USER->id)) {
                    $SESSION->fromdiscussion = $CFG->wwwroot;
                    if (forum_is_subscribed($USER->id, $newsforum->id)) {
                        $subtext = get_string('unsubscribe', 'forum');
                    } else {
                        $subtext = get_string('subscribe', 'forum');
                    }
                    $headertext = '<table width="100%" border="0" cellspacing="0" cellpadding="0"><tr>'.
                          '<td><div class="title">'.$newsforum->name.'</div></td>'.
                          '<td><div class="link"><a href="mod/forum/subscribe.php?id='.$newsforum->id.'">'.$subtext.'</a></div></td>'.
                          '</tr></table>';
                } else {
                    $headertext = $newsforum->name;
                }
    
                print_heading_block($headertext);
                forum_print_latest_discussions($SITE, $newsforum, $SITE->newsitems);
            }
        break;

        case FRONTPAGECOURSELIST:
            //echo "FRONTPAGECOURSELIST\n";
        case FRONTPAGECATEGORYNAMES:
            //echo "FRONTPAGECATEGORYNAMES\n";
            if (isloggedin() && !isset($USER->admin) && empty($CFG->disablemycourses)) {
	    //////////////////////////////////////////////////////////////////////////
                //print_heading_block(get_string('mycourses'));
                //print_my_moodle();mp(\\

                /*echo "<table>";
		echo "<tr><td>HERE00</td><td>HERE01</td><td>HERE02</td><tr>";
		echo "<tr><td>HERE10</td><td>HERE11</td><td>HERE12</td></tr>";
		echo "</table>";*/
           //echo var_dump($SESSION);
?>
                <!--<div align="center" style="width: 200px; margin:0px auto">-->
                <table border="0" align="center" style="padding: 10px; margin: 0px auto;">
		<tr>
		    <td id="tile" onclick="document.location.href='lessons/index.php'"><img  src="resources/dashboard/FLAT_LESSONS-01.svg" style="position: relative; top: 0; left: 0;"></td>
    		    <td id="tile" onclick="document.location.href='tasks/index.php'"><img  src="resources/dashboard/FLAT_TASKS-01.svg" style="position: relative; top: 0; left: 0;"></td>
	            <td id="tile" onclick="document.location.href='talk/index.php'"><img  src="resources/dashboard/FLAT_MESSAGES-01.svg" style="position: relative; top: 0; left: 0;"></td>
                <tr>
		<tr>
		    <td id="tile" onclick="document.location.href='calendar/view.php'"><img  src="resources/dashboard/FLAT_CALENDAR-01.svg" style="position: relative; top: 0; left: 0;"></td>
	            <td id="tile_prize" onclick="document.location.href='rewards/index.php'"><center><img class="ad flip" src="resources/dashboard/octo.jpg" style="position: relative; top: 0; left: 0;"></center></td>
		    <td id="tile" onclick="document.location.href='rewards/index.php'"><img  src="resources/dashboard/FLAT_REWARDS-01.svg" style="position: relative; top: 0; left: 0;"></td>
                </tr>
		</table>
		<!--</div>-->
<?php
	    //////////////////////////////////////////////////////////////////////////
            } else { 
                $countcategories = count_records('course_categories');
                if ($countcategories > 1 || ($countcategories == 1 && count_records('course') > 200)) {
                    if ($CFG->frontpage == FRONTPAGECOURSELIST) {
                        print_heading_block(get_string('availablecourses'));
                    } else {
                        print_heading_block(get_string('categories'));
                    }
                    print_simple_box_start('center', '100%', '', 5, 'categorybox');
                    print_whole_category_list();
                    print_simple_box_end();
                    print_course_search('', false, 'short');
                } else {
                    print_heading_block(get_string('availablecourses'));
                    print_courses(0, '100%');
                }
            }
        break;

        case FRONTPAGETOPICONLY:    // Do nothing!!  :-)
            echo "FRONTPAGETOPICONLY\n";
        break;

    }

    echo '</td>';

    // The right column
    /*if (blocks_have_content($pageblocks, BLOCK_POS_RIGHT) || $editing || isadmin()) {
        echo '<td style="width: '.$preferred_width_right.'px;" id="right-column">';
        if (isadmin()) {
            echo '<div align="center">'.update_course_icon($SITE->id).'</div>';
            echo '<br />';
        }
        blocks_print_group($PAGE, $pageblocks, BLOCK_POS_RIGHT);
        echo '</td>';
    }*/
?>

  </tr>
</table>
<?php //echo Earn2Learn(); ?>
    <!--<a class='e2l_text' href='login/logout.php'>Logout</a> -->

<?php
    echo "<div class='e2l_text' style='display: none; '>";
    //print_footer('home');     // Please do not modify this line
    echo "<div>";
?>
<script>
STATE = 0;
setInterval(function () {
    //window.location.href= "http://"+window.location.hostname+"/moodle/"; // the redirect goes here
    //alert(STATE); 
    $(".flip").fadeOut('fast', function(){//fade out the top image
   
        var src = "";
        switch(STATE){
            case 0:  src = "resources/dashboard/drone.jpg";              STATE++;   break;
	    case 1:  src = "resources/dashboard/barbie.jpg";               STATE++;   break;
	    case 2:  src = "resources/dashboard/octo.jpg";           STATE++;   break;
	    case 3:  src = "resources/dashboard/transformer.jpg";              STATE = 0;   break;
	    default: src = "resources/dashboard/octo.jpg";   STATE = 0; break;
        }
        $(".ad").attr("src", src);
	//sleep(1000);
     });
     $(".flip").fadeIn('slow');
    
},5000);

</script>
<style>
    .e2l_header{
        background-color: #000066;
    }
    body{
        background-color: #33CCFF;
	/*overflow-y:hidden;*/
	/*margin: 0;
        padding: 0;*/
    }

    .e2l_text{
        color: black;
    }
    #tile_prize {
        border-radius: 50px;
        padding: 10px; 
	position: relative; 
	left: 0; 
	top: 0;
	/*width: 60px;
	height: 60px;*/
	background-color: white;
    
    }
    #tile {
        border-radius: 50px;
        padding: 10px; 
	position: relative; 
	left: 0; 
	top: 0;
	/*width: 60px;
	height: 60px;*/
	background-color: #CCFFFF;
    }
    .ad {
        width: 250px;
	height: 250px;
    }
    table {
        border-collapse: separate;
        border-spacing: 10px;
    }
</style>

