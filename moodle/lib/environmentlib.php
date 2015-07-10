<?php  //$Id: environmentlib.php,v 1.4.2.6 2006/02/05 10:13:36 stronk7 Exp $

///////////////////////////////////////////////////////////////////////////
//                                                                       //
// NOTICE OF COPYRIGHT                                                   //
//                                                                       //
// Moodle - Modular Object-Oriented Dynamic Learning Environment         //
//          http://moodle.com                                            //
//                                                                       //
// Copyright (C) 2001-3001 Martin Dougiamas        http://dougiamas.com  //
//           (C) 2001-3001 Eloy Lafuente (stronk7) http://contiento.com  //
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

// This library includes all the necessary stuff to execute some standard
// tests of required versions and libraries to run Moodle. It can be
// used from the admin interface, and both at install and upgrade.
//
// All the info is stored in the admin/environment.xml file,
// supporting to have an updated version in dataroot/environment

/// Add required files
    require_once($CFG->libdir.'/xmlize.php');

/// Define a buch of XML processing errors
    define('NO_ERROR',                           0);
    define('NO_VERSION_DATA_FOUND',              1);
    define('NO_DATABASE_SECTION_FOUND',          2);
    define('NO_DATABASE_VENDORS_FOUND',          3);
    define('NO_DATABASE_VENDOR_MYSQL_FOUND',     4);
    define('NO_DATABASE_VENDOR_POSTGRES_FOUND',  5);
    define('NO_PHP_SECTION_FOUND',               6);
    define('NO_PHP_VERSION_FOUND',               7);
    define('NO_PHP_EXTENSIONS_SECTION_FOUND',    8);
    define('NO_PHP_EXTENSIONS_NAME_FOUND',       9);
    define('NO_DATABASE_VENDOR_VERSION_FOUND',  10);

/**
 * This function will perform the whole check, returning
 * true or false as final result. Also, he full array of
 * environment_result will be returned in the parameter list.
 * The function looks for the best version to compare and
 * everything. This is the only function that should be called
 * ever from the rest of Moodle.
 * @param string version version to check. 
 * @param array results array of results checked.
 * @return boolean true/false, depending of results
 */
function check_moodle_environment($version, &$environment_results, $print_table=true) {

    $status = true;

/// This are cached per request
    static $result = true;
    static $env_results;
    static $cache_exists = false;

/// if we have results cached, use them
    if ($cache_exists) {
        $environment_results = $env_results;
/// No cache exists, calculate everything
    } else {
    /// Get the more recent version before the requested
        if (!$version = get_latest_version_available($version)) {
            $status = false;
        }

    /// Perform all the checks
        if (!($environment_results = environment_check($version)) && $status) {
            $status = false;
        }

    /// Iterate over all the results looking for some error in required items
    /// or some error_code
        if ($status) {
            foreach ($environment_results as $environment_result) {
                if ((!$environment_result->getStatus() &&
                    $environment_result->getLevel() == 'required') && !$environment_result->getBypassStr() || 
                    $environment_result->getErrorCode()) {
                    $result = false;
                }
            }
        }
    /// Going to end, we store environment_results to cache
        $env_results = $environment_results;
        $cache_exists = true;
    } ///End of cache block

/// If we have decided to print all the information, just do it
    if ($print_table) {
        print_moodle_environment($result && $status, $environment_results);
    }

    return ($result && $status);
}

/** 
 * This function will print one beautiful table with all the environmental
 * configuration and how it suits Moodle needs.
 * @param boolean final result of the check (true/false)
 * @param array environment_results array of results gathered
 */
function print_moodle_environment($result, $environment_results) {

/// Get some strings
    $strname = get_string('name');
    $strinfo = get_string('info');
    $strreport = get_string('report');
    $strstatus = get_string('status');
    $strok = get_string('ok');
    $strerror = get_string('error');
    $strcheck = get_string('check');
    $strbypassed = get_string('bypassed');
    $strenvironmenterrortodo = get_string('environmenterrortodo', 'admin');

/// Here we'll store all the feedback found
    $feedbacktext = '';

/// Table header
    $table->head  = array ($strname, $strinfo, $strreport, $strstatus);
    $table->align = array ('center', 'center', 'left', 'center');
    $table->wrap  = array ('nowrap', '', '', 'nowrap');
    $table->size  = array ('10', 10, '100%', '10');
    $table->width = '90%';
    $table->class = 'environmenttable';

/// Iterate over each environment_result
    $continue = true;
    foreach ($environment_results as $environment_result) {
        $errorline = false;
        if ($continue) {
            $type = $environment_result->getPart();
            $info = $environment_result->getInfo();
            $status = $environment_result->getStatus();
            $error_code = $environment_result->getErrorCode();
        /// Process Report field
            $rec = new stdClass();
        /// Something has gone wrong at parsing time
            if ($error_code) {
                $stringtouse = 'environmentxmlerror';
                $rec->error_code = $error_code;
                $status = $strerror;
                $errorline = true;
                $continue = false;
            }

            if ($continue) {
            /// We are comparing versions
                if ($rec->needed = $environment_result->getNeededVersion()) {
                    $rec->current = $environment_result->getCurrentVersion();
                    if ($environment_result->getLevel() == 'required') {
                        $stringtouse = 'environmentrequireversion';
                    } else {
                        $stringtouse = 'environmentrecommendversion';
                    }
            /// We are checking installed & enabled things
                } else {
                    if ($environment_result->getLevel() == 'required') {
                        $stringtouse = 'environmentrequireinstall';
                    } else {
                        $stringtouse = 'environmentrecommendinstall';
                    }
                }
            /// Calculate the status value
                if ($environment_result->getBypassStr() == '') {
                    if (!$status and $environment_result->getLevel() == 'required') {
                        $status = $strerror;
                        $errorline = true;
                    } else if (!$status && $environment_result->getLevel() == 'optional') {
                        $status = $strcheck;
                    } else {
                        $status = $strok;
                    }
                } else {
                    $status = $strbypassed;
                    $errorline = true;
                }
            }
    
        /// Build the text
            $report = get_string($stringtouse, 'admin', $rec);
        /// Format error line
            if ($errorline) {
                $type = '<span class="error">'.$type.'</span>';
                $info = '<span class="error">'.$info.'</span>';
                $report = '<span class="error">'.$report.'</span>';
                $status = '<span class="error">'.$status.'</span>';
            }
        /// Add the row to the table
            $table->data[] = array ($type, $info, $report, $status);
        ///Process the feedback if necessary
            if ($feedbackstr = $environment_result->getFeedbackStr()) {
                $feedbacktext .= '<li class="environmenttable">'.get_string($feedbackstr, 'admin').'</li>';
            }
        ///Process the bypass if necessary
            if ($bypassstr = $environment_result->getBypassStr()) {
                $feedbacktext .= '<li class="environmenttable">'.get_string($bypassstr, 'admin').'</li>';
            }
        }
    }
    
/// Print table
    print_table($table);

/// And feedback accumulated text
    if ($feedbacktext) {
        print_simple_box('<ul>'.$feedbacktext.'</ul>', 'center', '90%');
    }

/// Finally, if any error has happened, print the summary box
    if (!$result) {
        print_simple_box($strenvironmenterrortodo, 'center', '', '', '', 'errorbox');
    }
}


/**
 * This function will normalize any version to just a serie of numbers
 * separated by dots. Everything else will be removed.
 * @param string $version the original version
 * @return string the normalized version
 */
function normalize_version($version) {
/// Replace everything but numbers and dots by dots
    $version = preg_replace('/[^\.\d]/', '.', $version);
/// Combine multiple dots in one
    $version = preg_replace('/(\.{2,})/', '.', $version);
/// Trim possible leading and trailing dots
    $version = trim($version, '.');

    return $version;
}


/**
 * This function will load the environment.xml file and xmlize it
 * @return mixed the xmlized structure or false on error
 */
function load_environment_xml() {
    
    global $CFG;

    static $data; //Only load and xmlize once by request

    if (!empty($data)) {
        return $data;
    }

/// First of all, take a look inside $CFG->dataroot/environment/environment.xml
    $file = $CFG->dataroot.'/environment/environment.xml';
    if (!is_file($file) || !is_readable($file) || !$contents = file_get_contents($file)) {
    /// Fallback to fixed $CFG->admin/environment.xml
        $file = $CFG->dirroot.'/'.$CFG->admin.'/environment.xml';
        if (!is_file($file) || !is_readable($file) || !$contents = file_get_contents($file)) {
            return false;
        }
    }
/// XML the whole file
    $data = xmlize($contents);

    return $data;
}


/**
 * This function will return the list of Moodle versions available
 * @return mixed array of versions. False on error.
 */
function get_list_of_environment_versions ($contents) {

    static $versions = array();

    if (!empty($versions)) {
        return $versions;
    }

    if (isset($contents['COMPATIBILITY_MATRIX']['#']['MOODLE'])) {
        foreach ($contents['COMPATIBILITY_MATRIX']['#']['MOODLE'] as $version) {
            $versions[] = $version['@']['version'];
        }
    }

    return $versions;
}


/**
 * This function will return the most recent version in the environment.xml
 * file previous or equal to the version requested
 * @param string version top version from which we start to look backwards
 * @return string more recent version or false if not found
 */
function get_latest_version_available ($version) {

/// Normalize the version requested
    $version = normalize_version($version);

/// Load xml file
    if (!$contents = load_environment_xml()) {
        return false;
    }

/// Detect available versions
    if (!$versions = get_list_of_environment_versions($contents)) {
        return false;
    }
/// First we look for exact version
    if (in_array($version, $versions)) {
        return $version;
    } else {
        $found_version = false;
    /// Not exact match, so we are going to iterate over the list searching
    /// for the latest version before the requested one
        foreach ($versions as $arrversion) {
            if (version_compare($arrversion, $version, '<')) {
                $found_version = $arrversion;
            }
        }
    }

    return $found_version;
}


/** 
 * This function will return the xmlized data belonging to one Moodle version
 * @return mixed the xmlized structure or false on error
 */
function get_environment_for_version($version) {
   
/// Normalize the version requested
    $version = normalize_version($version);

/// Load xml file
    if (!$contents = load_environment_xml()) {
        return false;
    }

/// Detect available versions
    if (!$versions = get_list_of_environment_versions($contents)) {
        return false;
    }

/// If the version requested is available
    if (!in_array($version, $versions)) {
        return false;
    }

/// We now we have it. Extract from full contents.
    $fl_arr = array_flip($versions);
    
    return $contents['COMPATIBILITY_MATRIX']['#']['MOODLE'][$fl_arr[$version]];
}


/** 
 * This function will check for everything (DB, PHP and PHP extensions for now)
 * returning an array of environment_result objects.
 * @param string $version xml version we are going to use to test this server
 * @return array array of results encapsulated in one environment_result object
 */
function environment_check($version) {

/// Normalize the version requested
    $version = normalize_version($version);

    $results = array(); //To store all the results

    $results[] = environment_check_database($version);
    $results[] = environment_check_php($version);

    $phpext_results = environment_check_php_extensions($version);

    $results = array_merge ($results, $phpext_results);

    return $results;
}


/**
 * This function will check if php extensions requirements are satisfied
 * @param string $version xml version we are going to use to test this server
 * @return array array of results encapsulated in one environment_result object
 */
function environment_check_php_extensions($version) {

    $results = array();

/// Get the enviroment version we need
    if (!$data = get_environment_for_version($version)) {
    /// Error. No version data found
        $result = new environment_results('php_extension');
        $result->setStatus(false);
        $result->setErrorCode(NO_VERSION_DATA_FOUND);
        return $result;
    }

/// Extract the php_extension part
    if (!isset($data['#']['PHP_EXTENSIONS']['0']['#']['PHP_EXTENSION'])) {
    /// Error. No PHP section found
        $result = new environment_results('php_extension');
        $result->setStatus(false);
        $result->setErrorCode(NO_PHP_EXTENSIONS_SECTION_FOUND);
        return $result;
    }
/// Iterate over extensions checking them and creating the needed environment_results
    foreach($data['#']['PHP_EXTENSIONS']['0']['#']['PHP_EXTENSION'] as $extension) {
        $result = new environment_results('php_extension');
    /// Check for level
        if (isset($extension['@']['level'])) {
            $level = $extension['@']['level'];
            if ($level != 'optional') {
                $level = 'required';
            }
        }
    /// Check for extension name
        if (!isset($extension['@']['name'])) {
            $result->setStatus(false);
            $result->setErrorCode(NO_PHP_EXTENSIONS_NAME_FOUND);
        } else {
            $extension_name = $extension['@']['name'];
        /// The name exists. Just check if it's an installed extension
            if (!extension_loaded($extension_name)) {
                $result->setStatus(false);
            } else {
                $result->setStatus(true);
            }
            $result->setLevel($level);
            $result->setInfo($extension_name);
        }
    /// Process messages, modifying the $result if needed.
        process_environment_messages($extension, $result);
    /// Process bypass, modifying $result if needed.
        process_environment_bypass($extension, $result);

    /// Add the result to the array of results
        $results[] = $result;
    }


    return $results;
}


/**
 * This function will check if php requirements are satisfied
 * @param string $version xml version we are going to use to test this server
 * @return object results encapsulated in one environment_result object
 */
function environment_check_php($version) {

    $result = new environment_results('php');

/// Get the enviroment version we need
    if (!$data = get_environment_for_version($version)) {
    /// Error. No version data found
        $result->setStatus(false);
        $result->setErrorCode(NO_VERSION_DATA_FOUND);
        return $result;
    }

/// Extract the php part
    if (!isset($data['#']['PHP'])) {
    /// Error. No PHP section found
        $result->setStatus(false);
        $result->setErrorCode(NO_PHP_SECTION_FOUND);
        return $result;
    } else {
    /// Extract level and version
        if (isset($data['#']['PHP']['0']['@']['level'])) {
            $level = $data['#']['PHP']['0']['@']['level'];
            if ($level != 'optional') {
                $level = 'required';
            }
        }
        if (!isset($data['#']['PHP']['0']['@']['version'])) {
            $result->setStatus(false);
            $result->setErrorCode(NO_PHP_VERSION_FOUND);
            return $result;
        } else {
            $needed_version = $data['#']['PHP']['0']['@']['version'];
        }
    }

/// Now search the version we are using
    $current_version = normalize_version(phpversion());

/// And finally compare them, saving results
    if (version_compare($current_version, $needed_version, '>=')) {
        $result->setStatus(true);
    } else {
        $result->setStatus(false);
    }
    $result->setLevel($level);   
    $result->setCurrentVersion($current_version);
    $result->setNeededVersion($needed_version);
/// Process messages, modifying the $result if needed.
    process_environment_messages($data['#']['PHP'][0], $result);
/// Process bypass, modifying $result if needed.
    process_environment_bypass($data['#']['PHP'][0], $result);

    return $result;
}


/**
 * This function will check if database requirements are satisfied
 * @param string $version xml version we are going to use to test this server
 * @return object results encapsulated in one environment_result object
 */
function environment_check_database($version) {

    global $db;

    $result = new environment_results('database');

    $vendors = array();  //Array of vendors in version

/// Get the enviroment version we need
    if (!$data = get_environment_for_version($version)) {
    /// Error. No version data found
        $result->setStatus(false);
        $result->setErrorCode(NO_VERSION_DATA_FOUND);
        return $result;
    }

/// Extract the database part
    if (!isset($data['#']['DATABASE'])) {
    /// Error. No DATABASE section found
        $result->setStatus(false);
        $result->setErrorCode(NO_DATABASE_SECTION_FOUND);
        return $result;
    } else {
    /// Extract level
        if (isset($data['#']['DATABASE']['0']['@']['level'])) {
            $level = $data['#']['DATABASE']['0']['@']['level'];
            if ($level != 'optional') {
                $level = 'required';
            }
        }
    }

/// Extract DB vendors. At least 2 are mandatory (mysql & postgres)
    if (!isset($data['#']['DATABASE']['0']['#']['VENDOR'])) {
    /// Error. No VENDORS found
        $result->setStatus(false);
        $result->setErrorCode(NO_DATABASE_VENDORS_FOUND);
        return $result;
    } else {
    /// Extract vendors
        foreach ($data['#']['DATABASE']['0']['#']['VENDOR'] as $vendor) {
            if (isset($vendor['@']['name']) && isset($vendor['@']['version'])) {
                $vendors[$vendor['@']['name']] = $vendor['@']['version'];
                $vendorsxml[$vendor['@']['name']] = $vendor;
            }
        }
    }
/// Check we have the mysql vendor version
    if (empty($vendors['mysql'])) {
        $result->setStatus(false);
        $result->setErrorCode(NO_DATABASE_VENDOR_MYSQL_FOUND);
        return $result;
    }
/// Check we have the postgres vendor version
    if (empty($vendors['postgres'])) {
        $result->setStatus(false);
        $result->setErrorCode(NO_DATABASE_VENDOR_POSTGRES_FOUND);
        return $result;
    }

/// Now search the version we are using (depending of vendor)
    $current_vendor = $db->databaseType;
    if ($current_vendor == 'postgres7') {  //Normalize a bit postgresql
        $current_vendor ='postgres';
    }
    $dbinfo = $db->ServerInfo();
    $current_version = normalize_version($dbinfo['version']);
    $needed_version = $vendors[$current_vendor];

/// Check we have a needed version
    if (!$needed_version) {
        $result->setStatus(false);
        $result->setErrorCode(NO_DATABASE_VENDOR_VERSION_FOUND);
        return $result;
    }

/// And finally compare them, saving results
    if (version_compare($current_version, $needed_version, '>=')) {
        $result->setStatus(true);
    } else {
        $result->setStatus(false);
    }
    $result->setLevel($level);   
    $result->setCurrentVersion($current_version);
    $result->setNeededVersion($needed_version);
    $result->setInfo($current_vendor);

/// Process messages, modifying the $result if needed.
    process_environment_messages($vendorsxml[$current_vendor], $result);
/// Process bypass, modifying $result if needed.
    process_environment_bypass($vendorsxml[$current_vendor], $result);

    return $result;

}

/**
 * This function will post-process the result record by executing the specified
 * function, modifying it as necessary, also a custom message will be added
 * to the result object to be printed by the display layer.
 * Every bypass function must be defined in this file and it'll return
 * true/false to decide if the original test is bypassed or no. Also
 * such bypass functions are able to directly handling the result object
 * although it should be only under exceptional conditions.
 *
 * @param string xmldata containing the bypass data
 * @param object reult object to be updated
 */
function process_environment_bypass($xml, &$result) {

/// Only try to bypass if we were in error and it was required
    if ($result->getStatus() || $result->getLevel() == 'optional') {
        return;
    }

/// It there is bypass info (function and message)
    if (is_array($xml['#']) && isset($xml['#']['BYPASS'][0]['@']['function']) && isset($xml['#']['BYPASS'][0]['@']['message'])) {
        $function = $xml['#']['BYPASS'][0]['@']['function'];
        $message  = $xml['#']['BYPASS'][0]['@']['message'];
    /// Look for the function
        if (function_exists($function)) {
        /// Call it, and if bypass = true is returned, apply meesage
            if ($function($result)) {
            /// We only set the bypass message if the function itself hasn't defined it before
                if (empty($result->getBypassStr)) {
                    $result->setBypassStr($message);
                }
            }
        }
    }
}

/**
 * This function will detect if there is some message available to be added to the
 * result in order to clarify enviromental details.
 * @param string xmldata containing the feedback data
 * @param object reult object to be updated
 */
function process_environment_messages($xml, &$result) {

/// If there is feedback info
    if (is_array($xml['#']) && isset($xml['#']['FEEDBACK'][0]['#'])) {
        $feedbackxml = $xml['#']['FEEDBACK'][0]['#'];

        if (!$result->status and $result->getLevel() == 'required') {
            if (isset($feedbackxml['ON_ERROR'][0]['@']['message'])) {
                $result->setFeedbackStr($feedbackxml['ON_ERROR'][0]['@']['message']);
            }
        } else if (!$result->status and $result->getLevel() == 'optional') {
            if (isset($feedbackxml['ON_CHECK'][0]['@']['message'])) {
                $result->setFeedbackStr($feedbackxml['ON_CHECK'][0]['@']['message']);
            }
        } else {
            if (isset($feedbackxml['ON_OK'][0]['@']['message'])) {
                $result->setFeedbackStr($feedbackxml['ON_OK'][0]['@']['message']);
            }
        }
    }
}


//--- Helper Class to return results to caller ---//


/** 
 * This class is used to return the results of the environment
 * main functions (environment_check_xxxx)
 */
class environment_results {

    var $part;            //which are we checking (database, php, php_extension)
    var $status;          //true/false
    var $error_code;      //integer. See constants at the beginning of the file
    var $level;           //required/optional
    var $current_version; //current version detected
    var $needed_version;  //version needed
    var $info;            //Aux. info (DB vendor, library...)
    var $feedback_str;    //String to show on error|on check|on ok
    var $bypass_str;      //String to show if some bypass has happened

    /**
     * Constructor of the environment_result class. Just set default values
     */
    function environment_results($part) {
        $this->part=$part;
        $this->status=false;
        $this->error_code=NO_ERROR;
        $this->level='required';
        $this->current_version='';
        $this->needed_version='';
        $this->info='';
        $this->feedback_str='';
        $this->bypass_str='';
    }

    /**
     * Set the status
     * @param boolean the status (true/false)
     */
    function setStatus($status) {
        $this->status=$status;
        if ($status) {
            $this->setErrorCode(NO_ERROR);
        }
    }

    /**
     * Set the error_code
     * @param integer the error code (see constants above)
     */
    function setErrorCode($error_code) {
        $this->error_code=$error_code;
    }

    /**
     * Set the level
     * @param string the level (required, optional)
     */
    function setLevel($level) {
        $this->level=$level;
    }

    /**
     * Set the current version
     * @param string the current version
     */
    function setCurrentVersion($current_version) {
        $this->current_version=$current_version;
    }

    /**
     * Set the needed version
     * @param string the needed version
     */
    function setNeededVersion($needed_version) {
        $this->needed_version=$needed_version;
    }

    /**
     * Set the auxiliary info
     * @param string the auxiliary info
     */
    function setInfo($info) {
        $this->info=$info;
    }
    
    /**
     * Set the feedback string
     * @param string the feedback string
     */
    function setFeedbackStr($str) {
        $this->feedback_str=$str;
    }

    /**
     * Set the bypass string
     * @param string the bypass string
     */
    function setBypassStr($str) {
        $this->bypass_str=$str;
    }

    /**
     * Get the status
     * @return boolean result
     */
    function getStatus() {
        return $this->status;
    }

    /**
     * Get the error code
     * @return integer error code
     */
    function getErrorCode() {
        return $this->error_code;
    }

    /**
     * Get the level
     * @return string level
     */
    function getLevel() {
        return $this->level;
    }

    /**
     * Get the current version 
     * @return string current version
     */
    function getCurrentVersion() {
        return $this->current_version;
    }

    /**
     * Get the needed version
     * @return string needed version
     */
    function getNeededVersion() {
        return $this->needed_version;
    }

    /**
     * Get the aux info
     * @return string info
     */
    function getInfo() {
        return $this->info;
    }

    /**
     * Get the part this result belongs to
     * @return string part
     */
    function getPart() {
        return $this->part;
    }

    /**
     * Get the feedback string
     * @return string feedback string
     */
    function getFeedbackStr() {
        return $this->feedback_str;
    }

    /**
     * Get the bypass string
     * @return string bypass string
     */
    function getBypassStr() {
        return $this->bypass_str;
    }
}

/// Here all the bypass functions are coded to be used by the environment
/// checker. All those functions will receive the result object and will
/// return it modified as needed (status and bypass string)

/**
 * This function will bypass MySQL 4.1.16 reqs if:
 *   - We are using MySQL > 4.1.12, informing about problems with non latin chars in the future
 *
 * @param object result object to handle
 * @return boolean true/false to the terminate if the bypass has to be performed (true) or no (false)
 */
function bypass_mysql416_reqs ($result) {
/// See if we are running MySQL >= 4.1.12
    if (version_compare($result->getCurrentVersion(), '4.1.12', '>=')) {
        return true;
    }

    return false;
}

?>
