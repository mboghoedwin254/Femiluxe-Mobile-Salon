<?php

//$host = "localhost";
//$username = "root";
//$password = "";
//$database = "salon_web_db";
$errors = array();

$conn = mysqli_connect("localhost","root","","salon_database");
// Check connection
if (mysqli_connect_errno()){
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

?>