<?php  // $Id: lib.php,v 1.3 2005/04/17 12:08:44 moodler Exp $
       // Standard authentication function

function auth_user_login ($username, $password) {
// Returns true if the username and password work
// and false if they don't

    global $CFG;

    if (! $user = get_record('user', 'username', $username)) {
        return false;
    }
    
    return ($user->password == md5($password));
}



?>
