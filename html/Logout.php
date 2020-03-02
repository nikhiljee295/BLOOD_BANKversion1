<?php
	session_start();
	
	if(isset($_SESSION["uname"]))
	{
		session_destroy();
		header("Location:BMSLOGIN.php");
	}
	else
	{
		echo $_SESSION["uname"];
	}
?>