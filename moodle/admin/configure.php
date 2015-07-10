<?php // $Id: configure.php,v 1.18 2005/02/10 05:11:14 moodler Exp $

    require_once('../config.php');

    require_login();

    if (!isadmin()) {
        error('Only admins can access this page');
    }

    if (!$site = get_site()) {
        redirect('index.php');
    }

    $stradministration   = get_string('administration');
    $strconfiguration  = get_string('configuration');

    print_header("$site->shortname: $stradministration: $strconfiguration", "$site->fullname", 
                 '<a href="index.php">'. "$stradministration</a> -> $strconfiguration");

    print_heading($strconfiguration);

    $table->align = array ('right', 'left');

    $table->data[] = array("<strong><a href=\"config.php\">". get_string('configvariables', 'admin') .'</a></strong>',
                           get_string('adminhelpconfigvariables'));
    $table->data[] = array("<strong><a href=\"site.php\">". get_string('sitesettings') .'</a></strong>',
                           get_string('adminhelpsitesettings'));
    $table->data[] = array("<strong><a href=\"../theme/index.php\">". get_string('themes') .'</a></strong>',
                           get_string('adminhelpthemes'));
    $table->data[] = array("<strong><a href=\"lang.php\">". get_string('language') .'</a></strong>',
                           get_string('adminhelplanguage'));
    $table->data[] = array("<strong><a href=\"modules.php\">".get_string('managemodules'). ' </a></strong>',
                           get_string('adminhelpmanagemodules'));
    $table->data[] = array("<strong><a href=\"blocks.php\">". get_string('manageblocks') .'</a></strong>',
                           get_string('adminhelpmanageblocks'));
    $table->data[] = array("<strong><a href=\"filters.php\">". get_string('managefilters') .'</a></strong>',
                           get_string('adminhelpmanagefilters'));
    if (!isset($CFG->disablescheduledbackups)) {
        $table->data[] = array("<strong><a href=\"backup.php\">".get_string("backup")."</a></strong>",
                               get_string('adminhelpbackup'));
    }

    $table->data[]= array("<strong><a href=\"editor.php\">". get_string('editorsettings') ."</a></strong>",
                    get_string('adminhelpeditorsettings'));
    $table->data[]= array("<strong><a href=\"calendar.php\">". get_string('calendarsettings', 'admin') ."</a></strong>",
                    get_string('helpcalendarsettings', 'admin'));
    $table->data[]= array("<strong><a href=\"maintenance.php\">". get_string('sitemaintenancemode', 'admin') ."</a></strong>",
                    get_string('helpsitemaintenance', 'admin'));
    print_table($table);
    
    print_footer($site);

?>


