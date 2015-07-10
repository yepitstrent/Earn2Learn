<?php // $Id: index.php,v 1.3.2.1 2005/06/02 14:34:22 exe-cutor Exp $
      // Designed to be redirected from moodle/login/index.php

    require('../../config.php');
    require('lib.php');

    if (isloggedin()) {      // Nothing to do
        redirect($CFG->wwwroot.'/index.php');
    }

    $pluginconfig   = get_config('auth/shibboleth');

    // Check whether Shibboleth is configured properly
    if (empty($pluginconfig->shib_user_attribute)) {
        error('Shibboleth authentication (\'shib_user_attribute\') is not set up correctly. You probably haven\'t yet configured the Shibboleth authentication. Please consult the README in moodle/auth/shibboleth for further instructions on how to set up Shibboleth authentication.');
    }

/// If we can find the Shibboleth attribute, save it in session and return to main login page
    if (!empty($_SERVER[$pluginconfig->shib_user_attribute])) {    // Shibboleth auto-login
        $frm->username = $_SERVER[$pluginconfig->shib_user_attribute];
        $frm->password = substr(base64_encode($_SERVER[$pluginconfig->shib_user_attribute]),0,8);
        // The random password consists of the first 8 letters of the base 64 encoded user ID
        // This password is never used unless the user account is converted to manual 

    /// Check if the user has actually submitted login data to us
    
        if ($user = authenticate_user_login($frm->username, $frm->password)) {

            // Let's get them all set up.
            $USER = $user;

            add_to_log(SITEID, 'user', 'login', "view.php?id=$USER->id&course=".SITEID, $USER->id, 0, $USER->id);

            update_user_login_times();
            set_moodle_cookie($USER->username);
            set_login_session_preferences();
        
            if (user_not_fully_set_up($USER)) {
                $urltogo = $CFG->wwwroot.'/user/edit.php?id='.$USER->id.'&amp;course='.SITEID;
                // We don't delete $SESSION->wantsurl yet, so we get there later

            } else if (isset($SESSION->wantsurl) and (strpos($SESSION->wantsurl, $CFG->wwwroot) === 0)) {
                $urltogo = $SESSION->wantsurl;    /// Because it's an address in this site
                unset($SESSION->wantsurl);

            } else {
                $urltogo = $CFG->wwwroot.'/';      /// Go to the standard home page
                unset($SESSION->wantsurl);         /// Just in case
            }

            redirect($urltogo);
        }
    }

    $SESSION->shibboleth_checked = true;   // This will stop us bouncing back here

    redirect($CFG->wwwroot.'/login/index.php');

?>
