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
	<form action="healthconn.php" method="post"> 
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3" id="form">
			<center><b class="registration">Health Info</b></center>
			
			
			<div class="form-group">
			<label>Donar name :</label>
			<input type="text" name="patient" class="form-control text " placeholder="Enter donar name">
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
								
								<div class="form-group">
                                <label>Contact Number: </label>
                                <input type="text" class="form-control" id="num" name="cont" placeholder="Enter Contact number">
                            </div>
							
										
						<div class="form-group">
						<label>Body weight :</label>
						<input type="name" name="body"id="name" size="5">
						<!--	<select >
							<option>kg</option>
							<option>pound</option>
							
							</select>
							-->
							
							
						<label>Temperature :</label>
						<input type="name" name="temp" id="name" size="6" >
							<!-- <select>
							<option>f</option>
							<option>c</option>
							
							</select> -->
							
							
			</div>
						<div class="form-group">
						<label>Blood Presure :</label>
						<input type="name" name="bloodpr"id="name" size="5">
							<!--<select>
							<option>MHg</option
							<option></option>
							
							</select> -->
							
							
						<label>Pulse Rate :</label>
						<input type="name" name="pulse" id="name" size="6">
			<!--				<select>
							<option>Mgdl</option>
							<option></option>
							
							</select>
							-->
							
							
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