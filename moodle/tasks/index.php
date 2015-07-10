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


?> 

<?php
echo "";
echo "<table style=\"width: 100%;\">";
echo "<tr><td>";
    print_header(strip_tags($SITE->fullname), $SITE->fullname, NULL, '',
                 '<meta name="description" content="'. s(strip_tags($SITE->summary)) .'" />',
                 true, '', user_login_string($SITE)); 
echo "</td></tr>";		 
echo "<tr><td>";
    $arr[] = array();
    echo "<div style='margin:0px auto; '>";
    echo "<table border='0' style='width: 100%; height: 100%; margin: 0px; '>";
    echo "<tr><td style='width: 20%; padding: 10px 10px 10px 0px;'>";
    $course_id =  get_e2l_courses($USER); //returns an array of courses
    echo "</td><td style='width: 80%; padding: 10px 0px 10px 10px;'>"; 
    echo get_e2l_tasks($course_id); //echos the tasks 
    echo "</td></tr>";
    echo "</table>";
    echo "</div>";
echo "</td></tr>";
echo "</table>";
?> 
<script>
CLICKED = "";

function init_hilite( num ) {
    //alert("HERE");
    var link = "#e2l_"+num;
    CLICKED = link;
    $(link).css({"background-color":"#95E4E4"});      
}

function start_hilite( num ) {
    var link = "#e2l_"+num;

    if(CLICKED != link) {
        $(link).css({"background-color":"#BEEEEE"}); 
    }
}

function end_hilite( num ) {
    var link = "#e2l_"+num;

    if(CLICKED == link){
        $(link).css({"background-color":"#95E4E4"});     
    } else {
        $(link).css({"background-color":"#CCFFFF"});     
    }
}

function generate_tasks( num ){

    var link = "#e2l_"+num;

    //SET GLOBAL VAR TO COMPARE LATER..
    CLICKED = link;

    //RESET ALL ROWS TO ORIGINAL COLOR
    $(".e2l_tasks").css({"background-color":"#CCFFFF"});

    //SET SELECTED ROW TO HIGHLIGHT COLOR
    $(link).css({"background-color":"#95E4E4"}); 

    $.ajax({
        data: { 'function' : 'e2l_tasks', 'num' : num },
        url: 'db.php',
        method: 'POST', // or GET
        success: function(str) {
            //alert("RETURN HERE: " + str);
	    $("#e2l_tasks").html(str);
        }
    }); 
}

function next_page(num){
//alert(num);
    $.ajax({
        data: { 'function' : 'next_page', 'num' : num },
        url: 'db.php',
        method: 'POST',
        success: function(str) {
	    //alert("RETURNED"+str);
	    $("#e2l_tasks").html(str);
        }
    });
}

function prev_page(num){
    $.ajax({
        data: { 'function' : 'prev_page', 'num' : num },
        url: 'db.php',
        method: 'POST', 
        success: function(str) {	
	    $("#e2l_tasks").html(str);
        }
    });
}

function myFunction() {
    $("#e2l_test").html("Hello jQuery");
    //alert("WORKING");
}

function goto_link(id){
    window.location.href = "../mod/assignment/view.php?id="+id;
}

</script>
<style>
body{
        /*overflow-y:hidden;*/
    background-color: #33CCFF;
}
    
#rcorners {
    border-radius: 25px;
    /*background: #8AC007;*/
    padding: 20px; 
    /*width: 200px;
    height: 150px;    */
}
</style>
<style>
#parent_box {
    vertical-align:top;
}
#course_label {
    /*width: 252px; 
    height: 41px;*/
    font-family: 'Roboto', sans-serif;
    color: #006699;
    padding: 10px;
}
.e2l_tasks {
    padding: 3px 0px 3px 10px;
    cursor:pointer;
}
#container {
    height: 100%;
    width: 100%;
    /*border: 2px solid #006699;*/
}
#task_wrapper {
    padding: 10px;
    /*border: 1px solid black;*/

}
#e2l_task_fill {
    background-color: #CCFFFF;
    border-radius: 25px; 
    width: 90%;
    height: 45px;
    padding: 20px; 
    border: 8px solid #CCFFFF;
    /*border: 8px solid red;*/
}
#e2l_task_box {
    background-color: #33CCFF;
    border-radius: 25px; 
    width: 90%;
    height: 45px;
    padding: 20px;
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
    color: white;
    cursor:pointer; 
    border: 8px solid #33CCFF;
    margin-left: auto;
    margin-right: auto;
    /*border: 8px solid red;*/
}
#task_box {
    padding: 5px; 
/*    border: 2px solid #006699; */
    background-color: #33CCFF; 
    border-radius: 25px; 
    height: 100px; 
    width: 90%;
    margin-left: auto;
    margin-right: auto;
    font-size: 30px;
    font-family: 'Roboto', sans-serif;
    color: white;    
}
.left_box {
    background-color: #CCFFFF; 
    border-radius: 25px;
    width:100%; 
    height: 665px;
}
.right_box {
    background-color: #CCFFFF; 
    border-radius: 25px;
    width:100%; 
    height: 665px;    
}
.e2l_font {
    color: #006699;
    size: 12;
    font-family: 'Roboto', sans-serif;
    /*font-weight: 800;*/
}
#prev {
    display: flex;
    align-items: center; /* align vertical */
    float: left;
    color: #006699;
    font-family: 'Roboto', sans-serif;
    font-weight: 600;
}
#more {
    display: flex;
    align-items: center; /* align vertical */
    float: right;
    color: #006699;
    font-family: 'Roboto', sans-serif;
    font-weight: 600;
}
</style>
