<?php // $Id: version.php,v 1.11 2004/11/19 03:05:37 mjollnir_ Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of label
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2004111200;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2004052505;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

?>
