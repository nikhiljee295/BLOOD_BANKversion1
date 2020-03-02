



<html>
<body>
<table align="center" border="1px" style="width:400px; line-height:20px;" >
<!--<form   method="POST" action="DemoSubmit.php">-->
<tr>
<th colspan="30"><h1>satff details</h1></th>
</tr>
<tr>
 <th>SNo</th>
 <th>Name</th>
 <th>contact</th>
 <th>Gender</th>
 <th>address</th> 
 <th>designation</th>
  
 
 </tr>
 
<?php
 $con =  new mysqli("localhost","Nikhil","12345","blood_bank");
  if ($con->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
else{
	
}

  
  $sql="select * from tblguest";
  $result=$con-> query ($sql);
  if($result->num_rows > 0){
	while($row =$result->fetch_assoc())
	  //while($row=mysqli_fetch_array($result))
	  {
		  echo "<tr>";
		  echo "<td>"; echo $row["Sid"]; echo "</td>";
		  echo "<td>"; echo $row["name"]; echo "</td>";
		  echo "<td>"; echo $row["cno"]; echo "</td>";
		  echo "<td>"; echo $row["gender"]; echo "</td>";
		  echo "<td>"; echo $row["address"]; echo "</td>";
		  echo "<td>"; echo $row["designation"]; echo "</td>";
		 
       
		echo "<td> <a href ='editGuestRecord.php?GID=".$row["gid"]."'> edit </a></td>";
		echo "<td> <a href=Delete.php?GID=".$row["gid"].">delete </a></td>";
		  echo "</tr>";
	  }
	  echo "</table>";
  }
  
  ?>
  </body>
  </html>