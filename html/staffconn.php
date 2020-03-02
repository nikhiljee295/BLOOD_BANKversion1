<html>
	<body text=red>
<?php

	
	$con=  new mysqli("localhost","Nikhil","12345","blood_bank");
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	} 
	else{
 
	}
		$staffdetail= $_POST["staffdetail"];
		$cno= $_POST["cno"];
		$gender= $_POST["gender"];
		$address= $_POST["address"];
		$desig= $_POST["desi"];
  
	//$init = substr($staffdetail,0,1);
	//echo $init;
  
	$sql = "Select Sid from staff";
	
	$result = $con->query($sql);
	
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$sid = $row["Sid"];
		}
		$sid = substr($sid, 1, 7);
		$sid = $sid + 1;
		$sid = "S" . $sid;
		echo $sid;	
	}
	else
	{
		$year = date('Y');
		$sid = "S" . $year . "001";
	}
   
 
	$sql = "insert into staff(Sid,sname,contact,gender,address,designation)values('$sid', '$staffdetail','$cno','$gender','$address','$desig')";
 
 
	if ($con->query($sql) === TRUE) {
		echo "New record created successfully";
		//header("Location: http://localhost:88/existdb.php");
	} 

	else {
		echo "Error: " . $sql . "<br>" . $con->error;
	} 
	$con->close();
?>
	</body>
</html>