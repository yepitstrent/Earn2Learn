<?php

// This page lists all the available RQP question types

    require_once('../../../../config.php');
    require_once($CFG->libdir.'/tablelib.php');
    require_once($CFG->dirroot . '/mod/quiz/questiontypes/rqp/lib.php');
    require_once($CFG->dirroot . '/mod/quiz/questiontypes/rqp/remote.php');
    
    $info = optional_param('info', 0, PARAM_INT); // id of server for which to show info
    $delete = optional_param('delete', 0, PARAM_INT); // id of server to delete
    $confirm = optional_param('confirm', false, PARAM_BOOL); // has the teacher confirmed the delete request?

    // Check user admin
    require_login();
    if (!isadmin()) {
        error('You need to be an admin user to use this page.', $CFG->wwwroot . '/login/index.php');
    }

    if (!$site = get_site()) {
        error('Site isn\'t defined!');
    }

    // Print the header
    $strmodulename = get_string('modulename', 'quiz');
    $stritemtypes = get_string('itemtypes', 'quiz');
    $navigation = '<a href="' . s($CFG->wwwroot) . '/' . s($CFG->admin) . '/index.php">' . get_string('admin') . '</a> -> ' .
        '<a href="' . s($CFG->wwwroot) . '/' . s($CFG->admin) . '/configure.php">' . get_string('configuration') . '</a> -> ' .
        '<a href="' . s($CFG->wwwroot) . '/' . s($CFG->admin) . '/modules.php">' . get_string('managemodules') . '</a> -> ' .
        '<a href="' . s($CFG->wwwroot) . '/' . s($CFG->admin) . '/module.php?module=quiz&amp;sesskey=' . sesskey() . '">' .
        get_string('modulename', 'quiz') . '</a> -> ' . $stritemtypes;
    print_header($site->shortname . ': ' . $strmodulename . ': ' . $stritemtypes, $site->fullname, $navigation, '', '', true, '', '');

    $straddtypeurl = 'http://';
    $straddtypename = '';

/// Process submitted data
    if ($form = data_submitted() and confirm_sesskey()) { 

        while (isset($form->add)) { // using like if but with support for break
            // check name was given
            if (empty($form->name)) {
                notify(get_string('missingitemtypename', 'quiz'));
                break;
            }
            // check url was given
            if (empty($form->url)) {
                notify(get_string('missingitemtypeurl', 'quiz'));
                break;
            }
            // Check server exists and works
            if (!$serverinfo = remote_server_info($form->url)) {
                notify(get_string('renderingserverconnectfailed', 'quiz', $form->url));
                break;
            }
            // add new type to database unless it exists already
            if (!$type = get_record('quiz_rqp_types', 'name', $form->name)) {
                $type->name = $form->name;
                if (!$type->id = insert_record('quiz_rqp_types', $type)) {
                    error("Could not save type $type");
                }
            }
            // add new server to database unless it exists already
            if (!$server = get_record('quiz_rqp_servers', 'url', $form->url)) {
                $server->typeid = $type->id;
                $server->url = $form->url;
                $server->can_render = $serverinfo->rendering ? 1 : 0;
                if (!insert_record('quiz_rqp_servers', $server)) {
                    error("Could not save server $form->url");
                }
            }
            // print info about new server
            print_heading(get_string('serveradded', 'quiz'));
            quiz_rqp_print_serverinfo($serverinfo);
        
            break;
    
        }
    }

    if ($delete and confirm_sesskey()) { // delete server
        if ($confirm) {
            delete_records('quiz_rqp_servers', 'id', $delete);
        } else {
            if (!$server = get_record('quiz_rqp_servers', 'id', $delete)) {
                error('Invalid server id');
            }
            if ((count_records('quiz_rqp_servers', 'typeid', $server->typeid) == 1) // this is the last server of its type
                    and record_exists('quiz_rqp', 'type', $server->typeid)) { // and there are questions using it
                $type = get_record('quiz_rqp_types', 'id', $server->typeid);
                notify(get_string('serverinuse', 'quiz', $type->name));
            }
            notice_yesno(get_string('confirmserverdelete', 'quiz', $server->url), 'types.php?delete='.$delete.'&amp;sesskey='.sesskey().'&amp;confirm=true', 'types.php');
        }
    }
    
    if ($info) { // show info for server
        if (!$server = get_record('quiz_rqp_servers', 'id', $info)) {
            error('Invalid server id');
        }
        // Check server exists and works
        if (!$serverinfo = remote_server_info($server->url)) {
            notify(get_string('renderingserverconnectfailed', 'quiz', $server->url));
        } else {
            // print the info
            print_heading(get_string('serverinfo', 'quiz'));
            quiz_rqp_print_serverinfo($serverinfo);
        }
    }


/// Set up the table

    $table = new flexible_table('mod-quiz-questiontypes-rqp-types');

    $table->define_columns(array('name', 'url', 'action'));
    $table->define_headers(array(get_string('name'), get_string('serverurl', 'quiz'), get_string('action')));
    $table->define_baseurl($CFG->wwwroot.'/mod/quiz/questiontypes/rqp/types.php');

    //$table->sortable(true);

    $table->column_suppress('name');

    $table->set_attribute('cellspacing', '15');
    $table->set_attribute('id', 'types');
    $table->set_attribute('class', 'generaltable generalbox');

    // Start working -- this is necessary as soon as the niceties are over
    $table->setup();

/// Create table rows
    // Get list of types
    $types = get_records('quiz_rqp_types', '', '', 'name ASC');

    $strinfo = get_string('info');
    $strdelete = get_string('delete');
    $stradd = get_string('add');

    if ($types) {
        foreach ($types as $type) {
            if (!$servers = get_records('quiz_rqp_servers', 'typeid', $type->id)) {
                delete_records('quiz_rqp_types', 'id', $type->id);
            } else {
                foreach ($servers as $server) {
                    $actions = '<a title="' . $strinfo . '" href="types.php?info='.$server->id.'&amp;sesskey='.sesskey().'"><img src="'.$CFG->pixpath.'/i/info.gif" border="0" alt="'.$strinfo.'" align="absbottom" /></a>&nbsp;<a title="'.$strdelete.'" href="types.php?delete='.$server->id.'&amp;sesskey='.sesskey().'"><img src="../../../../pix/t/delete.gif" border="0" alt="'.$strdelete.'" /></a>';
                    $serverurl = ($info == $server->id) ? '<b>'.$server->url.'</b>' : $server->url;
                    $table->add_data(array($type->name, $serverurl, $actions));
                }
                $table->add_data(array('','',''));
            }
        }
    }

    // add input fields for adding new server
    $typeinput = '<input type="text" size="15" maxlength="25" name="name" />';
    $urlinput = '<input type="text" size="50" maxlength="255" name="url" value="http://" />';
    $addbutton = '<input type="submit" value="'.get_string('add').'" name="add" />';
    $table->data[] = array($typeinput, $urlinput, $addbutton);
    
/// Print the table
    print_heading_with_help($stritemtypes, 'rqp', 'quiz');
    echo '<form action="types.php" method="post">';
    echo '<input type="hidden" name="sesskey" value="'.sesskey().'" />';
    echo '<center>';
    $table->print_html();
    echo '</center>';
    echo '</form>';

/// Finish the page
    print_footer();

?>
