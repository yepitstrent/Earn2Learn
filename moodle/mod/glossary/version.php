<?php // $Id: version.php,v 1.46 2005/04/19 00:16:58 stronk7 Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of glossary
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2005041900;
$module->requires = 2005031000;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

$release = "1.5 development";   // User-friendly version number

?>
