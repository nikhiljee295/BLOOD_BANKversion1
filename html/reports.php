<?php
	include("connect.php");
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='O+'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$receiptOP = $row["unit"];
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='AB+'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$receiptABP = $row["unit"];
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='AB-'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$receiptABN = $row["unit"];
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='A+'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$receiptAP = $row["unit"];
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='A-'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$receiptAN = $row["unit"];
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='B+'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$receiptBP = $row["unit"];
	
	
	
	
	//---------------------------------------------------------------
	$sql = "Select count(unit) as unit from issue where bloodtype='O+'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$issueOP = $row["unit"];
	
	
	$sql = "Select count(unit) as unit from issue where bloodtype='AB+'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$issueABP = $row["unit"];
	
	$sql = "Select count(unit) as unit from issue where bloodtype='AB-'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$issueABN = $row["unit"];
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='A+'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$issueAP = $row["unit"];
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='A-'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$issueAN = $row["unit"];
	
	
	$sql = "Select count(unit) as unit from reciptform where bloodtype='B+'";
	$result = $con->query($sql);
	$row = $result->fetch_assoc();
	$issueBP = $row["unit"];
	
	
?>
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
<!--<table align="center" border="1px" style="width:400px; line-height:20px;" >
<!--<form   method="POST" action="DemoSubmit.php">-->
<!--<tr>
<th colspan="30"><h1>staff details</h1></th>
</tr>-->
<tr>


 <th>BLOOD TYPE</th>
 <th>UNIT</th>
 <th>RECIPIT</th> 
 <th>ISSUE</th>
 
 
 </tr>
 <tr>
	<td>O+</td>

	<td><?php echo $receiptOP-$issueOP;?></td>
	<td><?php echo $receiptOP;?></td>
	<td><?php echo $issueOP;?></td>
 </tr>
 
 <tr>
	<td>AB+</td>

	<td><?php echo $receiptABP-$issueABP;?></td>
	<td><?php echo $receiptABP;?></td>
	<td><?php echo $issueABP;?></td>
 </tr>
 
 <tr>
	<td>AB-</td>

	<td><?php echo $receiptABN-$issueABN;?></td>
	<td><?php echo $receiptABN;?></td>
	<td><?php echo $issueABN;?></td>
 </tr>
 
 <tr>
	<td>A+</td>

	<td><?php echo $receiptAP-$issueAP;?></td>
	<td><?php echo $receiptAP;?></td>
	<td><?php echo $issueAP;?></td>
 </tr>
 
 <tr>
	<td>A-</td>

	<td><?php echo $receiptAN-$issueAN;?></td>
	<td><?php echo $receiptAN;?></td>
	<td><?php echo $issueAN;?></td>
 </tr>
 
 
 <tr>
	<td>B+</td>

	<td><?php echo $receiptBP-$issueBP;?></td>
	<td><?php echo $receiptBP;?></td>
	<td><?php echo $issueBP;?></td>
 </tr>
 
 
 
 
 
 
<?php
