<?php

//Define your host here.
$hostname = "localhost";

//Define your database username here.
$username = "username";

//Define your database password here.
$password = "";

//Define your database name here.
$dbname = "donation";

 $conn = mysqli_connect($hostname, $username, $password, $dbname);
 
 if (mysqli_connect_errno())
 
 {
	 
 	die("connection failed");
  	echo mysqli_connect_error();
 
 }
?>
