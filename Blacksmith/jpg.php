<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archive";
	$query="SELECT * FROM images WHERE file_name LIKE '%.jpg'";
	


	
	// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

	$result = $conn->query($query);

if ($result->num_rows > 0) {
	$folder = 'files/';
	$filetype = '*.*';
	
    // output data of each row
    while($row = $result->fetch_assoc()) {
		 echo '<img src='.$folder.$row['file_name'].'  height="100" width="100"/></a> <br>';
		
         echo "Image ID: {$row['image_id']}<br>";
		 echo "Image Name: {$row['file_name']}<br>";
		 echo "Image Size: {$row['file_size']}<br>";
		 
		
		 
		 
		 echo "<br>";echo "<br>";
    }
} else {
    echo "0 results";
}
	











	?>