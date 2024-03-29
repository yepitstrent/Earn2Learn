<?PHP // $Id: lang.php,v 1.55.2.1 2005/07/14 16:01:23 moodler Exp $

    require_once("../config.php");

    $mode = optional_param('mode', '', PARAM_ALPHA);
    $currentfile = optional_param('currentfile', 'moodle.php', PARAM_FILE);

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
    $strmissingstrings = get_string("missingstrings");
    $streditstrings = get_string("editstrings", 'admin');
    $stredithelpdocs = get_string("edithelpdocs", 'admin');
    $strthislanguage = get_string("thislanguage");

    switch ($mode) {
        case "missing":
            $navigation = "<a href=\"lang.php\">$strlanguage</a> -> $strmissingstrings";
            $title = $strmissingstrings;
            $button = '<form target="'.$CFG->framename.'" method="get" action="'.$CFG->wwwroot.'/'.$CFG->admin.'/lang.php">'.
                      '<input type="hidden" name="mode" value="compare" />'.
                      '<input type="submit" value="'.$streditstrings.'" /></form>';
            break;
        case "compare":
            $navigation = "<a href=\"lang.php\">$strlanguage</a> -> $streditstrings";
            $title = $streditstrings;
            $button = '<form target="'.$CFG->framename.'" method="get" action="'.$CFG->wwwroot.'/'.$CFG->admin.'/lang.php">'.
                      '<input type="hidden" name="mode" value="missing" />'.
                      '<input type="submit" value="'.$strmissingstrings.'" /></form>';
            break;
        default:
            $title = $strlanguage;
            $navigation = $strlanguage;
            $button = '';
            break;
    }

    $currentlang = current_language();

    print_header("$site->shortname: $title", "$site->fullname",
                 "<a href=\"index.php\">$stradministration</a> -> ".
                 "<a href=\"configure.php\">$strconfiguration</a> -> $navigation",
                 '', '', true, $button);

    if (!$mode) {
        $currlang = current_language();
        $langs = get_list_of_languages();
        echo "<table align=\"center\"><tr><td align=\"right\">";
        echo "<b>$strcurrentlanguage:</b>";
        echo "</td><td>";
        echo popup_form ("$CFG->wwwroot/$CFG->admin/lang.php?lang=", $langs, "chooselang", $currlang, "", "", "", true);
        echo '</td></tr><tr><td colspan="2">';
        $options["lang"] = $currentlang;
        print_single_button("http://moodle.org/download/lang/", $options, get_string("latestlanguagepack"));
        echo "</td></tr></table>";
        print_heading("<a href=\"lang.php?mode=missing\">$strmissingstrings</a>");
        print_heading("<a href=\"lang.php?mode=compare\">$streditstrings</a>");
        print_heading("<a href=\"langdoc.php\">$stredithelpdocs</a>");
        print_footer();
        exit;
    }

    // Get a list of all the root files in the English directory

    $langdir = "$CFG->dirroot/lang/$currentlang";
    $enlangdir = "$CFG->dirroot/lang/en";

    if (! $stringfiles = get_directory_list($enlangdir, "", false)) {
        error("Could not find English language pack!");
    }

    foreach ($stringfiles as $key => $file) {
        if (substr($file, -4) != ".php") {
            unset($stringfiles[$key]);
        }
    }

    if ($mode == "missing") {
        // For each file, check that a counterpart exists, then check all the strings
    
        foreach ($stringfiles as $file) {
            unset($string);
            include("$enlangdir/$file");
            $enstring = $string;  
            
            unset($string);

            if (file_exists("$langdir/$file")) {
                include("$langdir/$file");
            } else {
                notify(get_string("filemissing", "", "$langdir/$file"));
                $string = array();
            }
    
            $first = true;
            foreach ($enstring as $key => $value) {
                if (empty($string[$key])) {
                    $value = htmlspecialchars($value);
                    $value = str_replace("$"."a", "\\$"."a", $value);
                    $value = str_replace("%%","%",$value);
                    if ($first) {
                        echo "<p><b>".get_string("stringsnotset","","$langdir/$file")."</b></p><pre>";
                        $first = false;
                        $somethingfound = true;
                    }
                    echo "$"."string['$key'] = \"$value\";<br />";
                }
            }
            if (!$first) {
                echo '</pre><hr />';
            }
        }
  
        if (! $files = get_directory_list("$CFG->dirroot/lang/en/help", "CVS")) {
            error("Could not find English language help files!");
        }
    
        foreach ($files as $filekey => $file) {    // check all the help files.
            if (!file_exists("$langdir/help/$file")) {
                echo "<p><font color=\"red\">".get_string("filemissing", "", "$langdir/help/$file")."</font></p>";
                $somethingfound = true;
                continue;
            }
        }
    
        if (! $files = get_directory_list("$CFG->dirroot/lang/en/docs", "CVS")) {
            error("Could not find English language docs files!");
        }
        foreach ($files as $filekey => $file) {    // check all the docs files.
            if (!file_exists("$langdir/docs/$file")) {
                echo "<p><font color=\"red\">".get_string("filemissing", "", "$langdir/docs/$file")."</font></p>";
                $somethingfound = true;
                continue;
            }
        }
    
        if (!empty($somethingfound)) {
            print_continue("lang.php");
        } else {
            notice(get_string("languagegood"), "lang.php");
        }

    } else if ($mode == "compare") {

        if (isset($_POST['currentfile'])){   // Save a file
            if (!confirm_sesskey()) {
                error(get_string('confirmsesskeybad', 'error'));
            }
            $newstrings = $_POST;
            unset($newstrings['currentfile']);
            if (lang_save_file($langdir, $currentfile, $newstrings)) {
                notify(get_string("changessaved")." ($langdir/$currentfile)", "green");
            } else {
                error("Could not save the file '$currentfile'!", "lang.php?mode=compare&amp;currentfile=$currentfile");
            }
        }

        print_heading_with_help($streditstrings, "langedit");

        print_simple_box_start("center", "80%");
        echo '<center><font size="2">';
        foreach ($stringfiles as $file) {
            if ($file == $currentfile) {
                echo "<b>$file</b> &nbsp; ";
            } else {
                echo "<a href=\"lang.php?mode=compare&amp;currentfile=$file\">$file</a> &nbsp; ";
            }
        }
        echo '</font></center>';
        print_simple_box_end();

        
        print_heading("$currentfile", "center", 4);

        if (!file_exists("$langdir/$currentfile")) {
            if (!touch("$langdir/$currentfile")) {
                echo "<p><font color=\"red\">".get_string("filemissing", "", "$langdir/$currentfile")."</font></p>";
                continue;
            }
        }

        error_reporting(0);
        if ($f = fopen("$langdir/$currentfile","r+")) {
            $editable = true;
            fclose($f);
        } else {
            $editable = false;
            echo "<p><font size=\"1\">".get_string("makeeditable", "", "$langdir/$currentfile")."</font></p>";
        }
        error_reporting(7);


        unset($string);
        include("$enlangdir/$currentfile");
        $enstring = $string;  
        if ($currentlang != 'en' and $currentfile == 'moodle.php') {
            $enstring['thislanguage'] = "<< TRANSLATORS: Specify the name of your language here.  If possible use Unicode Numeric Character References >>";
            $enstring['thischarset'] = "<< TRANSLATORS: Specify the character set of your language here. Note that all text created while this language is active will be stored using this character set, so don't change it once you have set it. Example: iso-8859-1 >>";
            $enstring['thisdirection'] = "<< TRANSLATORS: This string specifies the direction of your text, either left-to-right or right-to-left.  Insert either 'ltr' or 'rtl' here. >>";
            $enstring['parentlanguage'] = "<< TRANSLATORS: If your language has a Parent Language that Moodle should use when strings are missing from your language pack, then specify the code for it here.  If you leave this blank then English will be used.  Example: nl >>";
        }
        ksort($enstring);

        unset($string);
        include("$langdir/$currentfile");

        if ($editable) {
            echo "<form name=\"$currentfile\" action=\"lang.php\" method=\"post\">";
        }
        echo "<table width=\"100%\" cellpadding=\"2\" cellspacing=\"3\" border=\"0\" class=\"generalbox\">";
        foreach ($enstring as $key => $envalue) {
            $envalue = nl2br(htmlspecialchars($envalue));
            $envalue = preg_replace('/(\$a\-\&gt;[a-zA-Z0-9]*|\$a)/', '<b>$0</b>', $envalue);  // Make variables bold. 
            $envalue = str_replace("%%","%",$envalue);
            $envalue = str_replace("\\","",$envalue);              // Delete all slashes

            echo "\n\n".'<tr>';
            echo '<td dir="ltr" lang="en" width="20%" nowrap="nowrap" valign="top">'.$key.'</td>'."\n";
            echo '<td dir="ltr" lang="en" width="40%" valign="top">'.$envalue.'</td>'."\n";

            $value = $string[$key];
            $value = str_replace("\r","",$value);              // Bad character caused by Windows
            $value = preg_replace("/\n{3,}/", "\n\n", $value); // Collapse runs of blank lines
            $value = trim($value, "\n");                       // Delete leading/trailing lines
            $value = str_replace("\\","",$value);              // Delete all slashes
            $value = str_replace("%%","%",$value);
            $value = str_replace("<","&lt;",$value);
            $value = str_replace(">","&gt;",$value);
            $value = str_replace('"',"&quot;",$value);

            $cellcolour = $value ? '': 'class="highlight"';

            if ($editable) {
                echo '<td width="40%" '.$cellcolour.' valign="top">'."\n";
                if (isset($string[$key])) {
                    $valuelen = strlen($value);
                } else {
                    $valuelen = strlen($envalue);
                }
                $cols=50;
                if (strstr($value, "\r") or strstr($value, "\n") or $valuelen > $cols) {
                    $rows = ceil($valuelen / $cols);
                    echo '<textarea name="stringXXX'.$key.'" cols="'.$cols.'" rows="'.$rows.'">'.$value.'</textarea>'."\n";
                } else {
                    if ($valuelen) {
                        $cols = $valuelen + 2;
                    }
                    echo '<input type="text" name="stringXXX'.$key.'" value="'.$value.'" size="'.$cols.'" />';
                }
                echo '</td>';

            } else {
                echo '<td width="40%" bgcolor="'.$cellcolour.'" valign="top">'.$value.'</td>';
            }
        }
        if ($editable) {
            echo '<tr><td colspan="2">&nbsp;<td><br />';
            echo '<input type="hidden" name="sesskey" value="'.$USER->sesskey.'" />';
            echo '    <input type="hidden" name="currentfile" value="'.$currentfile.'" />';
            echo '    <input type="hidden" name="mode" value="compare" />';
            echo '    <input type="submit" name="update" value="'.get_string('savechanges').': '.$currentfile.'" />';
            echo '</td></tr>';
        }
        echo '</table>';
        echo '</form>'; 

    }

    print_footer();

//////////////////////////////////////////////////////////////////////

function lang_save_file($path, $file, $strings) {
// Thanks to Petri Asikainen for the original version of code 
// used to save language files.
//
// $path is a full pathname to the file
// $file is the file to overwrite.
// $strings is an array of strings to write

    global $CFG, $USER;

    error_reporting(0);
    if (!$f = fopen("$path/$file","w")) {
        return false;
    }
    error_reporting(7);


    fwrite($f, "<?PHP // \$Id\$ \n");
    fwrite($f, "      // $file - created with Moodle $CFG->release ($CFG->version)\n\n\n");

    ksort($strings);

    foreach ($strings as $key => $value) {
        list($id, $stringname) = explode('XXX',$key);
        if ($CFG->lang != "zh_hk" and $CFG->lang != "zh_tw") {  // Some MB languages include backslash bytes
            $value = str_replace("\\","",$value);           // Delete all slashes
        }
        $value = str_replace("'", "\\'", $value);           // Add slashes for '
        $value = str_replace('"', "\\\"", $value);          // Add slashes for "
        $value = str_replace("%","%%",$value);              // Escape % characters
        $value = str_replace("\r", "",$value);              // Remove linefeed characters
        if ($id == "string" and $value != ""){
            fwrite($f,"\$string['$stringname'] = '$value';\n");
        }
    }
    fwrite($f,"\n?>\n");
    fclose($f);

    return true;
}

?>
