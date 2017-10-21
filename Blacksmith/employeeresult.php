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
	<br>
	
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



//Finding the employee info
$sql = "SELECT eid, fname, lname, phone, street, city, state, zip
		FROM employees
		WHERE eid='".$_POST["employeeresult"]."'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<p>" . $row["eid"]. " " . $row["fname"]. " " . $row["lname"]. "<br>"
		. $row["phone"] ." ". $row["street"] ." ". $row["city"] ." ". $row["state"] ." ". $row["zip"]."<br>".		
		"</p>";
    }
} else {
    echo "0 results";
}


$conn->close();
?> 




	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>

</html>