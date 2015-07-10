<?php
   
      
    require_once("../config.php");
    require_once("../course/lib.php");
    require_once('../lib/blocklib.php');    
    require_once("db.php");

    global $USER, $CFG;
    $_SESSION['offset'] = 0;

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
echo "<table style=\"width: 100%;\">";
echo "<tr><td>";
    print_header(strip_tags($SITE->fullname), $SITE->fullname, NULL, '',
                 '<meta name="description" content="'. s(strip_tags($SITE->summary)) .'" />',
                 true, '', user_login_string($SITE)); 
echo "</td></tr>";		 
echo "<tr><td>";
    $arr[] = array();
    echo "<div style='margin:0px auto; '>";
    echo "<table border='0' style='width: 100%; height: 100%; margin: 0px;'>";
    echo "<tr><td style='width: 20%; padding: 10px 10px 10px 0px;'>";
    $course_id =  get_e2l_courses($USER); //returns an array of courses
    echo "</td><td style='width: 80%; padding: 10px 0px 10px 10px;'>"; 
    //echo "<center>";
    echo get_e2l_lessons($course_id); //echos the lessons
    //echo "</center> ";
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

function generate_lessons( num ){
    var link = "#e2l_"+num;

    //SET GLOBAL VAR TO COMPARE LATER..
    CLICKED = link;

    //RESET ALL ROWS TO ORIGINAL COLOR
    $(".e2l_courses").css({"background-color":"#CCFFFF"});

    //SET SELECTED ROW TO HIGHLIGHT COLOR
    $(link).css({"background-color":"#95E4E4"}); 

    $.ajax({
        data: { 'function' : 'e2l_lessons', 'num' : num },
        url: 'db.php',
        method: 'POST',
        success: function(str) {
	    $("#e2l_lessons").html(str);
        }
    });
}

function next_page(num){

    $.ajax({
        data: { 'function' : 'next_page', 'num' : num },
        url: 'db.php',
        method: 'POST',
        success: function(str) {
	    $("#e2l_lessons").html(str);
        }
    });
}

function prev_page(num){
    $.ajax({
        data: { 'function' : 'prev_page', 'num' : num },
        url: 'db.php',
        method: 'POST', 
        success: function(str) {
	    $("#e2l_lessons").html(str);
        }
    });
}


function myFunction() {
    $("#e2l_test").html("Hello jQuery");
}
//$(document).ready(generate_lessons);

</script>
<script>

function goto_link(id){
    window.location.href = "../mod/lesson/view.php?id="+id;
}
</script>

<style>
body{
    background-color: #33CCFF;
}
    
#rcorners {
    border-radius: 25px;
    padding: 20px; 
}
#lesson_block {
    color: #006699;
    size: 12;
    font-family: 'Roboto', sans-serif;
    font-weight: 800;
}
</style>
<style>
span {
      display: table-cell;
  vertical-align: middle;
}
#parent_box {
    vertical-align:top;
}
.course_list {
    padding: 3px 0px 3px 10px;
    cursor:pointer
}
.e2l_font {
    color: #006699;
    size: 12;
    font-family: 'Roboto', sans-serif;
    /*font-weight: 800;*/
}
.lesson_square {
    /*border: 2px solid #CCCCCC;*/
    text-align: center; 
    height: 280px;
    width: 200px;
    box-shadow: 3px 3px 3px #999999;
    background-color: #FFF;
    cursor:pointer
}
.link:hover {
    text-decoration: none;
}
#thumbnail {
    height: 150px;
    /*width: 200px;*/
}
#lesson_name {
    color: #006699;
    text-align: left;
    padding: 10px;
    font-size: 90%;
    /*border: 2px solid #8AC007; */
}
#reward {
    vertical-align: text-bottom;
    height: 20px;
    color: #666666;
    font-size: 100%;
    text-align: left;
    padding: 10px;
    /*border: 2px solid #8AC007;*/
}
#default_img {
    height: 130px;
    padding: 10px;
}
hr {
    color: #CCCCCC;
}
#course_label {
    /*width: 252px; 
    height: 41px;*/
    font-family: 'Roboto', sans-serif;
    color: #006699;
    padding: 10px;
}
.left_box {
    width:100%; 
    height: 665px; 
    background: #CCFFFF; 
    border-radius: 25px; 
    margin: 0px;
}
.right_box {
    width: 100%; 
    height: 663px; 
    background: #CCFFFF; 
    border-radius: 25px; 
    margin: 0px;
}
.link {
    height: 100%;
    width: 100%;
    /*border: 2px solid #8AC007;*/
}
#img_box {
    /*border: 2px solid #8AC007;*/
}
#filler {
   /*border: 2px solid #8AC007;*/
   height: 280px;
   width: 33%;

}
#e2l_row {
    /*border: 2px solid red; */
    height: 45%;
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
