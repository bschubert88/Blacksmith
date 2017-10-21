<!DOCTYPE html>
<html lang="en">
<head>
<title>Hephaestus Blacksmithing</title>
<meta charset="utf-8">
<link rel="icon" href="images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
<link href="BT.css" rel="stylesheet">
</head>

<body>

<div id="wrapper">

<h1>Hephaestus Blacksmithing</h1>

<div id="nav">
	
	<ul>
      <li><a href="index.php">Home</a></li>
      <li><a href="getcustomers.php">Select a <br>Customer</a></li>
      <li><a href="setcustomers.php">Enter a <br>Customer</a></li>
      <li><a href="getemployees.php">Select an <br>Employee</a><br></li>
	  <li><a href="setemployees.php">Enter an <br>Employee</a></li>
	  <li><a href="products.php">Enter a <br>Product</a></li>
	  <li><a href="metals.php">Change Metal <br>Prices</a></li>
	</ul>
	
</div>

<div id="content">

<h2>Metal Info</h2>


	
		
	
	<div id="center">
		<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blacksmith";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE metals
SET price_per_oz='".$_POST["price"]."'
WHERE mid='".$_POST["metallist"]."'";

if ($conn->query($sql) === TRUE) {
    echo "record updated successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?> 







	<br>
	<br>
	<br>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


<div id="footer">
	Copyright &copy; 2013 Hephaestus Blacksmithing<br>
	<a href="brandonschubert88@gmail.com">HephaestusBlacksmithing@something.com</a>
</div>

</div>

</div>
</body>
</html>
