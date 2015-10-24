<?php
	session_start();
?>
<html>
<head>

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

		$restname = $_POST['restaurantname'];
	

		switch($restname)
		{
			case "Sahkar Restaurant" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("sakharmenu.php","_self");</script>';
						break;	
			case "Basant Vihar Restaurant" : $_SESSION['restaurantname'] = $restname;
						echo '<script type="text/javascript"> window.open("basantviharmenu.php","_self");</script>';
						break;	
			case "Hotel Priya" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("hotelpriya.php","_self");</script>';
						break;
			case "Bombay Blue" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("bombayblue.php","_self");</script>';
						break;
			case "Dynamite Lounge" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("dynamite_pune.php","_self");</script>';
						break;
			case "Temptationz" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("temptationz.php","_self");</script>';
						break;	
			case "Amigos" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("amigos.php","_self");</script>';
						break;	
			case "Dil Se Re" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("dildere.php","_self");</script>';
						break;	
			
			case "Masala 360" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("masala360.menu.php","_self");</script>';
						break;	
			case "Goodies" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("goodies.php","_self");</script>';
						break;	
			case "Bombay Sandwich" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("bombaysandwich.php","_self");</script>';
						break;	
			case "Mirch Masala" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("mirchmasala.php","_self");</script>';
						break;	
			case "Dawat PureVeg" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("dawat.php","_self");</script>';
						break;	
			case "Hotel Oyster" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("oyster.php","_self");</script>';
						break;
			case "Purohit Thali" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("purohit.php","_self");</script>';
						break;
			case "Hotel Purohit,Kota" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("purohitkota.php","_self");</script>';
						break;
			case "Daal Baati Choorma" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("dalbaati.php","_self");</script>';
						break;
			case "Hotel Priya,Surat" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("priyasurat.php","_self");</script>';
						break;

			case "Hotel Oyster,Surat" : $_SESSION['restaurantname'] = 	$restname;
						echo '<script type="text/javascript"> window.open("oystersurat.php","_self");</script>';
						break;

		

}


mysqli_select_db($conn, 'webdbs');

?>
	

</body>
</html>
