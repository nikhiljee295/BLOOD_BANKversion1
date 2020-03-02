
<html>
<head>
<title>Boot Register</title>

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
	
	<div>
	<form action="connection.php" method="post"> 
		<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="form">
			<center><b class="registration">Registration Form</b></center>
			
			<form action="connection.php" method="post"> 
			<div class="form-group">
			<label>Donarname :</label>
			<input type="text" name="DonarName" class="form-control text " placeholder="Enter donar name">
			</div>
			  <div class="form-group">
                                <label>Gender</label>
                                <select class="form-control" name="gender" id="gender">
                                    <option value="" disabled selected>Select</option>
                                    <option>Male</option>
                                    <option>Female</option>
									<option>other</option>

                                </select>
                            </div>
							 <div class="well">
                                <div class="form-group">
                                    <label>Date of Birth</label>
                                    <input type="date" class="form-control" id="dob" name="dob"placeholder="Enter Your Date of Birth">
                                </div>
                            </div>
                            <div class="form-group">
                            </div>
                          
									<div class="form-group">
									<label>Adhar Number :</label>
									<input type="text" name="adhar" class="form-control text " maxlength="12" placeholder="Enter Adhar Number">
								</div>
								
								
								<div class="form-group">
                                <label>E-mail Address: </label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Enter E-mail Address">
                            </div>
							
							 <div class="form-group">
                                <label>Contact Number: </label>
                                <input type="text" class="form-control" id="num" name="cno" maxlength="10" placeholder="Enter Contact Number">
                            </div>
							
							 <div class="form-group">
                                <label">Address</label>

                                    <textarea class="form-control" name="address" id="address" rows="3"></textarea>
                            </div>
							<div class="form-group">
								<input type="submit" class="btn btn-primary" value="submit">
								<input type="btn" class="btn btn-danger" value="home" onclick="window.location.href='http://localhost:88/header.php';">
								</div>
			
			
							</div>
							</div>
						</form>
						
					</body>
				</html>