<?php
	$con=  new mysqli("localhost","Nikhil","12345","blood_bank");
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}
?>