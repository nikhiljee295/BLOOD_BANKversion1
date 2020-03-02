<?php
 $con =  new mysqli("localhost","Nikhil","12345","blood_bank");
  if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
}
$error = null;
$deleteid=$_GET['did'];
//$query=mysqli_query($con,"delete from donar where did='{$deleteid}'") or die("Cannot delete this record!" . mysqli_error());

if($query=mysqli_query($con,"delete from donar where did='$deleteid'") )
	echo " <script> alert('Successful!');window.location='donarview.php';</script>";
else
	echo " <script> alert('You cannont delete this master record as it has some dependency');window.location='donarview.php';</script>";
?>