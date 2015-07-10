<?php // $Id: maintenance.php,v 1.4 2005/05/11 08:57:14 paca70 Exp $
      // Enables/disables maintenance mode

    require('../config.php');

    $action = optional_param('action', '', PARAM_ALPHA);
    $sesskey = optional_param('sesskey');

    require_login();

    if (!isadmin()) {
        error('You need to be admin to use this page');
    }

    //Check folder exists
    if (! make_upload_directory(SITEID)) {   // Site folder
            error("Could not create site folder.  The site administrator needs to fix the file permissions");
        }

    $filename = $CFG->dataroot.'/'.SITEID.'/maintenance.html';

    if ($form = data_submitted()) {
        if (confirm_sesskey()) {
            if ($form->action == "disable") {
                unlink($filename);
                redirect('index.php', get_string('sitemaintenanceoff','admin'));
            } else {
                $file = fopen($filename, 'w');
                fwrite($file, stripslashes($form->text));
                fclose($file);
                redirect('index.php', get_string('sitemaintenanceon', 'admin'));
            }
        }
    }

/// Print the header stuff

    $strmaintenance = get_string('sitemaintenancemode', 'admin');
    $stradmin = get_string('administration');
    $strconfiguration = get_string('configuration');

    print_header("$SITE->shortname: $strmaintenance", $SITE->fullname,
                  "<a href=\"index.php\">$stradmin</a> -> ".
                  "<a href=\"configure.php\">$strconfiguration</a> -> $strmaintenance");

    print_heading($strmaintenance);

/// Print the appropriate form

    if (file_exists($filename)) {   // We are in maintenance mode
        echo '<center>';
        echo '<form action="maintenance.php" method="post">';
        echo '<input type="hidden" name="action" value="disable">';
        echo '<input type="hidden" name="sesskey" value="'.sesskey().'">';
        echo '<p><input type="submit" value="'.get_string('disable').'"></p>';
        echo '</form>';
        echo '</center>';
    } else {                        // We are not in maintenance mode
        $usehtmleditor = can_use_html_editor();

        echo '<center>';
        echo '<form action="maintenance.php" method="post">';
        echo '<input type="hidden" name="action" value="enable">';
        echo '<input type="hidden" name="sesskey" value="'.sesskey().'">';
        echo '<p><input type="submit" value="'.get_string('enable').'"></p>';
        echo '<p>'.get_string('optionalmaintenancemessage', 'admin').':</p>';
        echo '<table><tr><td>';
        print_textarea($usehtmleditor, 20, 50, 600, 400, "text");
        echo '</td></tr></table>';
        echo '</form>';
        echo '</center>';

        if ($usehtmleditor) { 
            use_html_editor();
        }
    }

    print_footer();
?>
