

<?php
 $conn =  new mysqli("localhost","Nikhil","12345","blood_bank");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
}
 
  $editid = $_GET['did'];
  $query=mysqli_query($conn,"select * from donar where did='{$editid}'") or die(mysqli_error());
  $editdata = mysqli_fetch_row($query);
  
  if($_POST){
	  
	$donarname= $_POST["DonarName"];
	$gender= $_POST["gender"];
	$dob= $_POST["dob"];
	$adharnum=$_POST["adhar"];
	$email= $_POST["email"];
	$Cno= $_POST["cno"];
	$address= $_POST["address"]; 
	$did=$_POST["donarid"];
	
	  
	  $q=mysqli_query($conn,"update donar set dname='{$donarname}',gender='{$gender}',
	 dateofbirth='{$dob}',adhar='{$adharnum}',email='{$email}',contact='{$Cno}',address='{$address}'
	   where did='{$did}'") or die (mysqli_error());
	if($q)
	{
		
		echo " <script> alert('Record updated');window.location='donarview.php';</script>";
	}
	 //if ($con->connect_error)
		else {
    die("Connection failed: " . $conn->connect_error);
} 
  }
?> 
<html>
<head>
<title>Boot Register</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    
	<style type="text/css">
	#form{
	background-color: #84e184;
	min-height: 600px;
	padding: 15px 40px 40px 40px;
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
	<form action="" method="post"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="form">
			<center><b class="registration">Registration Form</b></center>
			
			 <div class="form-group">
							<label>donar id :</label>
							<input type="hidden" value="<?php echo $editdata[0]; ?>"  name="donarid" class="form-control text " placeholder="Enter staff name">
						</div>
			
							<form action="connection.php" method="post"> 
							<div class="form-group">
						<label>Donarname :</label>
						<input type="text" name="DonarName" class="form-control text " value="<?php echo $editdata[1];?>" placeholder="Enter donar name">
					</div>
								<div class="form-group">
                                <label>Gender</label>
                                <input type="text" class="form-control" value="<?php echo $editdata[2]; ?>"  name="gender" id="gender">
                            </div>
							
							 <div class="well">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob" value="<?php echo $editdata[3]; ?>"placeholder="Enter Your Date of Birth">
                                </div>
                            
						
							
									<label>Adhar Number :</label>
									<input type="text" name="adhar" class="form-control text " value="<?php echo $editdata[4]; ?>" placeholder="Enter Adhar Number">
								</div>
								
								
								<div class="form-group">
                                <label>E-mail Address: </label>
                                <input type="text" class="form-control" name="email" id="email" value="<?php echo $editdata[5]; ?>" placeholder="Enter E-mail Address">
                            </div>
							 <div class="form-group">
                                <label>Contact Number: </label>
                                <input type="text" class="form-control" id="num" name="cno" value="<?php echo $editdata[6]; ?>" placeholder="Enter Contact Number">
                            </div>
							
							 <div class="form-group">
                                <label>Address</label>

                                    <input type="text" class="form-control" name="address" id="address" value="<?php echo $editdata[7]; ?>" ></textarea>
                            </div>
							
								<div class="form-group">
								<input type="submit" class="btn btn-primary" value="update">
								
								</div>
			
							</div>
							</div>
						</form>
					</body>
				</html>