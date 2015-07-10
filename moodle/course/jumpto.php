<?php  // $Id: jumpto.php,v 1.2.2.3 2005/11/17 06:38:17 moodler Exp $

/*
 *  Jumps to a given relative or Moodle absolute URL.
 *  Mostly used for accessibility.
 *
 */

    require('../config.php');

    $jump = optional_param('jump', '', PARAM_RAW);

    if (strpos($jump, $CFG->wwwroot) === 0) {            // Anything on this site
        redirect(urldecode($jump));
    } else if (preg_match('/^[a-z]+\.php\?/', $jump)) { 
        redirect(urldecode($jump));
    }

    redirect($_SERVER['HTTP_REFERER']);   // Return to sender, just in case

?>
