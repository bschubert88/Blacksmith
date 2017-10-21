<!DOCTYPE>

<html>

<title>File Uploader</title>

	<head>

	</head>
	
	<body>
	
	
	
	<form action="final.php" method="POST" enctype="multipart/form-data">
		<input type="hidden" name="MAX_FILE_SIZE" value="5000000"><br><br>
		File to upload: <input type="file" name="new_file"><br>
		(5,000,000 byte limit)<br><br>
		
		<input type="submit" name="upload" value="Upload the File"><br><br>
		
		
		</form>
		
		
		
<?php
	
	$Dir="files";
	
	
	if (isset($_POST['upload'])) {
		
		if (preg_match("/.jpg$/",$_FILES['new_file']['name']) || preg_match("/.png$/",$_FILES['new_file']['name']) || preg_match("/.gif$/",$_FILES['new_file']['name'])) {
			
			
			if (move_uploaded_file(
			$_FILES['new_file']['tmp_name'],
			$Dir . "/" . $_FILES['new_file']['name'])== TRUE) {
				chmod($Dir . "/" . $_FILES['new_file']['name'], 0644);
				echo "File \"" .
				htmlentities($_FILES['new_file']['name']) . "\"successfully uploaded.
				<br>\n";
				
				
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archive";
$filename =  $_FILES['new_file']['name'];
$filesize =  $_FILES['new_file']['size'];


$sql = "INSERT INTO images  (file_name,file_size) VALUES  ('$filename','$filesize')";




// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}




if ($conn->query($sql) === TRUE) {
	
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


 

			}
			else
				echo "there was an error uploading \"" . 
			htmlentities($_FILES['new_file']['name']) .
			"\".<br>\n";
		}
	
	else
		echo "Incorrect Password";
	}
		
	
	?>
	<br><br>
	<a href="jpg.php">JPG only</a><br><br>
	
	<a href="png.php">PNG only</a><br><br>
	
	<a href="gif.php">GIF only</a><br><br>
	
	
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "archive";
	$query="SELECT * from images";
	


	
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
		 echo '<img src='.$folder.$row['file_name'].'  height="100" width="100"/></a>';
         echo "Image ID: {$row['image_id']}<br>";
		 echo "Image Name: {$row['file_name']}<br>";
		 echo "Image Size: {$row['file_size']}<br>";
		 
		
		 
		 
		 echo "<br>";echo "<br>";
    }
} else {
    echo "0 results";
}
	
	
	?>
		
	
	</body>

</html>