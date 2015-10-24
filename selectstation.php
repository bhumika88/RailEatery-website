<?php 
session_start();
?>

<html>
<head>

		<link rel = "stylesheet" type = "text/css" href = "nav_style.css">
 	
	 <link rel = "stylesheet" type = "text/css" href = "order.css">

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

		$stationname = $_POST['stationname'];
		

		switch($stationname)
		{
			case "mumbai central" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("mumbaicentral.php","_self");</script>';
						break;	
			case "surat" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("surat.php","_self");</script>';
						break;	
			case "ratlam" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("ratlam.php","_self");</script>';
						break;	
			case "ujjain" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("ujjain.php","_self");</script>';
						break;	
			case "indore" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("indore.php","_self");</script>';
						break;	
			case "nagda" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("nagda.php","_self");</script>';
						break;	
			case "vadodra" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("vadodra.php","_self");</script>';
						break;	
			case "pune" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("pune1.php","_self");</script>';
						break;	
			case "kalyan" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("kalyan.php","_self");</script>';
						break;	
			case "kota" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("kota.php","_self");</script>';
						break;	
			case "vasai road" : $_SESSION['stationname'] = 	$stationname;
						echo '<script type="text/javascript"> window.open("vasairoad.php","_self");</script>';
						break;	


		}


mysqli_select_db($conn, 'webdbs');

?>
	

</body>
</html>
