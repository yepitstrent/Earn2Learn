<?php
    require_once("../config.php");
    require_once("../course/lib.php");
    require_once('../lib/blocklib.php');

    global $USER, $CFG;

    $servername = "localhost";
    $username = "moodleuser";
    $password = "password";
    $dbname = "moodle";
    $conn;

if(isset($_POST['function']) && !empty($_POST['function'])) {

    $action = $_POST['function'];
    switch($action) {
        case 'e2l_lessons' : $_SESSION['offset'] = 0; 
	                     echo get_e2l_lessons($_POST['num']);  break;
        case 'next_page'   : echo get_next_page($_POST['num']);    break;
	case 'prev_page'   : echo get_prev_page($_POST['num']);    break;
    }
}

function get_prev_page($id){

    $num_tiles = 6;
    $offset = $_SESSION['offset'];
    $offset = $offset - $num_tiles;

    if($offset < 0) { $offset = 0; } //JUST IN CASE... SHOULDN'T BE NEGATIVE... :)

    $_SESSION['offset'] = $offset;
 
    return get_e2l_lessons($id);
}

function get_next_page($id){

    $num_tiles = 6;
    $offset = $_SESSION['offset'];
    $_SESSION['offset'] = $offset + $num_tiles;
    //return $_SESSION['offset']; 
    return get_e2l_lessons($id);
}

function get_e2l_courses($USER){
    global $servername, $username, $password, $dbname, $conn;

    //RESET SESSION COUNTER FOR OFFSET.
    $_SESSION['offset'] = 0;

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
           "AND mcc.name != 'Tasks' order by mc.id";	   

    $result = mysqli_query($conn, $sql);

    echo "<table class=\"left_box\" border='0' >";
    echo "<tr><td id=\"parent_box\"><div>";
    echo "<div id=\"course_label\"><b>Lessons:</b></div>";
    $entries = mysqli_num_rows($result); 
    if ($entries > 0) {
        while($row = mysqli_fetch_assoc($result)) {
	    $arr[] = $row["id"];
            echo "<div class=\"e2l_courses course_list e2l_font\" id=\"e2l_".$row['id']."\" onmouseout=\"end_hilite(".$row["id"].")\" onmouseover=\"start_hilite(".$row["id"].")\" onclick=\"generate_lessons(".$row["id"].")\"><span id=\"e2l\">".$row["fullname"]."</span></div>";
        }
    }
    echo "</div></td></tr>";
    echo "</table>"; 

    /*echo "<table class=\"left_box\" border='2' >";
    echo    "<tr><th id=\"course_label\" >COURSE NAME:</th></tr>";
    echo    "<tr><td style=\"width: 252px; height: 41px\">&nbsp;</td></tr>";
    $entries = mysqli_num_rows($result); 
    if ($entries > 0) {
        // output data of each row

        while($row = mysqli_fetch_assoc($result)) {
	    $arr[] = $row["id"];
            echo "<tr class=\"e2l_courses\" id=\"e2l_".$row['id']."\" ><td style=\"width: 252px; height: 41px\" onmouseout=\"end_hilite(".$row["id"].")\" onmouseover=\"start_hilite(".$row["id"].")\" onclick=\"generate_lessons(".$row["id"].")\"><div class=\"e2l_font\" style='padding-left: 20px;'>". $row["fullname"]."</div></td><tr>";

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
    // SET THE FIRST ELEMENT TO BE HI-LITED ON PAGE LOAD. 
    // $arr[0] IS THE ID NUMBER FOR THE COURSE.
    echo "<script>window.onload = function() { init_hilite(".$arr[0]."); }</script>";
    return $arr[0];
}



function get_e2l_lessons($course_id){

    global $servername, $username, $password, $dbname, $conn;

    $ret = "";
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT cm.id as id, m.name as name, cw.section, cm.visible as visible, cm.groupmode, m.preview as preview, m.timemodified, m.dollar ".
           "FROM mdl_course_modules as cm, mdl_course_sections as cw, mdl_modules as md, mdl_lesson as m ".
	   "WHERE cm.course = ".$course_id." ".
	   "AND cm.instance = m.id ".
	   "AND cm.section = cw.id ".
	   "AND md.name = 'lesson' ".
	   "AND md.id = cm.module ".
	   "ORDER BY m.timemodified DESC LIMIT 10 OFFSET ".$_SESSION['offset'];

    $ret = $ret."<table class=\"right_box\" id='e2l_lessons' border=\"0\" >";
    //$ret = $ret."<tr><td>&nbsp;</td></tr>";
    $result = mysqli_query($conn, $sql);
    $rows = mysqli_num_rows($result);
    $row_count = 0;
    $state = 0;
    $count = 0;

    if ( $rows > 0) {
        $_SESSION["result"] = $result; //save the result set for displaying more pages...
        $i = 0;
	
	
        while( $row = mysqli_fetch_assoc($result) ) {
       
	    if($row["preview"] == NULL){
                $url = "<img id=\"default_img\" src=\"../resources/dashboard/lesson.svg\" >";
            } else {
	        $url = "<img id=\"thumbnail\" src=\"http://i1.ytimg.com/vi/".$row["preview"]."/hqdefault.jpg\" >";
	    }

            $text = $row["name"]; 
            $dollar = $row["dollar"];
            if($dollar == null) {
	        $dollar = 0.00;
	    }

            switch($i){
	        case  0: $i++; $state++; $ret = $ret."<tr id=\"e2l_row\">".
		                                         "<td style=\"width: 33%;\"><center><div class=\"lesson_square\" onclick=\"goto_link('".$row['id']."')\"><div id=\"img_box\">".$url."</div><div id=\"lesson_name\">".$text."</div><hr><div id=\"reward\">$".$dollar."</div></div></center></td>";
			 $count++;               break;
		case  1: $i++; $state++; $ret = $ret.    "<td style=\"width: 33%;\"><center><div class=\"lesson_square\" onclick=\"goto_link('".$row['id']."')\"><div id=\"img_box\">".$url."</div><div id=\"lesson_name\">".$text."</div><hr><div id=\"reward\">$".$dollar."</div></div></center></td>";     
		         $count++;               break;
		case  2: $i=0; $state++; $ret = $ret.    "<td style=\"width: 33%;\"><center><div class=\"lesson_square\" onclick=\"goto_link('".$row['id']."')\"><div id=\"img_box\">".$url."</div><div id=\"lesson_name\">".$text."</div><hr><div id=\"reward\">$".$dollar."</div></div></center></td><tr>"; 
		         $count++; $row_count++; break;
		default: $i=0;                   break;
	    }
	    if($row_count > 1){ 
	        break; 
	    }
        }//end while

	//FILL THE REST OF THE SPACE ON THE TABLE
	switch($state) {
	    case 0: /*ROW:0 = 3*/ $ret = $ret."<tr id=\"e2l_row\"><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td></tr>"; 
	            /*ROW:1 = 3*/ $ret = $ret."<tr id=\"e2l_row\"><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td></tr>"; break;
  	    case 1: /*ROW:0 = 2*/ $ret = $ret.                                                "<td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td></tr>";
	            /*ROW:1 = 3*/ $ret = $ret."<tr id=\"e2l_row\"><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td></tr>"; break;
	    case 2: /*ROW:0 = 1*/ $ret = $ret.                                                                             "<td id=\"filler\">&nbsp;</td></tr>";
	            /*ROW:1 = 3*/ $ret = $ret."<tr id=\"e2l_row\"><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td></tr>"; break;
	    case 3: /*ROW:0 = 0*/ $ret = $ret;
	            /*ROW:1 = 3*/ $ret = $ret."<tr id=\"e2l_row\"><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td></tr>"; break;
	    case 4: /*ROW:0 = X*/ $ret = $ret;
	            /*ROW:1 = 2*/ $ret = $ret.                                                "<td id=\"filler\">&nbsp;</td><td id=\"filler\">&nbsp;</td></tr>"; break;
            case 5: /*ROW:0 = X*/ $ret = $ret;
	            /*ROW:1 = 1*/ $ret = $ret.                                                                             "<td id=\"filler\">&nbsp;</td></tr>"; break;
	    case 6: /*ROW:0 = X*/ $ret = $ret;
	            /*ROW:1 = 0*/ $ret = $ret;                                                                                                                   break;
	    default:                                                                                                                              break;
	}
    } else {
        $ret = $ret."<tr><td>No Lessons Available In Course:</td></tr>";
    }

    $state = 0;
    $offset = $_SESSION['offset'];
             if( $offset <= 0 && $count >= $rows ) { $state = 0; }
	else if( $offset <= 0 && $count <  $rows ) { $state = 1; }
	else if( $offset >  0 && $count >= $rows ) { $state = 2; }
	else                                       { $state = 3; }
 

    switch($state){
        case 0: /*NOTHING*/ $ret = $ret."<tr><td></td><td></td><td></td></tr>"; break; 
	case 1: /*MORE*/    $ret = $ret."<tr>".
	                     "<td>&nbsp;</td>".
			     "<td>&nbsp;</td>".
			     "<td><div id=\"more\" style=\"float: right;\" onclick=\"next_page(".$course_id.");\">More<img src=\"../resources/dashboard/right.svg\"></div></td>".
			     "</tr>";  break; 
	case 2: /*BACK*/    $ret = $ret."<tr>".
	                     "<td><div id=\"prev\" style=\"float: left;\" onclick=\"prev_page(".$course_id.");\"><img src=\"../resources/dashboard/left.svg\">Back</div></td>".
			     "<td>&nbsp;</td>".
			     "<td>&nbsp;</td>".
			     "</tr>";  break;
	case 3: /*BACK AND MORE*/ 
	                    $ret = $ret."<tr>".
	                     "<td><div id=\"prev\" style=\"float: left;\" onclick=\"prev_page(".$course_id.");\"><img src=\"../resources/dashboard/left.svg\">Back</div></td>".
			     "<td>&nbsp;</td>".
			     "<td><div id=\"more\" style=\"float: right;\" onclick=\"next_page(".$course_id.");\">More<img src=\"../resources/dashboard/right.svg\"></div></td>".
			     "</tr>";  break;
	default: $ret = $ret."<tr><td></td><td></td><td></td></tr>"; break; 
 
    }

    /*if($row_count > 1){
        //SHOW NEXT BUTTON, WE HAVE MORE CONTENT TO SHOW
	if($_SESSION['offset'] > 0) {
	    $ret = $ret."<tr><td><div id=\"prev\" style=\"float: left;\" onclick=\"prev_page(".$course_id.");\"><img src=\"../resources/dashboard/left.png\">Back</div></td><td></td><td><div id=\"more\" style=\"float: right;\" onclick=\"next_page(".$course_id.");\">More<img src=\"../resources/dashboard/right.png\"></div></td></tr>";
	} else {
            $ret = $ret."<tr><td></td><td></td><td><div id=\"more\" style=\"float: right;\" onclick=\"next_page(".$course_id.");\">More<img src=\"../resources/dashboard/right.png\"></div></td></tr>";	
	}
    } else {
        if($_SESSION['offset'] > 0) {
            $ret = $ret."<tr><td><div id=\"more\" style=\"float: left;\" onclick=\"prev_page(".$course_id.");\"><img src=\"../resources/dashboard/left.png\">Back</div></td><td></td><td></td></tr>";		
	} else {
            $ret = $ret."<tr><td><div id=\"prev\" style=\"display: none;\"><img src=\"../resources/dashboard/right.png\">Back</div></td></tr>";
	}
    }*/

    $ret = $ret."</table>";

    mysqli_close($conn);    
    return $ret;
}

?>


