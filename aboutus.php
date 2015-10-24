<?php   session_start();  ?>
<html>
<head>

		<link rel = "stylesheet" type = "text/css" href = "navstyle.css">
 		<link rel = "stylesheet" type = "text/css" href = "aboutus.css">
	 <link rel = "stylesheet" type = "text/css" href = "order.css">

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

	<div id = "container">
		About Us 
	</div>
	
	<div id = "main">
			
		<div id = "abt1">
			
			<span id = "title">   What is Rail Eatery? </span> <br><br>
			Rail Eatery is one of the first online food ordering and delivery platforms in Vadodara & Surat to bring 
			food from your favourite restaurant to your doorstep At Delfoo,we believe that ordering food and its 				delivery should be easy,fast and definitely fun!
		
		</div>
		
		<div id = "abt2">
			
			   <span class = "subhead">	Our Vision  </span> <br><br>
		
			 
			    To provide food delivery service with trust and satisfaction<br>
			    To satisfy people with this new invention in service sector <br>
			
		
		</div>
		
		<div id = "abt3">
			
			<span class = "subhead"> Our Mission  </span> <br><br>
			Our mission is to deliver services to consumers by delivering their favourite food to their given delivery 				addresses by reducing time <br>
			Our aim at Rail Eatery is to establish business relationship with diverse food suppliers, from elegant 				restaurants to famous local cart vendors <br>
			
		
		</div>
		
		
		<div id = "abt4">
			
			<span class = "subhead"> Our Philosophy </span> <br><br>
			Customer Satisfaction <br>
			Safety & Security<br>
			Quality Service<br>
			Transparency<br>
			Innovation<br>
			Research<br>
			Trust<br>
			Going Green<br>
			Going Blue<br>
			
		
		</div>
		
	
	</div>
	
	
	<div id = "footer">
		<div id = "info">
			<table  class = "t2" cellpadding = "15px">	
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
