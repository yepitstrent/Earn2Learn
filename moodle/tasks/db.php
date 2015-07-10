<?php
    require_once("../config.php");
    require_once("../course/lib.php");
    require_once('../lib/blocklib.php');

    global $USER, $CFG;
    $filled = 0; 
/*if($_POST['function'] == 'e2l_tasks'){
    echo get_e2l_tasks($_POST['num']);   
}*/

if(isset($_POST['function']) && !empty($_POST['function'])) {

    $action = $_POST['function'];
    switch($action) {
        case 'e2l_tasks' : $_SESSION['offset'] = 0; 
	                     echo get_e2l_tasks($_POST['num']);    break;
        case 'next_page'   : echo get_next_page($_POST['num']);    break;
	case 'prev_page'   : echo get_prev_page($_POST['num']);    break;
    }
}

function get_prev_page($id){

    $num_tiles = 5;
    $offset = $_SESSION['offset'];
    $offset = $offset - $num_tiles;

    if($offset < 0) { $offset = 0; } //JUST IN CASE... SHOULDN'T BE NEGATIVE... :)

    $_SESSION['offset'] = $offset;
 
    return get_e2l_tasks($id);
}

function get_next_page($id){
//echo "<script>alert('next db');</script>";

    $num_tiles = 5;
    $offset = $_SESSION['offset'];
    $_SESSION['offset'] = $offset + $num_tiles;
 
    return get_e2l_tasks($id);
}



function get_e2l_courses($USER){

    //RESET SESSION COUNTER FOR OFFSET.
    $_SESSION['offset'] = 0;

    $servername = "localhost";
    $username = "moodleuser";
    $password = "password";
    $dbname = "moodle";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 

    /*GET ALL ENROLLED CLASSES FOR A STUDENT*/
/*    $sql = "SELECT mc.id as id, mu.id as uid, mc.fullname ".
           "FROM mdl_user as mu, mdl_course as mc, mdl_user_students as mus ".
	   "WHERE mu.id = mus.userid ".
	   "AND mus.course = mc.id ".
	   "AND mu.id = ".$USER->id." order by mc.id";*/

    //ALL COURSES NOT IN THE 'Tasks' CATEGORY	   
    $sql = "SELECT mc.id as id, mu.id as uid, mc.fullname ".
           "FROM mdl_user as mu, mdl_course as mc, mdl_user_students as mus, mdl_course_categories as mcc ".
           "WHERE mu.id = mus.userid ".
           "AND mus.course = mc.id ".
           "AND mu.id = ".$USER->id." ".
           "AND mc.category = mcc.id ".
           "AND mcc.name = 'Tasks' order by mc.id";	   

    //(select id, name from mdl_lesson where course=7) union (select id, name from mdl_assignment where course=7) order by id;
    $result = mysqli_query($conn, $sql);

    echo "<table class=\"left_box\">";
    echo "<tr><td id=\"parent_box\">";
    echo "<div>";
    echo "<div id=\"course_label\"><b>Tasks:</b></div>";
    $entries = mysqli_num_rows($result); 
    if ($entries > 0) {
        while($row = mysqli_fetch_assoc($result)) {
	    $arr[] = $row["id"];
	    echo "<div class=\"e2l_tasks e2l_font\" id=\"e2l_".$row['id']."\" onmouseout=\"end_hilite(".$row["id"].")\" onmouseover=\"start_hilite(".$row["id"].")\" onclick=\"generate_tasks(".$row["id"].")\">". $row["fullname"]."</div>";
        }
    }
    echo "</div>";
    echo "</td></tr>";
    echo "</table>";
/*    echo "<table border='0' style='width:100%; height: 665px; background: #CDF3F3; border-radius: 25px; margin: 0px;'>";
    echo    "<tr><th style=\"width: 252px; height: 41px\">TASK NAME:</th></tr>";
    echo    "<tr><td style=\"width: 252px; height: 41px\">&nbsp;</td></tr>";
    $entries = mysqli_num_rows($result); 
    if ($entries > 0) {
        // output data of each row

        while($row = mysqli_fetch_assoc($result)) {
	    $arr[] = $row["id"];
//            echo "<tr ><td style=\"width: 252px; height: 42px\"><div onclick='( generate_lessons(".$row["id"].") )'><center>". $row["fullname"]."</center></div></td><tr>";
            echo "<tr id=\"e2l_courses\" ><td style=\"width: 252px; height: 41px\" onclick='( generate_tasks(".$row["id"].") )'><div style='padding-left: 20px;'>". $row["fullname"]."</div></td><tr>";

        }
    } else {
        echo "<tr><td style=\"width: 252px; height: 41px\" colspan='1'>No Enrolled Courses:</td></tr>";
    }
    $total = 12;
    while($entries < $total){
        $entries++;
        echo "<tr><td style=\"width: 252px; height: 41px\">&nbsp;</td></tr>"; 
    }
    echo    "<tr><td style=\"width: 252px; height: 41px\">&nbsp;</td></tr>";
    echo "</table>";*/

    

    mysqli_close($conn);   
    echo "<script>window.onload = function() { init_hilite(".$arr[0]."); }</script>";
    return $arr[0];
}



function get_e2l_tasks($course_id){
$five = 4;
$three = 3;
global $filled;
//echo "<script>alert('e2l db".$course_id."');</script>";

    $servername = "localhost";
    $username = "moodleuser";
    $password = "password";
    $dbname = "moodle";

    $ret = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    /*$sql = "SELECT cm.id as id, m.name as name, cw.section, cm.visible as visible, cm.groupmode ".
           "FROM mdl_course_modules as cm, mdl_course_sections as cw, mdl_modules as md, mdl_lesson as m ".
	   "WHERE cm.course = ".$course_id." ".
	   "AND cm.instance = m.id ".
	   "AND cm.section = cw.id ".
	   "AND md.name = 'lesson' ".
	   "AND md.id = cm.module";*/

    //GETS ALL LESSONS AND ASSIGNMENTS FOR THE COURSE	   
    /*$sql = "(SELECT cm.id as id, m.name as name ".
           "FROM mdl_course_modules as cm, mdl_course_sections as cw, mdl_modules as md, mdl_lesson as m ".
	   "WHERE cm.course = ".$course_id." ".
	   "AND cm.instance = m.id ".
	   "AND cm.section = cw.id ".
	   "AND md.name = 'lesson' ".
	   "AND md.id = cm.module) ".
	   "UNION ".
	   "(SELECT cm.id as id, m.name as name ".
           "FROM mdl_course_modules as cm, mdl_course_sections as cw, mdl_modules as md, mdl_assignment as m ".
	   "WHERE cm.course = ".$course_id." ".
	   "AND cm.instance = m.id ".
	   "AND cm.section = cw.id ".
	   "AND md.name = 'assignment' ".
	   "AND md.id = cm.module)";*/ 

    //GETS ONLY THE ASSIGNMENTS FOR THE COURSE
    $sql = "SELECT cm.id as id, m.name as name, m.timemodified, m.dollar ".
           "FROM mdl_course_modules as cm, mdl_course_sections as cw, mdl_modules as md, mdl_assignment as m ".
	   "WHERE cm.course = ".$course_id." ".
	   "AND cm.instance = m.id ".
	   "AND cm.section = cw.id ".
	   "AND md.name = 'assignment' ".
	   "AND md.id = cm.module ".
	   "ORDER BY m.timemodified DESC LIMIT 10 OFFSET ".$_SESSION['offset']; 

//(select id, name from mdl_lesson where course=7) union (select id, name from mdl_assignment where course=7) order by id;

    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);

    $ret = $ret."<table class=\"right_box\" id=\"e2l_tasks\">";
    $ret = $ret."<tr><td>";
    $ret = $ret."<div id=\"container\">";
//    $ret = $ret."<div>HERER</div><div>ROW2</div>";
    $count = 0;
    $total_tasks = 5;
    if($rows > 0){
        while($row = mysqli_fetch_assoc($result)) {

	    if($count == 5) {
	        break;
	    }
            $dollar = $row["dollar"];
	    if($dollar == null){
	        $dollar = "0.00";
	    }

	    $ret = $ret."<div id=\"task_wrapper\"><div id=\"e2l_task_box\" onclick=\"goto_link('".$row['id']."')\">".$row["name"]."<div style=\"float: right;\">$".$dollar."</div></div></div>";
	    $count++; 
	}

	if($count < $total_tasks) {
	    for ( $i = $count; $i < $total_tasks; $i++ ) {
	        $ret = $ret."<div id=\"task_wrapper\"><div id=\"e2l_task_fill\"></div></div>";
	    }
	}

	//PREV & NEXT BUTTON LOGIC
        $state = 0;
        $offset = $_SESSION['offset'];
             if( $offset <= 0 && $count >= $rows ) { $state = 0; }
	else if( $offset <= 0 && $count <  $rows ) { $state = 1; }
	else if( $offset >  0 && $count >= $rows ) { $state = 2; }
	else                                       { $state = 3; }

	switch($state){
	    case 0:  $ret = $ret."<div><img onclick=\"prev_page(".$course_id.")\" style=\"float: left; display: none;\" src=\"../resources/dashboard/left.svg\"><img onclick=\"next_page(".$course_id.")\" style=\"float: right; display: none;\" src=\"../resources/dashboard/right.svg\"></div>";                             break; //NO BUTTONS
	    case 1:  $ret = $ret."<div><img onclick=\"prev_page(".$course_id.")\" style=\"float: left; display: none;\" src=\"../resources/dashboard/left.svg\"><div id=\"more\">More<img onclick=\"next_page(".$course_id.")\" style=\"float: right;\" src=\"../resources/dashboard/right.svg\"></div></div>";                 break; //NEXT BUTTON
	    case 2:  $ret = $ret."<div><div id=\"prev\"><img onclick=\"prev_page(".$course_id.")\" style=\"float: left;\" src=\"../resources/dashboard/left.svg\">Back</div><img onclick=\"next_page(".$course_id.")\" style=\"float: right; display: none;\" src=\"../resources/dashboard/right.svg\"></div>";                 break; //PREV BUTTON
	    case 3:  $ret = $ret."<div><div id=\"prev\"><img onclick=\"prev_page(".$course_id.")\" style=\"float: left;\" src=\"../resources/dashboard/left.svg\">Back</div><div id=\"more\">More<img onclick=\"next_page(".$course_id.")\" style=\"float: right;\" src=\"../resources/dashboard/right.svg\"></div></div>";     break; //PREV & NEXT BUTTONS
	    default: $ret = $ret."<div><img onclick=\"prev_page(".$course_id.")\" style=\"float: left; display: none;\" src=\"../resources/dashboard/left.svg\"><img onclick=\"next_page(".$course_id.")\" style=\"float: right; display: none;\" src=\"../resources/dashboard/right.svg\"></div>";                             break; //NO BUTTONS
 
	}
	
    }
    $ret = $ret."</div>";
    $ret = $ret."</td></tr>";
    $ret = $ret."</table>";



/*    $ret = $ret."<table class=\"right_box\" id=\"e2l_tasks\">";

    $i = 0;
    if ( $rows > 0) {
        
        while($row = mysqli_fetch_assoc($result)) {
	    $ret = $ret."<tr style=\"margin: 0px;\"><td><a href='../mod/assignment/view.php?id=". $row["id"]. "'><div id=\"task_box\" ><div style=\"float: left; padding: 10px 0px 0px 25px;\">".$row["name"]."</div><div style=\"float: right; padding: 10px 50px 0px 0px;\">$3.00</div></div></a></td></tr>";
	    $i++;
        }
    }
    while($i < 5){
        $i++;
	    $ret = $ret."<tr style=\"margin: 0px;\"><td><center><div style=\"padding: 5px; background-color: #CCFFFF; border-radius: 25px; height: 100px; width: 90%;\">&nbsp</div></center></td></tr>";
    }
    $ret = $ret."</table>";*/
    mysqli_close($conn);    
    return $ret;
}

?>

