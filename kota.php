<?php
session_start();
?> 
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "rest2.css">
    <link rel = "stylesheet" type = "text/css" href = "navstylerest.css">

</head>



<body>
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


	<div id = "MAIN">
		<div id = "RestrauntHeading"> <h3> Restaurants in Kota</h3>
		</div>
		
		<div id = "abt1">
			<div class = "logores">
					<img src = "images/Dal_baati_choorma_logo.jpg" width = "100px" height = "100px" >
			</div>
			<div class = "resinfo">
				
				<span id = "resname">Daal Baati Choorma </span> <br><br>
				<span> <img src = "images/locationicon.png" width = "20px" height = "20px" hspace = "7px"> Ashoka Colony,Kota </span>
				<br>
				<span> <img src = "images/cheficon.jpg" width = "20px" height = "20px" hspace = "7px">  Daal Baati Choorma </span>
				<span> <img src = "images/vegetarianicon.png" width = "15px" height = "25px" > </span>
				
				
			</div>
			<div id = "view">
				
				<form method = "POST" action = "selectrestaurant1.php">
				<input type = "hidden" value = "Daal Baati Choorma" name = "restaurantname">
				 <input type = "submit" value = "View Menu" name = "View Menu" id = "orderbutton"> </span> <br>
				</form>
			</div>
			
		</div>
		
	
		<div id = "abt2">
			
		<div class = "logores">
					<img src = "images/Purohit_thali_logo.jpg" width = "100px" height = "100px" >
			</div>
		<div class = "resinfo">
				
				<span id = "resname">Hotel Purohit</span> <br><br>
				<span> <img src = "images/locationicon.png" width = "20px" height = "20px" hspace = "7px">  Fatehgunj,Kota</span>
				<br>
				<span> <img src = "images/cheficon.jpg" width = "20px" height = "20px" hspace = "7px">  Punjabi, Mughlai, Pizza, Chinese,Gujrati</span>
				<span> <img src = "images/vegetarianicon.png" width = "15px" height = "25px" > </span>
				<span> <img src = "images/swaminarayan.png" width = "15px" height = "25px" > </span>
				<span> <img src = "images/jain.png" width = "15px" height = "25px"  > </span>
				
			</div>
			<div id = "view">
				
				<form method = "POST" action = "selectrestaurant1.php">
				<input type = "hidden" value = "Hotel Purohit,Kota" name = "restaurantname">
				 <input type = "submit" value = "View Menu" name = "View Menu" id = "orderbutton"> </span> <br>
				</form>
			</div>

		</div>

	</div>	
		

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

	<div id = "popup" style = "display:none">
	<div id = "head1">
		Account Login 
	</div>
	<div id = "form">
	<div id = "image">
	<img src = "signin.jpg" height = "150px" width = "150px" hspace = "30px" vspace = "30px">
	</div>
	<div id = "entries">

	<textarea class = "login" placeholder="*Email"></textarea> <br><br><br>
	<textarea class = "login" placeholder="*Password"></textarea> <br><br>
	<span id = "right"> Forgotten password? </span>
	</div>
	</div>
	<div id = button>


	
	<input type = "button" value = "Register Now" id = "registernow"> 
	
	<div id = "rbuttons">

	<input type = "button" value = "Login" id = "signin" > 


	</div>
	</div>

	

	
</body>
</html>
