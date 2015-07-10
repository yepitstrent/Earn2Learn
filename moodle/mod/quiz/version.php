<?php // $Id: version.php,v 1.74.2.3 2005/10/05 01:35:13 mjollnir_ Exp $

////////////////////////////////////////////////////////////////////////////////
//  Code fragment to define the version of quiz
//  This fragment is called by moodle_needs_upgrading() and /admin/index.php
////////////////////////////////////////////////////////////////////////////////

$module->version  = 2005060302;   // The (date) version of this module
$module->requires = 2005021600;   // Requires this Moodle version
$module->cron     = 0;            // How often should cron check this module (seconds)?

?>
