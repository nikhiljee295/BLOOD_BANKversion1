<html>
	<body text=red>
<?php

	
	$con=  new mysqli("localhost","Nikhil","12345","blood_bank");
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	} 
	else{
 
	}
		$recipent= $_POST["recipient"];
		$gender= $_POST["gender"];
		$date= $_POST["dob"];
		$contact= $_POST["cno"];
		//$bloodgroup= $_POST["bloodgroup"];
		//$unit= $_POST["unit"];
		//$recivedate= $_POST["recivedate"];
		$email= $_POST["email"];
		$adhar= $_POST["adhar"];
		$address= $_POST["address"];
  
	//$init = substr($staffdetail,0,1);
	//echo $init;
  
	$sql = "Select rid from  reciveblood";
	
	$result = $con->query($sql);
	
	if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$rid = $row["rid"];
		}
		$rid = substr($rid, 1, 7);
		$rid = $rid + 1;
		$rid = "R" . $rid;
		echo $rid;	
	}
	else
	{
		$year = date('Y');
		$rid = "R" . $year . "001";
	}
   

	$sql = "insert into reciveblood(rid,recipient,gender,date,contact,email,adhar,address)values('$rid','$recipent','$gender','$date','$contact','$email','$adhar','$address')";
 
 
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