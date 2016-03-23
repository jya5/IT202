<?php

$servername = "localhost";
$username = "root";
$password = "12101992De@";
$dbname = "IT202";


//create connection 

$conn = new mysqli ($servername, $username, $password, $dbname);

//check connection

if ($conn->connect_error){
	die("Connection failed:" . $conn->connect_error);
}

//echo "Connected successfully";

?>
