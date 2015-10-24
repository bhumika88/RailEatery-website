<?php
session_start();
?>

<html>
  
<head>
	
  	<link rel = "stylesheet" type = "text/css" href = "navstyle.css"> 
  	<link rel = "stylesheet" type = "text/css" href = "traveldetails.css">
   <script type="text/javascript">
    function validatename()
			{
				if(document.getElementById("name").value!="")
               			{
					
					
		 			var letters = /^[a-zA-Z]+$/;  
					if(!document.getElementById("name").value.match(letters))  
					{  
					
					
						document.getElementById("firstnameerror").innerHTML = "Please enter only alphabets (no special characters)";
						document.getElementById("name").focus();
						document.getElementById("name").select();
					}
					else
					{
						document.getElementById("firstnameerror").innerHTML = "";
					}
				}
				else if(document.getElementById("name").value=="")
				{
					
					document.getElementById("firstnameerror").innerHTML = "Please enter first name "; 						document.getElementById("name").focus();
					document.getElementById("name").select();					
				}

			}
			function validateemail()
			{	
				var email = document.getElementById('email');
				var filter =new RegExp(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/);
				var result = filter.test(document.getElementById("email").value);
				if(document.getElementById("email").value!="")
               			{
					if (result==false) {
						document.getElementById("emailerror").innerHTML="Please provide a valid email address";
						email.focus;
						document.getElementById("email").focus();
						document.getElementById("email").select();
					}
					else
					{
						document.getElementById("emailerror").innerHTML = "";
					}
				}
				else if(document.getElementById("email").value=="")
               			{
                 			document.getElementById("emailerror").innerHTML = "You must enter email";
					document.getElementById("email").focus();
					document.getElementById("email").select();               		
				}
				

				
			}
			function validatephone()
        		{
				if(document.getElementById("phone1").value != "")
				{
					if(isNaN(document.getElementById("phone1").value))
					{
							document.getElementById("phoneerror").innerHTML = "Please enter only numbers";
							document.getElementById("phone1").focus();
							document.getElementById("phone1").select(); 					
					}
					
					else
					{
					
				
						if (document.getElementById("phone1").value.length != 10) {
            						document.getElementById("phoneerror").innerHTML = "Number should be 10 digit";
							document.getElementById("phone1").focus();
							document.getElementById("phone1").select(); 							
						}
						else
						{
						   document.getElementById("phoneerror").innerHTML="";					
						}
					}
					
					
				}
				else if(document.getElementById("phone1").value == "")
				{
					document.getElementById("phoneerror").innerHTML = "You must enter phone number"; 						document.getElementById("phone1").focus();
					document.getElementById("phone1").select();
				}
				
			}
			
		
</script>

</head>



<body>


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


$name = $_POST['name'];
$email = $_POST['email'];
$feedback = $_POST['feedback'];

	
	
mysql_select_db('webdbs');
		$query = "INSERT INTO fbtable (firstname,email,feedback) VALUES('$name','$email','$feedback')"; 



$retval = mysql_query( $query, $conn );
		
if(!$retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{?>
<script>alert("Thank You!!Your feedback has been successfully recorded.");</script>

<?php
echo '<script type="text/javascript"> window.open("home.php","_self");</script>';
}
mysql_close($conn);
}		

?>
<div id = "bar">
	<div id="hang"></div>
	<div id = "logo">
		<img src = "images/2.jpg"  height = "80px" width = "150px">

	</div>
	<div id = "phone">
		<img src = "images/phoneicon1.png" width = "20px" height = "20px" hspace = "7px"> 8605199498
	</div>
	
	<div id = "rail">
	RAIL EATERY
		</div>
	<div id = "nav"> 
			
			   <img src = "images/homeicon.png" width = "20px" height = "20px" hspace = "7px"> <a href = "home.php" >Home</a>
			<span class = "slash">|<img src = "images/locationicon.png" width = "20px" height = "20px" hspace = "7px"> </span> <a href = "location.php"> Locations </a> 
 <span class = "slash">|<img src = "images/trainicon.png" width = "15px" height = "15px" hspace = "7px"> </span><a href = "poptrain.php"> Popular Trains </a>
			
			 <span class = "slash">|<img src = "images/loginicon.png" width = "20px" height = "20px" hspace = "7px"> </span><a href="" class = "signinpopup"> <?php echo $_SESSION['use'] ."\n"; ?> </a>
			 
			

        <span class = "slash">|<span class = "echo"><?php echo "<a href='logout.php'> Logout</a> "; ?></span></span>
			 
	</div>
	
	
	</div>
		

	

	<div id = "header">
		<div id = "link"> Feedback Form</div>

	<div id = "mid">
	<span id = "heading">
	Feedback About RailEatery <br><br>
	</span>
	<form action = "<?php $_PHP_SELF ?>" method = "POST">  
	<table>
	<tr>
	<td><input type = "text" class = "inputbig" placeholder = "*Firstname" name = "name" id = "name" onblur = "validatename()" required/></td>
	</tr>	
	
	<tr>

		<td><span id = "firstnameerror" class = "error"  ></span></td>
	</tr>
	
	<tr>
	<td><input type = "email" class = "inputbig"   placeholder = "*Email Address" name = "email" id = "email" onblur = "validateemail()" required/></td>  
	</tr>
	

	<tr>
		<td><span id = "deserror" class = "error"  ></span></td>
	</tr>
	<tr>
	
	<td><textarea class = "inputbig" placeholder = "*Enter your feedback here" name = "feedback" id="fb" required/></textarea> </td>
	</tr>

	<tr>

		<td><span id = "deserror" class = "error"  ></span></td>
</tr>	
	
	<tr>

	
	<td><center><input type = "submit" value = "Submit" id = "signup" name = "submit"></center></td>
	</tr>	
	</form>
	</table>
	
 	</div>
	</div>
	
		
<p align="center">Copyright © 2015 RailEatery Corporation. Do not Copy - All Rights Reserved.</align></p>
	<div id = "footer">
		<div id = "info">
			<table  class = "t1" border  = "0">	
				<thead  align = "left">
				
				</thead>
				<tbody align = "left"  >
				<tr>
					<td><a href = "aboutus.php">About Rail Eatery</a></td>
					<td><a href = "location.php">Locations</a></td>
					<td>Contact us</td>
				</tr>
				
				<tr>
					<td></td>
					<td><a href = "poptrain.php">Popular Trains</a></td>
					<td>8605199498</td>
				</tr>
				</tbody>
			</table>
		 </div>
		<div id = "join">
				<br>
				<span id = "network"><font align = "center">Join Our Network</font></span>
				<p align = "center">
					Find out how rail eatery can help you
					boost <br> your sales ,increase popularity and <br>
					reach more and more individual  and <br> 
					corporate members.
				</p>
		</div>
	</div>
	



	
	
</body>


</html>
