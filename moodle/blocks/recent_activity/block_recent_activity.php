<?PHP //$Id: block_recent_activity.php,v 1.6 2005/03/02 19:22:24 defacer Exp $

class block_recent_activity extends block_base {
    function init() {
        $this->title = get_string('recentactivity');
        $this->version = 2004042900;
    }

    function get_content() {

        if ($this->content !== NULL) {
            return $this->content;
        }

        if (empty($this->instance)) {
            $this->content = '';
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->text = '';
        $this->content->footer = '';

        $course = get_record('course', 'id', $this->instance->pageid);

        // Slightly hacky way to do it but...
        ob_start();
        print_recent_activity($course);
        $this->content->text = ob_get_contents();
        ob_end_clean();

        return $this->content;
    }
}

?>
