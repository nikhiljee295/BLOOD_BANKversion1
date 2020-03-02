<?php
 $con =  new mysqli("localhost","Nikhil","12345","blood_bank");
  if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
}
$deleteid=$_GET['rid'];
$query=mysqli_query($con,"delete from reciveblood where rid='{$deleteid}'") or die(mysqli_error($con));
header("location:recipientview.php");
?>