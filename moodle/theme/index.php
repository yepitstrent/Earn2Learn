<?php // $Id: index.php,v 1.25.2.1 2005/06/09 08:23:26 moodler Exp $
    echo "INDEX.PHP IN THEME:\n";
    require_once("../config.php");

    $choose = optional_param("choose",'',PARAM_FILE);   // set this theme as default

    if (! $site = get_site()) {
        error("Site doesn't exist!");
    }

    require_login();

    if (!isadmin()) {
        error("You must be an administrator to change themes.");
    }

    unset($SESSION->theme);

    $stradministration = get_string("administration");
    $strconfiguration = get_string("configuration");
    $strthemes = get_string("themes");
    $strpreview = get_string("preview");
    $strchoose = get_string("choose");
    $strinfo = get_string("info");
    $strtheme = get_string("theme");
    $strthemesaved = get_string("themesaved");
    $strscreenshot = get_string("screenshot");
    $stroldtheme = get_string("oldtheme");


    if ($choose and confirm_sesskey()) {
        if (!is_dir($choose)) {
            error("This theme is not installed!");
        }
        if (set_config("theme", $choose)) {
            theme_setup($choose);

            print_header("$site->shortname: $strthemes", $site->fullname, 
                 "<a href=\"$CFG->wwwroot/$CFG->admin/index.php\">$stradministration</a> -> ".
                 "<a href=\"$CFG->wwwroot/$CFG->admin/configure.php\">$strconfiguration</a> -> $strthemes");
            print_heading(get_string("themesaved"));
            print_continue("$CFG->wwwroot/");

            if (file_exists("$choose/README.html")) {
                print_simple_box_start("center");
                readfile("$choose/README.html");
                print_simple_box_end();

            } else if (file_exists("$choose/README.txt")) {
                print_simple_box_start("center");
                $file = file("$choose/README.txt");
                echo format_text(implode('', $file), FORMAT_MOODLE);
                print_simple_box_end();
            }
            print_footer();
            exit;
        } else {
            error("Could not set the theme!");
        }
    }

    print_header("$site->shortname: $strthemes", $site->fullname, 
                 "<a href=\"$CFG->wwwroot/$CFG->admin/index.php\">$stradministration</a> -> ".
                 "<a href=\"$CFG->wwwroot/$CFG->admin/configure.php\">$strconfiguration</a> -> $strthemes");


    print_heading($strthemes);

    $themes = get_list_of_plugins("theme");
    $sesskey = !empty($USER->id) ? $USER->sesskey : '';

    echo "<table align=\"center\" cellpadding=\"7\" cellspacing=\"5\">";
    echo "<tr class=\"generaltableheader\"><th>$strtheme</th><th>$strinfo</th></tr>";
    foreach ($themes as $theme) {

        unset($THEME);

        if (!file_exists($CFG->themedir.$theme.'/config.php')) {   // bad folder
            continue;
        }

        include($CFG->themedir.$theme.'/config.php');

        $readme = '';
        $screenshot = '';
        $screenshotpath = '';

        if (file_exists("$theme/README.html")) {
            $readme =  '<li>'.
            link_to_popup_window('/theme/'.$theme.'/README.html', $theme, $strinfo, 400, 500, '', 'none', true).'</li>';
        } else if (file_exists("$theme/README.txt")) {
            $readme =  '<li>'.
            link_to_popup_window('/theme/'.$theme.'/README.txt', $theme, $strinfo, 400, 500, '', 'none', true).'</li>';
        }
        if (file_exists("$theme/screenshot.png")) {
            $screenshotpath = "$theme/screenshot.png";
        } else if (file_exists("$theme/screenshot.jpg")) {
            $screenshotpath = "$theme/screenshot.jpg";
        }

        echo "<tr>";
        echo "<td align=\"center\">";

        if ($screenshotpath) {
            $screenshot = "<li><a target=\"$theme\" href=\"$theme/screenshot.jpg\">$strscreenshot</a></li>";
            echo "<iframe name=\"$theme\" src=\"$screenshotpath\" height=\"200\" width=\"400\"></iframe></td>";
        } else {
            echo "<iframe name=\"$theme\" src=\"preview.php?preview=$theme\" height=\"200\" width=\"400\"></iframe></td>";
        }


        if ($CFG->theme == $theme) {
            echo '<td valign="top" style="border-style:solid; border-width:1px; border-color=#555555">';
        } else {
            echo '<td valign="top">';
        }

        if (isset($THEME->sheets)) {
            echo '<p style="font-size:1.5em;font-style:bold;">'.$theme.'</p>';
        } else {
            echo '<p style="font-size:1.5em;font-style:bold;color:red;">'.$theme.' (Moodle 1.4)</p>';
        }

        echo '<ul>';

        if ($screenshot or $readme) {
            echo "<li><a target=\"$theme\" href=\"preview.php?preview=$theme\">$strpreview</a></li>";
        }
        echo $screenshot.$readme;
        echo '</ul>';

        $options = null;
        $options['choose'] = $theme;
        $options['sesskey'] = $sesskey;
        print_single_button('index.php', $options, $strchoose);
        echo '</td>';
        echo "</tr>";
    }
    echo "</table>";

    echo "<br /><div align=\"center\">";
    $options["frame"] = "developer.html";
    $options["sub"] = "themes";
    print_single_button("$CFG->wwwroot/doc/index.php", $options, get_string("howtomakethemes"));
    echo "</div>";
    print_footer();

?>
