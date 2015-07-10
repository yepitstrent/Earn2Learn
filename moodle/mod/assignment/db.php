<?php
  
if(isset($_POST['action']) && !empty($_POST['action'])) {

    $action = $_POST['action'];
    $time = $_POST['time'];
    $tid = $_POST['task_id'];
//    $uid = $_POST['uid'];
//    $amt = $_POST['amt'];
    switch($action) {
        case 'test' : set_time($time);break;
        case 'get_time' : get_time($tid); break;
	case 'reward' : print "<script>console.log('IN DB')</script>"; break;
//	case 'reward' : $ret = "<script>console.log(\"IN AJAX\");</script>"; return $ret; break;
        // ...etc...
        }
}



function get_time($tid){
    //echo "IN GET TIME".$tid;

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

    $sql = "SELECT id, timelimit FROM mdl_assignment WHERE id = ".$tid;
    $result = mysqli_query($conn, $sql);

    $entries = mysqli_num_rows($result); 
    if ($entries > 0) {
        $row = mysqli_fetch_assoc($result);
	$num = $row['timelimit'];
	if($num == NULL) {
	    $num = 10;
	}
	echo $num;
    } else {
        echo 10; //DEFAULT TIME LIMIT
    }
    mysqli_close($conn);    

}

function set_time($time){
    //echo "This is the time: ".$time;
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

    mysqli_close($conn);    
}
?>
