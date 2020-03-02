
<?php
	session_start();
	
 $con= new mysqli("localhost","Nikhil","12345","blood_bank");
if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
		
 $name= $_POST["uname"];
 $password= $_POST["password"];
 
 $query= "select * from login where UserId='" . $name ."' AND Password='" . $password ."'";

 $result = $con->query($query);
 $num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION["uname"] = $name;
	header("Location:Header.php");
	//echo "CONNECTED SUCCESSFULYY";
  
}
else{
 echo" you have entered incorrect password";
}

?>