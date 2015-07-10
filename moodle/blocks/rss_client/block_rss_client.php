<?php //$Id: block_rss_client.php,v 1.45.2.7 2006/04/05 08:36:49 moodler Exp $

/*******************************************************************
* This file contains one class which defines a block for display on
* any Moodle page. This block can be configured to display the contents
* of a remote RSS news feed in your web site.
*
* @author Daryl Hawes
* @version  $Id: block_rss_client.php,v 1.45.2.7 2006/04/05 08:36:49 moodler Exp $
* @license http://www.gnu.org/copyleft/gpl.html GNU Public License
* @package base
******************************************************************/

/**
 * This class is for a block which defines a block for display on
 * any Moodle page. 
 */
 class block_rss_client extends block_base {

    function init() {
        $this->title = get_string('feedstitle', 'block_rss_client');
        $this->version = 2004112001;
    }

    function preferred_width() {
        return 210;
    }

    function applicable_formats() {
        return array('all' => true);
    }

    function specialization() {
        // After the block has been loaded we customize the block's title display
        if (!empty($this->config) && !empty($this->config->title)) {
            // There is a customized block title, display it
            $this->title = $this->config->title;
        } else {
            // No customized block title, use localized remote news feed string
            $this->title = get_string('remotenewsfeed', 'block_rss_client');
        }
    }

    function get_content() {
        global $CFG, $editing;

        require_once($CFG->libdir .'/rsslib.php');

        if($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text   = '';
        $this->content->footer = '';

        if (empty($this->instance)) {
            // We're being asked for content without an associated instance
            return $this->content;
        }

        $output = '';
        $rssid = -1;
        $display_description = false;
        if (isset($CFG->block_rss_client_num_entries) && is_numeric($CFG->block_rss_client_num_entries) ) {
            $shownumentries = intval($CFG->block_rss_client_num_entries);
        } else {
            $shownumentries = 5; //default to 5 entries is not specified by admin or instance
        }

        if (!empty($this->config)) {
            if (!empty($this->config->rssid)) {
                if (is_array($this->config->rssid)) { 
                    $rssidarray = $this->config->rssid;
                } else {     // Make an array of the single value 
                    $rssidarray = array($this->config->rssid);
                }
            }
            if (!empty($this->config->display_description)) {
                $display_description = intval($this->config->display_description);
            }
            if (!empty($this->config->shownumentries)) {
                $shownumentries = intval($this->config->shownumentries);
            }
        }

        $submitters = $CFG->block_rss_client_submitters;

        $isteacher = false;
        $this->courseid = SITEID;
        if ($this->instance->pagetype == PAGE_COURSE_VIEW) {
            $this->courseid = $this->instance->pageid;
            $isteacher = isteacher($this->courseid);
        }

        //if the user is an admin, course teacher, or all users are allowed
        // then allow the user to add rss feeds
        global $USER;
        $userisloggedin = false;
        if (isset($USER) && isset($USER->id) && $USER->id && !isguest()) {
            $userisloggedin = true;
        }
        if ( $userisloggedin && ($submitters == SUBMITTERS_ALL_ACCOUNT_HOLDERS || ($submitters == SUBMITTERS_ADMIN_AND_TEACHER && $isteacher)) ) {

            $page = page_create_object($this->instance->pagetype, $this->instance->pageid);
            if (isset($this->config)) {
                // this instance is configured - show Add/Edit feeds link
                $script = $page->url_get_full(array('instanceid' => $this->instance->id, 'sesskey' => $USER->sesskey, 'blockaction' => 'config', 'currentaction' => 'managefeeds', 'id' => $this->courseid));
                $output .= '<div align="center"><a title="'. get_string('feedsaddedit', 'block_rss_client') .'" href="'. $script .'">'. get_string('feedsaddedit', 'block_rss_client') .'</a></div>';
            } else {
                // this instance has not been configured yet - show configure link
                $script = $page->url_get_full(array('instanceid' => $this->instance->id, 'sesskey' => $USER->sesskey, 'blockaction' => 'config', 'currentaction' => 'configblock', 'id' => $this->courseid));
                $output .= '<div align="center"><a title="'. get_string('feedsconfigurenewinstance', 'block_rss_client') .'" href="'. $script.'">'. get_string('feedsconfigurenewinstance', 'block_rss_client') .'</a></div>';
            }
        }

        // Daryl Hawes note: if count of rssidarray is greater than 1 
        // we should possibly display a drop down menu of selected feed titles
        // so user can select a single feed to view (similar to RSSFeed)
        if (!empty($rssidarray)) {
            $numids = count($rssidarray);
            $count = 0;
            foreach ($rssidarray as $rssid) {
                $output .=  $this->get_rss_by_id($rssid, $display_description, $shownumentries, ($numids > 1) ? true : false);
                if ($numids > 1 && $count != $numids -1 && !empty($rssfeedstring)) {
                    $output .= '<hr width="80%" />';
                }
                $count ++;
            }
        }

        $this->content->text = $output;
        return $this->content;
    }

    function instance_allow_multiple() {
        return true;
    }

    function has_config() {
        return true;
    }

    function instance_allow_config() {
        return true;
    }

    /**
     * @param int $rssid The feed to be displayed
     * @param bool $display_description Should the description information from the feed be displayed or simply the title?
     * @param int $shownumentries The maximum number of feed entries to be displayed.
     * @param bool $showtitle True if the feed title should be displayed above the feed entries.
     * @return string|NULL
     */
    function get_rss_by_id($rssid, $display_description, $shownumentries, $showtitle=false) {
        global $CFG;
        $returnstring = '';
        $now = time();
        require_once($CFG->libdir .'/rsslib.php');
        require_once(MAGPIE_DIR .'rss_fetch.inc');
        if (!defined('MAGPIE_OUTPUT_ENCODING')) {
            define('MAGPIE_OUTPUT_ENCODING', get_string('thischarset'));  // see bug 3107
        }

        $rss_record = get_record('block_rss_client', 'id', $rssid);
        if (isset($rss_record) && isset($rss_record->id)) {
            // By capturing the output from fetch_rss this way
            // error messages do not display and clutter up the moodle interface
            // however, we do lose out on seeing helpful messages like "cache hit", etc.
            ob_start();
            $rss = fetch_rss($rss_record->url);
            $rsserror = ob_get_contents();
            ob_end_clean();

            if ($rss === false) {
                if ($CFG->debug && !empty($rsserror)) {
                    // There was a failure in loading the rss feed, print link to full error text
                    return '<a href="'. $CFG->wwwroot .'/blocks/rss_client/block_rss_client_error.php?error='. urlencode($rsserror) .'">Error loading a feed.</a><br />'; //Daryl Hawes note: localize this line
                }
            }

            if ($shownumentries > 0 && $shownumentries < count($rss->items) ) {
                $rss->items = array_slice($rss->items, 0, $shownumentries);
            }

            if (empty($rss_record->preferredtitle)) {
                $feedtitle = $this->format_title(stripslashes_safe(rss_unhtmlentities($rss->channel['title'])));
            } else {
                $feedtitle = $this->format_title(stripslashes_safe($rss_record->preferredtitle));
            }
//            print_object($rss);
            if (isset($this->config) && 
                    isset($this->config->block_rss_client_show_channel_image) && 
                        $this->config->block_rss_client_show_channel_image &&
                            isset($rss->image) && isset($rss->image['link']) && isset($rss->image['title']) && isset($rss->image['url']) ) {
                $returnstring .= '<div class="image"><a href="'. $rss->image['link'] .'"><img src="'. $rss->image['url'] .'" title="'. $rss->image['title'] .'" alt="'. $rss->image['title'] .'"/></a></div>';
            }

            if ($showtitle) {
                $returnstring .= '<div class="title">'. $feedtitle .'</div>';
            } 

            $formatoptions->para = false;

            // first we must verify that the rss feed is loaded
            // by checking $rss and $rss->items exist before using them
            if (empty($rss) || empty($rss->items)) {
                return '';
            }

            foreach ($rss->items as $item) {
                $item['title'] = stripslashes_safe(rss_unhtmlentities($item['title']));
                $item['description'] = stripslashes_safe(rss_unhtmlentities($item['description']));
                if ($item['title'] == '') {
                    // no title present, use portion of description
                    $item['title'] = substr(strip_tags($item['description']), 0, 20) . '...';
                } else {
                    $item['title'] = break_up_long_words($item['title'], 30);
                }

                if ($item['link'] == '') {
                    $item['link'] = $item['guid'];
                }

                $item['link'] = str_replace('&', '&amp;', $item['link']);

                $returnstring .= '<div class="link"><a href="'. $item['link'] .'" target="_blank">'. $item['title'] . '</a></div>' ."\n";

                if ($display_description && !empty($item['description'])) {
                    $item['description'] = break_up_long_words($item['description'], 30);
                    $returnstring .= '<div class="description">'.
                                     format_text($item['description'], FORMAT_MOODLE, $formatoptions, $this->courseid) . 
                                     '</div>' ."\n";
                }
            }

            if (!empty($rss->channel['link'])) {
                if (!empty($this->config) && isset($this->config->block_rss_client_show_channel_link) && $this->config->block_rss_client_show_channel_link) {
                    $this->content->footer =  '<a href="'. $rss->channel['link'] .'">'. get_string('clientchannellink', 'block_rss_client') .'</a>';
                } 
                if (!empty($feedtitle) ) {
                    $feedtitle = '<a href="'. $rss->channel['link'] .'">'. $feedtitle .'</a>';
                }
            }
        }

        // if block has no custom title
        if (empty($this->config) || (!empty($this->config) && empty($this->config->title))) {
            // if the feed has a title
            if (!empty($feedtitle) and ($feedtitle != '<a href="'. $rss->channel['link'] .'"></a>')) {
                // set the block's title to the feed's title
                $this->title = $feedtitle;
            }
        }
        return $returnstring;
    }

     // just strips the title down and adds ... for excessively long titles.
     function format_title($title,$max=64) {
         if (strlen($title) <= $max) {
             return $title;
         }
         else {
             return substr($title,0,$max-3).'...';
         }
     }
}
?>
