<?php
	/*
		this file connects to your database
		include this file to your php page
		if you need database
	*/

	/*
		mysqli_connect paramaters
		host
		username
		password
		database
	*/

	// procedural implementation
	$conn = mysqli_connect("localhost", "root", "", "registration");
	//echo mysqli_connect_errno(); // returns 1 if there's an error else 0

	// oop implementation
	$conn2 = new mysqli("localhost", "root", "", "registration");
	//echo $conn2->connect_errno;  // returns 1 if there's an error else 0

?>