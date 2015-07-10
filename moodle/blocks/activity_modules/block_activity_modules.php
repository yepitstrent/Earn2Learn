<?PHP //$Id: block_activity_modules.php,v 1.6.2.2 2006/01/13 19:26:36 michaelpenne Exp $

class block_activity_modules extends block_list {
    function init() {
        $this->title = get_string('activities');
        $this->version = 2004041001;
    }

    function get_content() {
        global $USER, $CFG;

        // TODO: FIX: HACK: (any other tags I should add? :P)
        // Hacker's improvised caching scheme: avoid fetching the mod
        // data from db if the course format has already fetched them
        if(!isset($GLOBALS['modnamesplural']) || !isset($GLOBALS['modnamesused'])) {
            require_once($CFG->dirroot.'/course/lib.php');
            get_all_mods($this->instance->pageid, $mods, $modnames, $modnamesplural, $modnamesused);
        }
        else {
            $modnamesplural = $GLOBALS['modnamesplural'];
            $modnamesused   = $GLOBALS['modnamesused'];
        }

        if($this->content !== NULL) {
            return $this->content;
        }

        $this->content = new stdClass;
        $this->content->items = array();
        $this->content->icons = array();
        $this->content->footer = '';

        if ($modnamesused) {
            foreach ($modnamesused as $modname => $modfullname) {
                if ($modname != 'label') {
                    $this->content->items[] = '<a href="'.$CFG->wwwroot.'/mod/'.$modname.'/index.php?id='.$this->instance->pageid.'">'.$modnamesplural[$modname].'</a>';
                    $this->content->icons[] = '<img src="'.$CFG->modpixpath.'/'.$modname.'/icon.gif" height="16" width="16" alt="" />';
                }
            }
        }

        return $this->content;
    }
}

?>
