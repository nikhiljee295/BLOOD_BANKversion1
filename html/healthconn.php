<?php
 $con= new mysqli("localhost","Nikhil","12345","blood_bank");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
else{
 
}
 $hname= $_POST["patient"];
 $gender= $_POST["gender"];
 
  $cno= $_POST["cont"];
 $bodywg= $_POST["body"];
 $temp= $_POST["temp"];
 $bpressure= $_POST["bloodpr"];
 $pulse= $_POST["pulse"];
 
 $sql = "insert into healthinfo(hname,gender,contact,bodyweight,temperature,bloddpressure,pulserate)values
 ('$hname','$gender','$cno','$bodywg','$temp','$bpressure', '$pulse')";
 
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
 