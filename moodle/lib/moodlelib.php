<?php // $Id: moodlelib.php,v 1.565.2.58 2006/04/07 01:46:05 ikawhero Exp $

///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
// Moodle - Modular Object-Oriented Dynamic Learning Environment         //
//          http://moodle.org                                            //
//                                                                       //
// Copyright (C) 1999-2004  Martin Dougiamas  http://dougiamas.com       //
//                                                                       //
// This program is free software; you can redistribute it and/or modify  //
// it under the terms of the GNU General Public License as published by  //
// the Free Software Foundation; either version 2 of the License, or     //
// (at your option) any later version.                                   //
//                                                                       //
// This program is distributed in the hope that it will be useful,       //
// but WITHOUT ANY WARRANTY; without even the implied warranty of        //
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the         //
// GNU General Public License for more details:                          //
//                                                                       //
//          http://www.gnu.org/copyleft/gpl.html                         //
//                                                                       //
///////////////////////////////////////////////////////////////////////////

/**
 * moodlelib.php - Moodle main library
 *
 * Main library file of miscellaneous general-purpose Moodle functions.
 * Other main libraries:
 *  - weblib.php      - functions that produce web output
 *  - datalib.php     - functions that access the database
 * @author Martin Dougiamas
 * @version $Id: moodlelib.php,v 1.565.2.58 2006/04/07 01:46:05 ikawhero Exp $
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package moodlecore
 */
/// CONSTANTS /////////////////////////////////////////////////////////////

/**
 * Used by some scripts to check they are being called by Moodle
 */
define('MOODLE_INTERNAL', true);


/**
 * No groups used?
 */
define('NOGROUPS', 0);

/**
 * Groups used?
 */
define('SEPARATEGROUPS', 1);

/**
 * Groups visible?
 */
define('VISIBLEGROUPS', 2);

/**
 * Time constant - the number of seconds in a week
 */
define('WEEKSECS', 604800);

/**
 * Time constant - the number of seconds in a day
 */
define('DAYSECS', 86400);

/**
 * Time constant - the number of seconds in an hour
 */
define('HOURSECS', 3600);

/**
 * Time constant - the number of seconds in a minute
 */
define('MINSECS', 60);

/**
 * Time constant - the number of minutes in a day
 */
define('DAYMINS', 1440);

/**
 * Time constant - the number of minutes in an hour
 */
define('HOURMINS', 60);

/**
 * Parameter constants - if set then the parameter is cleaned of scripts etc
 */
define('PARAM_RAW',      0x0000);
define('PARAM_CLEAN',    0x0001);
define('PARAM_INT',      0x0002);
define('PARAM_INTEGER',  0x0002);  // Alias for PARAM_INT
define('PARAM_ALPHA',    0x0004);
define('PARAM_ACTION',   0x0004);  // Alias for PARAM_ALPHA
define('PARAM_FORMAT',   0x0004);  // Alias for PARAM_ALPHA
define('PARAM_NOTAGS',   0x0008);
define('PARAM_FILE',     0x0010);
define('PARAM_PATH',     0x0020);
define('PARAM_HOST',     0x0040);  // FQDN or IPv4 dotted quad
define('PARAM_URL',      0x0080);
define('PARAM_LOCALURL', 0x0180);  // NOT orthogonal to the others! Implies PARAM_URL!
define('PARAM_CLEANFILE',0x0200);
define('PARAM_ALPHANUM', 0x0400);  //numbers or letters only
define('PARAM_BOOL',     0x0800);  //convert to value 1 or 0 using empty()
define('PARAM_CLEANHTML',0x1000);  //actual HTML code that you want cleaned and slashes removed
define('PARAM_ALPHAEXT', 0x2000);  // PARAM_ALPHA plus the chars in quotes: "/-_" allowed
define('PARAM_SAFEDIR',  0x4000);  // safe directory name, suitable for include() and require()

/**
 * Definition of page types
 */
define('PAGE_COURSE_VIEW', 'course-view');

/// PARAMETER HANDLING ////////////////////////////////////////////////////

/**
 * Returns a particular value for the named variable, taken from
 * POST or GET.  If the parameter doesn't exist then an error is
 * thrown because we require this variable.
 *
 * This function should be used to initialise all required values
 * in a script that are based on parameters.  Usually it will be
 * used like this:
 *    $id = required_param('id');
 *
 * @param string $varname the name of the parameter variable we want
 * @param integer $options a bit field that specifies any cleaning needed
 * @return mixed
 */
function required_param($varname, $options=PARAM_CLEAN) {

    // detect_unchecked_vars addition
    global $CFG;
    if (!empty($CFG->detect_unchecked_vars)) {
        global $UNCHECKED_VARS;
        unset ($UNCHECKED_VARS->vars[$varname]);
    }

    if (isset($_POST[$varname])) {       // POST has precedence
        $param = $_POST[$varname];
    } else if (isset($_GET[$varname])) {
        $param = $_GET[$varname];
    } else {
        error('A required parameter ('.$varname.') was missing');
    }

    return clean_param($param, $options);
}

/**
 * Returns a particular value for the named variable, taken from
 * POST or GET, otherwise returning a given default.
 *
 * This function should be used to initialise all optional values
 * in a script that are based on parameters.  Usually it will be
 * used like this:
 *    $name = optional_param('name', 'Fred');
 *
 * @param string $varname the name of the parameter variable we want
 * @param mixed  $default the default value to return if nothing is found
 * @param integer $options a bit field that specifies any cleaning needed
 * @return mixed
 */
function optional_param($varname, $default=NULL, $options=PARAM_CLEAN) {

    // detect_unchecked_vars addition
    global $CFG;
    if (!empty($CFG->detect_unchecked_vars)) {
        global $UNCHECKED_VARS;
        unset ($UNCHECKED_VARS->vars[$varname]);
    }

    if (isset($_POST[$varname])) {       // POST has precedence
        $param = $_POST[$varname];
    } else if (isset($_GET[$varname])) {
        $param = $_GET[$varname];
    } else {
        return $default;
    }

    return clean_param($param, $options);
}

/**
 * Used by {@link optional_param()} and {@link required_param()} to
 * clean the variables and/or cast to specific types, based on
 * an options field.
 *
 * @param mixed $param the variable we are cleaning
 * @param integer $options a bit field that specifies the cleaning needed
 * @return mixed
 */
function clean_param($param, $options) {

    global $CFG;

    if (is_array($param)) {              // Let's loop
        $newparam = array();
        foreach ($param as $key => $value) {
            $newparam[$key] = clean_param($value, $options);
        }
        return $newparam;
    }

    if (!$options) {
        return $param;                   // Return raw value
    }

    if ((string)$param == (string)(int)$param) {  // It's just an integer
        return (int)$param;
    }

    if ($options & PARAM_CLEAN) {
        $param = stripslashes($param);   // Needed by kses to work fine
        $param = clean_text($param);     // Sweep for scripts, etc
        $param = addslashes($param);     // Restore original request parameter slashes
    }

    if ($options & PARAM_INT) {
        $param = (int)$param;            // Convert to integer
    }

    if ($options & PARAM_ALPHA) {        // Remove everything not a-z
        $param = eregi_replace('[^a-zA-Z]', '', $param);
    }

    if ($options & PARAM_ALPHANUM) {     // Remove everything not a-zA-Z0-9
        $param = eregi_replace('[^A-Za-z0-9]', '', $param);
    }

    if ($options & PARAM_ALPHAEXT) {     // Remove everything not a-zA-Z/_-
        $param = eregi_replace('[^a-zA-Z/_-]', '', $param);
    }

    if ($options & PARAM_BOOL) {         // Convert to 1 or 0
        $tempstr = strtolower($param);
        if ($tempstr == 'on') {
            $param = 1;
        } else if ($tempstr == 'off') {
            $param = 0;
        } else {
            $param = empty($param) ? 0 : 1;
        }
    }

    if ($options & PARAM_NOTAGS) {       // Strip all tags completely
        $param = strip_tags($param);
    }

    if ($options & PARAM_SAFEDIR) {     // Remove everything not a-zA-Z0-9_-
        $param = eregi_replace('[^a-zA-Z0-9_-]', '', $param);
    }

    if ($options & PARAM_CLEANFILE) {    // allow only safe characters
        $param = clean_filename($param);
    }

    if ($options & PARAM_FILE) {         // Strip all suspicious characters from filename
        $param = ereg_replace('[[:cntrl:]]|[<>"`\|\':\\/]', '', $param);
        $param = ereg_replace('\.\.+', '', $param);
        if($param == '.') {
            $param = '';
        }
    }

    if ($options & PARAM_PATH) {         // Strip all suspicious characters from file path
        $param = str_replace('\\\'', '\'', $param);
        $param = str_replace('\\"', '"', $param);
        $param = str_replace('\\', '/', $param);
        $param = ereg_replace('[[:cntrl:]]|[<>"`\|\':]', '', $param);
        $param = ereg_replace('\.\.+', '', $param);
        $param = ereg_replace('//+', '/', $param);
        $param = ereg_replace('/(\./)+', '/', $param);
    }

    if ($options & PARAM_HOST) {         // allow FQDN or IPv4 dotted quad
        preg_replace('/[^\.\d\w-]/','', $param ); // only allowed chars
        // match ipv4 dotted quad
        if (preg_match('/(\d{1,3})\.(\d{1,3})\.(\d{1,3})\.(\d{1,3})/',$param, $match)){
            // confirm values are ok
            if ( $match[0] > 255
                 || $match[1] > 255
                 || $match[3] > 255
                 || $match[4] > 255 ) {
                // hmmm, what kind of dotted quad is this?
                $param = '';
            }
        } elseif ( preg_match('/^[\w\d\.-]+$/', $param) // dots, hyphens, numbers
                   && !preg_match('/^[\.-]/',  $param) // no leading dots/hyphens
                   && !preg_match('/[\.-]$/',  $param) // no trailing dots/hyphens
                   ) {
            // all is ok - $param is respected
        } else {
            // all is not ok...
            $param='';
        }
    }

    if ($options & PARAM_URL) { // allow safe ftp, http, mailto urls

        include_once($CFG->dirroot . '/lib/validateurlsyntax.php');

        //
        // Parameters to validateurlsyntax()
        //
        // s? scheme is optional
        //   H? http optional
        //   S? https optional
        //   F? ftp   optional
        //   E? mailto optional
        // u- user section not allowed
        //   P- password not allowed
        // a? address optional
        //   I? Numeric IP address optional (can use IP or domain)
        //   p-  port not allowed -- restrict to default port
        // f? "file" path section optional
        //   q? query section optional
        //   r? fragment (anchor) optional
        //
        if (!empty($param) && validateUrlSyntax($param, 's?H?S?F?E?u-P-a?I?p-f?q?r?')) {
            // all is ok, param is respected
        } else {
            $param =''; // not really ok
        }
        $options ^= PARAM_URL; // Turn off the URL bit so that simple PARAM_URLs don't test true for PARAM_LOCALURL
    }

    if ($options & PARAM_LOCALURL) {
        // assume we passed the PARAM_URL test...
        // allow http absolute, root relative and relative URLs within wwwroot
        if (!empty($param)) {
            if (preg_match(':^/:', $param)) {
                // root-relative, ok!
            } elseif (preg_match('/^'.preg_quote($CFG->wwwroot, '/').'/i',$param)) {
                // absolute, and matches our wwwroot
            } else {
                // relative - let's make sure there are no tricks
                if (validateUrlSyntax($param, 's-u-P-a-p-f+q?r?')) {
                    // looks ok.
                } else {
                    $param = '';
                }
            }
        }
    }

    if ($options & PARAM_CLEANHTML) {
        $param = stripslashes($param);         // Remove any slashes 
        $param = clean_text($param);           // Sweep for scripts, etc
        $param = trim($param);                 // Sweep for scripts, etc
    }

    return $param;
}

/**
 * For security purposes, this function will check that the currently
 * given sesskey (passed as a parameter to the script or this function)
 * matches that of the current user.
 *
 * @param string $sesskey optionally provided sesskey
 * @return boolean
 */
function confirm_sesskey($sesskey=NULL) {
    global $USER;

    if (!empty($USER->ignoresesskey) || !empty($CFG->ignoresesskey)) {
        return true;
    }

    if (empty($sesskey)) {
        $sesskey = required_param('sesskey');  // Check script parameters
    }

    if (!isset($USER->sesskey)) {
        return false;
    }

    return ($USER->sesskey === $sesskey);
}


/**
 * Ensure that a variable is set
 *
 * If $var is undefined throw an error, otherwise return $var.
 * This function will soon be made obsolete by {@link required_param()}
 *
 * @param mixed $var the variable which may be unset
 * @param mixed $default the value to return if $var is unset
 */
function require_variable($var) {
    if (! isset($var)) {
        error('A required parameter was missing');
    }
}


/**
 * Ensure that a variable is set
 *
 * If $var is undefined set it (by reference), otherwise return $var.
 *
 * @param mixed $var the variable which may be unset
 * @param mixed $default the value to return if $var is unset
 */
function optional_variable(&$var, $default=0) {
    if (! isset($var)) {
        $var = $default;
    }
}

/**
 * Set a key in global configuration
 *
 * Set a key/value pair in both this session's {@link $CFG} global variable
 * and in the 'config' database table for future sessions.
 * 
 * Can also be used to update keys for plugin-scoped configs in config_plugin table. 
 * In that case it doesn't affect $CFG. 
 *
 * @param string $name the key to set
 * @param string $value the value to set
 * @param string $plugin (optional) the plugin scope
 * @uses $CFG
 * @return bool
 */
function set_config($name, $value, $plugin=NULL) {
/// No need for get_config because they are usually always available in $CFG

    global $CFG;

    if (empty($plugin)) {
        $CFG->$name = $value;  // So it's defined for this invocation at least
        
        if (get_field('config', 'name', 'name', $name)) {
            return set_field('config', 'value', $value, 'name', $name);
        } else {
            $config->name = $name;
            $config->value = $value;
            return insert_record('config', $config);
        }
    } else { // plugin scope
        if ($id = get_field('config_plugins', 'id', 'name', $name, 'plugin', $plugin)) {
            return set_field('config_plugins', 'value', $value, 'id', $id);
        } else {
            $config->plugin = $plugin;
            $config->name   = $name;
            $config->value  = $value;
            return insert_record('config_plugins', $config);
        }
    }
}

/**
 * Get configuration values from the global config table 
 * or the config_plugins table.
 *
 * If called with no parameters it will do the right thing
 * generating $CFG safely from the database without overwriting
 * existing values.  
 *
 * @param string $plugin 
 * @param string $name 
 * @uses $CFG
 * @return hash-like object or single value
 *
 */
function get_config($plugin=NULL, $name=NULL) {

    global $CFG;

    if (!empty($name)) { // the user is asking for a specific value
        if (!empty($plugin)) {
            return get_record('config_plugins', 'plugin' , $plugin, 'name', $name);
        } else {
            return get_record('config', 'name', $name);
        }
    }

    // the user is after a recordset
    if (!empty($plugin)) {
        if ($configs=get_records('config_plugins', 'plugin', $plugin, '', 'name,value')) {
            $configs = (array)$configs;
            $localcfg = array();
            foreach ($configs as $config) {
                $localcfg[$config->name] = $config->value;
            }
            return (object)$localcfg;
        } else {
            return false;
        }
    } else {
        // this was originally in setup.php
        if ($configs = get_records('config')) {
            $localcfg = (array)$CFG;
            foreach ($configs as $config) {
                if (!isset($localcfg[$config->name])) {
                    $localcfg[$config->name] = $config->value;
                } else {
                    if ($localcfg[$config->name] != $config->value ) { 
                        // complain if the DB has a different
                        // value than config.php does
                        error_log("\$CFG->{$config->name} in config.php ({$localcfg[$config->name]}) overrides database setting ({$config->value})");
                    }
                }
            }
            
            $localcfg = (object)$localcfg;
            return $localcfg;
        } else {
            // preserve $CFG if DB returns nothing or error
            return $CFG;
        }
        
    }
}


/**
 * Refresh current $USER session global variable with all their current preferences.
 * @uses $USER
 */
function reload_user_preferences() {

    global $USER;

    if(empty($USER) || empty($USER->id)) {
        return false;
    }

    unset($USER->preference);

    if ($preferences = get_records('user_preferences', 'userid', $USER->id)) {
        foreach ($preferences as $preference) {
            $USER->preference[$preference->name] = $preference->value;
        }
    } else {
            //return empty preference array to hold new values
            $USER->preference = array();
    }
}

/**
 * Sets a preference for the current user
 * Optionally, can set a preference for a different user object
 * @uses $USER
 * @todo Add a better description and include usage examples.
 * @param string $name The key to set as preference for the specified user
 * @param string $value The value to set forthe $name key in the specified user's record
 * @param int $userid A moodle user ID
 * @todo Add inline links to $USER and user functions in above line.
 * @return boolean
 */
function set_user_preference($name, $value, $otheruser=NULL) {

    global $USER;

    if (empty($otheruser)){
        if (!empty($USER) && !empty($USER->id)) {
            $userid = $USER->id;
        } else {
            return false;
        }
    } else {
        $userid = $otheruser;
    }

    if (empty($name)) {
        return false;
    }

    if ($preference = get_record('user_preferences', 'userid', $userid, 'name', $name)) {
        if (set_field('user_preferences', 'value', $value, 'id', $preference->id)) {
            if (empty($otheruser) and !empty($USER)) {
                $USER->preference[$name] = $value;
            }
            return true;
        } else {
            return false;
        }

    } else {
        $preference->userid = $userid;
        $preference->name   = $name;
        $preference->value  = (string)$value;
        if (insert_record('user_preferences', $preference)) {
            if (empty($otheruser) and !empty($USER)) {
                $USER->preference[$name] = $value;
            }
            return true;
        } else {
            return false;
        }
    }
}

/**
 * Unsets a preference completely by deleting it from the database
 * Optionally, can set a preference for a different user id
 * @uses $USER
 * @param string  $name The key to unset as preference for the specified user
 * @param int $userid A moodle user ID
 * @return boolean
 */
function unset_user_preference($name, $userid=NULL) {

    global $USER;

    if (empty($userid)){
        if(!empty($USER) && !empty($USER->id)) {
            $userid = $USER->id;
        }
        else {
            return false;
        }
    }

    //Delete the preference from $USER
    if (isset($USER->preference[$name])) {
        unset($USER->preference[$name]);
    }
    
    //Then from DB
    return delete_records('user_preferences', 'userid', $userid, 'name', $name);
}


/**
 * Sets a whole array of preferences for the current user
 * @param array $prefarray An array of key/value pairs to be set
 * @param int $userid A moodle user ID
 * @return boolean
 */
function set_user_preferences($prefarray, $userid=NULL) {

    global $USER;

    if (!is_array($prefarray) or empty($prefarray)) {
        return false;
    }

    if (empty($userid)){
        if (!empty($USER) && !empty($USER->id)) {
            $userid = NULL;  // Continue with the current user below
        } else {
            return false;    // No-one to set!
        }
    }

    $return = true;
    foreach ($prefarray as $name => $value) {
        // The order is important; if the test for return is done first, then
        // if one function call fails all the remaining ones will be "optimized away"
        $return = set_user_preference($name, $value, $userid) and $return;
    }
    return $return;
}

/**
 * If no arguments are supplied this function will return
 * all of the current user preferences as an array.
 * If a name is specified then this function
 * attempts to return that particular preference value.  If
 * none is found, then the optional value $default is returned,
 * otherwise NULL.
 * @param string $name Name of the key to use in finding a preference value
 * @param string $default Value to be returned if the $name key is not set in the user preferences
 * @param int $userid A moodle user ID
 * @uses $USER
 * @return string
 */
function get_user_preferences($name=NULL, $default=NULL, $userid=NULL) {

    global $USER;

    if (empty($userid)) {   // assume current user
        if (empty($USER->preference)) {
            return $default;              // Default value (or NULL)
        }
        if (empty($name)) {
            return $USER->preference;     // Whole array
        }
        if (!isset($USER->preference[$name])) {
            return $default;              // Default value (or NULL)
        }
        return $USER->preference[$name];  // The single value

    } else {
        $preference = get_records_menu('user_preferences', 'userid', $userid, 'name', 'name,value');

        if (empty($name)) {
            return $preference;
        }
        if (!isset($preference[$name])) {
            return $default;              // Default value (or NULL)
        }
        return $preference[$name];        // The single value
    }
}


/// FUNCTIONS FOR HANDLING TIME ////////////////////////////////////////////

/**
 * Given date parts in user time produce a GMT timestamp.
 *
 * @param int $year The year part to create timestamp of.
 * @param int $month The month part to create timestamp of.
 * @param int $day The day part to create timestamp of.
 * @param int $hour The hour part to create timestamp of.
 * @param int $minute The minute part to create timestamp of.
 * @param int $second The second part to create timestamp of.
 * @param float $timezone
 * @return int timestamp
 * @todo Finish documenting this function
 */
function make_timestamp($year, $month=1, $day=1, $hour=0, $minute=0, $second=0, $timezone=99, $applydst=true) {

    $timezone = get_user_timezone_offset($timezone);

    if (abs($timezone) > 13) {
        $time = mktime((int)$hour,(int)$minute,(int)$second,(int)$month,(int)$day,(int)$year);
    } else {
        $time = gmmktime((int)$hour,(int)$minute,(int)$second,(int)$month,(int)$day,(int)$year);
        $time = usertime($time, $timezone);
        if($applydst) {
            $time -= dst_offset_on($time);
        }
    }

    return $time;

}

/**
 * Given an amount of time in seconds, returns string
 * formatted nicely as months, days, hours etc as needed
 *
 * @uses MINSECS
 * @uses HOURSECS
 * @uses DAYSECS
 * @param int $totalsecs ?
 * @param array $str ?
 * @return string
 * @todo Finish documenting this function
 */
 function format_time($totalsecs, $str=NULL) {

    $totalsecs = abs($totalsecs);

    if (!$str) {  // Create the str structure the slow way
        $str->day   = get_string('day');
        $str->days  = get_string('days');
        $str->hour  = get_string('hour');
        $str->hours = get_string('hours');
        $str->min   = get_string('min');
        $str->mins  = get_string('mins');
        $str->sec   = get_string('sec');
        $str->secs  = get_string('secs');
    }

    $days      = floor($totalsecs/DAYSECS);
    $remainder = $totalsecs - ($days*DAYSECS);
    $hours     = floor($remainder/HOURSECS);
    $remainder = $remainder - ($hours*HOURSECS);
    $mins      = floor($remainder/MINSECS);
    $secs      = $remainder - ($mins*MINSECS);

    $ss = ($secs == 1)  ? $str->sec  : $str->secs;
    $sm = ($mins == 1)  ? $str->min  : $str->mins;
    $sh = ($hours == 1) ? $str->hour : $str->hours;
    $sd = ($days == 1)  ? $str->day  : $str->days;

    $odays = '';
    $ohours = '';
    $omins = '';
    $osecs = '';

    if ($days)  $odays  = $days .' '. $sd;
    if ($hours) $ohours = $hours .' '. $sh;
    if ($mins)  $omins  = $mins .' '. $sm;
    if ($secs)  $osecs  = $secs .' '. $ss;

    if ($days)  return $odays .' '. $ohours;
    if ($hours) return $ohours .' '. $omins;
    if ($mins)  return $omins .' '. $osecs;
    if ($secs)  return $osecs;
    return get_string('now');
}

/**
 * Returns a formatted string that represents a date in user time
 * <b>WARNING: note that the format is for strftime(), not date().</b>
 * Because of a bug in most Windows time libraries, we can't use
 * the nicer %e, so we have to use %d which has leading zeroes.
 * A lot of the fuss in the function is just getting rid of these leading
 * zeroes as efficiently as possible.
 *
 * If parameter fixday = true (default), then take off leading
 * zero from %d, else mantain it.
 *
 * @uses HOURSECS
 * @param  int $date timestamp in GMT
 * @param string $format strftime format
 * @param float $timezone
 * @param boolean $fixday If true (default) then the leading
 * zero from %d is removed. If false then the leading zero is mantained.
 * @return string
 */
function userdate($date, $format='', $timezone=99, $fixday = true) {

    global $CFG;

    static $strftimedaydatetime;

    if ($format == '') {
        if (empty($strftimedaydatetime)) {
            $strftimedaydatetime = get_string('strftimedaydatetime');
        }
        $format = $strftimedaydatetime;
    }

    if (!empty($CFG->nofixday)) {  // Config.php can force %d not to be fixed.
        $fixday = false;
    } else if ($fixday) {
        $formatnoday = str_replace('%d', 'DD', $format);
        $fixday = ($formatnoday != $format);
    }

    $date += dst_offset_on($date);

    $timezone = get_user_timezone_offset($timezone);

    if (abs($timezone) > 13) {   /// Server time
        if ($fixday) {
            $datestring = strftime($formatnoday, $date);
            $daystring  = str_replace(' 0', '', strftime(' %d', $date));
            $datestring = str_replace('DD', $daystring, $datestring);
        } else {
            $datestring = strftime($format, $date);
        }
    } else {
        $date += (int)($timezone * 3600);
        if ($fixday) {
            $datestring = gmstrftime($formatnoday, $date);
            $daystring  = str_replace(' 0', '', gmstrftime(' %d', $date));
            $datestring = str_replace('DD', $daystring, $datestring);
        } else {
            $datestring = gmstrftime($format, $date);
        }
    }

    return $datestring;
}

/**
 * Given a $time timestamp in GMT (seconds since epoch),
 * returns an array that represents the date in user time
 *
 * @uses HOURSECS
 * @param int $time Timestamp in GMT
 * @param float $timezone
 * @return array An array that represents the date in user time
 * @todo Finish documenting this function
 */
function usergetdate($time, $timezone=99) {

    $timezone = get_user_timezone_offset($timezone);

    if (abs($timezone) > 13) {    // Server time
        return getdate($time);
    }

    // There is no gmgetdate so we use gmdate instead
    $time += dst_offset_on($time);
    $time += intval((float)$timezone * HOURSECS);

    $datestring = gmstrftime('%S_%M_%H_%d_%m_%Y_%w_%j_%A_%B', $time);

    list(
        $getdate['seconds'],
        $getdate['minutes'],
        $getdate['hours'],
        $getdate['mday'],
        $getdate['mon'],
        $getdate['year'],
        $getdate['wday'],
        $getdate['yday'],
        $getdate['weekday'],
        $getdate['month']
    ) = explode('_', $datestring);

    return $getdate;
}

/**
 * Given a GMT timestamp (seconds since epoch), offsets it by
 * the timezone.  eg 3pm in India is 3pm GMT - 7 * 3600 seconds
 *
 * @uses HOURSECS
 * @param  int $date Timestamp in GMT
 * @param float $timezone
 * @return int
 */
function usertime($date, $timezone=99) {

    $timezone = get_user_timezone_offset($timezone);

    if (abs($timezone) > 13) {
        return $date;
    }
    return $date - (int)($timezone * HOURSECS);
}

/**
 * Given a time, return the GMT timestamp of the most recent midnight
 * for the current user.
 *
 * @param int $date Timestamp in GMT
 * @param float $timezone ?
 * @return ?
 */
function usergetmidnight($date, $timezone=99) {

    $timezone = get_user_timezone_offset($timezone);
    $userdate = usergetdate($date, $timezone);

    // Time of midnight of this user's day, in GMT
    return make_timestamp($userdate['year'], $userdate['mon'], $userdate['mday'], 0, 0, 0, $timezone);

}

/**
 * Returns a string that prints the user's timezone
 *
 * @param float $timezone The user's timezone
 * @return string
 */
function usertimezone($timezone=99) {

    $tz = get_user_timezone($timezone);

    if (!is_float($tz)) {
        return $tz;
    }

    if(abs($tz) > 13) { // Server time
        return get_string('serverlocaltime');
    }

    if($tz == intval($tz)) {
        // Don't show .0 for whole hours
        $tz = intval($tz);
    }

    if($tz == 0) {
        return 'GMT';
    }
    else if($tz > 0) {
        return 'GMT+'.$tz;
    }
    else {
        return 'GMT'.$tz;
    }
        
}

/**
 * Returns a float which represents the user's timezone difference from GMT in hours
 * Checks various settings and picks the most dominant of those which have a value
 *
 * @uses $CFG
 * @uses $USER
 * @param float $tz The user's timezone
 * @return int
 */
function get_user_timezone_offset($tz = 99) {

    global $USER, $CFG;

    $tz = get_user_timezone($tz);

    if (is_float($tz)) {
        return $tz;
    } else {
        $tzrecord = get_timezone_record($tz);
        if (empty($tzrecord)) {
            return 99.0;
        }
        return (float)$tzrecord->gmtoff / HOURMINS;
    }
}

function get_user_timezone($tz = 99) {
    global $USER, $CFG;

    $timezones = array(
        $tz,
        isset($CFG->forcetimezone) ? $CFG->forcetimezone : 99,
        isset($USER->timezone) ? $USER->timezone : 99,
        isset($CFG->timezone) ? $CFG->timezone : 99,
        );

    $tz = 99;

    while(($tz == '' || $tz == 99) && $next = each($timezones)) {
        $tz = $next['value'];
    }

    return is_numeric($tz) ? (float) $tz : $tz;
}

function get_timezone_record($timezonename) {
    global $CFG, $db;
    static $cache = NULL;

    if ($cache === NULL) {
        $cache = array();
    }

    if (isset($cache[$timezonename])) {
        return $cache[$timezonename];
    }

    return $cache[$timezonename] = get_record_sql('SELECT * FROM '.$CFG->prefix.'timezone
                                      WHERE name = '.$db->qstr($timezonename).' ORDER BY year DESC', true);
}

function calculate_user_dst_table($from_year = NULL, $to_year = NULL) {
    global $CFG, $SESSION;

    $usertz = get_user_timezone();

    if (is_float($usertz)) {
        // Trivial timezone, no DST
        return false;
    }

    if (!empty($SESSION->dst_offsettz) && $SESSION->dst_offsettz != $usertz) {
        // We have precalculated values, but the user's effective TZ has changed in the meantime, so reset
        unset($SESSION->dst_offsets);
        unset($SESSION->dst_range);
    }

    if (!empty($SESSION->dst_offsets) && empty($from_year) && empty($to_year)) {
        // Repeat calls which do not request specific year ranges stop here, we have already calculated the table
        // This will be the return path most of the time, pretty light computationally
        return true;
    }

    // Reaching here means we either need to extend our table or create it from scratch

    // Remember which TZ we calculated these changes for
    $SESSION->dst_offsettz = $usertz;

    if(empty($SESSION->dst_offsets)) {
        // If we 're creating from scratch, put the two guard elements in there
        $SESSION->dst_offsets = array(1 => NULL, 0 => NULL);
    }
    if(empty($SESSION->dst_range)) {
        // If creating from scratch
        $from = max((empty($from_year) ? intval(date('Y')) - 3 : $from_year), 1971);
        $to   = min((empty($to_year)   ? intval(date('Y')) + 3 : $to_year),   2035);

        // Fill in the array with the extra years we need to process
        $yearstoprocess = array();
        for($i = $from; $i <= $to; ++$i) {
            $yearstoprocess[] = $i;
        }

        // Take note of which years we have processed for future calls
        $SESSION->dst_range = array($from, $to);
    }
    else {
        // If needing to extend the table, do the same
        $yearstoprocess = array();

        $from = max((empty($from_year) ? $SESSION->dst_range[0] : $from_year), 1971);
        $to   = min((empty($to_year)   ? $SESSION->dst_range[1] : $to_year),   2035);

        if($from < $SESSION->dst_range[0]) {
            // Take note of which years we need to process and then note that we have processed them for future calls
            for($i = $from; $i < $SESSION->dst_range[0]; ++$i) {
                $yearstoprocess[] = $i;
            }
            $SESSION->dst_range[0] = $from;
        }
        if($to > $SESSION->dst_range[1]) {
            // Take note of which years we need to process and then note that we have processed them for future calls
            for($i = $SESSION->dst_range[1] + 1; $i <= $to; ++$i) {
                $yearstoprocess[] = $i;
            }
            $SESSION->dst_range[1] = $to;
        }
    }

    if(empty($yearstoprocess)) {
        // This means that there was a call requesting a SMALLER range than we have already calculated
        return true;
    }

    // From now on, we know that the array has at least the two guard elements, and $yearstoprocess has the years we need
    // Also, the array is sorted in descending timestamp order!

    // Get DB data
    $presetrecords = get_records('timezone', 'name', $usertz, 'year DESC', 'year, gmtoff, dstoff, dst_month, dst_startday, dst_weekday, dst_skipweeks, dst_time, std_month, std_startday, std_weekday, std_skipweeks, std_time');
    if(empty($presetrecords)) {
        return false;
    }

    // Remove ending guard (first element of the array)
    reset($SESSION->dst_offsets);
    unset($SESSION->dst_offsets[key($SESSION->dst_offsets)]);

    // Add all required change timestamps
    foreach($yearstoprocess as $y) {
        // Find the record which is in effect for the year $y
        foreach($presetrecords as $year => $preset) {
            if($year <= $y) {
                break;
            }
        }

        $changes = dst_changes_for_year($y, $preset);

        if($changes === NULL) {
            continue;
        }
        if($changes['dst'] != 0) {
            $SESSION->dst_offsets[$changes['dst']] = $preset->dstoff * MINSECS;
        }
        if($changes['std'] != 0) {
            $SESSION->dst_offsets[$changes['std']] = 0;
        }
    }

    // Put in a guard element at the top
    $maxtimestamp = max(array_keys($SESSION->dst_offsets));
    $SESSION->dst_offsets[($maxtimestamp + DAYSECS)] = NULL; // DAYSECS is arbitrary, any "small" number will do

    // Sort again
    krsort($SESSION->dst_offsets);

    return true;
}

function dst_changes_for_year($year, $timezone) {

    if($timezone->dst_startday == 0 && $timezone->dst_weekday == 0 && $timezone->std_startday == 0 && $timezone->std_weekday == 0) {
        return NULL;
    }

    $monthdaydst = find_day_in_month($timezone->dst_startday, $timezone->dst_weekday, $timezone->dst_month, $year);
    $monthdaystd = find_day_in_month($timezone->std_startday, $timezone->std_weekday, $timezone->std_month, $year);

    list($dst_hour, $dst_min) = explode(':', $timezone->dst_time);
    list($std_hour, $std_min) = explode(':', $timezone->std_time);

    $timedst = make_timestamp($year, $timezone->dst_month, $monthdaydst, 0, 0, 0, 99, false);
    $timestd = make_timestamp($year, $timezone->std_month, $monthdaystd, 0, 0, 0, 99, false);

    // Instead of putting hour and minute in make_timestamp(), we add them afterwards.
    // This has the advantage of being able to have negative values for hour, i.e. for timezones
    // where GMT time would be in the PREVIOUS day than the local one on which DST changes.

    $timedst += $dst_hour * HOURSECS + $dst_min * MINSECS;
    $timestd += $std_hour * HOURSECS + $std_min * MINSECS;

    return array('dst' => $timedst, 0 => $timedst, 'std' => $timestd, 1 => $timestd);
}

// $time must NOT be compensated at all, it has to be a pure timestamp
function dst_offset_on($time) {
    global $SESSION;

    if(!calculate_user_dst_table() || empty($SESSION->dst_offsets)) {
        return 0;
    }

    reset($SESSION->dst_offsets);
    while(list($from, $offset) = each($SESSION->dst_offsets)) {
        if($from <= $time) {
            break;
        }
    }

    // This is the normal return path
    if($offset !== NULL) {
        return $offset;
    }

    // Reaching this point means we haven't calculated far enough, do it now:
    // Calculate extra DST changes if needed and recurse. The recursion always
    // moves toward the stopping condition, so will always end.

    if($from == 0) {
        // We need a year smaller than $SESSION->dst_range[0]
        if($SESSION->dst_range[0] == 1971) {
            return 0;
        }
        calculate_user_dst_table($SESSION->dst_range[0] - 5, NULL);
        return dst_offset_on($time);
    }
    else {
        // We need a year larger than $SESSION->dst_range[1]
        if($SESSION->dst_range[1] == 2035) {
            return 0;
        }
        calculate_user_dst_table(NULL, $SESSION->dst_range[1] + 5);
        return dst_offset_on($time);
    }
}

function find_day_in_month($startday, $weekday, $month, $year) {

    $daysinmonth = days_in_month($month, $year);

    if($weekday == -1) {
        // Don't care about weekday, so return:
        //    abs($startday) if $startday != -1
        //    $daysinmonth otherwise
        return ($startday == -1) ? $daysinmonth : abs($startday);
    }

    // From now on we 're looking for a specific weekday

    // Give "end of month" its actual value, since we know it
    if($startday == -1) {
        $startday = -1 * $daysinmonth;
    }

    // Starting from day $startday, the sign is the direction

    if($startday < 1) {

        $startday = abs($startday);
        $lastmonthweekday  = strftime('%w', mktime(12, 0, 0, $month, $daysinmonth, $year, 0));

        // This is the last such weekday of the month
        $lastinmonth = $daysinmonth + $weekday - $lastmonthweekday;
        if($lastinmonth > $daysinmonth) {
            $lastinmonth -= 7;
        }

        // Find the first such weekday <= $startday
        while($lastinmonth > $startday) {
            $lastinmonth -= 7;
        }

        return $lastinmonth;
        
    }
    else {

        $indexweekday = strftime('%w', mktime(12, 0, 0, $month, $startday, $year, 0));

        $diff = $weekday - $indexweekday;
        if($diff < 0) {
            $diff += 7;
        }

        // This is the first such weekday of the month equal to or after $startday
        $firstfromindex = $startday + $diff;

        return $firstfromindex;

    }
}

function days_in_month($month, $year) {
   return intval(date('t', mktime(12, 0, 0, $month, 1, $year, 0)));
}

function dayofweek($day, $month, $year) {
    // I wonder if this is any different from
    // strftime('%w', mktime(12, 0, 0, $month, $daysinmonth, $year, 0));
    return intval(date('w', mktime(12, 0, 0, $month, $day, $year, 0)));
}

/// USER AUTHENTICATION AND LOGIN ////////////////////////////////////////

// Makes sure that $USER->sesskey exists, if $USER itself exists. It sets a new sesskey
// if one does not already exist, but does not overwrite existing sesskeys. Returns the
// sesskey string if $USER exists, or boolean false if not.
function sesskey() {
    global $USER;

    if(!isset($USER)) {
        return false;
    }

    if (empty($USER->sesskey)) {
        $USER->sesskey = random_string(10);
    }

    return $USER->sesskey;
}

/**
 * This function checks that the current user is logged in and has the
 * required privileges
 *
 * This function checks that the current user is logged in, and optionally
 * whether they are allowed to be in a particular course and view a particular
 * course module.
 * If they are not logged in, then it redirects them to the site login unless
 * $autologinguest is set and {@link $CFG}->autologinguests is set to 1 in which
 * case they are automatically logged in as guests.
 * If $courseid is given and the user is not enrolled in that course then the
 * user is redirected to the course enrolment page.
 * If $cm is given and the coursemodule is hidden and the user is not a teacher
 * in the course then the user is redirected to the course home page.
 *
 * @uses $CFG
 * @uses $SESSION
 * @uses $USER
 * @uses $FULLME
 * @uses SITEID
 * @uses $MoodleSession
 * @param int $courseid id of the course
 * @param boolean $autologinguest
 * @param $cm course module object
 */
function require_login($courseid=0, $autologinguest=true, $cm=null) {

    global $CFG, $SESSION, $USER, $FULLME, $MoodleSession;

    // First check that the user is logged in to the site.
    if (! (isset($USER->loggedin) and $USER->confirmed and ($USER->site == $CFG->wwwroot)) ) { // They're not
        $SESSION->wantsurl = $FULLME;
        if (!empty($_SERVER['HTTP_REFERER'])) {
            $SESSION->fromurl  = $_SERVER['HTTP_REFERER'];
        }
        $USER = NULL;
        if ($autologinguest and $CFG->autologinguests and $courseid and ($courseid == SITEID or get_field('course','guest','id',$courseid)) ) {
            $loginguest = '?loginguest=true';
        } else {
            $loginguest = '';
        }
        if (empty($CFG->loginhttps)) {
            redirect($CFG->wwwroot .'/login/index.php'. $loginguest);
        } else {
            $wwwroot = str_replace('http','https', $CFG->wwwroot);
            redirect($wwwroot .'/login/index.php'. $loginguest);
        }
        exit;
    }

    // check whether the user should be changing password
    // reload_user_preferences();    // Why is this necessary?  Seems wasteful.  - MD
    if (!empty($USER->preference['auth_forcepasswordchange'])){
        if (is_internal_auth() || $CFG->{'auth_'.$USER->auth.'_stdchangepassword'}){
            $SESSION->wantsurl = $FULLME;
            redirect($CFG->wwwroot .'/login/change_password.php');
        } elseif($CFG->changepassword) {
            redirect($CFG->changepassword);
        } else {
            error('You cannot proceed without changing your password.
                   However there is no available page for changing it.
                   Please contact your Moodle Administrator.');
        }
    }
    // Check that the user account is properly set up
    if (user_not_fully_set_up($USER)) {
        $SESSION->wantsurl = $FULLME;
        redirect($CFG->wwwroot .'/user/edit.php?id='. $USER->id .'&amp;course='. SITEID);
    }

    // Make sure current IP matches the one for this session (if required)
    if (!empty($CFG->tracksessionip)) {
        if ($USER->sessionIP != md5(getremoteaddr())) {
            error(get_string('sessionipnomatch', 'error'));
        }
    }

    // Make sure the USER has a sesskey set up.  Used for checking script parameters.
    sesskey();

    // Check that the user has agreed to a site policy if there is one
    if (!empty($CFG->sitepolicy)) {
        if (!$USER->policyagreed) {
            $SESSION->wantsurl = $FULLME;
            redirect($CFG->wwwroot .'/user/policy.php');
        }
    }

    // If the site is currently under maintenance, then print a message
    if (!isadmin()) {
        if (file_exists($CFG->dataroot.'/'.SITEID.'/maintenance.html')) {
            print_maintenance_message();
            exit;
        }
    }

    // Next, check if the user can be in a particular course
    if ($courseid) {
        if ($courseid == SITEID) { // Anyone can be in the site course
            if (isset($cm) and !$cm->visible and !isteacher(SITEID)) { // Not allowed to see module, send to course page
                redirect($CFG->wwwroot.'/course/view.php?id='.$cm->course, get_string('activityiscurrentlyhidden'));
            }
            return;
        }
        if (!empty($USER->student[$courseid]) or !empty($USER->teacher[$courseid]) or !empty($USER->admin)) {
            if (isset($USER->realuser)) {   // Make sure the REAL person can also access this course
                if (!isteacher($courseid, $USER->realuser)) {
                    print_header();
                    notice(get_string('studentnotallowed', '', fullname($USER, true)), $CFG->wwwroot .'/');
                }
            }
            if (isset($cm) and !$cm->visible and !isteacher($courseid)) { // Not allowed to see module, send to course page
                redirect($CFG->wwwroot.'/course/view.php?id='.$cm->course, get_string('activityiscurrentlyhidden'));
            }
            return;   // user is a member of this course.
        }
        
        if (! $course = get_record('course', 'id', $courseid)) { 
            error('That course doesn\'t exist'); 
        } 
        
        if (!$course->visible) { 
            print_header();
            notice(get_string('coursehidden'), $CFG->wwwroot .'/');
        }
        
        if ($USER->username == 'guest') {
            switch ($course->guest) {
                case 0: // Guests not allowed
                    print_header();
                    notice(get_string('guestsnotallowed', '', $course->fullname), "$CFG->wwwroot/login/index.php");
                    break;
                case 1: // Guests allowed
                    if (isset($cm) and !$cm->visible) { // Not allowed to see module, send to course page
                        redirect($CFG->wwwroot.'/course/view.php?id='.$cm->course, get_string('activityiscurrentlyhidden'));
                    }
                    return;
                case 2: // Guests allowed with key (drop through)
                    break;
            }
        }

        //User is not enrolled in the course, wants to access course content
        //as a guest, and course setting allow unlimited guest access
        //Code cribbed from course/loginas.php
        if (strstr($FULLME,"username=guest") && ($course->guest==1)) {
            $realuser = $USER->id;
            $realname = fullname($USER, true);
            $USER = guest_user();
            $USER->loggedin = true;
            $USER->site = $CFG->wwwroot;
            $USER->realuser = $realuser;
            $USER->sessionIP = md5(getremoteaddr());   // Store the current IP in the session
            if (isset($SESSION->currentgroup)) {    // Remember current cache setting for later
                $SESSION->oldcurrentgroup = $SESSION->currentgroup;
                unset($SESSION->currentgroup);
            }
            $guest_name = fullname($USER, true);
            add_to_log($course->id, "course", "loginas", "../user/view.php?id=$course->id&$USER->id$", "$realname -> $guest_name");
            if (isset($cm) and !$cm->visible) { // Not allowed to see module, send to course page
                redirect($CFG->wwwroot.'/course/view.php?id='.$cm->course, get_string('activityiscurrentlyhidden'));
            }
            return;
        }

        // Currently not enrolled in the course, so see if they want to enrol
        $SESSION->wantsurl = $FULLME;
        redirect($CFG->wwwroot .'/course/enrol.php?id='. $courseid);
        die;
    }
}

/**
 * This is a weaker version of {@link require_login()} which only requires login
 * when called from within a course rather than the site page, unless
 * the forcelogin option is turned on.
 *
 * @uses $CFG
 * @param object $course The course object in question
 * @param boolean $autologinguest Allow autologin guests if that is wanted
 * @param object $cm Course activity module if known
 */
function require_course_login($course, $autologinguest=true, $cm=null) {
    global $CFG;
    if (!empty($CFG->forcelogin)) {
        require_login();
    }
    if ($course->id != SITEID) {
        require_login($course->id, $autologinguest, $cm);
    }
}

/**
 * Modify the user table by setting the currently logged in user's
 * last login to now.
 *
 * @uses $USER
 * @return boolean
 */
function update_user_login_times() {
    global $USER;

    $USER->lastlogin = $user->lastlogin = $USER->currentlogin;
    $USER->currentlogin = $user->lastaccess = $user->currentlogin = time();

    $user->id = $USER->id;

    return update_record('user', $user);
}

/**
 * Determines if a user has completed setting up their account.
 *
 * @param user $user A {@link $USER} object to test for the existance of a valid name and email
 * @return boolean
 */
function user_not_fully_set_up($user) {
    return ($user->username != 'guest' and (empty($user->firstname) or empty($user->lastname) or empty($user->email) or over_bounce_threshold($user)));
}

function over_bounce_threshold($user) {

    global $CFG;

    if (empty($CFG->handlebounces)) {
        return false;
    }
    // set sensible defaults
    if (empty($CFG->minbounces)) {
        $CFG->minbounces = 10;
    }
    if (empty($CFG->bounceratio)) {
        $CFG->bounceratio = .20;
    }
    $bouncecount = 0;
    $sendcount = 0;
    if ($bounce = get_record('user_preferences','userid',$user->id,'name','email_bounce_count')) {
        $bouncecount = $bounce->value;
    }
    if ($send = get_record('user_preferences','userid',$user->id,'name','email_send_count')) {
        $sendcount = $send->value;
    }
    return ($bouncecount >= $CFG->minbounces && $bouncecount/$sendcount >= $CFG->bounceratio);
}

/**
 * @param $user - object containing an id
 * @param $reset - will reset the count to 0
 */
function set_send_count($user,$reset=false) {
    if ($pref = get_record('user_preferences','userid',$user->id,'name','email_send_count')) {
        $pref->value = (!empty($reset)) ? 0 : $pref->value+1;
        update_record('user_preferences',$pref);
    }
    else if (!empty($reset)) { // if it's not there and we're resetting, don't bother.
        // make a new one
        $pref->name = 'email_send_count';
        $pref->value = 1;
        $pref->userid = $user->id;
        insert_record('user_preferences',$pref, false);
    }
}

/**
* @param $user - object containing an id
 * @param $reset - will reset the count to 0
 */
function set_bounce_count($user,$reset=false) {
    if ($pref = get_record('user_preferences','userid',$user->id,'name','email_bounce_count')) {
        $pref->value = (!empty($reset)) ? 0 : $pref->value+1;
        update_record('user_preferences',$pref);
    }
    else if (!empty($reset)) { // if it's not there and we're resetting, don't bother.
        // make a new one
        $pref->name = 'email_bounce_count';
        $pref->value = 1;
        $pref->userid = $user->id;
        insert_record('user_preferences',$pref, false);
    }
}

/**
 * Keeps track of login attempts
 *
 * @uses $SESSION
 */
function update_login_count() {

    global $SESSION;

    $max_logins = 10;

    if (empty($SESSION->logincount)) {
        $SESSION->logincount = 1;
    } else {
        $SESSION->logincount++;
    }

    if ($SESSION->logincount > $max_logins) {
        unset($SESSION->wantsurl);
        error(get_string('errortoomanylogins'));
    }
}

/**
 * Resets login attempts
 *
 * @uses $SESSION
 */
function reset_login_count() {
    global $SESSION;

    $SESSION->logincount = 0;
}

/**
 * check_for_restricted_user
 *
 * @uses $CFG
 * @uses $USER
 * @param string $username ?
 * @param string $redirect ?
 * @todo Finish documenting this function
 */
function check_for_restricted_user($username=NULL, $redirect='') {
    global $CFG, $USER;

    if (!$username) {
        if (!empty($USER->username)) {
            $username = $USER->username;
        } else {
            return false;
        }
    }

    if (!empty($CFG->restrictusers)) {
        $names = explode(',', $CFG->restrictusers);
        if (in_array($username, $names)) {
            error(get_string('restricteduser', 'error', fullname($USER)), $redirect);
        }
    }
}

function is_restricted_user($username){
    global $CFG;
    
    if (!empty($CFG->restrictusers)) {
        $names = explode(',', $CFG->restrictusers);
        if (in_array($username, $names)) {
            return true;
        }
    }
    return false;
}

function sync_metacourses() {

    global $CFG;

    if (!$courses = get_records_sql("SELECT DISTINCT parent_course,1 FROM {$CFG->prefix}course_meta")) {
        return;
    }

    foreach ($courses as $course) {
        sync_metacourse($course->parent_course);
    }
}


/**
 * Goes through all enrolment records for the courses inside the metacourse and sync with them.
 */

function sync_metacourse($metacourseid) {

    global $CFG;

    if (!$metacourse = get_record("course","id",$metacourseid)) {
        return false;
    }

    if (count_records('course_meta','parent_course',$metacourseid) == 0) {
        // if there are no child courses for this meta course, nuke the enrolments
        if ($enrolments = get_records('user_students','course',$metacourseid,'','userid,1')) {
            foreach ($enrolments as $enrolment) {
                unenrol_student($enrolment->userid,$metacourseid);
            }
        }
        return true;
    }

    // first get the list of child courses
    $c_courses = get_records('course_meta','parent_course',$metacourseid);
    $instr = '';
    foreach ($c_courses as $c) {
        $instr .= $c->child_course.',';
    }
    $instr = substr($instr,0,-1);

    // now get the list of valid enrolments in the child courses
    $sql = 'SELECT DISTINCT userid,1 FROM '.$CFG->prefix.'user_students WHERE course IN ('.$instr.')';
    $enrolments = get_records_sql($sql);
    
    // put it into a nice array we can happily use array_diff on.
    $ce = array();
    if (!empty($enrolments)) {
        foreach ($enrolments as $en) {
            $ce[] = $en->userid;
        }
    }

    // now get the list of current enrolments in the meta course.
    $sql = 'SELECT userid,1 FROM '.$CFG->prefix.'user_students WHERE course = '.$metacourseid;
    $enrolments = get_records_sql($sql);

    $me = array();
    if (!empty($enrolments)) {
        foreach ($enrolments as $en) {
            $me[] = $en->userid;
        }
    }

    $enrolmentstodelete = array_diff($me,$ce);
    $userstoadd = array_diff($ce,$me);

    foreach ($enrolmentstodelete as $userid) {
        unenrol_student($userid,$metacourseid);
    }
    foreach ($userstoadd as $userid) {
        enrol_student($userid,$metacourseid,0,0,'metacourse');
    }
    
    // and next make sure that we have the right start time and end time (ie max and min) for them all.
    if ($enrolments = get_records('user_students','course',$metacourseid,'','id,userid')) {
        foreach ($enrolments as $enrol) {
            if ($maxmin = get_record_sql("SELECT min(timestart) AS timestart, max(timeend) AS timeend
               FROM {$CFG->prefix}user_students u,
                    {$CFG->prefix}course_meta mc 
               WHERE u.course = mc.child_course 
               AND userid = $enrol->userid
               AND mc.parent_course = $metacourseid")) {
                $enrol->timestart = $maxmin->timestart;
                $enrol->timeend = $maxmin->timeend;
                $enrol->enrol = 'metacourse'; // just in case it wasn't there earlier.
                update_record('user_students',$enrol);
            }
        }
    }
    return true;

}

/**
 * Adds a record to the metacourse table and calls sync_metacoures
 */
function add_to_metacourse ($metacourseid, $courseid) {

    if (!$metacourse = get_record("course","id",$metacourseid)) {
        return false;
    }

    if (!$course = get_record("course","id",$courseid)) {
        return false;
    }

    if (!$record = get_record("course_meta","parent_course",$metacourseid,"child_course",$courseid)) {
        $rec->parent_course = $metacourseid;
        $rec->child_course = $courseid;
        if (!insert_record('course_meta',$rec)) {
            return false;
        }
        return sync_metacourse($metacourseid);
    }
    return true;

}

/**
 * Removes the record from the metacourse table and calls sync_metacourse
 */
function remove_from_metacourse($metacourseid, $courseid) {

    if (delete_records('course_meta','parent_course',$metacourseid,'child_course',$courseid)) {
        return sync_metacourse($metacourseid);
    }
    return false;
}


/**
 * Determines if a user is currently logged in
 *
 * @uses $USER
 * @return boolean
 */
function isloggedin() {
    global $USER;

    return (!empty($USER->id));
}


/**
 * Determines if a user an admin
 *
 * @uses $USER
 * @param int $userid The id of the user as is found in the 'user' table
 * @staticvar array $admin ?
 * @staticvar array $nonadmins ?
 * @return boolean
 * @todo Complete documentation for this function
 */
function isadmin($userid=0) {
    global $USER;
    static $admins, $nonadmins;

    if (!isset($admins)) {
        $admins = array();
        $nonadmins = array();
    }

    if (!$userid){
        if (empty($USER->id)) {
            return false;
        }
        $userid = $USER->id;
    }

    if (!empty($USER->id) and ($userid == $USER->id)) {  // Check session cache
        return !empty($USER->admin);
    }

    if (in_array($userid, $admins)) {
        return true;
    } else if (in_array($userid, $nonadmins)) {
        return false;
    } else if (record_exists('user_admins', 'userid', $userid)){
        $admins[] = $userid;
        return true;
    } else {
        $nonadmins[] = $userid;
        return false;
    }
}

/**
 * Determines if a user is a teacher (or better)
 *
 * @uses $USER
 * @param int $courseid The id of the course that is being viewed, if any
 * @param int $userid The id of the user that is being tested against. Set this to 0 if you would just like to test against the currently logged in user.
 * @param boolean $includeadmin If true this function will return true when it encounters an admin user.
 * @return boolean
 * @todo Finish documenting this function
 */
function isteacher($courseid=0, $userid=0, $includeadmin=true) {
/// Is the user able to access this course as a teacher?
    global $USER, $CFG;

    if (empty($userid)) {                           // we are relying on $USER
        if (empty($USER) or empty($USER->id)) {     // not logged in so can't be a teacher
            return false;
        }
        if (!empty($USER->teacher) and $courseid) {   // look in session cache
            if (!empty($USER->teacher[$courseid])) {  // Explicitly a teacher, good
                return true;
            }
        }
        $userid = $USER->id;                        // we need to make further checks
    }

    if ($includeadmin and isadmin($userid)) {   // admins can do anything the teacher can
        return true;
    }

    if (empty($courseid)) {                     // should not happen, but we handle it
        if (isadmin() or $CFG->debug > 7) {
            notify('Coding error: isteacher() should not be used without a valid course id '.
                   'as argument.  Please notify the developer for this module.');
        }
        return isteacherinanycourse($userid, $includeadmin);
    }

/// Last resort, check the database

    return record_exists('user_teachers', 'userid', $userid, 'course', $courseid);
}

/**
 * Determines if a user is a teacher in any course, or an admin
 *
 * @uses $USER
 * @param int $userid The id of the user that is being tested against. Set this to 0 if you would just like to test against the currently logged in user.
 * @param boolean $includeadmin If true this function will return true when it encounters an admin user.
 * @return boolean
 * @todo Finish documenting this function
 */
function isteacherinanycourse($userid=0, $includeadmin=true) {
    global $USER;

    if (empty($userid)) {
        if (empty($USER) or empty($USER->id)) {
            return false;
        }
        if (!empty($USER->teacher)) {   // look in session cache
            return true;
        }
        $userid = $USER->id;
    }

    if ($includeadmin and isadmin($userid)) {  // admins can do anything
        return true;
    }

    return record_exists('user_teachers', 'userid', $userid);
}

/**
 * Determines if a user is allowed to edit a given course
 *
 * @uses $USER
 * @param int $courseid The id of the course that is being edited
 * @param int $userid The id of the user that is being tested against. Set this to 0 if you would just like to test against the currently logged in user.
 * @return boolean
 */
function isteacheredit($courseid, $userid=0) {
    global $USER;

    if (isadmin($userid)) {  // admins can do anything
        return true;
    }

    if (!$userid) {
        if (empty($USER) or empty($USER->id)) {     // not logged in so can't be a teacher
            return false;
        }
        if (empty($USER->teacheredit)) {            // we are relying on session cache
            return false;
        }
        return !empty($USER->teacheredit[$courseid]);
    }

    return get_field('user_teachers', 'editall', 'userid', $userid, 'course', $courseid);
}

/**
 * Determines if a user can create new courses
 *
 * @uses $USER
 * @param int $userid The user being tested. You can set this to 0 or leave it blank to test the currently logged in user.
 * @return boolean
 */
function iscreator ($userid=0) {
    global $USER;
    if (empty($USER->id)) {
        return false;
    }
    if (isadmin($userid)) {  // admins can do anything
        return true;
    }
    if (empty($userid)) {
        return record_exists('user_coursecreators', 'userid', $USER->id);
    }

    return record_exists('user_coursecreators', 'userid', $userid);
}

/**
 * Determines if a user is a student in the specified course
 *
 * If the course id specifies the site then the function determines
 * if the user is a confirmed and valid user of this site.
 *
 * @uses $USER
 * @uses $CFG
 * @uses SITEID
 * @param int $courseid The id of the course being tested
 * @param int $userid The user being tested. You can set this to 0 or leave it blank to test the currently logged in user.
 * @return boolean
 */
function isstudent($courseid, $userid=0) {
    global $USER, $CFG;

    if (empty($USER->id) and !$userid) {
        return false;
    }

    if ($courseid == SITEID) {
        if (!$userid) {
            $userid = $USER->id;
        }
        if (isguest($userid)) {
            return false;
        }
        // a site teacher can never be a site student
        if (isteacher($courseid, $userid)) {
            return false;
        }
        if ($CFG->allusersaresitestudents) {
            return record_exists('user', 'id', $userid);
        } else {
            return (record_exists('user_students', 'userid', $userid)
                     or record_exists('user_teachers', 'userid', $userid));
        }
    }

    if (!$userid) {
        return !empty($USER->student[$courseid]);
    }

  //  $timenow = time();   // todo:  add time check below

    return record_exists('user_students', 'userid', $userid, 'course', $courseid);
}

/**
 * Determines if the specified user is logged in as guest.
 *
 * @uses $USER
 * @param int $userid The user being tested. You can set this to 0 or leave it blank to test the currently logged in user.
 * @return boolean
 */
function isguest($userid=0) {
    global $USER;

    if (!$userid) {
        if (empty($USER->username)) {
            return false;
        }
        return ($USER->username == 'guest');
    }

    return record_exists('user', 'id', $userid, 'username', 'guest');
}

/**
 * Determines if the currently logged in user is in editing mode
 *
 * @uses $USER
 * @param int $courseid The id of the course being tested
 * @param user $user A {@link $USER} object. If null then the currently logged in user is used.
 * @return boolean
 */
function isediting($courseid, $user=NULL) {
    global $USER;
    if (!$user){
        $user = $USER;
    }
    if (empty($user->editing)) {
        return false;
    }
    return ($user->editing and isteacher($courseid, $user->id));
}

/**
 * Determines if the logged in user is currently moving an activity
 *
 * @uses $USER
 * @param int $courseid The id of the course being tested
 * @return boolean
 */
function ismoving($courseid) {
    global $USER;

    if (!empty($USER->activitycopy)) {
        return ($USER->activitycopycourse == $courseid);
    }
    return false;
}

/**
 * Given an object containing firstname and lastname
 * values, this function returns a string with the
 * full name of the person.
 * The result may depend on system settings
 * or language.  'override' will force both names
 * to be used even if system settings specify one.
 * @uses $CFG
 * @uses $SESSION
 * @param    type description
 * @todo Finish documenting this function
 */
function fullname($user, $override=false) {

    global $CFG, $SESSION;

    if (!isset($user->firstname) and !isset($user->lastname)) {
        return '';
    }

    if (!$override) {
        if (!empty($CFG->forcefirstname)) {
            $user->firstname = $CFG->forcefirstname;
        }
        if (!empty($CFG->forcelastname)) {
            $user->lastname = $CFG->forcelastname;
        }
    }

    if (!empty($SESSION->fullnamedisplay)) {
        $CFG->fullnamedisplay = $SESSION->fullnamedisplay;
    }

    if ($CFG->fullnamedisplay == 'firstname lastname') {
        return $user->firstname .' '. $user->lastname;

    } else if ($CFG->fullnamedisplay == 'lastname firstname') {
        return $user->lastname .' '. $user->firstname;

    } else if ($CFG->fullnamedisplay == 'firstname') {
        if ($override) {
            return get_string('fullnamedisplay', '', $user);
        } else {
            return $user->firstname;
        }
    }

    return get_string('fullnamedisplay', '', $user);
}

/**
 * Sets a moodle cookie with an encrypted string
 *
 * @uses $CFG
 * @uses DAYSECS
 * @uses HOURSECS
 * @param string $thing The string to encrypt and place in a cookie
 */
function set_moodle_cookie($thing) {
    global $CFG;

    if ($thing == 'guest') {  // Ignore guest account
        return;
    }

    $cookiename = 'MOODLEID_'.$CFG->sessioncookie;

    $days = 60;
    $seconds = DAYSECS*$days;

    setCookie($cookiename, '', time() - HOURSECS, '/');
    setCookie($cookiename, rc4encrypt($thing), time()+$seconds, '/');
}

/**
 * Gets a moodle cookie with an encrypted string
 *
 * @uses $CFG
 * @return string
 */
function get_moodle_cookie() {
    global $CFG;

    $cookiename = 'MOODLEID_'.$CFG->sessioncookie;

    if (empty($_COOKIE[$cookiename])) {
        return '';
    } else {
        $thing = rc4decrypt($_COOKIE[$cookiename]);
        return ($thing == 'guest') ? '': $thing;  // Ignore guest account
    }
}

/**
 * Returns true if an internal authentication method is being used.
 * if method not specified then, global default is assumed
 *
 * @uses $CFG
 * @param string $auth Form of authentication required
 * @return boolean
 * @todo Outline auth types and provide code example
 */
function is_internal_auth($auth='') {
/// Returns true if an internal authentication method is being used.
/// If auth not specified then global default is assumed

    global $CFG;

    if (empty($auth)) {
        $auth = $CFG->auth;
    }

    return ($auth == "email" || $auth == "none" || $auth == "manual");
}

/**
 * Returns an array of user fields
 *
 * @uses $CFG
 * @uses $db
 * @return array User field/column names
 * @todo Finish documenting this function
 */
function get_user_fieldnames() {

    global $CFG, $db;

    $fieldarray = $db->MetaColumnNames($CFG->prefix.'user');
    unset($fieldarray['ID']);

    return $fieldarray;
}

/**
 * Creates a bare-bones user record
 *
 * @uses $CFG
 * @param string $username New user's username to add to record
 * @param string $password New user's password to add to record
 * @param string $auth Form of authentication required
 * @return user A {@link $USER} object
 * @todo Outline auth types and provide code example
 */
function create_user_record($username, $password, $auth='') {
    global $CFG;

    //just in case check text case
    $username = trim(moodle_strtolower($username));

    if (function_exists('auth_get_userinfo')) {
        if ($newinfo = auth_get_userinfo($username)) {
            $newinfo = truncate_userinfo($newinfo);
            foreach ($newinfo as $key => $value){
                $newuser->$key = addslashes(stripslashes($value)); // Just in case
            }
        }
    }

    if (!empty($newuser->email)) {
        if (email_is_not_allowed($newuser->email)) {
            unset($newuser->email);
        }
    }

    $newuser->auth = (empty($auth)) ? $CFG->auth : $auth;
    $newuser->username = $username;
    if(empty($CFG->{$newuser->auth.'_preventpassindb'})){  //Prevent passwords in Moodle's DB
        $newuser->password = md5($password);
    } else {
        $newuser->password = 'not cached';  //Unusable password
    }
    $newuser->lang = $CFG->lang;
    $newuser->confirmed = 1;
    $newuser->lastIP = getremoteaddr();
    $newuser->timemodified = time();

    if (insert_record('user', $newuser)) {
         $user = get_complete_user_data('username', $newuser->username);
         if($CFG->{'auth_'.$newuser->auth.'_forcechangepassword'}){
             set_user_preference('auth_forcepasswordchange', 1, $user->id);
         }
         return $user;
    }
    return false;
}

/**
 * Will update a local user record from an external source
 *
 * @uses $CFG
 * @param string $username New user's username to add to record
 * @return user A {@link $USER} object
 */
function update_user_record($username) {
    global $CFG;

    if (function_exists('auth_get_userinfo')) {
        $username = trim(moodle_strtolower($username)); /// just in case check text case

        $oldinfo = get_record('user', 'username', $username, '','','','', 'username, auth');
        $authconfig = get_config('auth/' . $oldinfo->auth);

        if ($newinfo = auth_get_userinfo($username)) {
            $newinfo = truncate_userinfo($newinfo);
            foreach ($newinfo as $key => $value){
                $confkey = 'field_updatelocal_' . $key;
                if (!empty($authconfig->$confkey) && $authconfig->$confkey === 'onlogin') {
                    $value = addslashes(stripslashes($value));   // Just in case
                    set_field('user', $key, $value, 'username', $username) 
                        || error_log("Error updating $key for $username");
                }
            }
        }
    }
    return get_complete_user_data('username', $username);
}

function truncate_userinfo($info) {
/// will truncate userinfo as it comes from auth_get_userinfo (from external auth)
/// which may have large fields

    // define the limits
    $limit = array(
                    'username'    => 100,
                    'idnumber'    =>  64,
                    'firstname'   =>  20,
                    'lastname'    =>  20,
                    'email'       => 100,
                    'icq'         =>  15,
                    'phone1'      =>  20,
                    'phone2'      =>  20,
                    'institution' =>  40,
                    'department'  =>  30,
                    'address'     =>  70,
                    'city'        =>  20,
                    'country'     =>   2,
                    'url'         => 255,
                    );

    // apply where needed
    foreach (array_keys($info) as $key) {
        if (!empty($limit[$key])) {
            $info[$key] = trim(substr($info[$key],0, $limit[$key]));
        }
    }

    return $info;
}

/**
 * Retrieve the guest user object
 *
 * @uses $CFG
 * @return user A {@link $USER} object
 */
function guest_user() {
    global $CFG;

    if ($newuser = get_record('user', 'username', 'guest')) {
        $newuser->loggedin = true;
        $newuser->confirmed = 1;
        $newuser->site = $CFG->wwwroot;
        $newuser->lang = $CFG->lang;
        $newuser->lastIP = getremoteaddr();
    }

    return $newuser;
}

/**
 * Given a username and password, this function looks them
 * up using the currently selected authentication mechanism,
 * and if the authentication is successful, it returns a
 * valid $user object from the 'user' table.
 *
 * Uses auth_ functions from the currently active auth module
 *
 * @uses $CFG
 * @param string $username  User's username
 * @param string $password  User's password
 * @return user|flase A {@link $USER} object or false if error
 */
function authenticate_user_login($username, $password) {

    global $CFG;

    $md5password = md5($password);

    // First try to find the user in the database

    if (!$user = get_complete_user_data('username', $username)) {
        $user->id = 0;     // Not a user
        $user->auth = $CFG->auth;
    }

    // Sort out the authentication method we are using.

    if (empty($CFG->auth)) {
        $CFG->auth = 'manual';     // Default authentication module
    }

    if (empty($user->auth)) {      // For some reason it isn't set yet
        if (!empty($user->id) && (isadmin($user->id) || isguest($user->id))) {
            $auth = 'manual';    // Always assume these guys are internal
        } else {
            $auth = $CFG->auth;  // Normal users default to site method
        }
        // update user record from external DB
        if ($user->auth != 'manual' && $user->auth != 'email') {
            $user = update_user_record($username);
        }
    } else {
        $auth = $user->auth;
    }

    if (detect_munged_arguments($auth, 0)) {   // For safety on the next require
        return false;
    }

    if (!file_exists($CFG->dirroot .'/auth/'. $auth .'/lib.php')) {
        $auth = 'manual';    // Can't find auth module, default to internal
    }

    require_once($CFG->dirroot .'/auth/'. $auth .'/lib.php');

    if (auth_user_login($username, $password)) {  // Successful authentication
        if ($user->id) {                          // User already exists in database
            if (empty($user->auth)) {             // For some reason auth isn't set yet
                set_field('user', 'auth', $auth, 'username', $username);
            }
            if (empty($CFG->{$user->auth.'_preventpassindb'})){   //Calculate the password to update
                $passfield = $md5password;
            } else {
                 $passfield = 'not cached';
            }
            if ($passfield <> $user->password) {   // Update local copy of password for reference
                set_field('user', 'password',  $passfield, 'username', $username); //Update password
            }
            if (!is_internal_auth()) {            // update user record from external DB
                $user = update_user_record($username);
            }
        } else {
            $user = create_user_record($username, $password, $auth);
        }

        if (function_exists('auth_iscreator')) {    // Check if the user is a creator
            $useriscreator = auth_iscreator($username);
            if (!is_null($useriscreator)) {
                if ($useriscreator) {
                    if (! record_exists('user_coursecreators', 'userid', $user->id)) {
                        $cdata->userid = $user->id;
                        if (! insert_record('user_coursecreators', $cdata)) {
                            error('Cannot add user to course creators.');
                        }
                    }
                } else {
                    if (record_exists('user_coursecreators', 'userid', $user->id)) {
                        if (! delete_records('user_coursecreators', 'userid', $user->id)) {
                            error('Cannot remove user from course creators.');
                        }
                    }
                }
            }
        }

    /// Log in to a second system if necessary
        if (!empty($CFG->sso)) {
            include_once($CFG->dirroot .'/sso/'. $CFG->sso .'/lib.php');
            if (function_exists('sso_user_login')) {
                if (!sso_user_login($username, $password)) {   // Perform the signon process
                    notify('Second sign-on failed');
                }
            }
        }

        return $user;

    } else {
        add_to_log(0, 'login', 'error', 'index.php', $username);
        error_log('[client '.$_SERVER['REMOTE_ADDR']."]  $CFG->wwwroot  Failed Login:  $username  ".$_SERVER['HTTP_USER_AGENT']);
        return false;
    }
}

/**
 * Get a complete user record, which includes all the info
 * in the user record, as well as membership information
 * Intended for setting as $USER session variable
 *
 * @uses $CFG
 * @uses SITEID
 * @param string $field The user field to be checked for a given value. 
 * @param string $value The value to match for $field.
 * @return user A {@link $USER} object.
 */
function get_complete_user_data($field, $value) {

    global $CFG;

    if (!$field || !$value) {
        return false;
    }

/// Get all the basic user data

    if (! $user = get_record_select('user', $field .' = \''. $value .'\' AND deleted <> \'1\'')) {
        return false;
    }

/// Add membership information

    if ($admins = get_records('user_admins', 'userid', $user->id)) {
        $user->admin = true;
    }

    $user->student[SITEID] = isstudent(SITEID, $user->id);

/// Determine enrolments based on current enrolment module

    require_once($CFG->dirroot .'/enrol/'. $CFG->enrol .'/enrol.php');
    $enrol = new enrolment_plugin();
    $enrol->get_student_courses($user);
    $enrol->get_teacher_courses($user);

/// Get various settings and preferences

    if ($displays = get_records('course_display', 'userid', $user->id)) {
        foreach ($displays as $display) {
            $user->display[$display->course] = $display->display;
        }
    }

    if ($preferences = get_records('user_preferences', 'userid', $user->id)) {
        foreach ($preferences as $preference) {
            $user->preference[$preference->name] = $preference->value;
        }
    }

    if ($groups = get_records('groups_members', 'userid', $user->id)) {
        foreach ($groups as $groupmember) {
            $courseid = get_field('groups', 'courseid', 'id', $groupmember->groupid);
            $user->groupmember[$courseid] = $groupmember->groupid;
        }
    }

/// Rewrite some variables if necessary
    if (!empty($user->description)) {
        $user->description = true;   // No need to cart all of it around
    }
    if ($user->username == 'guest') {
        $user->lang       = $CFG->lang;               // Guest language always same as site
        $user->firstname  = get_string('guestuser');  // Name always in current language
        $user->lastname   = ' ';
    }

    $user->loggedin = true;
    $user->site     = $CFG->wwwroot; // for added security, store the site in the session
    $user->sesskey  = random_string(10);
    $user->sessionIP = md5(getremoteaddr());   // Store the current IP in the session

    return $user;

}

function get_user_info_from_db($field, $value) {  // For backward compatibility
    return get_complete_user_data($field, $value);
}

/* 
 * When logging in, this function is run to set certain preferences
 * for the current SESSION
 */
function set_login_session_preferences() {
    global $SESSION, $CFG;

    $SESSION->justloggedin = true;

    unset($SESSION->lang);
    unset($SESSION->encoding);
    $SESSION->encoding = get_string('thischarset');

    // Restore the calendar filters, if saved
    if (intval(get_user_preferences('calendar_persistflt', 0))) {
        include_once($CFG->dirroot.'/calendar/lib.php');
        calendar_set_filters_status(get_user_preferences('calendav_savedflt', 0xff));
    }
}


/**
 * Enrols (or re-enrols) a student in a given course
 *
 * NOTE: Defaults to 'manual' enrolment - enrolment plugins 
 * must set it explicitly.
 * 
 * @param int $courseid The id of the course that is being viewed
 * @param int $userid The id of the user that is being tested against. Set this to 0 if you would just like to test against the currently logged in user.
 * @param int $timestart ?
 * @param int $timeend ?
 * @return boolean
 * @todo Finish documenting this function
 */
function enrol_student($userid, $courseid, $timestart=0, $timeend=0, $enrol='manual') {

    global $CFG, $USER;

    if (!$course = get_record('course', 'id', $courseid)) {  // Check course
        return false;
    }
    if (!$user = get_record('user', 'id', $userid)) {        // Check user
        return false;
    }
    // enrol the student in any parent meta courses...
    if ($parents = get_records('course_meta','child_course',$courseid)) {
        foreach ($parents as $parent) {
            enrol_student($userid, $parent->parent_course,$timestart,$timeend,'metacourse');
            // if we're enrolling ourselves in the child course, add the parent courses to USER too
            // otherwise they'll have to logout and in again to get it
            // http://moodle.org/mod/forum/post.php?reply=185699
            if (!empty($USER) && $userid == $USER->id) {
                $USER->student[$parent->parent_course] = true;
            }
        }
    }

    if ($student = get_record('user_students', 'userid', $userid, 'course', $courseid)) {
        $student->timestart = $timestart;
        $student->timeend = $timeend;
        $student->time = time();
        $student->enrol = $enrol;
        return update_record('user_students', $student);

    } else {
        require_once("$CFG->dirroot/mod/forum/lib.php");
        forum_add_user($userid, $courseid);

        $student->userid = $userid;
        $student->course = $courseid;
        $student->timestart = $timestart;
        $student->timeend = $timeend;
        $student->time = time();
        $student->enrol = $enrol;
        return insert_record('user_students', $student);
    }
}

/**
 * Unenrols a student from a given course
 *
 * @param int $courseid The id of the course that is being viewed, if any
 * @param int $userid The id of the user that is being tested against.
 * @return boolean
 */
function unenrol_student($userid, $courseid=0) {
    global $CFG;

    if ($courseid) {
        /// First delete any crucial stuff that might still send mail
        if ($forums = get_records('forum', 'course', $courseid)) {
            foreach ($forums as $forum) {
                delete_records('forum_subscriptions', 'forum', $forum->id, 'userid', $userid);
            }
        }
        if ($groups = get_groups($courseid, $userid)) {
            foreach ($groups as $group) {
                delete_records('groups_members', 'groupid', $group->id, 'userid', $userid);
            }
        }
        // unenrol the student from any parent meta courses...
        if ($parents = get_records('course_meta','child_course',$courseid)) {
            foreach ($parents as $parent) {
                if (!record_exists_sql('SELECT us.id FROM '.$CFG->prefix.'user_students us, '
                                       .$CFG->prefix.'course_meta cm WHERE cm.child_course = us.course
                                        AND us.userid = '.$userid .' AND us.course != '.$courseid)) {
                    unenrol_student($userid, $parent->parent_course);
                }
            }
        }
        return delete_records('user_students', 'userid', $userid, 'course', $courseid);

    } else {
        delete_records('forum_subscriptions', 'userid', $userid);
        delete_records('groups_members', 'userid', $userid);
        return delete_records('user_students', 'userid', $userid);
    }
}

/**
 * Add a teacher to a given course
 *
  * @uses $USER
 * @param int $courseid The id of the course that is being viewed, if any
 * @param int $userid The id of the user that is being tested against. Set this to 0 if you would just like to test against the currently logged in user.
 * @param int $editall ?
 * @param string $role ?
 * @param int $timestart ?
 * @param int $timeend ?
 * @return boolean
 * @todo Finish documenting this function
 */
function add_teacher($userid, $courseid, $editall=1, $role='', $timestart=0, $timeend=0, $enrol='manual') {
    global $CFG;

    if ($teacher = get_record('user_teachers', 'userid', $userid, 'course', $courseid)) {
        $newteacher = NULL;
        $newteacher->id = $teacher->id;
        $newteacher->editall = $editall;
        $newteacher->enrol = $enrol;
        if ($role) {
            $newteacher->role = $role;
        }
        if ($timestart) {
            $newteacher->timestart = $timestart;
        }
        if ($timeend) {
            $newteacher->timeend = $timeend;
        }
        return update_record('user_teachers', $newteacher);
    }

    if (!record_exists('user', 'id', $userid)) {
        return false;   // no such user
    }

    if (!record_exists('course', 'id', $courseid)) {
        return false;   // no such course
    }

    $teacher = NULL;
    $teacher->userid  = $userid;
    $teacher->course  = $courseid;
    $teacher->editall = $editall;
    $teacher->role    = $role;
    $teacher->enrol   = $enrol;
    $teacher->timemodified = time();
    $teacher->timestart = $timestart;
    $teacher->timeend = $timeend;
    if ($student = get_record('user_students', 'userid', $userid, 'course', $courseid)) {
        $teacher->timestart = $student->timestart;
        $teacher->timeend = $student->timeend;
        $teacher->timeaccess = $student->timeaccess;
    }

    if (record_exists('user_teachers', 'course', $courseid)) {
        $teacher->authority = 2;
    } else {
        $teacher->authority = 1;
    }
    delete_records('user_students', 'userid', $userid, 'course', $courseid); // Unenrol as student

    /// Add forum subscriptions for new users
    require_once($CFG->dirroot.'/mod/forum/lib.php');
    forum_add_user($userid, $courseid);

    return insert_record('user_teachers', $teacher);

}

/**
 * Removes a teacher from a given course (or ALL courses)
 * Does not delete the user account
 *
 * @param int $courseid The id of the course that is being viewed, if any
 * @param int $userid The id of the user that is being tested against.
 * @return boolean
 */
function remove_teacher($userid, $courseid=0) {
    if ($courseid) {
        /// First delete any crucial stuff that might still send mail
        if ($forums = get_records('forum', 'course', $courseid)) {
            foreach ($forums as $forum) {
                delete_records('forum_subscriptions', 'forum', $forum->id, 'userid', $userid);
            }
        }

        /// Next if the teacher is not registered as a student, but is
        /// a member of a group, remove them from the group.
        if (!isstudent($courseid, $userid)) {
            if ($groups = get_groups($courseid, $userid)) {
                foreach ($groups as $group) {
                    delete_records('groups_members', 'groupid', $group->id, 'userid', $userid);
                }
            }
        }

        return delete_records('user_teachers', 'userid', $userid, 'course', $courseid);
    } else {
        delete_records('forum_subscriptions', 'userid', $userid);
        return delete_records('user_teachers', 'userid', $userid);
    }
}

/**
 * Add a creator to the site
 *
 * @param int $userid The id of the user that is being tested against.
 * @return boolean
 */
function add_creator($userid) {

    if (!record_exists('user_admins', 'userid', $userid)) {
        if (record_exists('user', 'id', $userid)) {
            $creator->userid = $userid;
            return insert_record('user_coursecreators', $creator);
        }
        return false;
    }
    return true;
}

/**
 * Remove a creator from a site
 *
  * @uses $db
 * @param int $userid The id of the user that is being tested against.
 * @return boolean
 */
function remove_creator($userid) {
    global $db;

    return delete_records('user_coursecreators', 'userid', $userid);
}

/**
 * Add an admin to a site
 *
 * @uses SITEID
 * @param int $userid The id of the user that is being tested against.
 * @return boolean
 */
function add_admin($userid) {

    if (!record_exists('user_admins', 'userid', $userid)) {
        if (record_exists('user', 'id', $userid)) {
            $admin->userid = $userid;

            // any admin is also a teacher on the site course
            if (!record_exists('user_teachers', 'course', SITEID, 'userid', $userid)) {
                if (!add_teacher($userid, SITEID)) {
                    return false;
                }
            }

            return insert_record('user_admins', $admin);
        }
        return false;
    }
    return true;
}

/**
 * Removes an admin from a site
 *
  * @uses $db
  * @uses SITEID
 * @param int $userid The id of the user that is being tested against.
 * @return boolean
 */
function remove_admin($userid) {
    global $db;

    // remove also from the list of site teachers
    remove_teacher($userid, SITEID);

    return delete_records('user_admins', 'userid', $userid);
}

/**
 * Clear a course out completely, deleting all content
 * but don't delete the course itself
 *
 * @uses $USER
 * @uses $SESSION
 * @uses $CFG
 * @param int $courseid The id of the course that is being viewed
 * @param boolean $showfeedback Set this to false to suppress notifications from being printed as the functions performs its steps.
 * @return boolean
 */
function remove_course_contents($courseid, $showfeedback=true) {

    global $CFG, $USER, $SESSION;

    $result = true;

    if (! $course = get_record('course', 'id', $courseid)) {
        error('Course ID was incorrect (can\'t find it)');
    }

    $strdeleted = get_string('deleted');

    // First delete every instance of every module

    if ($allmods = get_records('modules') ) {
        foreach ($allmods as $mod) {
            $modname = $mod->name;
            $modfile = $CFG->dirroot .'/mod/'. $modname .'/lib.php';
            $moddelete = $modname .'_delete_instance';       // Delete everything connected to an instance
            $moddeletecourse = $modname .'_delete_course';   // Delete other stray stuff (uncommon)
            $count=0;
            if (file_exists($modfile)) {
                include_once($modfile);
                if (function_exists($moddelete)) {
                    if ($instances = get_records($modname, 'course', $course->id)) {
                        foreach ($instances as $instance) {
                            if ($moddelete($instance->id)) {
                                $count++;
                            } else {
                                notify('Could not delete '. $modname .' instance '. $instance->id .' ('. format_string($instance->name) .')');
                                $result = false;
                            }
                        }
                    }
                } else {
                    notify('Function '. $moddelete() .'doesn\'t exist!');
                    $result = false;
                }

                if (function_exists($moddeletecourse)) {
                    $moddeletecourse($course);
                }
            }
            if ($showfeedback) {
                notify($strdeleted .' '. $count .' x '. $modname);
            }
        }
    } else {
        error('No modules are installed!');
    }

    // Delete course blocks
    if (delete_records('block_instance', 'pagetype', PAGE_COURSE_VIEW, 'pageid', $course->id)) {
        if ($showfeedback) {
            notify($strdeleted .' block_instance');
        }
    } else {
        $result = false;
    }

    // Delete any user stuff

    if (delete_records('user_students', 'course', $course->id)) {
        if ($showfeedback) {
            notify($strdeleted .' user_students');
        }
    } else {
        $result = false;
    }

    if (delete_records('user_teachers', 'course', $course->id)) {
        if ($showfeedback) {
            notify($strdeleted .' user_teachers');
        }
    } else {
        $result = false;
    }

    // Delete any groups

    if ($groups = get_records('groups', 'courseid', $course->id)) {
        foreach ($groups as $group) {
            if (delete_records('groups_members', 'groupid', $group->id)) {
                if ($showfeedback) {
                    notify($strdeleted .' groups_members');
                }
            } else {
                $result = false;
            }
            if (delete_records('groups', 'id', $group->id)) {
                if ($showfeedback) {
                    notify($strdeleted .' groups');
                }
            } else {
                $result = false;
            }
        }
    }

    // Delete events

    if (delete_records('event', 'courseid', $course->id)) {
        if ($showfeedback) {
            notify($strdeleted .' event');
        }
    } else {
        $result = false;
    }

    // Delete logs

    if (delete_records('log', 'course', $course->id)) {
        if ($showfeedback) {
            notify($strdeleted .' log');
        }
    } else {
        $result = false;
    }

    // Delete any course stuff

    if (delete_records('course_sections', 'course', $course->id)) {
        if ($showfeedback) {
            notify($strdeleted .' course_sections');
        }
    } else {
        $result = false;
    }

    if (delete_records('course_modules', 'course', $course->id)) {
        if ($showfeedback) {
            notify($strdeleted .' course_modules');
        }
    } else {
        $result = false;
    }

    // Delete gradebook stuff

    if (delete_records("grade_category", "courseid", $course->id)) {
      if ($showfeedback) {
	notify("$strdeleted grade categories");
      }
    } else {
      $result = false;
    }
    if (delete_records("grade_exceptions", "courseid", $course->id)) {
      if ($showfeedback) {
	notify("$strdeleted grade exceptions");
      }
    } else {
      $result = false;
    }
    if (delete_records("grade_item", "courseid", $course->id)) {
      if ($showfeedback) {
	notify("$strdeleted grade items");
      }
    } else {
      $result = false;
    }
    if (delete_records("grade_letter", "courseid", $course->id)) {
      if ($showfeedback) {
	notify("$strdeleted grade letters");
      }
    } else {
      $result = false;
    }
    if (delete_records("grade_preferences", "courseid", $course->id)) {
      if ($showfeedback) {
	notify("$strdeleted grade preferences");
      }
    } else {
      $result = false;
    }


    if ($course->metacourse) {
        delete_records("course_meta","parent_course",$course->id);
        sync_metacourse($course->id); // have to do it here so the enrolments get nuked. sync_metacourses won't find it without the id.
        if ($showfeedback) {
            notify("$strdeleted course_meta");
        }
    } else {
        if ($parents = get_records("course_meta","child_course",$course->id)) {
            foreach ($parents as $parent) {
                remove_from_metacourse($parent->parent_course,$parent->child_course); // this will do the unenrolments as well.
            }
            if ($showfeedback) {
                notify("$strdeleted course_meta");
            }
        }
    }

    return $result;

}

/**
 * This function will empty a course of USER data as much as
/// possible. It will retain the activities and the structure
/// of the course.
 *
 * @uses $USER
 * @uses $SESSION
 * @uses $CFG
 * @param int $courseid The id of the course that is being viewed
 * @param boolean $showfeedback Set this to false to suppress notifications from being printed as the functions performs its steps.
 * @param boolean $removestudents ?
 * @param boolean $removeteachers ?
 * @param boolean $removegroups ?
 * @param boolean $removeevents ?
 * @param boolean $removelogs ?
 * @return boolean
 * @todo Finish documenting this function
 */
function remove_course_userdata($courseid, $showfeedback=true,
                                $removestudents=true, $removeteachers=false, $removegroups=true,
                                $removeevents=true, $removelogs=false) {

    global $CFG, $USER, $SESSION;

    $result = true;

    if (! $course = get_record('course', 'id', $courseid)) {
        error('Course ID was incorrect (can\'t find it)');
    }

    $strdeleted = get_string('deleted');

    // Look in every instance of every module for data to delete

    if ($allmods = get_records('modules') ) {
        foreach ($allmods as $mod) {
            $modname = $mod->name;
            $modfile = $CFG->dirroot .'/mod/'. $modname .'/lib.php';
            $moddeleteuserdata = $modname .'_delete_userdata';   // Function to delete user data
            $count=0;
            if (file_exists($modfile)) {
                @include_once($modfile);
                if (function_exists($moddeleteuserdata)) {
                    $moddeleteuserdata($course, $showfeedback);
                }
            }
        }
    } else {
        error('No modules are installed!');
    }

    // Delete other stuff

    if ($removestudents) {
        /// Delete student enrolments
        if (delete_records('user_students', 'course', $course->id)) {
            if ($showfeedback) {
                notify($strdeleted .' user_students');
            }
        } else {
            $result = false;
        }
        /// Delete group members (but keep the groups)
        if ($groups = get_records('groups', 'courseid', $course->id)) {
            foreach ($groups as $group) {
                if (delete_records('groups_members', 'groupid', $group->id)) {
                    if ($showfeedback) {
                        notify($strdeleted .' groups_members');
                    }
                } else {
                    $result = false;
                }
            }
        }
    }

    if ($removeteachers) {
        if (delete_records('user_teachers', 'course', $course->id)) {
            if ($showfeedback) {
                notify($strdeleted .' user_teachers');
            }
        } else {
            $result = false;
        }
    }

    if ($removegroups) {
        if ($groups = get_records('groups', 'courseid', $course->id)) {
            foreach ($groups as $group) {
                if (delete_records('groups', 'id', $group->id)) {
                    if ($showfeedback) {
                        notify($strdeleted .' groups');
                    }
                } else {
                    $result = false;
                }
            }
        }
    }

    if ($removeevents) {
        if (delete_records('event', 'courseid', $course->id)) {
            if ($showfeedback) {
                notify($strdeleted .' event');
            }
        } else {
            $result = false;
        }
    }

    if ($removelogs) {
        if (delete_records('log', 'course', $course->id)) {
            if ($showfeedback) {
                notify($strdeleted .' log');
            }
        } else {
            $result = false;
        }
    }

    return $result;

}



/// GROUPS /////////////////////////////////////////////////////////


/**
* Returns a boolean: is the user a member of the given group?
*
* @param    type description
 * @todo Finish documenting this function
*/
function ismember($groupid, $userid=0) {
    global $USER;

    if (!$groupid) {   // No point doing further checks
        return false;
    }

    if (!$userid) {
        if (empty($USER->groupmember)) {
            return false;
        }
        foreach ($USER->groupmember as $courseid => $mgroupid) {
            if ($mgroupid == $groupid) {
                return true;
            }
        }
        return false;
    }

    return record_exists('groups_members', 'groupid', $groupid, 'userid', $userid);
}

/**
 * Add a user to a group, return true upon success or if user already a group member
 *
 * @param groupid  The group id
 * @param userid   The user id
 * @todo Finish documenting this function
 */
function add_user_to_group ($groupid, $userid) {
    if (ismember($groupid, $userid)) return true;
    $record->groupid = $groupid;
    $record->userid = $userid;
    $record->timeadded = time();
    return (insert_record('groups_members', $record) !== false);
}


/**
 * Returns the group ID of the current user in the given course
 *
 * @uses $USER
 * @param int $courseid The course being examined - relates to id field in 'course' table.
 * @todo Finish documenting this function
 */
function mygroupid($courseid) {
    global $USER;

    if (empty($USER->groupmember[$courseid])) {
        return 0;
    } else {
        return $USER->groupmember[$courseid];
    }
}

/**
 * For a given course, and possibly course module, determine
 * what the current default groupmode is:
 * NOGROUPS, SEPARATEGROUPS or VISIBLEGROUPS
 *
 * @param course $course A {@link $COURSE} object
 * @param array? $cm A course module object
 * @return int A group mode (NOGROUPS, SEPARATEGROUPS or VISIBLEGROUPS)
 */
function groupmode($course, $cm=null) {

    if ($cm and !$course->groupmodeforce) {
        return $cm->groupmode;
    }
    return $course->groupmode;
}


/**
 * Sets the current group in the session variable
 *
 * @uses $SESSION
 * @param int $courseid The course being examined - relates to id field in 'course' table.
 * @param int $groupid The group being examined.
 * @return int Current group id which was set by this function
 * @todo Finish documenting this function
 */
function set_current_group($courseid, $groupid) {
    global $SESSION;

    return $SESSION->currentgroup[$courseid] = $groupid;
}


/**
 * Gets the current group for the current user as an id or an object
 *
 * @uses $CFG
 * @uses $SESSION
 * @param int $courseid The course being examined - relates to id field in 'course' table.
 * @param boolean $full If true, the return value is a full record object. If false, just the id of the record.
 * @todo Finish documenting this function
 */
function get_current_group($courseid, $full=false) {
    global $SESSION, $USER;

    if (!isset($SESSION->currentgroup[$courseid])) {
        if (empty($USER->groupmember[$courseid]) or isteacheredit($courseid)) {
            return 0;
        } else {
            $SESSION->currentgroup[$courseid] = $USER->groupmember[$courseid];
        }
    }

    if ($full) {
        return get_record('groups', 'id', $SESSION->currentgroup[$courseid]);
    } else {
        return $SESSION->currentgroup[$courseid];
    }
}

/**
 * A combination function to make it easier for modules
 * to set up groups.
 *
 * It will use a given "groupid" parameter and try to use
 * that to reset the current group for the user.
 *
 * @uses VISIBLEGROUPS
 * @param course $course A {@link $COURSE} object
 * @param int $groupmode Either NOGROUPS, SEPARATEGROUPS or VISIBLEGROUPS
 * @param int $groupid Will try to use this optional parameter to
 *            reset the current group for the user
 * @return int|false Returns the current group id or false if error.
 * @todo Finish documenting this function
 */
function get_and_set_current_group($course, $groupmode, $groupid=-1) {

    if (!$groupmode) {   // Groups don't even apply
        return false;
    }

    $currentgroupid = get_current_group($course->id);

    if ($groupid < 0) {  // No change was specified
        return $currentgroupid;
    }

    if ($groupid) {      // Try to change the current group to this groupid
        if ($group = get_record('groups', 'id', $groupid, 'courseid', $course->id)) { // Exists
            if (isteacheredit($course->id)) {          // Sets current default group
                $currentgroupid = set_current_group($course->id, $group->id);

            } else if ($groupmode == VISIBLEGROUPS) {  // All groups are visible
                //we still set this but validating is done later
                $currentgroupid = set_current_group($course->id, $group->id);
                //$currentgroupid = $group->id;
            }
        }
    } else {             // When groupid = 0 it means show ALL groups
        if (isteacheredit($course->id)) {          // Sets current default group
            $currentgroupid = set_current_group($course->id, 0);

        } else if ($groupmode == VISIBLEGROUPS) {  // All groups are visible
            $currentgroupid = 0;
        }
    }

    return $currentgroupid;
}


/**
 * A big combination function to make it easier for modules
 * to set up groups.
 *
 * Terminates if the current user shouldn't be looking at this group
 * Otherwise returns the current group if there is one
 * Otherwise returns false if groups aren't relevant
 *
 * @uses SEPARATEGROUPS
 * @uses VISIBLEGROUPS
 * @param course $course A {@link $COURSE} object
 * @param int $groupmode Either NOGROUPS, SEPARATEGROUPS or VISIBLEGROUPS
 * @param string $urlroot ?
 * @todo Finish documenting this function
 */
function setup_and_print_groups($course, $groupmode, $urlroot) {

    if (isset($_GET['group'])) {
        $changegroup = $_GET['group'];  /// 0 or higher
    } else {
        $changegroup = -1;              /// This means no group change was specified
    }

    $currentgroup = get_and_set_current_group($course, $groupmode, $changegroup);

    if ($currentgroup === false) {
        return false;
    }

    if ($groupmode == SEPARATEGROUPS and !isteacheredit($course->id) and !$currentgroup) {
        print_heading(get_string('notingroup'));
        print_footer($course);
        exit;
    }

    if ($groupmode == VISIBLEGROUPS or ($groupmode and isteacheredit($course->id))) {
        if ($groups = get_records_menu('groups', 'courseid', $course->id, 'name ASC', 'id,name')) {
            echo '<div align="center">';
            print_group_menu($groups, $groupmode, $currentgroup, $urlroot);
            echo '</div>';
        }
    }

    return $currentgroup;
}

function generate_email_processing_address($modid,$modargs) {
    global $CFG;

    if (empty($CFG->siteidentifier)) {    // Unique site identification code
        set_config('siteidentifier', random_string(32));
    }

    $header = $CFG->mailprefix . substr(base64_encode(pack('C',$modid)),0,2).$modargs;
    return $header . substr(md5($header.$CFG->siteidentifier),0,16).'@'.$CFG->maildomain;
}


function moodle_process_email($modargs,$body) {
    // the first char should be an unencoded letter. We'll take this as an action
    switch ($modargs{0}) {
        case 'B': { // bounce
            list(,$userid) = unpack('V',base64_decode(substr($modargs,1,8)));
            if ($user = get_record_select("user","id=$userid","id,email")) {
                // check the half md5 of their email
                $md5check = substr(md5($user->email),0,16);
                if ($md5check == substr($modargs, -16)) {
                    set_bounce_count($user);
                }
                // else maybe they've already changed it?
            }
        }
        break;
        // maybe more later?
    }
}

/// CORRESPONDENCE  ////////////////////////////////////////////////

/**
 * Send an email to a specified user
 *
 * @uses $CFG
 * @uses $_SERVER
 * @uses SITEID
 * @param user $user  A {@link $USER} object
 * @param user $from A {@link $USER} object
 * @param string $subject plain text subject line of the email
 * @param string $messagetext plain text version of the message
 * @param string $messagehtml complete html version of the message (optional)
 * @param string $attachment a file on the filesystem, relative to $CFG->dataroot
 * @param string $attachname the name of the file (extension indicates MIME)
 * @param boolean $usetrueaddress determines whether $from email address should
 *          be sent out. Will be overruled by user profile setting for maildisplay
 * @return boolean|string Returns "true" if mail was sent OK, "emailstop" if email
 *          was blocked by user and "false" if there was another sort of error.
 */
function email_to_user($user, $from, $subject, $messagetext, $messagehtml='', $attachment='', $attachname='', $usetrueaddress=true, $repyto='', $replytoname='') {

    global $CFG, $FULLME;

    global $course;                // This is a bit of an ugly hack to be gotten rid of later
    if (!empty($course->lang)) {   // Course language is defined
        $CFG->courselang = $course->lang;
    }
    if (!empty($course->theme)) {   // Course language is defined
        $CFG->coursetheme = $course->theme;
    }

    include_once($CFG->libdir .'/phpmailer/class.phpmailer.php');

    if (empty($user)) {
        return false;
    }

    if (!empty($user->emailstop)) {
        return 'emailstop';
    }

    if (over_bounce_threshold($user)) {
        error_log("User $user->id (".fullname($user).") is over bounce threshold! Not sending.");
        return false;
    }

    $mail = new phpmailer;

    $mail->Version = 'Moodle '. $CFG->version;           // mailer version
    $mail->PluginDir = $CFG->libdir .'/phpmailer/';      // plugin directory (eg smtp plugin)


    if (current_language() != 'en') {
        $mail->CharSet = get_string('thischarset');
    }

    if ($CFG->smtphosts == 'qmail') {
        $mail->IsQmail();                              // use Qmail system

    } else if (empty($CFG->smtphosts)) {
        $mail->IsMail();                               // use PHP mail() = sendmail

    } else {
        $mail->IsSMTP();                               // use SMTP directly
        if ($CFG->debug > 7) {
            echo '<pre>' . "\n";
            $mail->SMTPDebug = true;
        }
        $mail->Host = $CFG->smtphosts;               // specify main and backup servers

        if ($CFG->smtpuser) {                          // Use SMTP authentication
            $mail->SMTPAuth = true;
            $mail->Username = $CFG->smtpuser;
            $mail->Password = $CFG->smtppass;
        }
    }

    $adminuser = get_admin();

    // make up an email address for handling bounces
    if (!empty($CFG->handlebounces)) {
        $modargs = 'B'.base64_encode(pack('V',$user->id)).substr(md5($user->email),0,16);
        $mail->Sender = generate_email_processing_address(0,$modargs);
    }
    else {
        $mail->Sender   = $adminuser->email;
    }

    if (is_string($from)) { // So we can pass whatever we want if there is need
        $mail->From     = $CFG->noreplyaddress;
        $mail->FromName = $from;
    } else if ($usetrueaddress and $from->maildisplay) {
        $mail->From     = $from->email;
        $mail->FromName = fullname($from);
    } else {
        $mail->From     = $CFG->noreplyaddress;
        $mail->FromName = fullname($from);
        if (empty($replyto)) {
            $mail->AddReplyTo($CFG->noreplyaddress,get_string('noreplyname'));
        }
    }

    if (!empty($replyto)) {
        $mail->AddReplyTo($replyto,$replytoname);
    }

    $mail->Subject = substr(stripslashes($subject), 0, 900);

    $mail->AddAddress($user->email, fullname($user) );

    $mail->WordWrap = 79;                               // set word wrap

    if (!empty($from->customheaders)) {                 // Add custom headers
        if (is_array($from->customheaders)) {
            foreach ($from->customheaders as $customheader) {
                $mail->AddCustomHeader($customheader);
            }
        } else {
            $mail->AddCustomHeader($from->customheaders);
        }
    }

    if (!empty($from->priority)) {
        $mail->Priority = $from->priority;
    }

    if ($messagehtml && $user->mailformat == 1) { // Don't ever send HTML to users who don't want it
        $mail->IsHTML(true);
        $mail->Encoding = 'quoted-printable';           // Encoding to use
        $mail->Body    =  $messagehtml;
        $mail->AltBody =  "\n$messagetext\n";
    } else {
        $mail->IsHTML(false);
        $mail->Body =  "\n$messagetext\n";
    }

    if ($attachment && $attachname) {
        if (ereg( "\\.\\." ,$attachment )) {    // Security check for ".." in dir path
            $mail->AddAddress($adminuser->email, fullname($adminuser) );
            $mail->AddStringAttachment('Error in attachment.  User attempted to attach a filename with a unsafe name.', 'error.txt', '8bit', 'text/plain');
        } else {
            require_once($CFG->libdir.'/filelib.php');
            $mimetype = mimeinfo('type', $attachname);
            $mail->AddAttachment($CFG->dataroot .'/'. $attachment, $attachname, 'base64', $mimetype);
        }
    }

    if ($mail->Send()) {
        set_send_count($user);
        return true;
    } else {
        mtrace('ERROR: '. $mail->ErrorInfo);
        add_to_log(SITEID, 'library', 'mailer', $FULLME, 'ERROR: '. $mail->ErrorInfo);
        return false;
    }
}

/**
 * Resets specified user's password and send the new password to the user via email.
 *
 * @uses $CFG
 * @param user $user A {@link $USER} object
 * @return boolean|string Returns "true" if mail was sent OK, "emailstop" if email
 *          was blocked by user and "false" if there was another sort of error.
 */
function reset_password_and_mail($user) {

    global $CFG;

    $site  = get_site();
    $from = get_admin();

    $external = false;
    if (!is_internal_auth($user->auth)) {
        include_once($CFG->dirroot . '/auth/' . $user->auth . '/lib.php');
        if (empty($CFG->{'auth_'.$user->auth.'_stdchangepassword'}) 
            || !function_exists('auth_user_update_password')) {
            trigger_error("Attempt to reset user password for user $user->username with Auth $user->auth.");
            return false;
        } else {
            $external = true;
        }
    }

    $newpassword = generate_password();

    if ($external) {
        if (!auth_user_update_password($user->username, $newpassword)) {
            error("Could not set user password!");
        }
    } else {
        if (! set_field("user", "password", md5($newpassword), "id", $user->id) ) {
            error("Could not set user password!");
        }
    }

    $a->firstname = $user->firstname;
    $a->sitename = $site->fullname;
    $a->username = $user->username;
    $a->newpassword = $newpassword;
    $a->link = $CFG->httpswwwroot .'/login/change_password.php';
    $a->signoff = fullname($from, true).' ('. $from->email .')';

    $message = get_string('newpasswordtext', '', $a);

    $subject  = $site->fullname .': '. get_string('changedpassword');

    return email_to_user($user, $from, $subject, $message);

}

/**
 * Send email to specified user with confirmation text and activation link.
 *
 * @uses $CFG
 * @param user $user A {@link $USER} object
 * @return boolean|string Returns "true" if mail was sent OK, "emailstop" if email
 *          was blocked by user and "false" if there was another sort of error.
 */
 function send_confirmation_email($user) {

    global $CFG;

    $site = get_site();
    $from = get_admin();

    $data->firstname = fullname($user);
    $data->sitename = $site->fullname;
    $data->admin = fullname($from) .' ('. $from->email .')';

    $subject = get_string('emailconfirmationsubject', '', $site->fullname);

    /// Make the text version a normal link for normal people
    $data->link = $CFG->wwwroot .'/login/confirm.php?p='. $user->secret .'&s='. $user->username;
    $message = get_string('emailconfirmation', '', $data);

    /// Make the HTML version more XHTML happy  (&amp;)
    $data->link = $CFG->wwwroot .'/login/confirm.php?p='. $user->secret .'&amp;s='. $user->username;
    $messagehtml = text_to_html(get_string('emailconfirmation', '', $data), false, false, true);

    $user->mailformat = 1;  // Always send HTML version as well

    return email_to_user($user, $from, $subject, $message, $messagehtml);

}

/**
 * send_password_change_confirmation_email.
 *
 * @uses $CFG
 * @param user $user A {@link $USER} object
 * @return boolean|string Returns "true" if mail was sent OK, "emailstop" if email
 *          was blocked by user and "false" if there was another sort of error.
 * @todo Finish documenting this function
 */
function send_password_change_confirmation_email($user) {

    global $CFG;

    $site = get_site();
    $from = get_admin();

    $data->firstname = $user->firstname;
    $data->sitename = $site->fullname;
    $data->link = $CFG->httpswwwroot .'/login/forgot_password.php?p='. $user->secret .'&s='. $user->username;
    $data->admin = fullname($from).' ('. $from->email .')';

    $message = get_string('emailpasswordconfirmation', '', $data);
    $subject = get_string('emailpasswordconfirmationsubject', '', $site->fullname);

    return email_to_user($user, $from, $subject, $message);

}

/**
 * Check that an email is allowed.  It returns an error message if there
 * was a problem.
 *
 * @param    type description
 * @todo Finish documenting this function
 */
function email_is_not_allowed($email) {

    global $CFG;

    if (!empty($CFG->allowemailaddresses)) {
        $allowed = explode(' ', $CFG->allowemailaddresses);
        foreach ($allowed as $allowedpattern) {
            $allowedpattern = trim($allowedpattern);
            if (!$allowedpattern) {
                continue;
            }
            if (strpos($email, $allowedpattern) !== false) {  // Match!
                return false;
            }
        }
        return get_string('emailonlyallowed', '', $CFG->allowemailaddresses);

    } else if (!empty($CFG->denyemailaddresses)) {
        $denied = explode(' ', $CFG->denyemailaddresses);
        foreach ($denied as $deniedpattern) {
            $deniedpattern = trim($deniedpattern);
            if (!$deniedpattern) {
                continue;
            }
            if (strpos($email, $deniedpattern) !== false) {   // Match!
                return get_string('emailnotallowed', '', $CFG->denyemailaddresses);
            }
        }
    }

    return false;
}


/// FILE HANDLING  /////////////////////////////////////////////

/**
 * Create a directory.
 *
 * @uses $CFG
 * @param string $directory  a string of directory names under $CFG->dataroot eg  stuff/assignment/1
 * param boolean $shownotices If true then notification messages will be printed out on error.
 * @return string|false Returns full path to directory if successful, false if not
 */
function make_upload_directory($directory, $shownotices=true) {

    global $CFG;

    $currdir = $CFG->dataroot;

    umask(0000);

    if (!file_exists($currdir)) {
        if (! mkdir($currdir, $CFG->directorypermissions)) {
            if ($shownotices) {
                notify('ERROR: You need to create the directory '. $currdir .' with web server write access');
            }
            return false;
        }
        if ($handle = fopen($currdir.'/.htaccess', 'w')) {   // For safety
            @fwrite($handle, "deny from all\r\n");
            @fclose($handle);
        }
    }

    $dirarray = explode('/', $directory);

    foreach ($dirarray as $dir) {
        $currdir = $currdir .'/'. $dir;
        if (! file_exists($currdir)) {
            if (! mkdir($currdir, $CFG->directorypermissions)) {
                if ($shownotices) {
                    notify('ERROR: Could not find or create a directory ('. $currdir .')');
                }
                return false;
            }
            //@chmod($currdir, $CFG->directorypermissions);  // Just in case mkdir didn't do it
        }
    }

    return $currdir;
}

/**
 * Makes an upload directory for a particular module.
 *
 * @uses $CFG
 * @param int $courseid The id of the course in question - maps to id field of 'course' table.
 * @return string|false Returns full path to directory if successful, false if not
 * @todo Finish documenting this function
 */
function make_mod_upload_directory($courseid) {
    global $CFG;

    if (! $moddata = make_upload_directory($courseid .'/'. $CFG->moddata)) {
        return false;
    }

    $strreadme = get_string('readme');

    if (file_exists($CFG->dirroot .'/lang/'. $CFG->lang .'/docs/module_files.txt')) {
        copy($CFG->dirroot .'/lang/'. $CFG->lang .'/docs/module_files.txt', $moddata .'/'. $strreadme .'.txt');
    } else {
        copy($CFG->dirroot .'/lang/en/docs/module_files.txt', $moddata .'/'. $strreadme .'.txt');
    }
    return $moddata;
}

/**
 * Returns current name of file on disk if it exists.
 *
 * @param string $newfile File to be verified
 * @return string Current name of file on disk if true
 * @todo Finish documenting this function
 */
function valid_uploaded_file($newfile) {
    if (empty($newfile)) {
        return '';
    }
    if (is_uploaded_file($newfile['tmp_name']) and $newfile['size'] > 0) {
        return $newfile['tmp_name'];
    } else {
        return '';
    }
}

/**
 * Returns the maximum size for uploading files.
 *
 * There are seven possible upload limits:
 * 1. in Apache using LimitRequestBody (no way of checking or changing this)
 * 2. in php.ini for 'upload_max_filesize' (can not be changed inside PHP)
 * 3. in .htaccess for 'upload_max_filesize' (can not be changed inside PHP)
 * 4. in php.ini for 'post_max_size' (can not be changed inside PHP)
 * 5. by the Moodle admin in $CFG->maxbytes
 * 6. by the teacher in the current course $course->maxbytes
 * 7. by the teacher for the current module, eg $assignment->maxbytes
 *
 * These last two are passed to this function as arguments (in bytes).
 * Anything defined as 0 is ignored.
 * The smallest of all the non-zero numbers is returned.
 *
 * @param int $sizebytes ?
 * @param int $coursebytes Current course $course->maxbytes (in bytes)
 * @param int $modulebytes Current module ->maxbytes (in bytes)
 * @return int The maximum size for uploading files.
 * @todo Finish documenting this function
 */
function get_max_upload_file_size($sitebytes=0, $coursebytes=0, $modulebytes=0) {

    if (! $filesize = ini_get('upload_max_filesize')) {
        $filesize = '5M';
    }
    $minimumsize = get_real_size($filesize);

    if ($postsize = ini_get('post_max_size')) {
        $postsize = get_real_size($postsize);
        if ($postsize < $minimumsize) {
            $minimumsize = $postsize;
        }
    }

    if ($sitebytes and $sitebytes < $minimumsize) {
        $minimumsize = $sitebytes;
    }

    if ($coursebytes and $coursebytes < $minimumsize) {
        $minimumsize = $coursebytes;
    }

    if ($modulebytes and $modulebytes < $minimumsize) {
        $minimumsize = $modulebytes;
    }

    return $minimumsize;
}

/**
 * Related to the above function - this function returns an
 * array of possible sizes in an array, translated to the
 * local language.
 *
 * @uses SORT_NUMERIC
 * @param int $sizebytes ?
 * @param int $coursebytes Current course $course->maxbytes (in bytes)
 * @param int $modulebytes Current module ->maxbytes (in bytes)
 * @return int
 * @todo Finish documenting this function
 */
function get_max_upload_sizes($sitebytes=0, $coursebytes=0, $modulebytes=0) {

    if (!$maxsize = get_max_upload_file_size($sitebytes, $coursebytes, $modulebytes)) {
        return array();
    }

    $filesize[$maxsize] = display_size($maxsize);

    $sizelist = array(10240, 51200, 102400, 512000, 1048576, 2097152,
                      5242880, 10485760, 20971520, 52428800, 104857600);

    foreach ($sizelist as $sizebytes) {
       if ($sizebytes < $maxsize) {
           $filesize[$sizebytes] = display_size($sizebytes);
       }
    }

    krsort($filesize, SORT_NUMERIC);

    return $filesize;
}

/**
 * If there has been an error uploading a file, print the appropriate error message
 * Numerical constants used as constant definitions not added until PHP version 4.2.0
 *
 * $filearray is a 1-dimensional sub-array of the $_FILES array
 * eg $filearray = $_FILES['userfile1']
 * If left empty then the first element of the $_FILES array will be used
 *
 * @uses $_FILES
 * @param array $filearray  A 1-dimensional sub-array of the $_FILES array
 * @param boolean $returnerror ?
 * @return boolean
 * @todo Finish documenting this function
 */
function print_file_upload_error($filearray = '', $returnerror = false) {

    if ($filearray == '' or !isset($filearray['error'])) {

        if (empty($_FILES)) return false;

        $files = $_FILES; /// so we don't mess up the _FILES array for subsequent code
        $filearray = array_shift($files); /// use first element of array
    }

    switch ($filearray['error']) {

        case 0: // UPLOAD_ERR_OK
            if ($filearray['size'] > 0) {
                $errmessage = get_string('uploadproblem', $filearray['name']);
            } else {
                $errmessage = get_string('uploadnofilefound'); /// probably a dud file name
            }
            break;

        case 1: // UPLOAD_ERR_INI_SIZE
            $errmessage = get_string('uploadserverlimit');
            break;

        case 2: // UPLOAD_ERR_FORM_SIZE
            $errmessage = get_string('uploadformlimit');
            break;

        case 3: // UPLOAD_ERR_PARTIAL
            $errmessage = get_string('uploadpartialfile');
            break;

        case 4: // UPLOAD_ERR_NO_FILE
            $errmessage = get_string('uploadnofilefound');
            break;

        default:
            $errmessage = get_string('uploadproblem', $filearray['name']);
    }

    if ($returnerror) {
        return $errmessage;
    } else {
        notify($errmessage);
        return true;
    }

}

/**
 * Returns an array with all the filenames in
 * all subdirectories, relative to the given rootdir.
 * If excludefile is defined, then that file/directory is ignored
 * If getdirs is true, then (sub)directories are included in the output
 * If getfiles is true, then files are included in the output
 * (at least one of these must be true!)
 *
 * @param string $rootdir  ?
 * @param string $excludefile  If defined then the specified file/directory is ignored
 * @param boolean $descend  ?
 * @param boolean $getdirs  If true then (sub)directories are included in the output
 * @param boolean $getfiles  If true then files are included in the output
 * @return array An array with all the filenames in
 * all subdirectories, relative to the given rootdir
 * @todo Finish documenting this function. Add examples of $excludefile usage.
 */
function get_directory_list($rootdir, $excludefile='', $descend=true, $getdirs=false, $getfiles=true) {

    $dirs = array();

    if (!$getdirs and !$getfiles) {   // Nothing to show
        return $dirs;
    }

    if (!is_dir($rootdir)) {          // Must be a directory
        return $dirs;
    }

    if (!$dir = opendir($rootdir)) {  // Can't open it for some reason
        return $dirs;
    }

    while (false !== ($file = readdir($dir))) {
        $firstchar = substr($file, 0, 1);
        if ($firstchar == '.' or $file == 'CVS' or $file == $excludefile) {
            continue;
        }
        $fullfile = $rootdir .'/'. $file;
        if (filetype($fullfile) == 'dir') {
            if ($getdirs) {
                $dirs[] = $file;
            }
            if ($descend) {
                $subdirs = get_directory_list($fullfile, $excludefile, $descend, $getdirs, $getfiles);
                foreach ($subdirs as $subdir) {
                    $dirs[] = $file .'/'. $subdir;
                }
            }
        } else if ($getfiles) {
            $dirs[] = $file;
        }
    }
    closedir($dir);

    asort($dirs);

    return $dirs;
}

/**
 * Removes the entire contents of a directory - does not delete the directory
 * itself
 *
 * @param string $dirName - full path to directory
 * @return boolean true if successful, false if error
**/
 
function delDirContents($dirName) {
   if(empty($dirName)) {
       return true;
   }
   if(file_exists($dirName)) {
       $dir = dir($dirName);
       while($file = $dir->read()) {
           if($file != '.' && $file != '..') {
               if(is_dir($dirName.'/'.$file)) {
                   delDir($dirName.'/'.$file);
               } else {
                   @unlink($dirName.'/'.$file) or die('File '.$dirName.'/'.$file.' couldn\'t be deleted!');
               }
           }
       }
       $dir->close();
       @rmdir($dirName) or die('Folder '.$dirName.' couldn\'t be deleted!');
   } else {
       return false;
   }
   return true;
}

/**
 * Adds up all the files in a directory and works out the size.
 *
 * @param string $rootdir  ?
 * @param string $excludefile  ?
 * @return array
 * @todo Finish documenting this function
 */
function get_directory_size($rootdir, $excludefile='') {

    global $CFG;

    // do it this way if we can, it's much faster
    if (!empty($CFG->pathtodu) && is_executable(trim($CFG->pathtodu))) {
        $command = trim($CFG->pathtodu).' -sk --apparent-size '.escapeshellarg($rootdir);
        exec($command,$output,$return);
        if (is_array($output)) {
            return get_real_size(intval($output[0]).'k'); // we told it to return k.
        }
    }
    
    $size = 0;

    if (!is_dir($rootdir)) {          // Must be a directory
        return $dirs;
    }

    if (!$dir = @opendir($rootdir)) {  // Can't open it for some reason
        return $dirs;
    }

    while (false !== ($file = readdir($dir))) {
        $firstchar = substr($file, 0, 1);
        if ($firstchar == '.' or $file == 'CVS' or $file == $excludefile) {
            continue;
        }
        $fullfile = $rootdir .'/'. $file;
        if (filetype($fullfile) == 'dir') {
            $size += get_directory_size($fullfile, $excludefile);
        } else {
            $size += filesize($fullfile);
        }
    }
    closedir($dir);

    return $size;
}

/**
 * Converts numbers like 10M into bytes.
 *
 * @param mixed $size The size to be converted
 * @return mixed
 */
function get_real_size($size=0) {
    if (!$size) {
        return 0;
    }
    $scan['MB'] = 1048576;
    $scan['Mb'] = 1048576;
    $scan['M'] = 1048576;
    $scan['m'] = 1048576;
    $scan['KB'] = 1024;
    $scan['Kb'] = 1024;
    $scan['K'] = 1024;
    $scan['k'] = 1024;

    while (list($key) = each($scan)) {
        if ((strlen($size)>strlen($key))&&(substr($size, strlen($size) - strlen($key))==$key)) {
            $size = substr($size, 0, strlen($size) - strlen($key)) * $scan[$key];
            break;
        }
    }
    return $size;
}

/**
 * Converts bytes into display form
 *
 * @param string $size  ?
 * @return string
 * @staticvar string $gb Localized string for size in gigabytes
 * @staticvar string $mb Localized string for size in megabytes
 * @staticvar string $kb Localized string for size in kilobytes
 * @staticvar string $b Localized string for size in bytes
 * @todo Finish documenting this function. Verify return type.
 */
function display_size($size) {

    static $gb, $mb, $kb, $b;

    if (empty($gb)) {
        $gb = get_string('sizegb');
        $mb = get_string('sizemb');
        $kb = get_string('sizekb');
        $b  = get_string('sizeb');
    }

    if ($size >= 1073741824) {
        $size = round($size / 1073741824 * 10) / 10 . $gb;
    } else if ($size >= 1048576) {
        $size = round($size / 1048576 * 10) / 10 . $mb;
    } else if ($size >= 1024) {
        $size = round($size / 1024 * 10) / 10 . $kb;
    } else {
        $size = $size .' '. $b;
    }
    return $size;
}

/*
 * Convert high ascii characters into low ascii
 * This code is from http://kalsey.com/2004/07/dirify_in_php/
 *
 */
function convert_high_ascii($s) {
    $HighASCII = array(
        "!\xc0!" => 'A',    # A`
        "!\xe0!" => 'a',    # a`
        "!\xc1!" => 'A',    # A'
        "!\xe1!" => 'a',    # a'
        "!\xc2!" => 'A',    # A^
        "!\xe2!" => 'a',    # a^
        "!\xc4!" => 'Ae',   # A:
        "!\xe4!" => 'ae',   # a:
        "!\xc3!" => 'A',    # A~
        "!\xe3!" => 'a',    # a~
        "!\xc8!" => 'E',    # E`
        "!\xe8!" => 'e',    # e`
        "!\xc9!" => 'E',    # E'
        "!\xe9!" => 'e',    # e'
        "!\xca!" => 'E',    # E^
        "!\xea!" => 'e',    # e^
        "!\xcb!" => 'Ee',   # E:
        "!\xeb!" => 'ee',   # e:
        "!\xcc!" => 'I',    # I`
        "!\xec!" => 'i',    # i`
        "!\xcd!" => 'I',    # I'
        "!\xed!" => 'i',    # i'
        "!\xce!" => 'I',    # I^
        "!\xee!" => 'i',    # i^
        "!\xcf!" => 'Ie',   # I:
        "!\xef!" => 'ie',   # i:
        "!\xd2!" => 'O',    # O`
        "!\xf2!" => 'o',    # o`
        "!\xd3!" => 'O',    # O'
        "!\xf3!" => 'o',    # o'
        "!\xd4!" => 'O',    # O^
        "!\xf4!" => 'o',    # o^
        "!\xd6!" => 'Oe',   # O:
        "!\xf6!" => 'oe',   # o:
        "!\xd5!" => 'O',    # O~
        "!\xf5!" => 'o',    # o~
        "!\xd8!" => 'Oe',   # O/
        "!\xf8!" => 'oe',   # o/
        "!\xd9!" => 'U',    # U`
        "!\xf9!" => 'u',    # u`
        "!\xda!" => 'U',    # U'
        "!\xfa!" => 'u',    # u'
        "!\xdb!" => 'U',    # U^
        "!\xfb!" => 'u',    # u^
        "!\xdc!" => 'Ue',   # U:
        "!\xfc!" => 'ue',   # u:
        "!\xc7!" => 'C',    # ,C
        "!\xe7!" => 'c',    # ,c
        "!\xd1!" => 'N',    # N~
        "!\xf1!" => 'n',    # n~
        "!\xdf!" => 'ss'
    );
    $find = array_keys($HighASCII);
    $replace = array_values($HighASCII);
    $s = preg_replace($find,$replace,$s);
    return $s;
}



/*
 * Cleans a given filename by removing suspicious or troublesome characters
 * Only these are allowed:
 *    alphanumeric _ - .
 *
 * @param string $string  ?
 * @return string
 */
function clean_filename($string) {
    $string = convert_high_ascii($string);
    $string = eregi_replace("\.\.+", '', $string);
    $string = preg_replace('/[^\.a-zA-Z\d\_-]/','_', $string ); // only allowed chars
    $string = eregi_replace("_+", '_', $string);
    return $string;
}


/// STRING TRANSLATION  ////////////////////////////////////////

/**
 * Returns the code for the current language
 *
 * @uses $CFG
 * @param $USER
 * @param $SESSION
 * @return string
 */
function current_language() {
    global $CFG, $USER, $SESSION;

    if (!empty($CFG->courselang)) {    // Course language can override all other settings for this page
        return $CFG->courselang;

    } else if (!empty($SESSION->lang)) {    // Session language can override other settings
        return $SESSION->lang;

    } else if (!empty($USER->lang)) {    // User language can override site language
        return $USER->lang;

    } else {
        return $CFG->lang;
    }
}

/* Return the code of the current charset
 * based in some config options and the lang being used
 * caching it per request.
 * @param $ignorecache to skip cached value and recalculate it again
 * @uses $CFG
 * @return string
 */
function current_charset($ignorecache = false) {

    global $CFG;

    static $currentcharset;

    if (!empty($currentcharset) and !$ignorecache) { /// Cached. Return it.
        return $currentcharset;
    }

    if (!empty($CFG->unicode) || !empty($CFG->unicodedb)) {
        $currentcharset = 'UTF-8';
    } else {
        $currentcharset = get_string('thischarset');
    }

    return $currentcharset;
}

/**
 * Prints out a translated string.
 *
 * Prints out a translated string using the return value from the {@link get_string()} function.
 *
 * Example usage of this function when the string is in the moodle.php file:<br>
 * <code>
 * echo '<strong>';
 * print_string('wordforstudent');
 * echo '</strong>';
 * </code>
 *
 * Example usage of this function when the string is not in the moodle.php file:<br>
 * <code>
 * echo '<h1>';
 * print_string('typecourse', 'calendar');
 * echo '</h1>';
 * </code>
 *
 * @param string $identifier The key identifier for the localized string
 * @param string $module The module where the key identifier is stored. If none is specified then moodle.php is used.
 * @param mixed $a An object, string or number that can be used
 * within translation strings
 */
function print_string($identifier, $module='', $a=NULL) {
    echo get_string($identifier, $module, $a);
}

/**
 * fix up the optional data in get_string()/print_string() etc
 * ensure possible sprintf() format characters are escaped correctly
 * needs to handle arbitrary strings and objects
 * @param mixed $a An object, string or number that can be used
 * @return mixed the supplied parameter 'cleaned'
 */
function clean_getstring_data( $a ) {
    if (is_string($a)) {
        return str_replace( '%','%%',$a );
    }
    elseif (is_object($a)) {
        $a_vars = get_object_vars( $a );
        $new_a_vars = array();
        foreach ($a_vars as $fname => $a_var) {
            $new_a_vars[$fname] = clean_getstring_data( $a_var );
        }
        return (object)$new_a_vars;
    } 
    else {
        return $a;
    }
}

/**
 * Returns a localized string.
 *
 * Returns the translated string specified by $identifier as
 * for $module.  Uses the same format files as STphp.
 * $a is an object, string or number that can be used
 * within translation strings
 *
 * eg "hello \$a->firstname \$a->lastname"
 * or "hello \$a"
 *
 * If you would like to directly echo the localized string use
 * the function {@link print_string()}
 *
 * Example usage of this function involves finding the string you would
 * like a local equivalent of and using its identifier and module information
 * to retrive it.<br>
 * If you open moodle/lang/en/moodle.php and look near line 1031
 * you will find a string to prompt a user for their word for student
 * <code>
 * $string['wordforstudent'] = 'Your word for Student';
 * </code>
 * So if you want to display the string 'Your word for student'
 * in any language that supports it on your site
 * you just need to use the identifier 'wordforstudent'
 * <code>
 * $mystring = '<strong>'. get_string('wordforstudent') .'</strong>';
or
 * </code>
 * If the string you want is in another file you'd take a slightly
 * different approach. Looking in moodle/lang/en/calendar.php you find
 * around line 75:
 * <code>
 * $string['typecourse'] = 'Course event';
 * </code>
 * If you want to display the string "Course event" in any language
 * supported you would use the identifier 'typecourse' and the module 'calendar'
 * (because it is in the file calendar.php):
 * <code>
 * $mystring = '<h1>'. get_string('typecourse', 'calendar') .'</h1>';
 * </code>
 *
 * As a last resort, should the identifier fail to map to a string
 * the returned string will be [[ $identifier ]]
 *
 * @uses $CFG
 * @param string $identifier The key identifier for the localized string
 * @param string $module The module where the key identifier is stored. If none is specified then moodle.php is used.
 * @param mixed $a An object, string or number that can be used
 * within translation strings
 * @return string The localized string.
 */
function get_string($identifier, $module='', $a=NULL) {

    global $CFG;

    global $course;     /// Not a nice hack, but quick
    if (empty($CFG->courselang)) {
        if (isset($course->lang)) {
            $CFG->courselang = $course->lang;
        }
    }

    $lang = current_language();

    if ($module == '') {
        $module = 'moodle';
    }

    // if $a happens to have % in it, double it so sprintf() doesn't break
    if ($a) {
        $a = clean_getstring_data( $a );
    }

/// Define the two or three major locations of language strings for this module

    if ($module == 'install') {
        $locations = array( $CFG->dirroot.'/install/lang/', $CFG->dataroot.'/lang/',  $CFG->dirroot.'/lang/' );
    } else {
        $locations = array( $CFG->dataroot.'/lang/',  $CFG->dirroot.'/lang/' );
    }

    if ($module != 'moodle') {
        if (strpos($module, 'block_') === 0) {  // It's a block lang file
            $locations[] =  $CFG->dirroot .'/blocks/'.substr($module, 6).'/lang/';
        } else {                                // It's a normal activity
            $locations[] =  $CFG->dirroot .'/mod/'.$module.'/lang/';
        }
    }

/// First check all the normal locations for the string in the current language

    foreach ($locations as $location) {
        $langfile = $location.$lang.'/'.$module.'.php';
        if (file_exists($langfile)) {
            if ($result = get_string_from_file($identifier, $langfile, "\$resultstring")) {
                eval($result);
                return $resultstring;
            }
        }
    }

/// If the preferred language was English we can abort now
    if ($lang == 'en') {
        return '[['. $identifier .']]';
    }

/// Is a parent language defined?  If so, try to find this string in a parent language file

    foreach ($locations as $location) {
        $langfile = $location.$lang.'/moodle.php';
        if (file_exists($langfile)) {
            if ($result = get_string_from_file('parentlanguage', $langfile, "\$parentlang")) {
                eval($result);
                if (!empty($parentlang)) {   // found it!
                    $langfile = $location.$parentlang.'/'.$module.'.php';
                    if (file_exists($langfile)) {
                        if ($result = get_string_from_file($identifier, $langfile, "\$resultstring")) {
                            eval($result);
                            return $resultstring;
                        }
                    }
                }
            }
        }
    }

/// Our only remaining option is to try English

    foreach ($locations as $location) {
        $langfile = $location.'en/'.$module.'.php';

        if (file_exists($langfile)) {
            if ($result = get_string_from_file($identifier, $langfile, "\$resultstring")) {
                eval($result);
                return $resultstring;
            }
        }
    }

    return '[['.$identifier.']]';  // Last resort
}

/**
 * This function is only used from {@link get_string()}.
 *
 * @internal Only used from get_string, not meant to be public API
 * @param string $identifier ?
 * @param string $langfile ?
 * @param string $destination ?
 * @return string|false ?
 * @staticvar array $strings Localized strings
 * @access private
 * @todo Finish documenting this function.
 */
function get_string_from_file($identifier, $langfile, $destination) {

    static $strings;    // Keep the strings cached in memory.

    if (empty($strings[$langfile])) {
        $string = array();
        include ($langfile);
        $strings[$langfile] = $string;
    } else {
        $string = &$strings[$langfile];
    }

    if (!isset ($string[$identifier])) {
        return false;
    }

    return $destination .'= sprintf("'. $string[$identifier] .'");';
}

/**
 * Converts an array of strings to their localized value.
 *
 * @param array $array An array of strings
 * @param string $module The language module that these strings can be found in.
 * @return string
 */
function get_strings($array, $module='') {

   $string = NULL;
   foreach ($array as $item) {
       $string->$item = get_string($item, $module);
   }
   return $string;
}

/**
 * Returns a list of language codes and their full names
 *
 * @uses $CFG
 * @return array An associative array with contents in the form of LanguageCode => LanguageName
 * @todo Finish documenting this function
 */
function get_list_of_languages() {
    global $CFG;

    $languages = array();

    if ( (!defined('FULLME') || FULLME !== 'cron')
         && !empty($CFG->langcache) && file_exists($CFG->dataroot .'/cache/languages')) {
        // read from cache
        $lines = file($CFG->dataroot .'/cache/languages');
        foreach ($lines as $line) {
            $line = trim($line);
            if (preg_match('/^(\w+)\s+(.+)/', $line, $matches)) {
                $languages[$matches[1]] = $matches[2];
            }
        }
        unset($lines); unset($line); unset($matches);
        return $languages;
    }

    if (!empty($CFG->langlist)) {       // use admin's list of languages
        $langlist = explode(',', $CFG->langlist);
        foreach ($langlist as $lang) {
            if (file_exists($CFG->dirroot .'/lang/'. $lang .'/moodle.php')) {
                include($CFG->dirroot .'/lang/'. $lang .'/moodle.php');
                $languages[$lang] = $string['thislanguage'].' ('. $lang .')';
                unset($string);
            }
        }
    } else {
        if (!$langdirs = get_list_of_plugins('lang')) {
            return false;
        }
        foreach ($langdirs as $lang) {
            if (file_exists($CFG->dirroot .'/lang/'. $lang .'/moodle.php')) {
                include($CFG->dirroot .'/lang/'. $lang .'/moodle.php');
                $languages[$lang] = $string['thislanguage'] .' ('. $lang .')';
                unset($string);
            }
        }
    }
    if ( defined('FULLME') && FULLME === 'cron' && !empty($CFG->langcache)) {
        if ($file = fopen($CFG->dataroot .'/cache/languages', 'w')) {
            foreach ($languages as $key => $value) {
                fwrite($file, "$key $value\n");
            }
            fclose($file);
        } 
    }


    return $languages;
}

/**
 * Returns a list of country names in the current language
 *
 * @uses $CFG
 * @uses $USER
 * @return string?
 * @todo Finish documenting this function.
 */
function get_list_of_countries() {
    global $CFG, $USER;

    $lang = current_language();

    if (!file_exists($CFG->dirroot .'/lang/'. $lang .'/countries.php')) {
        if ($parentlang = get_string('parentlanguage')) {
            if (file_exists($CFG->dirroot .'/lang/'. $parentlang .'/countries.php')) {
                $lang = $parentlang;
            } else {
                $lang = 'en';  // countries.php must exist in this pack
            }
        } else {
            $lang = 'en';  // countries.php must exist in this pack
        }
    }

    include($CFG->dirroot .'/lang/'. $lang .'/countries.php');

    if (!empty($string)) {
        asort($string);
    }

    return $string;
}

/**
 * Returns a list of valid and compatible themes
 *
 * @uses $CFG
 * @return array
 */
function get_list_of_themes() {

    global $CFG;

    $themes = array();

    if (!empty($CFG->themelist)) {       // use admin's list of themes
        $themelist = explode(',', $CFG->themelist);
    } else {
        $themelist = get_list_of_plugins("theme");
    }

    foreach ($themelist as $key => $theme) {
        if (!file_exists("$CFG->dirroot/theme/$theme/config.php")) {   // bad folder
            continue;
        }
        unset($THEME);    // Note this is not the global one!!  :-)
        include("$CFG->dirroot/theme/$theme/config.php");
        if (!isset($THEME->sheets)) {   // Not a valid 1.5 theme
            continue;
        }
        $themes[$theme] = $theme;
    }
    asort($themes);

    return $themes;
}


/**
 * Returns a list of picture names in the current language
 *
 * @uses $CFG
 * @return string?
 * @todo Finish documenting this function.
 */
function get_list_of_pixnames() {
    global $CFG;

    $lang = current_language();

    if (!file_exists($CFG->dirroot .'/lang/'. $lang .'/pix.php')) {
        if ($parentlang = get_string('parentlanguage')) {
            if (file_exists($CFG->dirroot .'/lang/'. $parentlang .'/pix.php')) {
                $lang = $parentlang;
            } else {
                $lang = 'en';  // countries.php must exist in this pack
            }
        } else {
            $lang = 'en';  // countries.php must exist in this pack
        }
    }

    include_once($CFG->dirroot .'/lang/'. $lang .'/pix.php');

    return $string;
}

/**
 * Returns a list of picture names in the current language
 *
 * @uses $CFG
 * @return string?
 * @todo Finish documenting this function.
 */
function get_list_of_timezones() {
    global $CFG;

    $timezones = array();

    if ($rawtimezones = get_records_sql('SELECT MAX(id), name FROM '.$CFG->prefix.'timezone GROUP BY name')) {
        foreach($rawtimezones as $timezone) {
            if (!empty($timezone->name)) {
                $timezones[$timezone->name] = get_string(strtolower($timezone->name), 'timezones');
                if (substr($timezones[$timezone->name], 0, 1) == '[') {  // No translation found
                    $timezones[$timezone->name] = $timezone->name;
                }
            }
        }
    }

    asort($timezones);

    for ($i = -13; $i <= 13; $i += .5) {
        $tzstring = 'GMT';
        if ($i < 0) {
            $timezones[sprintf("%.1f", $i)] = $tzstring . $i;
        } else if ($i > 0) {
            $timezones[sprintf("%.1f", $i)] = $tzstring . '+' . $i;
        } else {
            $timezones[sprintf("%.1f", $i)] = $tzstring;
        }
    }

    return $timezones;
}


/**
 * Can include a given document file (depends on second
 * parameter) or just return info about it.
 *
 * @uses $CFG
 * @param string $file ?
 * @param boolean $include ?
 * @return ?
 * @todo Finish documenting this function
 */
function document_file($file, $include=true) {
    global $CFG;

    $file = clean_filename($file);

    if (empty($file)) {
        return false;
    }

    $langs = array(current_language(), get_string('parentlanguage'), 'en');

    foreach ($langs as $lang) {
        $info->filepath = $CFG->dirroot .'/lang/'. $lang .'/docs/'. $file;
        $info->urlpath  = $CFG->wwwroot .'/lang/'. $lang .'/docs/'. $file;

        if (file_exists($info->filepath)) {
            if ($include) {
                include($info->filepath);
            }
            return $info;
        }
    }

    return false;
}

/**
* Function to raise the memory limit to a new value.
* Will respect the memory limit if it is higher, thus allowing
* settings in php.ini, apache conf or command line switches
* to override it
*
* The memory limit should be expressed with a string (eg:'64M')
*
* Return boolean
*
* @param    value    string with the new memory limit
*/
function raise_memory_limit ($newlimit) {

    if (empty($newlimit)) {
        return false;
    }

    $cur = @ini_get('memory_limit');
    if (empty($cur)) {
        // if php is compiled without --enable-memory-limits
        // apparently memory_limit is set to ''
        $cur=0;
    } else {
        if ($cur == -1){
            return true; // unlimited mem!
        }
      $cur = get_real_size($cur);
    }

    $new = get_real_size($newlimit);
    if ($new > $cur) {
        ini_set('memory_limit', $newlimit);
        return true;
    }
    return false;
}

/// ENCRYPTION  ////////////////////////////////////////////////

/**
 * rc4encrypt
 *
 * @param string $data ?
 * @return string
 * @todo Finish documenting this function
 */
function rc4encrypt($data) {
    $password = 'nfgjeingjk';
    return endecrypt($password, $data, '');
}

/**
 * rc4decrypt
 *
 * @param string $data ?
 * @return string
 * @todo Finish documenting this function
 */
function rc4decrypt($data) {
    $password = 'nfgjeingjk';
    return endecrypt($password, $data, 'de');
}

/**
 * Based on a class by Mukul Sabharwal [mukulsabharwal @ yahoo.com]
 *
 * @param string $pwd ?
 * @param string $data ?
 * @param string $case ?
 * @return string
 * @todo Finish documenting this function
 */
function endecrypt ($pwd, $data, $case) {

    if ($case == 'de') {
        $data = urldecode($data);
    }

    $key[] = '';
    $box[] = '';
    $temp_swap = '';
    $pwd_length = 0;

    $pwd_length = strlen($pwd);

    for ($i = 0; $i <= 255; $i++) {
        $key[$i] = ord(substr($pwd, ($i % $pwd_length), 1));
        $box[$i] = $i;
    }

    $x = 0;

    for ($i = 0; $i <= 255; $i++) {
        $x = ($x + $box[$i] + $key[$i]) % 256;
        $temp_swap = $box[$i];
        $box[$i] = $box[$x];
        $box[$x] = $temp_swap;
    }

    $temp = '';
    $k = '';

    $cipherby = '';
    $cipher = '';

    $a = 0;
    $j = 0;

    for ($i = 0; $i < strlen($data); $i++) {
        $a = ($a + 1) % 256;
        $j = ($j + $box[$a]) % 256;
        $temp = $box[$a];
        $box[$a] = $box[$j];
        $box[$j] = $temp;
        $k = $box[(($box[$a] + $box[$j]) % 256)];
        $cipherby = ord(substr($data, $i, 1)) ^ $k;
        $cipher .= chr($cipherby);
    }

    if ($case == 'de') {
        $cipher = urldecode(urlencode($cipher));
    } else {
        $cipher = urlencode($cipher);
    }

    return $cipher;
}


/// CALENDAR MANAGEMENT  ////////////////////////////////////////////////////////////////


/**
 * Call this function to add an event to the calendar table
 *  and to call any calendar plugins
 *
 * @uses $CFG
 * @param array $event An associative array representing an event from the calendar table. The event will be identified by the id field. The object event should include the following:
 *  <ul>
 *    <li><b>$event->name</b> - Name for the event
 *    <li><b>$event->description</b> - Description of the event (defaults to '')
 *    <li><b>$event->format</b> - Format for the description (using formatting types defined at the top of weblib.php)
 *    <li><b>$event->courseid</b> - The id of the course this event belongs to (0 = all courses)
 *    <li><b>$event->groupid</b> - The id of the group this event belongs to (0 = no group)
 *    <li><b>$event->userid</b> - The id of the user this event belongs to (0 = no user)
 *    <li><b>$event->modulename</b> - Name of the module that creates this event
 *    <li><b>$event->instance</b> - Instance of the module that owns this event
 *    <li><b>$event->eventtype</b> - The type info together with the module info could
 *             be used by calendar plugins to decide how to display event
 *    <li><b>$event->timestart</b>- Timestamp for start of event
 *    <li><b>$event->timeduration</b> - Duration (defaults to zero)
 *    <li><b>$event->visible</b> - 0 if the event should be hidden (e.g. because the activity that created it is hidden)
 *  </ul>
 * @return int The id number of the resulting record
 * @todo Finish documenting this function
 */
 function add_event($event) {

    global $CFG;

    $event->timemodified = time();

    if (!$event->id = insert_record('event', $event)) {
        return false;
    }

    if (!empty($CFG->calendar)) { // call the add_event function of the selected calendar
        if (file_exists($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php')) {
            include_once($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php');
            $calendar_add_event = $CFG->calendar.'_add_event';
            if (function_exists($calendar_add_event)) {
                $calendar_add_event($event);
            }
        }
    }

    return $event->id;
}

/**
 * Call this function to update an event in the calendar table
 * the event will be identified by the id field of the $event object.
 *
 * @uses $CFG
 * @param array $event An associative array representing an event from the calendar table. The event will be identified by the id field.
 * @return boolean
 * @todo Finish documenting this function
 */
function update_event($event) {

    global $CFG;

    $event->timemodified = time();

    if (!empty($CFG->calendar)) { // call the update_event function of the selected calendar
        if (file_exists($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php')) {
            include_once($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php');
            $calendar_update_event = $CFG->calendar.'_update_event';
            if (function_exists($calendar_update_event)) {
                $calendar_update_event($event);
            }
        }
    }
    return update_record('event', $event);
}

/**
 * Call this function to delete the event with id $id from calendar table.
 *
  * @uses $CFG
 * @param int $id The id of an event from the 'calendar' table.
 * @return array An associative array with the results from the SQL call.
 * @todo Verify return type
 */
function delete_event($id) {

    global $CFG;

    if (!empty($CFG->calendar)) { // call the delete_event function of the selected calendar
        if (file_exists($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php')) {
            include_once($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php');
            $calendar_delete_event = $CFG->calendar.'_delete_event';
            if (function_exists($calendar_delete_event)) {
                $calendar_delete_event($id);
            }
        }
    }
    return delete_records('event', 'id', $id);
}

/**
 * Call this function to hide an event in the calendar table
 * the event will be identified by the id field of the $event object.
 *
 * @uses $CFG
 * @param array $event An associative array representing an event from the calendar table. The event will be identified by the id field.
 * @return array An associative array with the results from the SQL call.
 * @todo Verify return type
 */
function hide_event($event) {
    global $CFG;

    if (!empty($CFG->calendar)) { // call the update_event function of the selected calendar
        if (file_exists($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php')) {
            include_once($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php');
            $calendar_hide_event = $CFG->calendar.'_hide_event';
            if (function_exists($calendar_hide_event)) {
                $calendar_hide_event($event);
            }
        }
    }
    return set_field('event', 'visible', 0, 'id', $event->id);
}

/**
 * Call this function to unhide an event in the calendar table
 * the event will be identified by the id field of the $event object.
 *
 * @uses $CFG
 * @param array $event An associative array representing an event from the calendar table. The event will be identified by the id field.
 * @return array An associative array with the results from the SQL call.
 * @todo Verify return type
 */
function show_event($event) {
    global $CFG;

    if (!empty($CFG->calendar)) { // call the update_event function of the selected calendar
        if (file_exists($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php')) {
            include_once($CFG->dirroot .'/calendar/'. $CFG->calendar .'/lib.php');
            $calendar_show_event = $CFG->calendar.'_show_event';
            if (function_exists($calendar_show_event)) {
                $calendar_show_event($event);
            }
        }
    }
    return set_field('event', 'visible', 1, 'id', $event->id);
}


/// ENVIRONMENT CHECKING  ////////////////////////////////////////////////////////////

/**
 * Lists plugin directories within some directory
 *
 * @uses $CFG
 * @param string $plugin ?
 * @param string $exclude ?
 * @return array
 * @todo Finish documenting this function
 */
function get_list_of_plugins($plugin='mod', $exclude='') {

    global $CFG;

    $basedir = opendir($CFG->dirroot .'/'. $plugin);
    while (false !== ($dir = readdir($basedir))) {
        $firstchar = substr($dir, 0, 1);
        if ($firstchar == '.' or $dir == 'CVS' or $dir == '_vti_cnf' or $dir == $exclude) {
            continue;
        }
        if (filetype($CFG->dirroot .'/'. $plugin .'/'. $dir) != 'dir') {
            continue;
        }
        $plugins[] = $dir;
    }
    if ($plugins) {
        asort($plugins);
    }
    return $plugins;
}

/**
 * Returns true if the current version of PHP is greater that the specified one.
 *
 * @param string $version The version of php being tested.
 * @return boolean
 * @todo Finish documenting this function
 */
function check_php_version($version='4.1.0') {
    return (version_compare(phpversion(), $version) >= 0);
}


/**
 * Checks to see if is a browser matches the specified
 * brand and is equal or better version.
 *
 * @uses $_SERVER
 * @param string $brand The browser identifier being tested
 * @param int $version The version of the browser
 * @return boolean
 * @todo Finish documenting this function
 */
 function check_browser_version($brand='MSIE', $version=5.5) {
    $agent = $_SERVER['HTTP_USER_AGENT'];

    if (empty($agent)) {
        return false;
    }

    switch ($brand) {

      case 'Gecko':   /// Gecko based browsers

          if (substr_count($agent, 'Camino')) {
              // MacOS X Camino support
              $version = 20041110;
          }

          // the proper string - Gecko/CCYYMMDD Vendor/Version
          // Faster version and work-a-round No IDN problem.
          if (preg_match("/Gecko\/([0-9]+)/i", $agent, $match)) {
              if ($match[1] > $version) {
                      return true;
                  }
              }
          break;


      case 'MSIE':   /// Internet Explorer

          if (strpos($agent, 'Opera')) {     // Reject Opera
              return false;
          }
          $string = explode(';', $agent);
          if (!isset($string[1])) {
              return false;
          }
          $string = explode(' ', trim($string[1]));
          if (!isset($string[0]) and !isset($string[1])) {
              return false;
          }
          if ($string[0] == $brand and (float)$string[1] >= $version ) {
              return true;
          }
          break;

    }

    return false;
}

/**
 * This function makes the return value of ini_get consistent if you are
 * setting server directives through the .htaccess file in apache.
 * Current behavior for value set from php.ini On = 1, Off = [blank]
 * Current behavior for value set from .htaccess On = On, Off = Off
 * Contributed by jdell @ unr.edu
 *
 * @param string $ini_get_arg ?
 * @return boolean
 * @todo Finish documenting this function
 */
function ini_get_bool($ini_get_arg) {
    $temp = ini_get($ini_get_arg);

    if ($temp == '1' or strtolower($temp) == 'on') {
        return true;
    }
    return false;
}

/**
 * Compatibility stub to provide backward compatibility
 *
 * Determines if the HTML editor is enabled.
 * @deprecated Use {@link can_use_html_editor()} instead.
 */
 function can_use_richtext_editor() {
    return can_use_html_editor();
}

/**
 * Determines if the HTML editor is enabled.
 *
 * This depends on site and user
 * settings, as well as the current browser being used.
 *
 * @return string|false Returns false if editor is not being used, otherwise
 * returns 'MSIE' or 'Gecko'.
 * @todo Finish documenting this function
 */
 function can_use_html_editor() {
    global $USER, $CFG;

    if (!empty($USER->htmleditor) and !empty($CFG->htmleditor)) {
        if (check_browser_version('MSIE', 5.5)) {
            return 'MSIE';
        } else if (check_browser_version('Gecko', 20030516)) {
            return 'Gecko';
        }
    }
    return false;
}

/**
 * Hack to find out the GD version by parsing phpinfo output
 *
 * @return int GD version (1, 2, or 0)
 */
function check_gd_version() {
    $gdversion = 0;

    if (function_exists('gd_info')){
        $gd_info = gd_info();
        if (substr_count($gd_info['GD Version'], '2.')) {
            $gdversion = 2;
        } else if (substr_count($gd_info['GD Version'], '1.')) {
            $gdversion = 1;
        }

    } else {
        ob_start();
        phpinfo(8);
        $phpinfo = ob_get_contents();
        ob_end_clean();

        $phpinfo = explode("\n", $phpinfo);


        foreach ($phpinfo as $text) {
            $parts = explode('</td>', $text);
            foreach ($parts as $key => $val) {
                $parts[$key] = trim(strip_tags($val));
            }
            if ($parts[0] == 'GD Version') {
                if (substr_count($parts[1], '2.0')) {
                    $parts[1] = '2.0';
                }
                $gdversion = intval($parts[1]);
            }
        }
    }

    return $gdversion;   // 1, 2 or 0
}

/**
 * Determine if moodle installation requires update
 *
 * Checks version numbers of main code and all modules to see
 * if there are any mismatches
 *
 * @uses $CFG
 * @return boolean
 * @todo Finish documenting this function
 */
function moodle_needs_upgrading() {
    global $CFG;

    include_once($CFG->dirroot .'/version.php');  # defines $version and upgrades
    if ($CFG->version) {
        if ($version > $CFG->version) {
            return true;
        }
        if ($mods = get_list_of_plugins('mod')) {
            foreach ($mods as $mod) {
                $fullmod = $CFG->dirroot .'/mod/'. $mod;
                unset($module);
                if (!is_readable($fullmod .'/version.php')) {
                    notify('Module "'. $mod .'" is not readable - check permissions');
                    continue;
                }
                include_once($fullmod .'/version.php');  # defines $module with version etc
                if ($currmodule = get_record('modules', 'name', $mod)) {
                    if ($module->version > $currmodule->version) {
                        return true;
                    }
                }
            }
        }
    } else {
        return true;
    }
    return false;
}


/// MISCELLANEOUS ////////////////////////////////////////////////////////////////////

/**
 * Notify admin users or admin user of any failed logins (since last notification).
 *
 * @uses $CFG
 * @uses $db
 * @uses HOURSECS
 * @todo Finish documenting this function. Add long description with more detail on what it does.
 */
function notify_login_failures() {
    global $CFG, $db;

    switch ($CFG->notifyloginfailures) {
        case 'mainadmin' :
            $recip = array(get_admin());
            break;
        case 'alladmins':
            $recip = get_admins();
            break;
    }

    if (empty($CFG->lastnotifyfailure)) {
        $CFG->lastnotifyfailure=0;
    }

    // we need to deal with the threshold stuff first.
    if (empty($CFG->notifyloginthreshold)) {
        $CFG->notifyloginthreshold = 10; // default to something sensible.
    }

    $notifyipsrs = $db->Execute('SELECT ip FROM '. $CFG->prefix .'log WHERE time > '. $CFG->lastnotifyfailure .'
                          AND module=\'login\' AND action=\'error\' GROUP BY ip HAVING count(*) > '. $CFG->notifyloginthreshold);

    $notifyusersrs = $db->Execute('SELECT info FROM '. $CFG->prefix .'log WHERE time > '. $CFG->lastnotifyfailure .'
                          AND module=\'login\' AND action=\'error\' GROUP BY info HAVING count(*) > '. $CFG->notifyloginthreshold);

    if ($notifyipsrs) {
        $ipstr = '';
        while ($row = $notifyipsrs->FetchRow()) {
            $ipstr .= "'". $row['ip'] ."',";
        }
        $ipstr = substr($ipstr,0,strlen($ipstr)-1);
    }
    if ($notifyusersrs) {
        $userstr = '';
        while ($row = $notifyusersrs->FetchRow()) {
            $userstr .= "'". $row['info'] ."',";
        }
        $userstr = substr($userstr,0,strlen($userstr)-1);
    }

    if (strlen($userstr) > 0 || strlen($ipstr) > 0) {
        $count = 0;
        $logs = get_logs('time > '. $CFG->lastnotifyfailure .' AND module=\'login\' AND action=\'error\' '
                 .((strlen($ipstr) > 0 && strlen($userstr) > 0) ? ' AND ( ip IN ('. $ipstr .') OR info IN ('. $userstr .') ) '
                 : ((strlen($ipstr) != 0) ? ' AND ip IN ('. $ipstr .') ' : ' AND info IN ('. $userstr .') ')), 'l.time DESC', '', '', $count);

        // if we haven't run in the last hour and we have something useful to report and we are actually supposed to be reporting to somebody
        if (is_array($recip) and count($recip) > 0 and ((time() - HOURSECS) > $CFG->lastnotifyfailure)
            and is_array($logs) and count($logs) > 0) {

            $message = '';
            $site = get_site();
            $subject = get_string('notifyloginfailuressubject', '', $site->fullname);
            $message .= get_string('notifyloginfailuresmessagestart', '', $CFG->wwwroot)
                 .(($CFG->lastnotifyfailure != 0) ? '('.userdate($CFG->lastnotifyfailure).')' : '')."\n\n";
            foreach ($logs as $log) {
                $log->time = userdate($log->time);
                $message .= get_string('notifyloginfailuresmessage','',$log)."\n";
            }
            $message .= "\n\n".get_string('notifyloginfailuresmessageend','',$CFG->wwwroot)."\n\n";
            foreach ($recip as $admin) {
                mtrace('Emailing '. $admin->username .' about '. count($logs) .' failed login attempts');
                email_to_user($admin,get_admin(),$subject,$message);
            }
            $conf->name = 'lastnotifyfailure';
            $conf->value = time();
            if ($current = get_record('config', 'name', 'lastnotifyfailure')) {
                $conf->id = $current->id;
                if (! update_record('config', $conf)) {
                    mtrace('Could not update last notify time');
                }

            } else if (! insert_record('config', $conf)) {
                mtrace('Could not set last notify time');
            }
        }
    }
}

/**
 * moodle_setlocale
 *
 * @uses $CFG
 * @uses $USER
 * @uses $SESSION
 * @param string $locale ?
 * @todo Finish documenting this function
 */
function moodle_setlocale($locale='') {

    global $SESSION, $USER, $CFG;

    if ($locale) {
        $CFG->locale = $locale;
    } else if (!empty($CFG->courselang) and ($CFG->courselang != $CFG->lang) ) {
        $CFG->locale = get_string('locale');
    } else if (!empty($SESSION->lang) and ($SESSION->lang != $CFG->lang) ) {
        $CFG->locale = get_string('locale');
    } else if (!empty($USER->lang) and ($USER->lang != $CFG->lang) ) {
        $CFG->locale = get_string('locale');
    } else if (empty($CFG->locale)) {
        $CFG->locale = get_string('locale');
        if (!get_field('config', 'value', 'name', 'locale')) {  // Make SURE there isn't one already
            set_config('locale', $CFG->locale);                 // Cache it to save lookups in future
        }
    }
    setlocale (LC_TIME, $CFG->locale);
    setlocale (LC_COLLATE, $CFG->locale);

    if ($CFG->locale != 'tr_TR') {            // To workaround a well-known PHP bug with Turkish
        setlocale (LC_CTYPE, $CFG->locale);
    }
}

/**
 * Converts string to lowercase using most compatible function available.
 *
 * @param string $string The string to convert to all lowercase characters.
 * @param string $encoding The encoding on the string.
 * @return string
 * @todo Add examples of calling this function with/without encoding types
 */
function moodle_strtolower ($string, $encoding='') {
    if (function_exists('mb_strtolower')) {
        if($encoding===''){
           return mb_strtolower($string);          //use multibyte support with default encoding
        } else {
           return mb_strtolower($string, $encoding); //use given encoding
        }
    } else {
        return strtolower($string);                // use common function what rely on current locale setting
    }
}

/**
 * Count words in a string.
 *
 * Words are defined as things between whitespace.
 *
 * @param string $string The text to be searched for words.
 * @return int The count of words in the specified string
 */
function count_words($string) {
    $string = strip_tags($string);
    return count(preg_split("/\w\b/", $string)) - 1;
}

/**
 * Generate and return a random string of the specified length.
 *
 * @param int $length The length of the string to be created.
 * @return string
 */
function random_string ($length=15) {
    $pool  = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $pool .= 'abcdefghijklmnopqrstuvwxyz';
    $pool .= '0123456789';
    $poollen = strlen($pool);
    mt_srand ((double) microtime() * 1000000);
    $string = '';
    for ($i = 0; $i < $length; $i++) {
        $string .= substr($pool, (mt_rand()%($poollen)), 1);
    }
    return $string;
}

/*
 * Given some text (which may contain HTML) and an ideal length, 
 * this function truncates the text neatly on a word boundary if possible
 */
function shorten_text($text, $ideal=30) {

   global $CFG;


   $i = 0;
   $tag = false;
   $length = strlen($text);
   $count = 0;
   $stopzone = false;
   $truncate = 0;

   if ($length <= $ideal) {
       return $text;
   }

   for ($i=0; $i<$length; $i++) {
       $char = $text[$i];

       switch ($char) {
           case "<":
               $tag = true;
               break;
           case ">":
               $tag = false;
               break;
           default:
               if (!$tag) {
                   if ($stopzone) {
                       if ($char == '.' or $char == ' ') {
                           $truncate = $i+1;
                           break 2;
                       }
                   }
                   $count++;
               }
               break;
       }
       if (!$stopzone) {
           if ($count > $ideal) {
               $stopzone = true;
           }
       }
   }

   if (!$truncate) {
       $truncate = $i;
   }

   $ellipse = ($truncate < $length) ? '...' : '';

   return substr($text, 0, $truncate).$ellipse;
}


/**
 * Given dates in seconds, how many weeks is the date from startdate
 * The first week is 1, the second 2 etc ...
 *
 * @uses WEEKSECS
 * @param ? $startdate ?
 * @param ? $thedate ?
 * @return string
 * @todo Finish documenting this function
 */
function getweek ($startdate, $thedate) {
    if ($thedate < $startdate) {   // error
        return 0;
    }

    return floor(($thedate - $startdate) / WEEKSECS) + 1;
}

/**
 * returns a randomly generated password of length $maxlen.  inspired by
 * {@link http://www.phpbuilder.com/columns/jesus19990502.php3}
 *
 * @param int $maxlength  The maximum size of the password being generated.
 * @return string
 * @todo Finish documenting this function
 */
function generate_password($maxlen=10) {
    global $CFG;

    $fillers = '1234567890!$-+';
    $wordlist = file($CFG->wordlist);

    srand((double) microtime() * 1000000);
    $word1 = trim($wordlist[rand(0, count($wordlist) - 1)]);
    $word2 = trim($wordlist[rand(0, count($wordlist) - 1)]);
    $filler1 = $fillers[rand(0, strlen($fillers) - 1)];

    return substr($word1 . $filler1 . $word2, 0, $maxlen);
}

/**
 * Given a float, prints it nicely
 *
 * @param float $num The float to print
 * @param int $places The number of decimal places to print.
 * @return string
 */
function format_float($num, $places=1) {
    return sprintf("%.$places"."f", $num);
}

/**
 * Given a simple array, this shuffles it up just like shuffle()
 * Unlike PHP's shuffle() ihis function works on any machine.
 *
 * @param array $array The array to be rearranged
 * @return array
 */
function swapshuffle($array) {

    srand ((double) microtime() * 10000000);
    $last = count($array) - 1;
    for ($i=0;$i<=$last;$i++) {
        $from = rand(0,$last);
        $curr = $array[$i];
        $array[$i] = $array[$from];
        $array[$from] = $curr;
    }
    return $array;
}

/**
 * Like {@link swapshuffle()}, but works on associative arrays
 *
 * @param array $array The associative array to be rearranged
 * @return array
 */
function swapshuffle_assoc($array) {
///

    $newkeys = swapshuffle(array_keys($array));
    foreach ($newkeys as $newkey) {
        $newarray[$newkey] = $array[$newkey];
    }
    return $newarray;
}

/**
 * Given an arbitrary array, and a number of draws,
 * this function returns an array with that amount
 * of items.  The indexes are retained.
 *
 * @param array $array ?
 * @param ? $draws ?
 * @return ?
 * @todo Finish documenting this function
 */
function draw_rand_array($array, $draws) {
    srand ((double) microtime() * 10000000);

    $return = array();

    $last = count($array);

    if ($draws > $last) {
        $draws = $last;
    }

    while ($draws > 0) {
        $last--;

        $keys = array_keys($array);
        $rand = rand(0, $last);

        $return[$keys[$rand]] = $array[$keys[$rand]];
        unset($array[$keys[$rand]]);

        $draws--;
    }

    return $return;
}

/**
 * microtime_diff
 *
 * @param string $a ?
 * @param string $b ?
 * @return string
 * @todo Finish documenting this function
 */
function microtime_diff($a, $b) {
    list($a_dec, $a_sec) = explode(' ', $a);
    list($b_dec, $b_sec) = explode(' ', $b);
    return $b_sec - $a_sec + $b_dec - $a_dec;
}

/**
 * Given a list (eg a,b,c,d,e) this function returns
 * an array of 1->a, 2->b, 3->c etc
 *
 * @param array $list ?
 * @param string $separator ?
 * @todo Finish documenting this function
 */
function make_menu_from_list($list, $separator=',') {

    $array = array_reverse(explode($separator, $list), true);
    foreach ($array as $key => $item) {
        $outarray[$key+1] = trim($item);
    }
    return $outarray;
}

/**
 * Creates an array that represents all the current grades that
 * can be chosen using the given grading type.  Negative numbers
 * are scales, zero is no grade, and positive numbers are maximum
 * grades.
 *
 * @param int $gradingtype ?
 * return int
 * @todo Finish documenting this function
 */
function make_grades_menu($gradingtype) {
    $grades = array();
    if ($gradingtype < 0) {
        if ($scale = get_record('scale', 'id', - $gradingtype)) {
            return make_menu_from_list($scale->scale);
        }
    } else if ($gradingtype > 0) {
        for ($i=$gradingtype; $i>=0; $i--) {
            $grades[$i] = $i .' / '. $gradingtype;
        }
        return $grades;
    }
    return $grades;
}

/**
 * This function returns the nummber of activities
 * using scaleid in a courseid
 *
 * @param int $courseid ?
 * @param int $scaleid ?
 * @return int
 * @todo Finish documenting this function
 */
function course_scale_used($courseid, $scaleid) {

    global $CFG;

    $return = 0;

    if (!empty($scaleid)) {
        if ($cms = get_course_mods($courseid)) {
            foreach ($cms as $cm) {
                //Check cm->name/lib.php exists
                if (file_exists($CFG->dirroot.'/mod/'.$cm->modname.'/lib.php')) {
                    include_once($CFG->dirroot.'/mod/'.$cm->modname.'/lib.php');
                    $function_name = $cm->modname.'_scale_used';
                    if (function_exists($function_name)) {
                        if ($function_name($cm->instance,$scaleid)) {
                            $return++;
                        }
                    }
                }
            }
        }
    }
    return $return;
}

/**
 * This function returns the nummber of activities
 * using scaleid in the entire site
 *
 * @param int $scaleid ?
 * @return int
 * @todo Finish documenting this function. Is return type correct?
 */
function site_scale_used($scaleid,&$courses) {

    global $CFG;

    $return = 0;

    if (!is_array($courses) || count($courses) == 0) {
        $courses = get_courses("all",false,"c.id,c.shortname");
    }

    if (!empty($scaleid)) {
        if (is_array($courses) && count($courses) > 0) {
            foreach ($courses as $course) {
                $return += course_scale_used($course->id,$scaleid);
            }
        }
    }
    return $return;
}

/**
 * make_unique_id_code
 *
 * @param string $extra ?
 * @return string
 * @todo Finish documenting this function
 */
function make_unique_id_code($extra='') {

    $hostname = 'unknownhost';
    if (!empty($_SERVER['HTTP_HOST'])) {
        $hostname = $_SERVER['HTTP_HOST'];
    } else if (!empty($_ENV['HTTP_HOST'])) {
        $hostname = $_ENV['HTTP_HOST'];
    } else if (!empty($_SERVER['SERVER_NAME'])) {
        $hostname = $_SERVER['SERVER_NAME'];
    } else if (!empty($_ENV['SERVER_NAME'])) {
        $hostname = $_ENV['SERVER_NAME'];
    }

    $date = gmdate("ymdHis");

    $random =  random_string(6);

    if ($extra) {
        return $hostname .'+'. $date .'+'. $random .'+'. $extra;
    } else {
        return $hostname .'+'. $date .'+'. $random;
    }
}


/**
 * Function to check the passed address is within the passed subnet
 *
 * The parameter is a comma separated string of subnet definitions.
 * Subnet strings can be in one of two formats:
 *   1: xxx.xxx.xxx.xxx/xx
 *   2: xxx.xxx
 * Code for type 1 modified from user posted comments by mediator at
 * {@link http://au.php.net/manual/en/function.ip2long.php}
 *
 * @param string $addr    The address you are checking
 * @param string $subnetstr    The string of subnet addresses
 * @return boolean
 */
function address_in_subnet($addr, $subnetstr) {

    $subnets = explode(',', $subnetstr);
    $found = false;
    $addr = trim($addr);

    foreach ($subnets as $subnet) {
        $subnet = trim($subnet);
        if (strpos($subnet, '/') !== false) { /// type 1

            list($ip, $mask) = explode('/', $subnet);
            $mask = 0xffffffff << (32 - $mask);
            $found = ((ip2long($addr) & $mask) == (ip2long($ip) & $mask));

        } else { /// type 2
            $found = (strpos($addr, $subnet) === 0);
        }

        if ($found) {
            break;
        }
    }

    return $found;
}

/**
 * This function sets the $HTTPSPAGEREQUIRED global 
 * (used in some parts of moodle to change some links)
 * and calculate the proper wwwroot to be used
 *
 * By using this function properly, we can ensure 100% https-ized pages
 * at our entire discretion (login, forgot_password, change_password)
 */
function httpsrequired() {

    global $CFG, $HTTPSPAGEREQUIRED;

    if (!empty($CFG->loginhttps)) {
        $HTTPSPAGEREQUIRED = true;
        $CFG->httpswwwroot = str_replace('http:', 'https:', $CFG->wwwroot);
    } else {
        $CFG->httpswwwroot = $CFG->wwwroot;
    }
}

/**
 * For outputting debugging info
 *
 * @uses STDOUT
 * @param string $string ?
 * @param string $eol ?
 * @todo Finish documenting this function
 */
function mtrace($string, $eol="\n", $sleep=0) {

    if (defined('STDOUT')) {
        fwrite(STDOUT, $string.$eol);
    } else {
        echo $string . $eol;
    }

    flush();

    //delay to keep message on user's screen in case of subsequent redirect
    if ($sleep) {
        sleep($sleep);
    }
}

//Replace 1 or more slashes or backslashes to 1 slash
function cleardoubleslashes ($path) {
    return preg_replace('/(\/|\\\){1,}/','/',$path);
}

function zip_files ($originalfiles, $destination) {
//Zip an array of files/dirs to a destination zip file
//Both parameters must be FULL paths to the files/dirs

    global $CFG;

    //Extract everything from destination
    $path_parts = pathinfo(cleardoubleslashes($destination));
    $destpath = $path_parts["dirname"];       //The path of the zip file
    $destfilename = $path_parts["basename"];  //The name of the zip file
    $extension = $path_parts["extension"];    //The extension of the file

    //If no file, error
    if (empty($destfilename)) {
        return false;
    }

    //If no extension, add it
    if (empty($extension)) {
        $extension = 'zip';
        $destfilename = $destfilename.'.'.$extension;
    }

    //Check destination path exists
    if (!is_dir($destpath)) {
        return false;
    }

    //Check destination path is writable. TODO!!

    //Clean destination filename
    $destfilename = clean_filename($destfilename);

    //Now check and prepare every file
    $files = array();
    $origpath = NULL;

    foreach ($originalfiles as $file) {  //Iterate over each file
        //Check for every file
        $tempfile = cleardoubleslashes($file); // no doubleslashes!
        //Calculate the base path for all files if it isn't set
        if ($origpath === NULL) {
            $origpath = rtrim(cleardoubleslashes(dirname($tempfile)), "/");
        }
        //See if the file is readable
        if (!is_readable($tempfile)) {  //Is readable
            continue;
        }
        //See if the file/dir is in the same directory than the rest
        if (rtrim(cleardoubleslashes(dirname($tempfile)), "/") != $origpath) {
            continue;
        }
        //Add the file to the array
        $files[] = $tempfile;
    }

    //Everything is ready:
    //    -$origpath is the path where ALL the files to be compressed reside (dir).
    //    -$destpath is the destination path where the zip file will go (dir).
    //    -$files is an array of files/dirs to compress (fullpath)
    //    -$destfilename is the name of the zip file (without path)

    //print_object($files);                  //Debug

    if (empty($CFG->zip)) {    // Use built-in php-based zip function

        include_once("$CFG->libdir/pclzip/pclzip.lib.php");
        $archive = new PclZip(cleardoubleslashes("$destpath/$destfilename"));
        if (($list = $archive->create($files, PCLZIP_OPT_REMOVE_PATH,$origpath) == 0)) {
            notice($archive->errorInfo(true));
            return false;
        }

    } else {                   // Use external zip program

        $filestozip = "";
        foreach ($files as $filetozip) {
            $filestozip .= escapeshellarg(basename($filetozip));
            $filestozip .= " ";
        }
        //Construct the command
        $separator = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? ' &' : ' ;';
        $command = 'cd '.escapeshellarg($origpath).$separator.
                    escapeshellarg($CFG->zip).' -r '.
                    escapeshellarg(cleardoubleslashes("$destpath/$destfilename")).' '.$filestozip;
        //All converted to backslashes in WIN
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $command = str_replace('/','\\',$command);
        }
        Exec($command);
    }
    return true;
}

function unzip_file ($zipfile, $destination = '', $showstatus = true) {
//Unzip one zip file to a destination dir
//Both parameters must be FULL paths
//If destination isn't specified, it will be the
//SAME directory where the zip file resides.

    global $CFG;

    //Extract everything from zipfile
    $path_parts = pathinfo(cleardoubleslashes($zipfile));
    $zippath = $path_parts["dirname"];       //The path of the zip file
    $zipfilename = $path_parts["basename"];  //The name of the zip file
    $extension = $path_parts["extension"];    //The extension of the file

    //If no file, error
    if (empty($zipfilename)) {
        return false;
    }

    //If no extension, error
    if (empty($extension)) {
        return false;
    }

    //If no destination, passed let's go with the same directory
    if (empty($destination)) {
        $destination = $zippath;
    }

    //Clear $destination
    $destpath = rtrim(cleardoubleslashes($destination), "/");

    //Check destination path exists
    if (!is_dir($destpath)) {
        return false;
    }

    //Check destination path is writable. TODO!!

    //Everything is ready:
    //    -$zippath is the path where the zip file resides (dir)
    //    -$zipfilename is the name of the zip file (without path)
    //    -$destpath is the destination path where the zip file will uncompressed (dir)

    if (empty($CFG->unzip)) {    // Use built-in php-based unzip function

        include_once("$CFG->libdir/pclzip/pclzip.lib.php");
        $archive = new PclZip(cleardoubleslashes("$zippath/$zipfilename"));
        if (!$list = $archive->extract(PCLZIP_OPT_PATH, $destpath,
                                       PCLZIP_CB_PRE_EXTRACT, 'unzip_cleanfilename')) {
            notice($archive->errorInfo(true));
            return false;
        }

    } else {                     // Use external unzip program

        $separator = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? ' &' : ' ;';
        $redirection = strtoupper(substr(PHP_OS, 0, 3)) === 'WIN' ? '' : ' 2>&1';

        $command = 'cd '.escapeshellarg($zippath).$separator.
                    escapeshellarg($CFG->unzip).' -o '.
                    escapeshellarg(cleardoubleslashes("$zippath/$zipfilename")).' -d '.
                    escapeshellarg($destpath).$redirection;
        //All converted to backslashes in WIN
        if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
            $command = str_replace('/','\\',$command);
        }
        Exec($command,$list);
    }

    //Display some info about the unzip execution
    if ($showstatus) {
        unzip_show_status($list,$destpath);
    }

    return true;
}

function unzip_cleanfilename ($p_event, &$p_header) {
//This function is used as callback in unzip_file() function
//to clean illegal characters for given platform and to prevent directory traversal.
//Produces the same result as info-zip unzip.
    $p_header['filename'] = ereg_replace('[[:cntrl:]]', '', $p_header['filename']); //strip control chars first!
    $p_header['filename'] = ereg_replace('\.\.+', '', $p_header['filename']); //directory traversal protection
    if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
        $p_header['filename'] = ereg_replace('[:*"?<>|]', '_', $p_header['filename']); //replace illegal chars
        $p_header['filename'] = ereg_replace('^([a-zA-Z])_', '\1:', $p_header['filename']); //repair drive letter
    } else {
        //Add filtering for other systems here
        // BSD: none (tested)
        // Linux: ??
        // MacosX: ??
    }
    $p_header['filename'] = cleardoubleslashes($p_header['filename']); //normalize the slashes/backslashes
    return 1;
}

function unzip_show_status ($list,$removepath) {
//This function shows the results of the unzip execution
//depending of the value of the $CFG->zip, results will be
//text or an array of files.

    global $CFG;

    if (empty($CFG->unzip)) {    // Use built-in php-based zip function
        $strname = get_string("name");
        $strsize = get_string("size");
        $strmodified = get_string("modified");
        $strstatus = get_string("status");
        echo "<table cellpadding=\"4\" cellspacing=\"2\" border=\"0\" width=\"640\">";
        echo "<tr><th class=\"header\" align=\"left\">$strname</th>";
        echo "<th class=\"header\" align=\"right\">$strsize</th>";
        echo "<th class=\"header\" align=\"right\">$strmodified</th>";
        echo "<th class=\"header\" align=\"right\">$strstatus</th></tr>";
        foreach ($list as $item) {
            echo "<tr>";
            $item['filename'] = str_replace(cleardoubleslashes($removepath).'/', "", $item['filename']);
            print_cell("left", $item['filename']);
            if (! $item['folder']) {
                print_cell("right", display_size($item['size']));
            } else {
                echo "<td>&nbsp;</td>";
            }
            $filedate  = userdate($item['mtime'], get_string("strftimedatetime"));
            print_cell("right", $filedate);
            print_cell("right", $item['status']);
            echo "</tr>";
        }
        echo "</table>";

    } else {                   // Use external zip program
        print_simple_box_start("center");
        echo "<pre>";
        foreach ($list as $item) {
            echo str_replace(cleardoubleslashes($removepath.'/'), '', $item).'<br />';
        }
        echo "</pre>";
        print_simple_box_end();
    }
}

/**
 * Returns most reliable client address
 *
 * @return string The remote IP address
 */
 function getremoteaddr() {
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        return cleanremoteaddr($_SERVER['HTTP_CLIENT_IP']);
    }
    if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        return cleanremoteaddr($_SERVER['HTTP_X_FORWARDED_FOR']);
    }
    if (!empty($_SERVER['REMOTE_ADDR'])) {
        return cleanremoteaddr($_SERVER['REMOTE_ADDR']);
    }
    return '';
}

/** 
 * Cleans a remote address ready to put into the log table
 */
function cleanremoteaddr($addr) {
    $originaladdr = $addr;
    $matches = array();
    // first get all things that look like IP addresses.
    if (!preg_match_all('/(\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3})/',$addr,$matches,PREG_SET_ORDER)) {
        return '';
    }
    $goodmatches = array();
    $lanmatches = array();
    foreach ($matches as $match) {
        //        print_r($match);
        // check to make sure it's not an internal address.
        // the following are reserved for private lans...
        // 10.0.0.0 - 10.255.255.255
        // 172.16.0.0 - 172.31.255.255
        // 192.168.0.0 - 192.168.255.255
        // 169.254.0.0 -169.254.255.255 
        $bits = explode('.',$match[0]);
        if (count($bits) != 4) {
            // weird, preg match shouldn't give us it.
            continue;
        }
        if (($bits[0] == 10) 
            || ($bits[0] == 172 && $bits[1] >= 16 && $bits[1] <= 31)
            || ($bits[0] == 192 && $bits[1] == 168)
            || ($bits[0] == 169 && $bits[1] == 254)) {
            $lanmatches[] = $match[0];
            continue;
        }
        // finally, it's ok
        $goodmatches[] = $match[0];
    }
    if (!count($goodmatches)) {
        // perhaps we have a lan match, it's probably better to return that.
        if (!count($lanmatches)) {
            return '';
        } else {
            return array_pop($lanmatches);
        }
    } 
    if (count($goodmatches) == 1) {
        return $goodmatches[0];
    }
    error_log("NOTICE: cleanremoteaddr gives us something funny: $originaladdr had ".count($goodmatches)." matches");
    // we need to return something, so
    return array_pop($goodmatches);
}

/**
 * html_entity_decode is only supported by php 4.3.0 and higher
 * so if it is not predefined, define it here
 *
 * @param string $string ?
 * @return string
 * @todo Finish documenting this function
 */
if(!function_exists('html_entity_decode')) {
     function html_entity_decode($string) {
        $trans_tbl = get_html_translation_table(HTML_ENTITIES);
        $trans_tbl = array_flip($trans_tbl);
        return strtr($string, $trans_tbl);
    }
}

/**
 * The clone keyword is only supported from PHP 5 onwards.
 * The behaviour of $obj2 = $obj1 differs fundamentally
 * between PHP 4 and PHP 5. In PHP 4 a copy of $obj1 was
 * created, in PHP 5 $obj1 is referenced. To create a copy
 * in PHP 5 the clone keyword was introduced. This function
 * simulates this behaviour for PHP < 5.0.0.
 * See also: http://mjtsai.com/blog/2004/07/15/php-5-object-references/
 *
 * Modified 2005-09-29 by Eloy (from Julian Sedding proposal)
 * Found a better implementation (more checks and possibilities) from PEAR:
 * http://cvs.php.net/co.php/pear/PHP_Compat/Compat/Function/clone.php
 * 
 * @param object $obj
 * @return object
 */
if(!check_php_version('5.0.0')) {
// the eval is needed to prevent PHP 5 from getting a parse error!
eval('
    function clone($obj) {
    /// Sanity check
        if (!is_object($obj)) {
            user_error(\'clone() __clone method called on non-object\', E_USER_WARNING);
            return;
        }

    /// Use serialize/unserialize trick to deep copy the object
        $obj = unserialize(serialize($obj));

    /// If there is a __clone method call it on the "new" class
        if (method_exists($obj, \'__clone\')) {
            $obj->__clone();
        }

        return $obj;
    }
');
}

/**
 * If new messages are waiting for the current user, then return
 * Javascript code to create a popup window
 *
 * @return string Javascript code
 */
function message_popup_window() {
    global $USER;

    $popuplimit = 30;     // Minimum seconds between popups

    if (!defined('MESSAGE_WINDOW')) {
        if (isset($USER->id)) {
            if (!isset($USER->message_lastpopup)) {
                $USER->message_lastpopup = 0;
            }
            if ((time() - $USER->message_lastpopup) > $popuplimit) {  /// It's been long enough
                if (get_user_preferences('message_showmessagewindow', 1) == 1) {
                    if (count_records_select('message', 'useridto = \''.$USER->id.'\' AND timecreated > \''.$USER->message_lastpopup.'\'')) {
                        $USER->message_lastpopup = time();
                        return '<script language="JavaScript" type="text/javascript">'."\n openpopup('/message/index.php', 'message', 'menubar=0,location=0,scrollbars,status,resizable,width=400,height=500', 0);\n</script>";
                    }
                }
            }
        }
    }

    return '';
}

// Used to make sure that $min <= $value <= $max
function bounded_number($min, $value, $max) {
    if($value < $min) {
        return $min;
    }
    if($value > $max) {
        return $max;
    }
    return $value;
}


/**
 *** get_performance_info() pairs up with init_performance_info()
 *** loaded in setup.php. Returns an array with 'html' and 'txt' 
 *** values ready for use, and each of the individual stats provided
 *** separately as well.
 ***
 **/
function get_performance_info() {
    global $CFG, $PERF;

    $info = array();
    $info['html'] = '';         // holds userfriendly HTML representation
    $info['txt']  = me() . ' '; // holds log-friendly representation

    $info['realtime'] = microtime_diff($PERF->starttime, microtime());
     
    $info['html'] .= '<span class="timeused">'.$info['realtime'].' secs</span> ';
    $info['txt'] .= 'time: '.$info['realtime'].'s ';

    if (function_exists('memory_get_usage')) {
        $info['memory_total'] = memory_get_usage();
        $info['memory_growth'] = memory_get_usage() - $PERF->startmemory;
        $info['html'] .= '<span class="memoryused">RAM: '.display_size($info['memory_total']).'</span> ';
        $info['txt']  .= 'memory_total: '.$info['memory_total'].'B (' . display_size($info['memory_total']).') memory_growth: '.$info['memory_growth'].'B ('.display_size($info['memory_growth']).') ';
    }

    $inc = get_included_files();
    //error_log(print_r($inc,1));
    $info['includecount'] = count($inc);
    $info['html'] .= '<span class="included">Included '.$info['includecount'].' files</span> ';
    $info['txt']  .= 'includecount: '.$info['includecount'].' ';

    if (!empty($PERF->dbqueries)) {
        $info['dbqueries'] = $PERF->dbqueries;
        $info['html'] .= '<span class="dbqueries">DB queries '.$info['dbqueries'].'</span> ';
        $info['txt'] .= 'dbqueries: '.$info['dbqueries'].' ';
    }

    if (!empty($PERF->logwrites)) {
        $info['logwrites'] = $PERF->logwrites;
        $info['html'] .= '<span class="logwrites">Log writes '.$info['logwrites'].'</span> ';
        $info['txt'] .= 'logwrites: '.$info['logwrites'].' ';
    }

    if (function_exists('posix_times')) {
        $ptimes = posix_times();
        if (is_array($ptimes)) {
            foreach ($ptimes as $key => $val) {
                $info[$key] = $ptimes[$key] -  $PERF->startposixtimes[$key];            
            }
            $info['html'] .= "<span class=\"posixtimes\">ticks: $info[ticks] user: $info[utime] sys: $info[stime] cuser: $info[cutime] csys: $info[cstime]</span> ";
            $info['txt'] .= "ticks: $info[ticks] user: $info[utime] sys: $info[stime] cuser: $info[cutime] csys: $info[cstime] ";
        }
    }

    // Grab the load average for the last minute
    // /proc will only work under some linux configurations
    // while uptime is there under MacOSX/Darwin and other unices
    if (is_readable('/proc/loadavg') && $loadavg = @file('/proc/loadavg')) {
        list($server_load) = explode(' ', $loadavg[0]);
        unset($loadavg);
    } else if ( function_exists('is_executable') && is_executable('/usr/bin/uptime') && $loadavg = `/usr/bin/uptime` ) {
        if (preg_match('/load averages?: (\d+[\.:]\d+)/', $loadavg, $matches)) {
            $server_load = $matches[1];
        } else {
            trigger_error('Could not parse uptime output!');
        }
    }
    if (!empty($server_load)) {
        $info['serverload'] = $server_load;
        $info['html'] .= '<span class="serverload">Load average: '.$info['serverload'].'</span> ';
        $info['txt'] .= 'serverload: '.$info['serverload'];
    }
    

    $info['html'] = '<div class="performanceinfo">'.$info['html'].'</div>';
    return $info;
}

if (!function_exists('file_get_contents')) {
   function file_get_contents($file) {
       $file = file($file);
       return $file ? implode('', $file) : false;
   }
}


function remove_dir($dir, $content_only=false) {
    // if content_only=true then delete all but
    // the directory itself

    $handle = opendir($dir);
    while (false!==($item = readdir($handle))) {
        if($item != '.' && $item != '..') {
            if(is_dir($dir.'/'.$item)) {
                remove_dir($dir.'/'.$item);
            }else{
                unlink($dir.'/'.$item);
            }
        }
    }
    closedir($handle);
    if ($content_only) { 
        return true;
    }
    return rmdir($dir);
}

//Function to check if a directory exists
//and, optionally, create it
function check_dir_exists($dir,$create=false) {
    
    global $CFG; 
    
    $status = true;
    if(!is_dir($dir)) {
        if (!$create) {
            $status = false;
        } else {
            umask(0000);
            $status = mkdir ($dir,$CFG->directorypermissions);
        }
    }
    return $status;
}

function report_session_error() {
    global $CFG, $FULLME;
    if (empty($CFG->lang)) {
        $CFG->lang = "en";
    }
    moodle_setlocale();
    //clear session cookies
    setcookie('MoodleSession'.$CFG->sessioncookie, '', time() - 3600, '/');
    setcookie('MoodleSessionTest'.$CFG->sessioncookie, '', time() - 3600, '/');
    //increment database error counters
    if (isset($CFG->session_error_counter)) {
        set_config('session_error_counter', 1 + $CFG->session_error_counter);
    } else {
        set_config('session_error_counter', 1);
    }
    redirect($FULLME, get_string('sessionerroruser2', 'error'), 5);
}


// vim:autoindent:expandtab:shiftwidth=4:tabstop=4:tw=140:
?>
