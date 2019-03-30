<?php
	// connecting to MYSQL
	$conn = mysqli_connect("localhost","root",'',"hospital");

	// Test connection 
	if (mysqli_connect_errno()) {
		die( 'Failed to connnect to MySQL
		: '.mysqli_connect_error());
	}
?>