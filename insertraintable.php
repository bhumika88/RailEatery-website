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
		
		$sql = "INSERT INTO trainTable (trainNo ,trainName)
			VALUES ('12961','Avantika Express');";
		$sql .= "INSERT INTO trainTable (trainNo ,trainName)
			VALUES ('12962','Avantika Express');";
		$sql .= "INSERT INTO trainTable (trainNo ,trainName)
			VALUES ('12939','Pune-Jaipur Express');";
		$sql .= "INSERT INTO trainTable (trainNo ,trainName)
			VALUES ('19311','Pune-Indore Express');";
		$sql .= "INSERT INTO trainTable (trainNo ,trainName)
			VALUES ('19312','Indore-Pune Express');";


		if ($conn->multi_query($sql) === TRUE) {
    			echo "New records created successfully";
		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}

$conn->close();


	?>

</body>

</html>
