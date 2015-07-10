<?php // $Id: version.php,v 1.18 2005/03/10 13:30:47 moodler Exp $

/////////////////////////////////////////////////////////////////////////////////
///  Code fragment to define the version of chat
///  This fragment is called by moodle_needs_upgrading() and /admin/index.php
/////////////////////////////////////////////////////////////////////////////////

$module->version  = 2005031000;   // The (date) version of this module
$module->requires = 2005031000;  // Requires this Moodle version
$module->cron     = 300;          // How often should cron check this module (seconds)?

?>
