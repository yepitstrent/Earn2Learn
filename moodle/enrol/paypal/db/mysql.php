<?PHP  //$Id: mysql.php,v 1.2 2004/08/19 17:16:29 moodler Exp $

// MySQL commands for upgrading this enrolment module

function paypal_upgrade($oldversion=0) {

    global $CFG, $THEME, $db;

    $result = true;

    if ($oldversion == 0) {
        modify_database("$CFG->dirroot/enrol/paypal/db/mysql.sql");
    }

    return $result;

}

?>
