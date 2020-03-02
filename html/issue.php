<?php

	$con=  new mysqli("localhost","Nikhil","12345","blood_bank");
	if ($con->connect_error) {
		die("Connection failed: " . $con->connect_error);
	}
	
	$sql = "Select iid from issue";
    $result = $con->query($sql);	 
	//$result = $con->query($sql);

$rid=null;
$recipt=null;
$dob=null;
//$blood=null;
    if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$iid = $row["iid"];
		}
		$iid = substr($iid, 1, 7);
		$iid = $iid + 1;
	
		$iid = "I" . $iid;
			
	}
	else
	{
		$year = date('Y');
		$iid = "I" . $year . "001";
	}
	
	

//--  ------------------------------- --




if(isset($_POST['search'])){
	
	$rid = $_POST['recipientid'];

	$sql = "Select * from reciveblood where rid='$rid'";

	$result = $con->query($sql);
	
	if($result->num_rows > 0){	
		$row = $result->fetch_assoc();
		$recipt= $row["recipient"];
		$dob= $row["date"];
			
	}
}

	
if(isset($_POST['submit'])){
	$issue= $_POST["issueid"];
	$rid= $_POST["recipientid"];
	$unit= $_POST["uni"];
	$btype= $_POST["byt"];
	$date= $_POST["issue"];
	$com= $_POST["com"];
		
	
	$insert = "insert into issue(iid,rid,unit,bloodtype,date,comment) values('$issue','$rid','$unit','$btype','$date','$com')";
	
	$query=mysqli_query($con,$insert) or die(mysqli_error($con));
	 
	if ($query==1) {
		echo "New record created successfully";
		
	}
}

?>




<html>
<head>
<title>ISSUE</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
	<style type="text/css">
	#form{
	background-color: #84e184;
	min-height: 600px;
	padding: 5px 40px 40px 40px;
	margin: 251px;
	margin-top:60px;
	}
	.registration{
	font-size: 55px;
	font-family: Agency FB;
	font-weight: 700;
	border-bottom-style: ridge;;
	}
	.text{
		height: 43px;
		}
	label{
		font-size: 18px;
		}
		
		.btn-primary{
		border-radius:0px;padding: 10px;
		width: 47%
		
		}
		.btn-danger{
		border-radius:0px;padding: 10px;
		width: 47%
		}
		
	</style>
	</head>
	<body>
	<form action="#" method="POST"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-4" id="form">
			<b class="registration"  style="font-size:35px;"> BLOOD ISSUE </b>
			
			<div class="form-group">
			
			<label> ISSUE ID :</label>
			<input type="text" value="<?php echo $iid;?>" name="issueid" class="form-control text " />
		
			<label> RECIPIENT ID: </label>
			<input type="text" name="recipientid"  value="<?php echo $rid?>" class="form-control text " />
			<input type="submit" value="search" name="search"  >
			</div>
			  
			<div class="form-group">
			<label> NAME : </label>
			<input type="text" name="name"  value="<?php echo $recipt?>" class="form-control text " placeholder="recipient name">
			</div>
			
			<div class="well">
              <div class="form-group">
              <label>Date of Birth:</label>
             <input type="date" class="form-control" id="dob" value="<?php echo $dob?>" name="dob" placeholder="Enter Your Date of Birth">
               </div>
			   
		
							
		<b class="registration"  style="font-size:35px;"> Current issue </b>	
                         	            
                           
					<div class="form-group">
					<label>Unit :</label>
			    	 <select class="form-control" name="uni" id="Blood" >
								 <option value="" disabled selected>unit:</option>
								 <option value="1">1 </option>
								<option value="1">2 </option>
								
								</select>
						</div>
						
						
						<div class="form-group">
                                <label>Blood group</label>
                                <select class="form-control" name="byt" id="Blood">
								 <option value="" disabled selected>Blood :</option>
								 <option value="O+">O+</option>
								<option value="A+">A+</option>
								<option value="B+">B+</option>
								<option value="AB+">AB+</option>
								<option value="O-">O-</option>
								<option value="B-">B-</option>
								<option value="AB-">AB-</option>
								<option value="AB-">A+</option>
								
								</select>
								</div>
						
						<div class="form-group">
					<label>ISSUE Date:</label>
					<input type="date"  name="issue" class="form-control" value='<?php echo date('Y-m-d');?>' >             
					</div>
					
					
					
					<div class="form-group">
					<label>COMMENT:</label>
					 <textarea rows="9" cols="60" name="com" > </textarea>
					 
					 <div class="form-group" >
					<input type="submit" class="btn btn-primary" name="submit" value="submit">
					<input type="btn" class="btn btn-danger" value="home" onclick="window.location.href='http://localhost:88/header.php';">
					</div>


					
					</div>
			   
								
      
			
				</div>
			</div>
			</form>
			</body>
			</html>