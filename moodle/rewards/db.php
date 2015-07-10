<?php

require_once("../config.php");
require_once("../course/lib.php");
require_once('../lib/blocklib.php');

global $USER, $CFG;

//echo var_dump($USER);

$servername = "localhost";
$username = "moodleuser";
$password = "password";
$dbname = "moodle";

function get_grades(){
    global $servername, $username, $password, $dbname;
    global $USER, $CFG;
    $ret = "";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    
    $sql = "SELECT SUM(grade) as total FROM mdl_lesson_grades WHERE userid = ".$USER->id;

    $result = mysqli_query($conn, $sql);
   
    $rows = mysqli_num_rows($result);

    if($rows > 0) {
        while( $row = mysqli_fetch_assoc($result) ) { 
	    echo "<br>TOTAL: ".var_dump($row)."</br>";
	}
    }

    mysqli_close($conn);    
    return $ret;
}

function get_user_rewards(){
    global $servername, $username, $password, $dbname;
    global $USER, $CFG;    
//echo var_dump($USER);
    $amount = "0.00";

    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Check connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    } 
    
    $sql = "SELECT rewards FROM mdl_user WHERE id = ".$USER->id;

    $result = mysqli_query($conn, $sql);   
    $rows = mysqli_num_rows($result); 

    if($rows > 0){
        $row = mysqli_fetch_assoc($result);
	$amount = $row["rewards"];
	if($amount == NULL){
	    $amount = "0.00";
	}
    }
    mysqli_close($conn);
    return $amount;
}

function set_user_rewards(){
    return true;
}

?>
