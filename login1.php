<?php
session_start();
?>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "cover1.css">
	
</head>
<body>
<div id = "wrapper">
	<center><h2> Welcome to Rail Eatery!!!!</h2></center><br>	
	<center><h2> Discover the joy of online food ordering in Train!!!!</h2></center>
	<div id = "logindetails">
		<fieldset>    
		<form method="POST" action="<?php $_PHP_SELF ?>">
				  
	<img src = "images/login.png" id = "login" height = "150px" width = "100px">
			<br><br>
		
    <input type="text" id="fname" name="firstname"  placeholder = "*Username" class = "inputsmall" 
onblur = "validatename()"  required/><br><br>
		   

		    <input type="password" id="password" name="password" placeholder = "*Password" class = "inputsmall"
 onblur = "validatepassword1()"  required/> <br> <br>
		    <input  type="submit" name="submit" id="submit" value="Login" class = "inputsmall" /><br><br><br>
		  <center> <span id = "lst"> <a href="signup.php">New User?Sign Up</span></a> </center>
		  </form>
		</fieldset>
	</div>
</div>
</body>
</html>
<?php

if(isset($_POST['submit']))   
{
	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = 'root123';
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	if(! $conn )
	{
  		die('Could not connect: ' . mysql_error());
	}
	else
	{
		echo "connected";
	}
	$firstname = $_POST['firstname'];
	$password = $_POST['password'];
	mysql_select_db('webdbs');
      	$query = mysql_query("SELECT firstname,password FROM userinfo1 WHERE firstname = '$firstname' AND password = '$password'");
	
	$retval = mysql_fetch_array($query);
	
	if($retval['firstname']==$firstname && $retval['password']==$password)
	{
		$_SESSION['use'] = $firstname;
		?>
			<script>alert("You are successully loggedIn"); </script>
		 
	<?php
		echo '<script type="text/javascript"> window.open("home.php","_self");</script>';
	}
	else
	{
	//$success = "You are successully loggedIn";
	//echo $success;
	?>
		<script>alert("Sorry, your credentials are not match");</script>
		<?php
	}
}
mysql_close($conn);

?>
