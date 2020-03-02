<?php
include('connect.php');

//------------ Generate Receipt ID ----------------
$sql = "Select * from reciptform";
$result = $con->query($sql);	 
	//$result = $con->query($sql);

$rid=null;
$dname=null;
$dob=null;
$blood=null;
if($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			$rid = $row["rid"];
		}
		$rid = substr($rid, 1, 7);
		$rid = $rid + 1;
		$rid = "R" . $rid;
			
	}
	else
	{
		$year = date('Y');
		$rid = "R" . $year . "001";
	}

//------------------------------------------------------

$did = null;

if(isset($_POST['search'])){
	
	$did = $_POST['donarid'];

	$sql = "Select * from donar	where did='$did'";

	$result = $con->query($sql);
	
	if($result->num_rows > 0){	
		$row = $result->fetch_assoc();
		$dname= $row["dname"];
		$dob= $row["dateofbirth"];
		
	}
}

if(isset($_POST['submit'])){
	$recepit= $_POST["recitid"];
	$did= $_POST["donarid"];
	$unit= $_POST["unit"];
	$btype= $_POST["byt"];
	$date= $_POST["donation"];
	$time= $_POST["time"];
		
	
	$insert = "insert into reciptform(rid,did,unit,bloodtype,donationdate,time) values('$recepit','$did','$unit','$btype','$date','$time')";
	
	$query=mysqli_query($con,$insert) or die(mysqli_error($con));
	 
	if ($query==1) {
		echo "New record created successfully";
		//header("Location: http://localhost:88/existdb.php");
	}
}
?>

<html>
<head>

<title>RECIPT</title>

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
			<b class="registration"  style="font-size:35px;"> BLOOD RECEIPT  </b>
			
			
			
			<div class="form-group">
			<label> RECEIPT ID :</label>
			<input type="text" name="recitid" value="<?php echo $rid ?>" class="form-control text " />
			
			</div>
			
			<div class="form-group">
			<label> DONAR ID: </label>
			<input type="text" name="donarid" value="<?php echo $did?>" class="form-control text " />
			<input type="submit" value="search" name="search"  >
			
			</div>
			
			<div class="form-group">
			<label> NAME : </label>
			<input type="text" name="name" value="<?php echo $dname?>" class="form-control text " placeholder="donar name">
			</div>
			
			<div class="well">
              <div class="form-group">
              <label>Date of Birth:</label>
             <input type="date" class="form-control"  value="<?php echo $dob?>" name="dob" placeholder="Enter Your Date of Birth">
               </div>
				
								
				<b class="registration"  style="font-size:35px;"> Current Recipt </b>	
                         
						            
                           
					<div class="form-group">
					<label>Unit :</label>
			    	 <select class="form-control" id="Blood" name="unit">
								 <option value="" disabled selected>unit:</option>
								 <option value="1">1 </option>
								<option value="A+">2 </option>
								
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
								<option value="O-">O+</option>
								<option value="B-">B-</option>
								<option value="AB-">AB-</option>
								<option value="AB-">A-</option>
								
								</select>
								</div>
						
					<div class="form-group">
					<label>Donation Date:</label>
					<input type="date"  name="donation" class="form-control" value='<?php echo date('Y-m-d');?>'>             
					</div>
			   
					<div class="form-group">
					<label>Select a time:</label>
					<input type="time" name="time" <?php echo date("h:i:sa")?>>
					</div>					
							

					<!--<b class="registration"  style="font-size:35px;"> Previous Donation</b>	-->
				
					
					
					<div class="form-group">
					<input type="submit" class="btn btn-primary" name="submit" value="submit">
					<input type="btn" class="btn btn-danger" value="home" onclick="window.location.href='http://localhost:88/header.php';">
					</div>
			
				</div>
			</div>
			</form>
			</body>
			</html>