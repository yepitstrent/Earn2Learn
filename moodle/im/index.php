<?php
    require_once("../config.php");
    require_once("../course/lib.php");
    require_once('../lib/blocklib.php');    


    global $USER, $CFG;
    
    if (!$site = get_site()) {
        error("Site isn't defined!");
    }

    if ($CFG->forcelogin) {
        require_login();
    }

    print_header(strip_tags($SITE->fullname), $SITE->fullname, NULL, '',
                 '<meta name="description" content="'. s(strip_tags($SITE->summary)) .'" />',
                 true, '', user_login_string($SITE)); 


?>
<div>TODO: Instant Messaging using Moodle.</div>
<style>
body {
    background-color: #33CCFF;
}
</style>
