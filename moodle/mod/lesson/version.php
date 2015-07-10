<?PHP // $Id: version.php,v 1.15.2.1 2005/06/09 21:26:21 michaelpenne Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of lesson
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2005060900;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2005021600;  // Requires this Moodle version
$module->cron     = 0;           // Period for cron to check this module (secs)

?>
