<?php
	session_start();
	
	if(isset($_SESSION["uname"]) == false)
	{
		header("Location:BMSLOGIN.php");
	}
	else
	{
		echo $_SESSION["uname"];
	}
?>
<html>
<head>
<title>Drop-down Menu</title>
<link rel="stylesheet" href="dropdown.css">
</head>
<body>

<hr><div class="menu-bar"></hr>
<ul>
<li class="active"><a href="#">Home</a></li>
<li><a href="#">Register AS</a>
	<div class="sub-menu-1">
		<ul>
			<li onclick="window.location.href='http://localhost:88/bootform.php';"><a href="#">Donar</a></li>
			<li onclick="window.location.href='http://localhost:88/recipient.php';"><a href="#">Recipient</a></li>
			<li onclick="window.location.href='http://localhost:88/donarview.php';"><a href="#">Manage Donar</a></li>
			</ul>
		</div>
	</li>
			
<li onclick="window.location.href='http://localhost:88/request.php';"><a href="#">Request Blood</a></li>
<li onclick="window.location.href='http://localhost:88/health.php';"><a href="#">Health Info</a></li>
<li> <a href="#">Operations</a>
<div class="sub-menu-1">
<ul>
<li onclick="window.location.href='http://localhost:88/bloodrecipt.php';"><a href="#">Blood Recipit</a></li>
<li onclick="window.location.href='http://localhost:88/issue.php';"><a href="#">Blood issue</a></li>

	</ul>
	</div>
	</li>
	
<li><a href="#">Staff  Management</a>
<div class="sub-menu-1">
		<ul>
			<li onclick="window.location.href='http://localhost:88/staff.php';" ><a href="#">Add Staff</a></li>
			<li onclick="window.location.href='http://localhost:88/staffview.php';"><a href="#">Staff List</a></li>
			<li  onclick="window.location.href='http://localhost:88/staffview.php';"><a href="#">Manage Staff</a></li>
			</ul>
		</div>
	</li>
<li  onclick="window.location.href='http://localhost:88/reports.php';"><a href="#">Reports</a></li>
<li onclick="window.location.href='http://localhost:88/Logout.php';"><a href="#">Logout</a></li>
</ul>





</div>




</body>




</html>