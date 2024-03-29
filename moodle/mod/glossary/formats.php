<?php    // $Id: formats.php,v 1.15.2.1 2005/12/07 05:57:19 moodler Exp $
    /// This file allows to manage the default behaviour of the display formats

    require_once("../../config.php");
    require_once("lib.php");
    global $CFG;

    $id = required_param('id', PARAM_INT);
    $mode = optional_param('mode');

    require_login();
    if ( !isadmin() ) {
        error("You must be an admin to use this page.");
    }
    if (!$site = get_site()) {
        error("Site isn't defined!");
    }

    if ( !$displayformat = get_record("glossary_formats","id",$id) ) {
        error ("Invalid Glossary Format");
    }

    $form = data_submitted();
    if ( $mode == 'visible' ) {
        if ( $displayformat ) {
            if ( $displayformat->visible ) {
                $displayformat->visible = 0;
            } else {
                $displayformat->visible = 1;
            }
            update_record("glossary_formats",$displayformat);
        }
        redirect("../../$CFG->admin/module.php?sesskey=$USER->sesskey&module=glossary#formats");
        die;
    } elseif ( $mode == 'edit' and $form) {

        $displayformat->popupformatname = $form->popupformatname;
        $displayformat->showgroup   = $form->showgroup;
        $displayformat->defaultmode = $form->defaultmode;
        $displayformat->defaulthook = $form->defaulthook;
        $displayformat->sortkey     = $form->sortkey;
        $displayformat->sortorder   = $form->sortorder;

        update_record("glossary_formats",$displayformat);
        redirect("../../$CFG->admin/module.php?sesskey=$USER->sesskey&module=glossary#formats");
        die;
    }

    $stradmin = get_string("administration");
    $strconfiguration = get_string("configuration");
    $strmanagemodules = get_string("managemodules");
    $strmodulename = get_string("modulename", "glossary");
    $strdisplayformats = get_string("displayformats","glossary");

    print_header("$strmodulename: $strconfiguration", $site->fullname,
                  "<a href=\"../../$CFG->admin/index.php\">$stradmin</a> -> ".
                  "<a href=\"../../$CFG->admin/configure.php\">$strconfiguration</a> -> ".
                  "<a href=\"../../$CFG->admin/modules.php\">$strmanagemodules</a> -> <a href=\"../../$CFG->admin/module.php?module=glossary&sesskey=$USER->sesskey\">$strmodulename</a> -> $strdisplayformats");

    print_heading($strmodulename . ': ' . get_string("displayformats","glossary"));

    echo '<table cellspacing="0" align="center" class="glossaryformatheader">';
    echo '<tr><td align="center">';
    echo get_string('configwarning','admin');
    echo '</td></tr></table>';

    $yes = get_string("yes");
    $no  = get_string("no");

    echo '<form method="post" action="formats.php" name="form">';
    echo '<table width="90%" align="center" class="generalbox">';
    ?>
    <tr>
        <td colspan="3" align="center"><strong>
        <?php echo get_string('displayformat'.$displayformat->name,'glossary'); ?>
        </strong></td>
    </tr>
    <tr valign="top">
        <td align="right" width="20%"><?php print_string('popupformat','glossary'); ?></td>
        <td>
     <?php
        //get and update available formats
        $recformats = glossary_get_available_formats();

        $formats = array();

        //Take names
        foreach ($recformats as $format) {
           $formats[$format->name] = get_string("displayformat$format->name", "glossary");
        }
        //Sort it
        asort($formats);

        choose_from_menu($formats,'popupformatname',$displayformat->popupformatname);
     ?>
        </td>
        <td width="60%">
        <?php print_string("cnfrelatedview", "glossary") ?><br /><br />
        </td>
    </tr>
    <tr valign="top">
        <td align="right" width="20%"><?php print_string('defaultmode','glossary'); ?></td>
        <td>
        <select size="1" name="defaultmode">
    <?php
        $sletter = '';
        $scat = '';
        $sauthor = '';
        $sdate = '';
        switch ( strtolower($displayformat->defaultmode) ) {
        case 'letter':
            $sletter = ' selected="selected" ';
        break;

        case 'cat':
            $scat = ' selected="selected" ';
        break;

        case 'date':
            $sdate = ' selected="selected" ';
        break;

        case 'author':
            $sauthor = ' selected="selected" ';
        break;
        }
    ?>
        <option value="letter" <?php p($sletter)?>>letter</option>
        <option value="cat" <?php p($scat)?>>cat</option>
        <option value="date" <?php p($sdate)?>>date</option>
        <option value="author" <?php p($sauthor)?>>author</option>
        </select>
        </td>
        <td width="60%">
        <?php print_string("cnfdefaultmode", "glossary") ?><br /><br />
        </td>
    </tr>
    <tr valign="top">
        <td align="right" width="20%"><?php print_string('defaulthook','glossary'); ?></td>
        <td>
        <select size="1" name="defaulthook">
    <?php
        $sall = '';
        $sspecial = '';
        $sallcategories = '';
        $snocategorised = '';
        switch ( strtolower($displayformat->defaulthook) ) {
        case 'all':
            $sall = ' selected="selected" ';
        break;

        case 'special':
            $sspecial = ' selected="selected" ';
        break;

        case '0':
            $sallcategories = ' selected="selected" ';
        break;

        case '-1':
            $snocategorised = ' selected="selected" ';
        break;
        }
    ?>
        <option value="ALL" <?php p($sall)?>><?php p(get_string("allentries","glossary"))?></option>
        <option value="SPECIAL" <?php p($sspecial)?>><?php p(get_string("special","glossary"))?></option>
        <option value="0" <?php p($sallcategories)?>><?php p(get_string("allcategories","glossary"))?></option>
        <option value="-1" <?php p($snocategorised)?>><?php p(get_string("notcategorised","glossary"))?></option>
        </select>
        </td>
        <td width="60%">
        <?php print_string("cnfdefaulthook", "glossary") ?><br /><br />
        </td>
    </tr>
    <tr valign="top">
        <td align="right" width="20%"><?php print_string('defaultsortkey','glossary'); ?></td>
        <td>
        <select size="1" name="sortkey">
    <?php
        $sfname = '';
        $slname = '';
        $supdate = '';
        $screation = '';
        switch ( strtolower($displayformat->sortkey) ) {
        case 'firstname':
            $sfname = ' selected="selected" ';
        break;

        case 'lastname':
            $slname = ' selected="selected" ';
        break;

        case 'creation':
            $screation = ' selected="selected" ';
        break;

        case 'update':
            $supdate = ' selected="selected" ';
        break;
        }
    ?>
        <option value="CREATION" <?php p($screation)?>><?php p(get_string("sortbycreation","glossary"))?></option>
        <option value="UPDATE" <?php p($supdate)?>><?php p(get_string("sortbylastupdate","glossary"))?></option>
        <option value="FIRSTNAME" <?php p($sfname)?>><?php p(get_string("firstname"))?></option>
        <option value="LASTNAME" <?php p($slname)?>><?php p(get_string("lastname"))?></option>
        </select>
        </td>
        <td width="60%">
        <?php print_string("cnfsortkey", "glossary") ?><br /><br />
        </td>
    </tr>
    <tr valign="top">
        <td align="right" width="20%"><?php print_string('defaultsortorder','glossary'); ?></td>
        <td>
        <select size="1" name="sortorder">
    <?php
        $sasc = '';
        $sdesc = '';
        switch ( strtolower($displayformat->sortorder) ) {
        case 'asc':
            $sasc = ' selected="selected" ';
        break;

        case 'desc':
            $sdesc = ' selected="selected" ';
        break;
        }
    ?>
        <option value="asc" <?php p($sasc)?>><?php p(get_string("ascending","glossary"))?></option>
        <option value="desc" <?php p($sdesc)?>><?php p(get_string("descending","glossary"))?></option>
        </select>
        </td>
        <td width="60%">
        <?php print_string("cnfsortorder", "glossary") ?><br /><br />
        </td>
    </tr>
    <tr valign="top">
        <td align="right" width="20%"><p>Include Group Breaks:</td>
        <td>
        <select size="1" name="showgroup">
    <?php
        $yselected = "";
        $nselected = "";
        if ($displayformat->showgroup) {
            $yselected = " selected=\"selected\" ";
        } else {
            $nselected = " selected=\"selected\" ";
        }
    ?>
        <option value="1" <?php p($yselected) ?>><?php p($yes)?></option>
        <option value="0" <?php p($nselected) ?>><?php p($no)?></option>
        </select>
        </td>
        <td width="60%">
        <?php print_string("cnfshowgroup", "glossary") ?><br /><br />
        </td>
    </tr>
    <tr>
        <td colspan="3" align="center">
        <input type="submit" value="<?php print_string("savechanges") ?>" /></td>
    </tr>
    <input type="hidden" name="id"    value="<?php p($id) ?>" />
    <input type="hidden" name="mode"    value="edit" />
    <?php

    print_simple_box_end();
    echo '</form>';

    print_footer();
?>
