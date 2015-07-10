<?php
    require_once("../config.php");
    require_once("../course/lib.php");
    require_once('../lib/blocklib.php');

    global $USER, $CFG;
//echo var_dump($CFG);
    function get_forums() {
        global $USER, $CFG;
        //echo "<div>GET_FOURMS...".var_dump($CFG)."</div>"; 

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
/*       $sql = "SELECT mc.id as id, mu.id as uid, mc.fullname ".
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
               "order by mc.id";	   

        $result = mysqli_query($conn, $sql);

        echo "<div id=\"forum_container\">";
        echo     "<div><h1>Forum Sections:</h1></div>";
        $entries = mysqli_num_rows($result); 
        if ($entries > 0) { 
            while($row = mysqli_fetch_assoc($result)) { 
	        echo "<a href=\"../mod/forum/index.php?id=".$row["id"]."\"><div id=\"forum_box\"><div id=\"forum_text\">".$row["fullname"]."</div></div></a><br>";    
	    }
	}
        echo "</div>";

        mysqli_close($conn);    
    }
?>
<style>
#forum_container {
    width: 80%;
}
#forum_text {
    color: white;
    size: 15;
    font-family: 'Roboto Slab', serif;
    font-weight: 800;
    text-align: left;
    padding-left: 40px;
}
#forum_box {
    border-radius: 25px;
    border: 2px solid #006699;
    background-color: #33CCFF;
    height: 40px;
}
</style>
