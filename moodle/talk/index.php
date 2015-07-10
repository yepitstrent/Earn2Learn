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

    echo "<div id=\"parent\">";
    echo "<center>";
    echo "<div id=\"child\">";
    echo "<div id=\"forum\" onclick=\"goto_forum();\"><div id=\"inner\"><img id=\"pic\" src=\"../resources/dashboard/message.svg\"></div><div id=\"inner\">Forum</div></div>";
    echo "<div id=\"im\" onclick=\"goto_chat();\"><div id=\"inner\"><img id=\"pic\" src=\"../resources/dashboard/bubble.svg\"></div><div id=\"inner\">Instant Message</div></div>";
        //echo "<img id=\"pic\" src=\"../resources/dashboard/left.svg\">";

    echo "</div>";
    echo "</center>";
    echo "</div>";

?>
<script>
function goto_chat(){
    //window.location.href = "../message/discussion.php?id=4";
    window.location.href = "../im/index.php";

}
function goto_forum(){
    window.location.href = "../forums/index.php";
}
</script>
<style>
body {
    background-color: #33CCFF;
}
#inner {
    
    display: flex;
    justify-content: center; /* align horizontal */
    align-items: center; /* align vertical */
    color: white;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 200%;

}
#pic {
    float: left;
    width: 70px;
}
#forum {
    background-color: #66CCCC;
    width: 50%;
    height: 75px;
    padding: 10px;
    border-radius: 25px;
    text-align: left;
    display: flex;
    margin-top:20px;
margin-left:auto;
margin-right:auto;
}
#im {
    background-color: #66CCCC;
    padding: 10px;
    width: 50%;
    height: 75px;
    border-radius: 25px;
    text-align: left;
    display: flex;
    margin-top:20px;
margin-left:auto;
margin-right:auto;
}
#parent {
    padding: 10px;

}
#child {
    background-color: #CCFFFF;
    width: 80%;
    height: 500px;
    
    padding: 10px;
    border-radius: 25px;
}
#right {
    background-color: #CCFFFF;
    width: 70%;
    height: 500px;
    float: right;
    padding: 10px;
    border-radius: 25px;
}
</style>
