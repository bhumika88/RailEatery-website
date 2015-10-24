<html>
<head>
	<title> Database </title>
</head>

<body>
	<?php
	
		
		$servername = "localhost";
		$username = "root";
		$password = "root123";

		// Create connection
		$conn = new mysqli($servername, $username, $password);
		// Check connection
		if ($conn->connect_error) {
    			die("Connection failed: " . $conn->connect_error);
		}
		else {
			echo "connected successfully";
		}




mysqli_select_db($conn, 'webdbs');

$sql = "CREATE TABLE stationtable (".

"stationid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".
"stationname VARCHAR(30) NOT NULL
);";

if ($conn->query($sql) === TRUE) {
    echo "Table stationtable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>
</body>

</html>
