<?php  // $Id: lib.php,v 1.15.2.2 2005/08/31 05:59:31 martinlanghoff Exp $
       // Authentication by looking up an external database table


function auth_user_login ($username, $password) {
// Returns true if the username and password work
// and false if they are wrong or don't exist.

    global $CFG;

    // This is a hack to workaround what seems to be a bug in ADOdb with accessing 
    // two databases of the same kind ... it seems to get confused when trying to access
    // the first database again, after having accessed the second.
    // The following hack will make the database explicit which keeps it happy
    // This seems to broke postgesql so ..

    $prefix = $CFG->prefix.'';    // Remember it.  The '' is to prevent PHP5 reference.. see bug 3223

    if ($CFG->dbtype != 'postgres7') {
        $CFG->prefix = $CFG->dbname.$CFG->prefix;
    }

    // Connect to the external database
    $authdb = &ADONewConnection($CFG->auth_dbtype);         
    $authdb->PConnect($CFG->auth_dbhost,$CFG->auth_dbuser,$CFG->auth_dbpass,$CFG->auth_dbname); 

    switch ($CFG->auth_dbpasstype) {   // Re-format password accordingly
        case "md5":
            $password = md5($password);
        break;
    }

    $rs = $authdb->Execute("SELECT * FROM $CFG->auth_dbtable 
                            WHERE $CFG->auth_dbfielduser = '$username' 
                              AND $CFG->auth_dbfieldpass = '$password' ");
    $authdb->Close();

    $CFG->prefix = $prefix;

    if (!$rs) {
        notify("Could not connect to the specified authentication database...");
        return false;
    }

    if ( $rs->RecordCount() ) {
        return true;
    } else {
        return false;
    }
}


function auth_get_userinfo($username){
// Reads any other information for a user from external database,
// then returns it in an array

    global $CFG;

    $config = (array) $CFG;

    $pcfg = get_config('auth/db');
    $pcfg = (array) $pcfg;

    ADOLoadCode($CFG->auth_dbtype);          
    $authdb = &ADONewConnection();         
    $authdb->PConnect($CFG->auth_dbhost,$CFG->auth_dbuser,$CFG->auth_dbpass,$CFG->auth_dbname); 

    $fields = array("firstname", "lastname", "email", "phone1", "phone2", 
                    "department", "address", "city", "country", "description", 
                    "idnumber", "lang");

    $result = array();

    foreach ($fields as $field) {
        if ($pcfg["field_map_$field"]) {
            if ($rs = $authdb->Execute("SELECT ".$pcfg["field_map_$field"]." FROM $CFG->auth_dbtable
                                        WHERE $CFG->auth_dbfielduser = '$username'")) {
                if ( $rs->RecordCount() == 1 ) {
                    $result["$field"] = addslashes(stripslashes(utf8_decode($rs->fields[0])));
                }
            }
        }
    }

    return $result;
}

?>
