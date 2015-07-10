<?PHP //$Id: block_calendar_month.php,v 1.22 2005/03/03 23:11:13 mjollnir_ Exp $

class block_calendar_month extends block_base {
    function init() {
        $this->title = get_string('calendar', 'calendar');
        $this->version = 2004081200;
    }

    function preferred_width() {
        return 200;
    }

    function get_content() {
        global $USER, $CFG, $SESSION;
        optional_variable($_GET['cal_m']);
        optional_variable($_GET['cal_y']);

        require_once($CFG->dirroot.'/calendar/lib.php');
        
        if ($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';

        if (empty($this->instance)) { // Overrides: use no course at all

            $courseshown = false;
            $filtercourse = array();

        } else {

            $courseshown = $this->instance->pageid;

            if($courseshown == SITEID) {
                // Being displayed at site level. This will cause the filter to fall back to auto-detecting
                // the list of courses it will be grabbing events from.
                $filtercourse = NULL;
            }
            else {
                // Forcibly filter events to include only those from the particular course we are in.
                $filtercourse = array($courseshown => 1);
            }
        }

        // We 'll need this later
        calendar_set_referring_course($courseshown);

        // Be VERY careful with the format for default courses arguments!
        // Correct formatting is [courseid] => 1 to be concise with moodlelib.php functions.
        calendar_set_filters($courses, $group, $user, $filtercourse, $filtercourse);
        if ($courseshown == SITEID) {
            // For the front page
            $this->content->text .= calendar_overlib_html();
            $this->content->text .= calendar_top_controls('frontpage', array('m' => $_GET['cal_m'], 'y' => $_GET['cal_y']));
            $this->content->text .= calendar_get_mini($courses, $group, $user, $_GET['cal_m'], $_GET['cal_y']);
            // No filters for now

        } elseif (!empty($courseshown)) {
            // For any other course
            $this->content->text .= calendar_overlib_html();
            $this->content->text .= calendar_top_controls('course', array('id' => $courseshown, 'm' => $_GET['cal_m'], 'y' => $_GET['cal_y']));
            $this->content->text .= calendar_get_mini($courses, $group, $user, $_GET['cal_m'], $_GET['cal_y']);
            $course = get_record('course', 'id', $this->instance->pageid);
            $this->content->text .= '<div class="filters">'.calendar_filter_controls('course', '', $course).'</div>';
            
        }

        return $this->content;
    }
}

?>
