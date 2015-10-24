<?php 
session_start();
?>

<?php

$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = 'root123';
$conn = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $conn )
{
  die('Could not connect: ' . mysql_error());
}


$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

	
echo $name;
echo $email;	
mysql_select_db('webdbs');
		$query = "INSERT INTO fbtable (firstname,email,feedback) VALUES('$name','$email','$feedback')"; 



$retval = mysql_query( $query, $conn );
		
/*if(!$retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{
echo '<script type="text/javascript"> window.open("home.php","_self");</script>'; 
echo "data entetered successfully";
}*/
mysql_close($conn);
		

?>
