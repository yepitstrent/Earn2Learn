<?php 
// $Id: logout.php,v 1.1.2.1 2005/07/05 16:59:29 skodak Exp $
// logout the user from CAS server (destroy the ticket)
defined('MOODLE_INTERNAL') or die('Direct access to this script is forbidden.');

       include_once($CFG->dirroot.'/lib/cas/CAS.php');
       phpCAS::client($CFG->cas_version,$CFG->cas_hostname,(Integer)$CFG->cas_port,$CFG->cas_baseuri);
       $backurl = $CFG->wwwroot;
       phpCAS::logout($backurl);

?>