<?php
	$server="localhost";
	$username="root";
	$password="";
	$database="pbtik";

	$connect = mysqli_connect($server, $username, $password, $database);

	if(!$connect) {
		echo "Failed Connecting To Database";
	}

	mysqli_select_db($connect, $database) or die("Can't access database");
?>