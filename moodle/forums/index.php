<?php
      
    require_once("../config.php");
    require_once("../course/lib.php");
    require_once('../lib/blocklib.php');    
    require_once("db.php");

    global $USER, $CFG;
    
    if (!$site = get_site()) {
        error("Site isn't defined!");
    }

    if ($CFG->forcelogin) {
        require_login();
    }

    if (isadmin()) {
        if (isset($_GET['edit']) and confirm_sesskey()) {
            if ($edit == "on") {
                $USER->categoriesediting = true;
            } else if ($edit == "off") {
                $USER->categoriesediting = false;
            }
        }
    }

    $adminediting = (isadmin() and !empty($USER->categoriesediting));

    print_header(strip_tags($SITE->fullname), $SITE->fullname, NULL, '',
                 '<meta name="description" content="'. s(strip_tags($SITE->summary)) .'" />',
                 true, '', user_login_string($SITE)); 

    echo "<br>";
    echo "<center>";
    echo "<div id=\"forums_box\">";
    //echo "";
    get_forums();
    echo "</div>";
    echo "</center>";


?>
<style>
body {
    background-color: #33CCFF;
}
#forums_box {
    padding-top: 10px;
    border-radius: 25px;
    background-color: #CCFFFF;
    height: 500px;
    width: 100%;
}
</style>

