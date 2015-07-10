<?php // $Id: langdoc.php,v 1.6.2.1 2005/05/30 09:31:28 mudrd8mz Exp $

/**
This script enables Moodle translators to edit /docs and /help language
files directly via WWW interface.

Author:     mudrd8mz@uxit.pedf.cuni.cz (http://moodle.cz)
Based on:   lang.php in 1.4.3+ release
Thanks:     Jaime Villate for important bug fixing, koen roggemans for his job and all moodlers
            for intensive testing of this my first contribution
*/

    //
    // Some local configuration
    //
    $fileeditorrows = 12;           // number of textareas' rows
    $fileeditorcols = 100;          // dtto cols
    $fileeditorinline = 1;          // shall be textareas put in one row?
    $filemissingmark = ' (***)';    // mark to add to non-existing filenames in selection form
    $fileoldmark = ' (old?)';       // mark to add to filenames in selection form id english version is newer
                                    // or to filenames with filesize() == 0
    $filetemplate = '';             // template for new files, i.e. '$Id: langdoc.php,v 1.6.2.1 2005/05/30 09:31:28 mudrd8mz Exp $';

    require_once("../config.php");

    $currentfile = optional_param('currentfile', 'docs/README.txt', PARAM_PATH); 

    require_login();

    if (!isadmin()) {
        error("You need to be admin to edit this page");
    }     

    if (! $site = get_site()) {
        error("Site not defined!");
    }

    $stradministration = get_string("administration");
    $strconfiguration = get_string("configuration");
    $strlanguage = get_string("language");
    $strcurrentlanguage = get_string("currentlanguage");
    $strthislanguage = get_string("thislanguage");
    $stredithelpdocs = get_string('edithelpdocs', 'admin');

    print_header("$site->shortname: $stredithelpdocs: $currentfile", "$site->fullname",
                 "<a href=\"index.php\">$stradministration</a> -> ".
                 "<a href=\"configure.php\">$strconfiguration</a> -> 
                  <a href=\"lang.php\">$strlanguage</a> -> $stredithelpdocs",
                 'choosefile.popup', '', true);

    $currentlang = current_language();
    $langdir = "$CFG->dirroot/lang/$currentlang";
    $enlangdir = "$CFG->dirroot/lang/en";

    // Shall I save POSTed data?

    if (isset($_POST['currentfile'])) {
        if (confirm_sesskey()) {
            if (langdoc_save_file($langdir, $currentfile, $_POST['filedata'])) {
                notify(get_string("changessaved")." ($langdir/$currentfile)", "green");
            } else {
                error("Could not save the file '$currentfile'!", "langdoc.php?currentfile=$currentfile&sesskey=$USER->sesskey");
            }
        }
    }

    error_reporting(0); // Error reporting turned off due to non-existing files

    // Generate selection for all help and documentation files

    // Get all files from /docs directory

    if (! $files = get_directory_list("$CFG->dirroot/lang/en/docs", "CVS")) {
        error("Could not find English language docs files!");
    }

    $options = array();

    foreach ($files as $filekey => $file) {    // check all the docs files.
        $options["docs/$file"] = "docs/$file";
        // add mark if file doesn't exist or is empty
        if (( !file_exists("$langdir/docs/$file")) || (filesize("$langdir/docs/$file") == 0)) {
            $options["docs/$file"] .= "$filemissingmark";
        } else {       
            if (filemtime("$langdir/docs/$file") < filemtime("$CFG->dirroot/lang/en/docs/$file")) {
                $options["docs/$file"] .= "$fileoldmark";
            }
        }    
    }

    // Get all files from /help directory

    if (! $files = get_directory_list("$CFG->dirroot/lang/en/help", "CVS")) {
        error("Could not find English language help files!");
    }

    foreach ($files as $filekey => $file) {    // check all the help files.
        $options["help/$file"] = "help/$file";
        if (( !file_exists("$langdir/help/$file")) || (filesize("$CFG->dirroot/lang/en/help/$file") == 0)) {
            $options["help/$file"] .= "$filemissingmark";
        } else {
            if (filemtime("$langdir/help/$file") < filemtime("$langdir/help/$file")) {
                $options["help/$file"] .= "$fileoldmark";
            }
        }    
    }

    echo "<table align=\"center\"><tr><td align=\"center\">";
    echo popup_form ("$CFG->wwwroot/$CFG->admin/langdoc.php?sesskey=$USER->sesskey&amp;currentfile=", $options, "choosefile", $currentfile, "", "", "", true);
    echo "</td></tr></table>";

    // Generate textareas

    if (!empty($currentfile)) {

        if (!file_exists("$langdir/$currentfile")) {
            //check if directory exist
            $pathparts = explode('/',$currentfile);
            $checkpath = $langdir;
            for ($a=0; $a < count($pathparts)-1 ; $a++) {
                $checkpath .= "/".$pathparts[$a];
                if(!file_exists($checkpath)){
                     if(!mkdir($checkpath)){
                         echo ("Cannot create directory: $checkpath");
                     }    
                }    
            }
            //
            // file doesn't exist - let's check webserver's permission to create it
            //
            if (!touch("$langdir/$currentfile")) {
                //
                // webserver is unable to create new file
                //
                echo "<p align=\"center\"><font color=red>".get_string("filemissing", "", "
$langdir/$currentfile")."</font></p>";
                $editable = false;
            } else {
                //
                // webserver can create new file - we can delete it now and let
                // the langdoc_save_file() create it again if its filesize() > 0
                //
                $editable = true;
                unlink("$langdir/$currentfile");
            }
        } elseif ($f = fopen("$langdir/$currentfile","r+")) {
            //
            // file exists and is writeable - good for you, translator ;-)
            //
            $editable = true;
            fclose($f);
        } else {
            //
            // file exists but it is not writeable by web server process :-(
            //
            $editable = false;
            echo "<p><font size=1>".get_string("makeeditable", "", "$langdir/$currentfile")
."</font></p>";
        }

        echo "<table align=\"center\"><tr valign=\"center\"><td align=\"center\">\n";
        echo "<textarea rows=\"$fileeditorrows\" cols=\"$fileeditorcols\" name=\"\">\n";
        echo htmlspecialchars(file_get_contents("$enlangdir/$currentfile"));
        echo "</textarea>\n";
        link_to_popup_window("/lang/en/$currentfile", "popup", get_string("preview"));
        echo "</td>\n";
        if ($fileeditorinline == 1) {
            echo "</tr>\n<tr valign=\"center\">\n";
        }
        echo "<td align=\"center\">\n";

        if ($editable) {
            echo "<form name=\"$currentfile\" action=\"langdoc.php\" method=\"post\">";
            echo '<input type="hidden" name="sesskey" value="'.$USER->sesskey.'" />';
            echo '<input type="hidden" name="currentfile" value="'.$currentfile.'" />';
        }

        echo "<textarea rows=\"$fileeditorrows\" cols=\"$fileeditorcols\" name=\"filedata\">\n";

        if (file_exists("$langdir/$currentfile")) {
	    echo htmlspecialchars(file_get_contents("$langdir/$currentfile"));
        } else {
            echo ($filetemplate);
        }

        echo "</textarea>\n";
        link_to_popup_window("/lang/$currentlang/$currentfile", "popup", get_string("preview"));
        echo "</td>\n</tr>\n</table>";

        if ($editable) {
            echo '<div align="center"><input type="submit" value="'.get_string('savechanges').': lang/'.$currentlang.'/'.$currentfile.'" /></div>';
            echo '</form>';
        }

        error_reporting($CFG->debug);
    }

    print_footer();

//////////////////////////////////////////////////////////////////////

function langdoc_save_file($path, $file, $content) {

// $path is a full pathname to the file
// $file is the file to overwrite.
// $content are data to write

    global $CFG, $USER;

    error_reporting(0);
    
    if (!$f = fopen("$path/$file","w")) {
        error_reporting($CFG->debug);
        return false;
    }
    
    error_reporting($CFG->debug);

    $content = str_replace("\r", "",$content);              // Remove linefeed characters
    $content = preg_replace("/\n{3,}/", "\n\n", $content);  // Collapse runs of blank lines
    $content = trim($content);                              // Delete leading/trailing whitespace
        
    fwrite($f, stripslashes($content));

    fclose($f);

    // Remove file if its empty

    if (filesize("$path/$file") == 0) {
        unlink("$path/$file");
    }

    return true;
}

?>
