<?php  // $Id: lib.php,v 1.3 2005/04/17 12:08:45 moodler Exp $
       // manual method - Just does a simple check against the database

function auth_user_login ($username, $password) {
// Returns false if the username doesn't exist yet
// Returns true if the username and password work

    if ($user = get_record('user', 'username', $username)) {
        return ($user->password == md5($password));
    }

    return false;
}


?>
