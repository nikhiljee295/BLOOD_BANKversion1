

<html>

<head>

<style>
#design{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}
#design td, #design th {
  border: 1px solid #ddd;
  padding: 8px;
}
#design tr:nth-child(even){background-color: #f2f2f2;}
#design tr:hover {background-color: #ddd;}

#design th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
<body>
 <table id="design">
<!--<table align="center" border="1px" style="width:400px; line-height:20px;" >-->
<!--<form   method="POST" action="DemoSubmit.php">-->
<!--<tr>
<th colspan="30"><h1>donar details</h1></th>
</tr>-->
<tr>
 <th>Donar Id</th>
 <th>Donar Name</th>
 <th>Gender</th>
 <th> D.O.B.</th>
  <th>Aadhar</th>
  <th>E-mail</th> 
  <th>Contact</th> 
  <th>Address</th> 
  <th>Action</th> 
 
 </tr>
 
<?php
 $con =  new mysqli("localhost","Nikhil","12345","blood_bank");
  if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
}
  $sql="select * from donar";
  $result=$con-> query ($sql);
  if($result->num_rows > 0){
	while($row =$result->fetch_assoc())
	  //while($row=mysqli_fetch_array($result))
	  {
		 
		  echo "<tr>";
		  echo "<td>"; echo $row["did"]; echo "</td>";
		  echo "<td>"; echo $row["dname"]; echo "</td>";
		  echo "<td>"; echo $row["gender"]; echo "</td>";
		  echo "<td>"; echo $row["dateofbirth"]; echo "</td>";
		  echo "<td>"; echo $row["adhar"]; echo "</td>";
		  echo "<td>"; echo $row["email"]; echo "</td>";
		  echo "<td>"; echo $row["contact"]; echo "</td>";
		  echo "<td>"; echo $row["address"]; echo "</td>";
		  
	echo "<td><a href=donaredit.php?did=".$row["did"].">Edit </a>
		 | <a href=donardelete.php?did=".$row["did"].">delete </a></td>";
		  echo "</tr>";
	  }
	  echo "</table>";
  }
  
  ?>
  </body>
  </html>
