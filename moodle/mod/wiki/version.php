<?PHP // $Id: version.php,v 1.14 2005/03/10 13:30:55 moodler Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of Wiki
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2005031000;  // The current module version (Date: YYYYMMDDXX)
$module->requires = 2005031000;  // The current module version (Date: YYYYMMDDXX)
$module->cron     = 0;           // Period for cron to check this module (secs)

?>
