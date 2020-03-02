<?php
 $con= new mysqli("localhost","Nikhil","12345","blood_bank");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
else{
 
}
 $patientname= $_POST["rname"];
 $gender= $_POST["gender"];
 $dob= $_POST["dob"];
 $contact= $_POST["cont"];

 $bloodgroup= $_POST["bloodgroup"];
  $quant= $_POST["quantity"];
 $request= $_POST["request"];
 
 $requirdate= $_POST["reqddate"];
 $mail= $_POST["email"];
 $address= $_POST["address"];
  $sql = "insert into rblood(rname,gender,dateofbirth,contect,bgroup,quantity,requestby,reciveddate,email,address)values
 ('$patientname','$gender','$dob','$contact','$bloodgroup','$quant','$request', '$requirdate', '$mail', '$address')";
 
 if ($con->query($sql) === TRUE) {
    echo "New record created successfully";
	//header("Location: http://localhost:88/existdb.php");
} 
else {
    echo "Error: " . $sql . "<br>" . $con->error;
} 
$con->close();
 
 
 
 ?>
 }
 