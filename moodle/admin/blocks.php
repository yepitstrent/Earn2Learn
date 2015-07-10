<?PHP // $Id: blocks.php,v 1.15.2.1 2005/05/28 18:36:01 defacer Exp $

    // Allows the admin to configure blocks (hide/show, delete and configure)

    require_once('../config.php');
    require_once($CFG->libdir.'/blocklib.php');
    require_once($CFG->libdir.'/tablelib.php');

    $confirm  = optional_param('confirm', 0, PARAM_INT);
    $hide     = optional_param('hide', 0, PARAM_INT);
    $show     = optional_param('show', 0, PARAM_INT);
    $delete   = optional_param('delete', 0, PARAM_INT);
    $multiple = optional_param('multiple', 0, PARAM_INT);

    require_login();

    if (!isadmin()) {
        error("Only administrators can use this page!");
    }

    if (!$site = get_site()) {
        error("Site isn't defined!");
    }


/// Print headings

    $stradministration = get_string('administration');
    $strconfiguration = get_string('configuration');
    $strmanageblocks = get_string('manageblocks');
    $strdelete = get_string('delete');
    $strversion = get_string('version');
    $strhide = get_string('hide');
    $strshow = get_string('show');
    $strsettings = get_string('settings');
    $strcourses = get_string('blockinstances', 'admin');
    $strname = get_string('name');
    $strmultiple = get_string('blockmultiple', 'admin');

    print_header("$site->shortname: $strmanageblocks", "$site->fullname",
                 "<a href=\"index.php\">$stradministration</a> -> ".
                 "<a href=\"configure.php\">$strconfiguration</a> -> $strmanageblocks");

    print_heading($strmanageblocks);

/// If data submitted, then process and store.

    if (!empty($hide) && confirm_sesskey()) {
        if (!$block = get_record('block', 'id', $hide)) {
            error("Block doesn't exist!");
        }
        set_field('block', 'visible', '0', 'id', $block->id);      // Hide block
    }

    if (!empty($show) && confirm_sesskey() ) {
        if (!$block = get_record('block', 'id', $show)) {
            error("Block doesn't exist!");
        }
        set_field('block', 'visible', '1', 'id', $block->id);      // Show block
    }

    if (!empty($multiple) && confirm_sesskey()) {
        if (!$block = blocks_get_record($multiple)) {
            error("Block doesn't exist!");
        }
        $block->multiple = !$block->multiple;
        update_record('block', $block);
    }

    if (!empty($delete) && confirm_sesskey()) {

        if (!$block = blocks_get_record($delete)) {
            error("Block doesn't exist!");
        }

        if (!block_is_compatible($block->name)) {
            $strblockname = $block->name;
        }
        else {
            $blockobject = block_instance($block->name);
            $strblockname = $blockobject->get_title();
        }

        if (!$confirm) {
            notice_yesno(get_string('blockdeleteconfirm', '', $strblockname),
                         'blocks.php?delete='.$block->id.'&amp;confirm=1&amp;sesskey='.$USER->sesskey,
                         'blocks.php');
            print_footer();
            exit;

        } else {
            // Delete block
            if (!delete_records('block', 'id', $block->id)) {
                notify("Error occurred while deleting the $strblockname record from blocks table");
            }

            $instances = get_records('block_instance', 'blockid', $block->id);
            if(!empty($instances)) {
                foreach($instances as $instance) {
                    blocks_delete_instance($instance);
                }
            }

            // Then the tables themselves

            if ($tables = $db->Metatables()) {
                $prefix = $CFG->prefix.$block->name;
                foreach ($tables as $table) {
                    if (strpos($table, $prefix) === 0) {
                        if (!execute_sql("DROP TABLE $table", false)) {
                            notify("ERROR: while trying to drop table $table");
                        }
                    }
                }
            }

            $a->block = $strblockname;
            $a->directory = $CFG->dirroot.'/blocks/'.$block->name;
            notice(get_string('blockdeletefiles', '', $a), 'blocks.php');
        }
    }

/// Main display starts here

/// Get and sort the existing blocks

    if (false === ($blocks = get_records('block'))) {
        error('No blocks found!');  // Should never happen
    }

    $incompatible = array();

    foreach ($blocks as $block) {
        if(!block_is_compatible($block->name)) {
            notify('Block '. $block->name .' is not compatible with the current version of Mooodle and needs to be updated by a programmer.');
            $incompatible[] = $block;
            continue;
        }
        if(($blockobject = block_instance($block->name)) === false) {
            // Failed to load
            continue;
        }
        $blockbyname[$blockobject->get_title()] = $block->id;
        $blockobjects[$block->id] = $blockobject;
    }

    if(empty($blockbyname)) {
        error('One or more blocks are registered in the database, but they all failed to load!');
    }

    ksort($blockbyname);

/// Print the table of all blocks

    $table = new flexible_table('admin-blocks-compatible');

    $table->define_columns(array('name', 'instances', 'version', 'hideshow', 'multiple', 'delete', 'settings'));
    $table->define_headers(array($strname, $strcourses, $strversion, $strhide.'/'.$strshow, $strmultiple, $strdelete, $strsettings));
    $table->define_baseurl($CFG->wwwroot.'/admin/blocks.php');

    $table->set_attribute('cellspacing', '0');
    $table->set_attribute('id', 'blocks');
    $table->set_attribute('class', 'generaltable generalbox');

    $table->setup();

    foreach ($blockbyname as $blockname => $blockid) {

        $blockobject = $blockobjects[$blockid];

        $delete = '<a href="blocks.php?delete='.$blockid.'&amp;sesskey='.$USER->sesskey.'">'.$strdelete.'</a>';

        $settings = ''; // By default, no configuration
        if($blockobject->has_config()) {
            $settings = '<a href="block.php?block='.$blockid.'">'.$strsettings.'</a>';
        }

        $count = count_records('block_instance', 'blockid', $blockid);
        $class = ''; // Nothing fancy, by default

        if ($blocks[$blockid]->visible) {
            $visible = '<a href="blocks.php?hide='.$blockid.'&amp;sesskey='.$USER->sesskey.'" title="'.$strhide.'">'.
                       '<img src="'.$CFG->pixpath.'/i/hide.gif" height="16" width="16" alt="" /></a>';
        } else {
            $visible = '<a href="blocks.php?show='.$blockid.'&amp;sesskey='.$USER->sesskey.'" title="'.$strshow.'">'.
                       '<img src="'.$CFG->pixpath.'/i/show.gif" height="16" width="16" alt="" /></a>';
            $class = ' class="dimmed_text"'; // Leading space required!
        }
        if ($blockobject->instance_allow_multiple()) {
            if($blocks[$blockid]->multiple) {
                $multiple = '<span style="white-space: nowrap;">'.get_string('yes').' (<a href="blocks.php?multiple='.$blockid.'&amp;sesskey='.$USER->sesskey.'">'.get_string('change', 'admin').'</a>)</span>';
            }
            else {
                $multiple = '<span style="white-space: nowrap;">'.get_string('no').' (<a href="blocks.php?multiple='.$blockid.'&amp;sesskey='.$USER->sesskey.'">'.get_string('change', 'admin').'</a>)</span>';
            }
        }
        else {
            $multiple = '';
        }

        $table->add_data(array(
            '<span'.$class.'>'.$blockobject->get_title().'</span>',
            $count,
            $blockobject->get_version(),
            $visible,
            $multiple,
            $delete,
            $settings
        ));
    }

    $table->print_html();

    if(!empty($incompatible)) {
        print_heading(get_string('incompatibleblocks', 'admin'));

        $table = new flexible_table('admin-blocks-incompatible');
        
        $table->define_columns(array('block', 'delete'));
        $table->define_headers(array($strname, $strdelete));
        $table->define_baseurl($CFG->wwwroot.'/admin/blocks.php');
    
        $table->set_attribute('cellspacing', '0');
        $table->set_attribute('id', 'incompatible');
        $table->set_attribute('class', 'generaltable generalbox');
    
        $table->setup();

        foreach ($incompatible as $block) {
            $table->add_data(array(
                $block->name,
                '<a href="blocks.php?delete='.$block->id.'&amp;sesskey='.$USER->sesskey.'">'.$strdelete.'</a>',
            ));
        }
        $table->print_html();
    }

    print_footer();

?>
