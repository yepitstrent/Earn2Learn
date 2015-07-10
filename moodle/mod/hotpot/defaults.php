<?php  // $Id: defaults.php,v 1.1.2.1 2006/05/02 05:57:13 moodler Exp $
    if (empty($CFG->hotpot_initialdisable)) {
        if (!count_records('hotpot')) {
            set_field('modules', 'visible', 0, 'name', 'hotpot');  // Disable it by default
            set_config('hotpot_initialdisable', 1);
        }
    }

?>
