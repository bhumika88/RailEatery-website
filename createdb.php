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

		$sql = "CREATE DATABASE webdbs";
		if ($conn->query($sql) === TRUE) {
    			echo "Database created successfully";
		} else {
    			echo "Error creating database: " . $conn->error;
		}

	?>

</body>
</html>
