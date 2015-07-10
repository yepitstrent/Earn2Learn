<?php
    require_once("../../config.php");
    require_once("../../course/lib.php");
    require_once('../../lib/blocklib.php');    
    
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
    echo "<div>";
    echo "<div>";
    print_header(strip_tags($SITE->fullname), $SITE->fullname, NULL, '',
                 '<meta name="description" content="'. s(strip_tags($SITE->summary)) .'" />',
                 true, '', user_login_string($SITE)); 
    echo "</div><br><br>";
//echo var_dump($CFG);
    echo "<center><div id=\"congrats\">";
    echo "<div>Congratulations, your time has been logged.</div>";
    echo "<div>Thank you for completing your task.</div>";
    echo "</div></center>";
    echo "</div>";
    //$ten = 5;
    //sleep($ten);
    
    //header("Location: ".$CFG->wwwroot); /* Redirect browser */
    //exit();
?>
<script>
setTimeout(function () {
   window.location.href= "http://"+window.location.hostname+"/moodle/"; // the redirect goes here
},5000);
</script>
<style>
body {
    background-color: #33CCFF;
}
#congrats {
    background-color: #CCFFFF;
    width: 1000px;
    height: 300px;
    border-radius: 25px;
    padding-top: 20px;
}

</style>
