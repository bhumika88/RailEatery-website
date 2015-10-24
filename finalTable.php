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

$sql = "CREATE TABLE finalTable1(".

"orderid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,".
"trainno int(5) NOT NULL,".
"stationname VARCHAR(50) NOT NULL,".
"restaurantname VARCHAR(50) NOT NULL,".
"date date NOT NULL,".
"coachno VARCHAR(2) NOT NULL,".
"seatno int(2) NOT NULL,".
"travellersname varchar(5) NOT NULL,".
"travellersno int(10) NOT NULL,".
"orderdetails varchar(5000) NOT NULL
);";

if ($conn->query($sql) === TRUE) {
    echo "Table stationtable created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}
?>
</body>

</html>
