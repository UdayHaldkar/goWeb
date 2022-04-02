<?php

//include "connect.php";
	if(count($_GET)>0) {
	//	include "connect.php";
		session_start();
		$conn = mysqli_connect("localhost","root","","goweb");
		$result = mysqli_query($conn,"SELECT * FROM login WHERE id='" . $_GET["userName"] . "' and password = '". $_GET["password"]."'");
		"SELECT * FROM login WHERE id='" . $_GET["userName"] . "' and password = '". $_GET["password"]."'";
		$count  = mysqli_num_rows($result);
		print $count;
		mysqli_close($conn);
	}