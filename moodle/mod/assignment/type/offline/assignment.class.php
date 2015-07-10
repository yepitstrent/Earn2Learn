<?php // $Id: assignment.class.php,v 1.6.2.1 2005/11/04 06:22:47 moodler Exp $

/**
 * Extend the base assignment class for offline assignments
 *
 */
class assignment_offline extends assignment_base {

    function assignment_offline($cmid=0) {
        parent::assignment_base($cmid);
    }

    function display_lateness($timesubmitted) {
        return '';
    }
    function print_student_answer($studentid){
        return '';//does nothing!
    }

}

?>
