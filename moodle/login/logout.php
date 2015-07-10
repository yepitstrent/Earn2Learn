<?php // $Id: logout.php,v 1.16 2005/04/18 20:13:36 skodak Exp $
// Logs the user out and sends them to the home page

    require_once("../config.php");

    if (isset($USER) and isset($USER->id)) {
        add_to_log(SITEID, "user", "logout", "view.php?id=$USER->id&course=".SITEID, $USER->id, 0, $USER->id);

        if ($USER->auth == 'cas' && !empty($CFG->cas_enabled)) {
            require($CFG->dirroot.'/auth/cas/logout.php');
        }
    }


    if (ini_get_bool("register_globals") and check_php_version("4.3.0")) {
        // This method is just to try to avoid silly warnings from PHP 4.3.0
        session_unregister("USER");
        session_unregister("SESSION");
    }

    setcookie('MoodleSessionTest'.$CFG->sessioncookie, '', time() - 3600, '/');
    unset($_SESSION['USER']);
    unset($_SESSION['SESSION']);

    unset($SESSION);
    unset($USER);

    redirect("$CFG->wwwroot/");
//http://54.68.187.178/moodle/login/index.php
?>
