<?php
 $con =  new mysqli("localhost","Nikhil","12345","blood_bank");
  if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
}
$deleteid=$_GET['SID'];
$query=mysqli_query($con,"delete from staff where Sid='{$deleteid}'") or die(mysqli_error());
header("location:staffview.php");
?>