<?php

$dbhost="localhost";
$dbuser="username";
$dbpass="";
$dbname="collegexplorer";
  $conn = mysqli_connect( $dbhost, $dbuser, $dbpass, $dbname );
  if( mysqli_connect_errno() )
	 {
  		 die("connection failed");
  		 echo mysqli_connect_error();
	 }
  //echo "connected \n";
  ?>
