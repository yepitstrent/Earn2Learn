<?PHP  // $Id: lesson.php, v 1.0 25 Jan 2004

/*************************************************
    ACTIONS handled are:

    addbranchtable
    addendofbranch
    addcluster      /// CDC-FLAG /// added two new items
    addendofcluster
    addpage
    confirmdelete
    continue
    delete
    editpage
    insertpage
    move
    moveit
    updatepage

************************************************/

    require("../../config.php");
    require("locallib.php");
    //require("view.php");

    //global $Q_ID;
//echo $_SESSION['q_id'];
//    echo "LESSON.PHP: YOUTUBE HERE".$_POST["youtube"];

    $id     = required_param('id', PARAM_INT);         // Course Module ID
    $action = required_param('action', PARAM_ALPHA);   // Action

    // get some esential stuff...
    if (! $cm = get_record("course_modules", "id", $id)) {
        error("Course Module ID was incorrect");
    }

    if (! $course = get_record("course", "id", $cm->course)) {
        error("Course is misconfigured");
    }

    if (! $lesson = get_record("lesson", "id", $cm->instance)) {
        error("Course module is incorrect");
    }

    require_login($course->id);
    
    // set up some general variables
    $usehtmleditor = can_use_html_editor();
    
    $navigation = "";
    if ($course->category) {
        $navigation = "<a href=\"../../course/view.php?id=$course->id\">$course->shortname</a> ->";
    }

    $strlessons = get_string("modulenameplural", "lesson");
    $strlesson  = get_string("modulename", "lesson");
    $strlessonname = $lesson->name;
    
    // ... print the header and...
    print_header("$course->shortname: ".format_string($lesson->name), "$course->fullname",
                 "$navigation <a href=index.php?id=$course->id>$strlessons</a> -> 
                  <a href=\"view.php?id=$cm->id\">".format_string($lesson->name,true)."</a>", "", "", true);
//    echo var_dump($action);
    // include the appropriate action (check to make sure the file is there first)
    if (file_exists($CFG->dirroot.'/mod/lesson/action/'.$action.'.php')) {
        echo "<center><em><strong>";
        echo format_string($_SESSION['l_name']) . "</strong></em></center><br>";

        $_SESSION['l_name'] = "<br>";//RESET THE VARIABLE SO IT WON'T RETURN ANYTHING ON ADMIN PAGE...
    
        echo "<center><div id=\"question_box\">";
        //echo "<center><div style=\" margin-top: auto; margin-bottom: auto; \">";
	$continue = "continue";
	//echo "B4:".$action."::".$continue;
	if($action == $continue){
//            echo "IN IF";	
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

            $sql = "select id, contents, youtube from mdl_lesson_pages where id = ".$_SESSION['q_id'];

            //$_SESSION['q_id'] = -1;//RESET THE VARIABLE SO IT WON'T RETURN ANYTHING ON ADMIN PAGE...

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {
                // output data of each row
                while($row = mysqli_fetch_assoc($result)) {
                    //echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
	            //echo var_dump($row);
	            if($row["youtube"] != NULL){
	                echo "<br><br><iframe width=\"560\" height=\"315\" src=\"https://www.youtube.com/embed/".$row["youtube"]."\" frameborder=\"0\" allowfullscreen></iframe>";
	            }
	            echo "<br><br><div>".$row["contents"]."</div><br><br>";
                }
            } else {
                 echo "<br><br><br>";
            }

            mysqli_close($conn);
	} else {
	    echo "<br><br><br>";
	}
	echo "</div></center>";
	echo "<center><div id=\"answer_box\" >";
	//echo 'ACTION:'.$CFG->dirroot.'/mod/lesson/action/'.$action.'.php';
        include($CFG->dirroot.'/mod/lesson/action/'.$action.'.php');    
	echo "<br></div></center>";
	
    } else {
        error("Fatal Error: Unknown action\n");
    }
    //print_footer($course);
    print_footer();
 
?>
<style>
body{
    /*background-color: #76D4D6; */
    background-color: #33CCFF;
    font-family: 'Roboto', sans-serif;

}
#answer_box{
    width: 80%; 
    /*background-color: #B8E9EA; */
    background-color: #AADEE9;
    border-radius: 0px 0px 25px 25px; 
    margin: 0px;
}
#question_box{
    width: 80%;  
    background-color: #666666;
    border-radius: 25px 25px 0px 0px; 
    margin: 0px;
}
</style>
