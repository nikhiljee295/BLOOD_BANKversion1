<?php
	
 $con= new mysqli("localhost","Nikhil","12345","blood_bank");
if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
} 
else{
 
}
 $donarname= $_POST["DonarName"];
 $gender= $_POST["gender"];
 $dob= $_POST["dob"];

// $bloodgroup= $_POST["bloodgroup"];
// $unit=$_POST["unit"];
 //$donation=$_POST["donation"];
 $adharnum=$_POST["adhar"];
  
 $email= $_POST["email"];
 $Cno= $_POST["cno"];
 $address= $_POST["address"];
 
 $sql = "Select did from donar";
	
	$result = $con->query($sql);
	
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$did = $row["did"];
		}
		$did = substr($did, 1, 7);
		$did = $did + 1;
		$did = "D" . $did;	
		echo $did;			
	}
	else
	{
		$year = date('Y');
		$did = "D" . $year . "001";
	}
   
 
 
 $sql = "insert into donar(did,dname,gender,dateofbirth,adhar,email,contact,address)values
 ('$did','$donarname','$gender','$dob','$adharnum','$email','$Cno','$address')";
 
 



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
