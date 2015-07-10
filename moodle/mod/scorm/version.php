<?php // $Id: version.php,v 1.24.2.1 2005/07/26 06:18:23 bobopinna Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of scorm
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2005052300;   // The (date) version of this module
$module->requires = 2005021600;   // The version of Moodle that is required
$module->cron     = 0;            // How often should cron check this module (seconds)?

?>
