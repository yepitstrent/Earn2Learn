<?PHP  //$Id: postgres7.php,v 1.4.2.12 2006/04/26 15:31:28 ethem Exp $

// PostgreSQL commands for upgrading this enrolment module

function authorize_upgrade($oldversion=0) {
    global $CFG, $THEME, $db;

    $result = true;

    if ($oldversion == 0 || !in_array($CFG->prefix . 'enrol_authorize', $db->MetaTables('TABLES'))) {
        $result = modify_database("$CFG->dirroot/enrol/authorize/db/postgres7.sql");
        return $result; // SQL file contains all upgrades.
    }

    if ($oldversion < 2005071601) {
        // Be sure, only last 4 digit is inserted.
        table_column('enrol_authorize', 'cclastfour', 'cclastfour', 'integer', '4', 'unsigned', '0', 'not null');
        table_column('enrol_authorize', 'courseid', 'courseid', 'integer', '10', 'unsigned', '0', 'not null');
        table_column('enrol_authorize', 'userid', 'userid', 'integer', '10', 'unsigned', '0', 'not null');
        // Add some indexes for speed.
        execute_sql("CREATE INDEX {$CFG->prefix}enrol_authorize_courseid_idx ON {$CFG->prefix}enrol_authorize (courseid);", false);
        execute_sql("CREATE INDEX {$CFG->prefix}enrol_authorize_userid_idx ON {$CFG->prefix}enrol_authorize (userid);", false);
    }

    if ($oldversion && $oldversion < 2005071602) {
        notify("If you are using the authorize.net enrolment plugin for credit card 
                handling, please ensure that you have turned loginhttps ON in Admin >> Variables >> Security.");
    }
    
    return $result;
}

?>
