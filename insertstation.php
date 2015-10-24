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
		
		$sql = "INSERT INTO stationtable (stationname)
			VALUES ('Pune JN');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Kalyan');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Vasai Road');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Nagda JN');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Ujjain JN');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Indore JN');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Vadodra');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Mumbai Central');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Surat');";
		$sql .= "INSERT INTO stationtable (stationname)
			VALUES ('Kota');";


		if ($conn->multi_query($sql) === TRUE) {
    			echo "New records created successfully";
		} else {
    			echo "Error: " . $sql . "<br>" . $conn->error;
		}

$conn->close();


	?>

</body>

</html>
