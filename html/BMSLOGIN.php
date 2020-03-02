<html>
<head>
	<title>Login And Registration Form</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
		
		<div class="hero">
			<div class="form-box">
			<div class="button-box">
			<div id="btn"></div>
			<button type="button" class="toggle-btn" onclick="login()">Log In</button>
			<button type="button" class="toggle-btn" onclick="register()">Register</button>
			</div>
			<form id="login" class="input-group" action="LG.php" method="POST">
			<input type="text" class="input-field" placeholder="user id" name="uname" required>
			<input type="text" class="input-field" placeholder="Enter Password" name="password" required>
			<input type="checkbox" class="check-box"><span>Remember Password</span>
			<button type="submit" class="submit-btn">Log in</button>
			</form>
			<!--<form id="register" class="input-group">
			<input type="text" id="userID" class="input-field" placeholder="user id" required>
			<input type="email" class="input-field" placeholder="email Id" required>
			<input type="text" id= "pass" class="input-field" placeholder="Enter Password"required>
			<input type="checkbox" class="check-box"><span>i agree to term & condition</span>
			<button type="submit" class="submit-btn" onclick="">Register</button>
			</form> -->
			
		
		</div>
	</div>
	</form>
	
	<script>
			var x = document.getElementById("login");
			var y = document.getElementById("register");
			var z = document.getElementById("btn");
				  
				  function register(){
				  x.style.left = "-400px";
				  y.style.left = "50px";
				  z.style.left = "110px";
		}
				  
				   function login(){
				  x.style.left = "50px";
				  y.style.left = "450px";
				  z.style.left = "0px";
				  }
  </script>
				  
</body>
</html>			
	