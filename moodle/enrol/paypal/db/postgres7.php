<?PHP  //$Id: postgres7.php,v 1.2 2004/08/19 17:16:29 moodler Exp $

// PostgreSQL commands for upgrading this enrolment module

function paypal_upgrade($oldversion=0) {

    global $CFG, $THEME, $db;

    $result = true;

    if ($oldversion == 0) {
        modify_database("$CFG->dirroot/enrol/paypal/db/postgres7.sql");
    }

    return $result;

}

?>
