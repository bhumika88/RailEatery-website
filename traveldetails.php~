<?php
session_start();
?>
<html>
<head>
<title>Database</title>
	<link rel = "stylesheet" type = "text/css" href = "navstyle.css">
 	<link rel = "stylesheet" type = "text/css" href = "traveldetails.css">
	<script type = "text/javascript">
		function validatename()
			{
				if(document.getElementById("travellersname").value!="")
               			{
					
					
		 			var letters = /^[a-zA-Z]+$/;  
					if(!document.getElementById("travellersname").value.match(letters))  
					{  
					
					
						document.getElementById("firstnameerror").innerHTML = "Please enter only alphabets (no special characters)";
						document.getElementById("travellersname").focus();
						document.getElementById("travellersname").select();			
					}
					else
					{
						document.getElementById("firstnameerror").innerHTML = "";
					}
				}
				else if(document.getElementById("travellersname").value=="")
				{
					
					document.getElementById("firstnameerror").innerHTML = "Please enter first name "; 						document.getElementById("travellersname").focus();
					document.getElementById("travellersname").select();			
		}

			}

		  function validatephone()
        		{
				if(document.getElementById("travellersno").value != "")
				{
					if(isNaN(document.getElementById("travellersno").value))
					{
							document.getElementById("phoneerror").innerHTML = "Please enter only numbers";
							document.getElementById("travellersno").focus();
							document.getElementById("travellersno").select(); 					
					}
					
					else
					{
					
				
						if (document.getElementById("travellersno").value.length != 10) {
            						document.getElementById("phoneerror").innerHTML = "Number should be 10 digit";
							document.getElementById("travellersno").focus();
							document.getElementById("travellersno").select(); 									
						}
						else
						{
						   document.getElementById("phoneerror").innerHTML="";					
						}
					}
					
					
				}
				else if(document.getElementById("travellersno").value == "")
				{
					document.getElementById("phoneerror").innerHTML = "You must enter phone number"; 					}
				
			}
			function validatecoach()
        		{
				if(document.getElementById("coachno").value != "")
				{
					//var letters = /^[a-zA-Z0-9]+$/;  
					
					if (document.getElementById("coachno").value.length >3 || document.getElementById("coachno").value.length < 2) 		{
            						document.getElementById("coacherror").innerHTML = "Invalid coach number ";
							document.getElementById("coachno").focus();
							document.getElementById("coachno").select(); 						
					}
					
						
				
						

						else
						{
						   document.getElementById("coacherror").innerHTML="";					
						}
					
					
					
				}
				else if(document.getElementById("coachno").value == "")
				{
					document.getElementById("coacherror").innerHTML = "You must enter coach number"; 						document.getElementById("coachno").focus();
					document.getElementById("coachno").select();					
				}
				
			}
			function validateseat()
        		{
				if(document.getElementById("seatno").value != "")
				{
					//var letters = /^[a-zA-Z0-9]+$/;  
					
					if ( document.getElementById("seatno").value.length != 2) {
            						document.getElementById("seaterror").innerHTML = "Invalid seat number ";
							document.getElementById("seatno").focus();
							document.getElementById("seatno").select();
						}
						else
						{
						   document.getElementById("seaterror").innerHTML="";					
						}
					
					
					
				}
				else if(document.getElementById("seatno").value == "")
				{
					document.getElementById("seaterror").innerHTML = "You must enter seat number"; 						document.getElementById("seatno").focus();
					document.getElementById("seatno").select();					
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
		echo "connected successfully";
	}


$date = $_POST['Date']; 
$date = strtotime($date);
$date = date('d-m-Y',$date);
	   		
			$coachno= $_POST['coachno']; 
			$seatno = $_POST['seatno'];
			$travellersname = $_POST['travellersname']; 
			$travellersno=$_POST['travellersno'];
	
 	$_SESSION['travellersname'] = $travellersname;
$_SESSION['travellersno']= $travellersno;
$_SESSION['coachno']= $coachno ;
$_SESSION['seatno']= $seatno ;
$_SESSION['$date']= $date ;
$trainno=$_SESSION['trainno'];

$stationname=$_SESSION['stationname'];
$restaurantname=$_SESSION['restaurantname'];
$orderdetails=$_SESSION['orderdetails'];

		$query = "INSERT INTO finalTable1 (trainno,stationname,restaurantname,date,coachno,seatno,travellersname,travellersno,orderdetails) VALUES ('$trainno','$stationname','$restaurantname','$date','$coachno','$seatno','$travellersname','$travellersno','$orderdetails')"; 	
		mysql_select_db('webdbs');
		$retval = mysql_query( $query, $conn );

if(! $retval )
{
  die('Could not enter data: ' . mysql_error());
}
else
{

echo '<script type="text/javascript"> window.open("ty.php","_self");</script>'; 

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
		<div id = "link"> </div>

	<div id = "mid">
	<span id = "heading">
	Traveller Details <br><br>
	</span>


	<form method="post" action="<?php $_PHP_SELF ?>" >
	<table id = "table6">
	<tr>
	<td><input type="text" class = "inputbig" id = "travellersname" placeholder = "*Traveller's Name"  name = "travellersname" onblur = "validatename()" required/></td>
	</tr>	
	<tr>

		<td><span id = "firstnameerror" class = "error"  ></span></td>
	</tr>
	<tr>
	<td><input type="text" class = "inputbig" id="travellersno" placeholder = "*Traveller's mobile number" name = "travellersno" onblur="validatephone()" required/></td> 
</tr>
<tr>
	<td><span id = "phoneerror" class = "error"></span></td>
	</tr>
	<tr>
	<td><input type="text" class = "inputbig" id="coachno" placeholder = "*Coach Number (eg :S2)" name = "coachno" onblur = "validatecoach()" required/></td> 
	</tr>
	
<tr>
			
	<td><span id = "coacherror" class = "error"></span></td>
	</tr>

	<tr>
	<td><input type="number" class = "inputbig" id="seatno" placeholder = "*Seat Number (eg :16)" name = "seatno" onblur = "validateseat()" required/></td> 
	</tr>

	<tr>
		<td><span id = "seaterror" class = "error"></span></td>

	</tr>	
	
	<tr>
	<td><input type="date" class = "inputbig"   id="Date" name = "Date" required/></td>	
	</tr>	

	<tr>
	<div id= "buttons">
	<td><input type = "submit" value = "Submit" id = "submit" name="submit" class = "submit"> </td>
	</tr>	
	</table>
	</form>

	</div>
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
 

