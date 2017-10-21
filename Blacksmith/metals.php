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

<h2>Select a Metal to Change Price</h2>

<div>
<form action="insertintometals.php" name="insertintometals" method="post">


Metals:<br> <select name="metallist">
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

$sql = "SELECT mid, type, price_per_oz
		FROM metals";
		
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<option>" . $row["mid"]." ". $row["type"]. " " . $row["price_per_oz"]."</option>"; 
		
		
    }
} else {
    echo "0 results";
}
?>

</select>




<br><br> Price:<input type="text" name="price">

<input type="submit">
</form>
</div>		


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
