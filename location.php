<?php
session_start();
?> 
<html>
<head>
    <link rel = "stylesheet" type = "text/css" href = "location1.css">
    <link rel = "stylesheet" type = "text/css" href = "navstyle.css">
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
	<div id = "header">
	<div id = "heading">
	    Stations Serviced ................. 
	</div>
		<div id="mid">
			<ul>
	<li>PUNE</li>
	<li>KALYAN</li>
	<li>VASAI ROAD</li>
	<li>INDORE</li>
	<li>NAGDA</li>
	<li>KOTA</li>
	<li>SURAT</li>
	<li>UJJAIN</li>
	<li>VADODRA</li>
	<li>MUMBAI CENTRAL</li><br>
	</ul>

		
		</div>
	
	</div>



	
	
</div>
<marquee direction="left"><img src = "images/images.jpeg"  height = "90px" width = "150px"></marquee>
		
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
