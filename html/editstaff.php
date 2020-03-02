

<?php
 $conn =  new mysqli("localhost","Nikhil","12345","blood_bank");
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
}
 
  $editid = $_GET['SID'];
  $query=mysqli_query($conn,"select * from staff where Sid='{$editid}'") or die(mysqli_error());
  $editdata = mysqli_fetch_row($query);
  
  if($_POST){
	  
	  $sname=$_POST['staffdetail'];
	  $contact=$_POST['cno'];
	  $gender=$_POST['gender'];
	  $address=$_POST['address'];
	  $designation=$_POST['desi'];
	  $sid =$_POST['staffid'];
	  
	  $q=mysqli_query($conn,"update staff set sname='{$sname}',contact='{$contact}',
	 gender='{$gender}',address='{$address}',designation='{$designation}'
	   where Sid='{$sid}'") or die(mysqli_error($conn));
	if($q)
	{
		
		echo " <script> alert('Record updated');window.location='staffview.php';</script>";
	//}
	 //if ($con->connect_error) {
    //die("Connection failed: " . $conn->connect_error);
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
			<center><b class="registration">Staff Details</b></center>
			
			
                            <div class="form-group">
							<label>Staff id :</label>
							<input type="hidden" value="<?php echo $editdata[0]; ?>"  name="staffid" class="form-control text " placeholder="Enter staff name">
							</div>
							
							<div class="form-group">
							<label>Staff Name :</label>
							<input type="text" value="<?php echo $editdata[1]; ?>"  name="staffdetail" class="form-control text " placeholder="Enter staff name">
							</div>
			
							<div class="form-group">
                                <label>Contact Number: </label>
                                <input type="text" value="<?php echo $editdata[2]; ?>"  class="form-control" id="num" name="cno" placeholder="Enter Contact Number">
                            </div>
			
			
			
			
								<div class="form-group">
                                <label>Gender</label>
                                <input type="text" class="form-control" value="<?php echo $editdata[3]; ?>"  name="gender" id="gender">
                                    
                            </div>
							 
                                <div class="form-group">
                                <label">Address</label>

                                    <input type="text" class="form-control" value="<?php echo $editdata[4]; ?>" name="address" id="address" rows="3"></textarea>
                            </div>
							<div class="form-group">
                                <label>Designation </label>
                                <input type="text" class="form-control" value="<?php echo $editdata[5]; ?>"  id="num" name="desi" placeholder="Enter Designation">
                            </div>
							
			                   
							
			                   <div class="form-group">
								<input type="submit" class="btn btn-primary" value="update">
								
								</div>
			
							
			
			
				</div>
			</div>
			</form>
			</body>
			</html>