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

    print_header(strip_tags($SITE->fullname), $SITE->fullname, NULL, '',
                 '<meta name="description" content="'. s(strip_tags($SITE->summary)) .'" />',
                 true, '', user_login_string($SITE)); 
    
    echo "<br>";
    echo "<center>";
    echo "<div id=\"top\">";
    echo "<center><div id=\"texter\"><h1>".$USER->username.": $".get_user_rewards()."</h1><div></center>";
    echo "</div>";
    echo "</center>";
    echo "<br>";
    echo "<center>";
    echo "<div id=\"bottom\">";
    echo "<div id=\"inner\"><img src=\"../resources/dashboard/chipotle.png\"></div>";
    echo "<div id=\"inner\"><img src=\"../resources/dashboard/quadcopter.png\"></div>";
    echo "<div id=\"inner\"><img src=\"../resources/dashboard/apple.png\"></div>";
    echo "</div>";
    echo "</center>";
    

/*    echo "<div>";
    echo "<span>LEFT<div>00</div></span>";
    echo "<span>RIGHT<div>01</div></span>";
    echo "</div>";

    echo "<div id=\"rewards_box\">";
    echo "<div class=\"e2l\" id=\"left_box\">LEFT</div>";
    echo "<div class=\"e2l\" id=\"right_box\">RIGHT</div>";
    echo "</div>";
*/
    //echo var_dump($USER);
    echo "<div>";
    //echo get_grades();
    echo "</div>";
?>
<style>
body {
    background-color: #33CCFF;
    /*overflow-y:hidden;*/
}
#rewards_box {
    /*margin: 15px;
    padding: 10px;*/
}
.e2l {
    display: inline-block;
}
#left_box {
    /*display:inline;*/
    /*float: left;*/
    background-color: #AADEE9;
    /*width: 20%;
    padding: 10px;*/
}
#right_box {
    /*display:inline;*/
    /*float: left;*/
    background-color: #CCFFFF;
    /*width: 20%;
    padding: 10px;*/
}
#top {
    width: 999px;
    height: 250px;
    border-radius: 35px;
    background-color: white; 
    vertical-align: middle;
    -webkit-transform-style: preserve-3d;
    -moz-transform-style: preserve-3d;
    transform-style: preserve-3d;
}
#texter {
    position: relative;
    top: 50%;
    transform: translateY(100%);
    font-size: 200%; 
    font-family: 'Roboto', sans-serif;
}
#bottom {
    display: flex;
    padding 5px;
    align-items: center;
        justify-content: center;
}
#inner {
    width: 333px;
    height: 250px;
    border-radius: 35px;
    /*background-color: #AADEE9;*/
    margin: 5px;
}
</style>
