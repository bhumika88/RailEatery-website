<?php
session_start();
?>
<html>
<head>
<title>Database</title>
<link rel = "stylesheet" type = "text/css" href = "navstyle.css">
 	
 	<link rel = "stylesheet" type = "text/css" href = "signupstyle.css">
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

			function validatelname()
			{
				if(document.getElementById("lname").value!="")
               			{
					
					
		 			var letters = /^[a-zA-Z]+$/;  
					if(!document.getElementById("lname").value.match(letters))  
					{  
					
					
						document.getElementById("lastnameerror").innerHTML = "Please enter only alphabets (no special characters)";
					document.getElementById("lname").focus();
						document.getElementById("lname").select();
					}
					else
					{
						document.getElementById("lastnameerror").innerHTML = "";
					}
				}
				else if(document.getElementById("lname").value=="")
				{
					
					document.getElementById("lastnameerror").innerHTML = "Please enter last name ";
					document.getElementById("lname").focus();
						document.getElementById("lname").select();				
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
			function validatepassword1()
			{
				if(document.getElementById("password").value!="")
               			{
					if (document.getElementById("password").value.length != 8) {
            						document.getElementById("passworderror").innerHTML = "Password length should be 8 characters";
					document.getElementById("password").focus();
					document.getElementById("password").select();   
					}
					else
					{
						document.getElementById("passworderror").innerHTML = "";
									
					}
					
		 			
				}
				else if(document.getElementById("password").value=="")
				{
					
					document.getElementById("passworderror").innerHTML = "You must enter password";				document.getElementById("password").focus();
					document.getElementById("password").select(); 
									
				}
			}
			function validatepassword2()
			{
		
				
				
				if(document.getElementById("password").value!="")
               			{
					if((document.getElementById("password2").value!=document.getElementById("password").value) && (document.getElementById("password").value!=""))
					{
					document.getElementById("password2error").innerHTML = "Password mismatch";
					document.getElementById("password2").focus();
					document.getElementById("password2").select(); 
					}
					else
					{
						document.getElementById("password2error").innerHTML = "";
					}
					
		 			
				}
				else if(document.getElementById("password2").value=="")
               			{
                 			document.getElementById("password2error").innerHTML = "You must confirm password";
					document.getElementById("password2").focus();
					document.getElementById("password2").select(); 
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
else
{
	echo "successful";
}



   		$firstname = $_POST['fname']; 
		$lastname= $_POST['lname']; 
		$email = $_POST['email'];
	        $password = $_POST['password']; 
		$confirmpassword = $_POST['confirmpassword']; 
		$mobilenumber=$_POST['mobile1'];
		$alternatemobilenumber=$_POST['mobile2'];

		$query = "INSERT INTO userinfo1 (firstname, lastname, email,  password, confirmpassword, mobilenumber, alternatemobilenumber) VALUES ('$firstname','$lastname','$email','$password','$confirmpassword','$mobilenumber','$alternatemobilenumber')"; 	

mysql_select_db('webdbs');
$retval = mysql_query( $query, $conn );
if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{
echo '<script type="text/javascript"> window.open("login1.php","_self");</script>'; 

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
		<input type = "button" class = "feedback" value = "feedback" name = "feedback" onclick="window.location.href='feedback.php'">

	<div id = "header">
		<div id = "link"> Sign up </div>

	<div id = "mid">
	<span id = "heading">
	Customer basic information <br><br>
	</span>
	<form method="post" action="<?php $_PHP_SELF ?>" >
	<table id = "table6">
	<tr>
		<td><input type="text" class = "inputbig" placeholder = "*FirstName"  id = "name" name = "fname" onblur = "validatename()" required/></td> 	

	</tr>
	<tr>
		<td><span id = "firstnameerror" class = "error" ></span></td>
	</tr>
	<tr>
		<td><input  type="text" class = "inputbig" placeholder = "*LastName" id="lname" name = "lname" onblur = "validatelname()" required/></td>
	</tr>
	<tr>
		<td><span id = "lastnameerror" class = "error"  ></span></td>
	</tr>
	<tr>
		<td><input type="text" class = "inputbig" id="email" placeholder = "*Email" name = "email" onblur = "validateemail()" required/></td><br>
	</tr>
	<tr>
		<td><span id = "emailerror" class = "error"></span></td><tr>
	</tr>
	
	<tr>
		<td><input type="password" class = "inputbig" placeholder = "*Password" name = "password" id="password" onblur = "validatepassword1()" required/> </td>
	</tr>

	<tr>
		<td><span id = "passworderror" class = "error"></span></td><tr>	
	</tr>
	<tr>
		<td><input type="password" class = "inputbig" placeholder = "*Confirm Password" name = "confirmpassword" id="password2" onblur = "validatepassword2()" required/></td>
	</tr>
	<tr>	
		<td><span id = "password2error" class = "error"></span></td><tr>

	</tr>
	<tr>
		<td><input type="tel" class = "inputbig"   placeholder = "*Customer mobile number " name = "mobile1" id="phone1" onblur = "validatephone()" required/></td>
	</tr> 
	<tr>
			<td><span id = "phoneerror" class = "error"></span></td><tr>
	</tr>
	<tr>
		<td><input type="tel" class = "inputbig"   placeholder = "Alternate mobile number " name = "mobile2" id="phone2"></td>
	</tr>
	<tr>
			<td><span id = "phoneerror" class = "error"></span></td><tr>
	</tr>
	<tr>
		<td><center><input type = "submit" value = "Sign Up" id = "submit" name="submit"></center> </td>
	</tr>
	</table>

	<!--<div id= "buttons">-->
	
	
	
		</form>
	<!--</div>-->
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
	

	</div>
	</div>

</body>
</html>
