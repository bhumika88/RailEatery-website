<?php 
session_start();
?>
<html>
<head>

</head>

<body>

	<?php
		
		
		
	
		
		$dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root123';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
		$find = $_POST['trainno'];
		

		  mysql_select_db('webdbs');
		

		$sql = "SELECT *FROM trainTable WHERE trainNo='$find'";
 		$retval = mysql_query($sql,$conn);
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
    		

	 $row = mysql_fetch_array($retval);	//constant MYSQL_ASSOC is used as the second argument to mysql_fetch_array(), so that it returns the row as an associative array. With an associative array you can access the field by using their name instead of using the index.
    
   	
	$train = $row['0'];
	$_SESSION['trainno'] = $train;
	if($train=="19311"||$train=="19312"||$train=="12961"||$train=="12962"||$train=="12939")
	{
		switch($train)
		{
			case 19311  : echo '<script type="text/javascript"> window.open("19311.php","_self");</script>';
					break;	
			case 19312  : echo '<script type="text/javascript"> window.open("19312.php","_self");</script>';
				
					break;	
			case 12961  : echo '<script type="text/javascript"> window.open("12961.php","_self");</script>';
					break;
			case 12962  : echo '<script type="text/javascript"> window.open("12962.php","_self");</script>';
					break;	
			case 12939  : echo '<script type="text/javascript"> window.open("12939.php","_self");</script>';
					break;
		
		}
		
	}
	else
	{?>
		<script>alert("INVALID TRAIN NUMBER!");</script>
		<?php 
			echo '<script type="text/javascript"> window.open("home.php","_self");</script>';
	}
	mysql_close($conn);
		
			
?>

</body>
</html>
