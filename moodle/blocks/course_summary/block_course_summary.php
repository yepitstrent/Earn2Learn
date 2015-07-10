<?PHP //$Id: block_course_summary.php,v 1.20 2005/03/02 19:22:22 defacer Exp $

class block_course_summary extends block_base {
    function init() {
        $this->title = get_string('pagedescription', 'block_course_summary');
        $this->version = 2004052600;
    }

    function specialization() {
        if($this->instance->pagetype == PAGE_COURSE_VIEW && $this->instance->pageid != SITEID) {
            $this->title = get_string('coursesummary', 'block_course_summary');
        }
    }

    function get_content() {
        global $CFG, $THEME;

        if($this->content !== NULL) {
            return $this->content;
        }

        if (empty($this->instance)) {
            return '';
        }

        $course  = get_record('course', 'id', $this->instance->pageid);
        
        $this->content = New stdClass;
        $options->noclean = true;    // Don't clean Javascripts etc
        $this->content->text = format_text($course->summary, FORMAT_HTML, $options);
        if(isediting($this->instance->pageid)) {
            if($this->instance->pageid == SITEID) {
                $editpage = $CFG->wwwroot.'/'.$CFG->admin.'/site.php';
            } else {
                $editpage = $CFG->wwwroot.'/course/edit.php?id='.$this->instance->pageid;
            }
            $this->content->text .= "<div align=\"right\"><a href=\"$editpage\"><img src=\"$CFG->pixpath/t/edit.gif\" alt=\"\" /></a></div>";
        }
        $this->content->footer = '';

        return $this->content;
    }

    function hide_header() {
        return true;
    }

    function preferred_width() {
        return 210;
    }

}

?>
