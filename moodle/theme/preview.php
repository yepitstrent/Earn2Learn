<?php // $Id: preview.php,v 1.3 2005/02/13 08:34:09 moodler Exp $

    require_once("../config.php");
    echo "PREVIEW.PHP\n";
    $preview = optional_param('preview','standard',PARAM_FILE); // which theme to show

    if (!file_exists($preview)) {
        $preview = 'standard';
    }

    if (! $site = get_site()) {
        error("Site doesn't exist!");
    }

    require_login();

    if (!isadmin()) {
        error("You must be an administrator to change themes.");
    }

    $CFG->theme = $preview;

    theme_setup($CFG->theme, array('forceconfig='.$CFG->theme));

    $stradministration = get_string("administration");
    $strconfiguration = get_string("configuration");
    $strthemes = get_string("themes");
    $strpreview = get_string("preview");
    $strsavechanges = get_string("savechanges");
    $strtheme = get_string("theme");
    $strthemesaved = get_string("themesaved");

    print_header("$site->shortname: $strpreview", $site->fullname, "$strthemes -> $strpreview");

    print_simple_box_start('center', '80%');
    print_heading($preview);
    print_simple_box_end();

    print_footer();

?>
