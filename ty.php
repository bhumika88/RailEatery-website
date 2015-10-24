<?php
	session_start();
?>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "navstyle.css">

    <link rel = "stylesheet" type = "text/css" href = "location1.css">
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



<?php


	 $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root123';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
 
 mysql_select_db('webdbs');
	$travellersname = $_SESSION['travellersname'];
 $travellersno= $_SESSION['travellersno'];
$date=$_SESSION['$date'];
$trainno=$_SESSION['trainno'];
$coachno=$_SESSION['coachno'];
$seatno=$_SESSION['seatno'];
$stationname=$_SESSION['stationname'];
$restaurantname=$_SESSION['restaurantname'];
$orderdetails=$_SESSION['orderdetails'];
$orderdetails=$_SESSION['orderdetails'];
$sum=$_SESSION['total'];

	/*echo "   :    " . ."<br>";
	echo "Traveller's Contact Number    :    " . $_SESSION['travellersno']."<br>";
	echo "Date of Journey    :    " . $_SESSION['date']."<br>";
	echo "Train Number   :    " . $_SESSION['trainno']."<br>";
	echo "Coach Number   :    " . $_SESSION['coachno']."<br>" ;
	echo "Seat Number   :    " . $_SESSION['seatno']."<br>";
	echo "Station Name   :    " .$_SESSION['stationname']."<br>";
	echo "Restaurant Name   :    " . $_SESSION['restaurantname']."<br>";
	echo " Order Details   :    " . $_SESSION['orderdetails']."<br>";
	$selected = $_SESSION['orderdetails'];*/
	/*$array = (explode(' ',$selected,4));
	print_r($array);*/
	

?>




<div id = "header">
	<div id = "heading">
		Order Summary 	
	</div>	
		<div id="mid" >
			<table id = "travel">
			<tr>
				<td style="width:400px;"><center>Traveller's Name </td>
				<td style="width:800px;"><center><?php echo $travellersname ?></td>		
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Traveller's Contact Number </td>
				<td><center><?php echo $travellersno ?></td>			
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Date of Journey</td>
				<td><center><?php echo $date?></td>			
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Train Number </td>
				<td><center><?php echo $trainno ?></td>			
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Coach Number</td>
				<td><center><?php echo $coachno?></td>			
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Seat Number  </td>
				<td><center><?php echo $seatno ?></td>			
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Station Name  </td>
				<td><center><?php echo $stationname ?></td>			
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Restaurant Name   </td>
				<td><center><?php echo $restaurantname ?></td>			
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Order Details </td>
				<td><center><?php echo "<br>".$orderdetails ?></td>			
			</tr>
			<tr>
				<td></td>
				<td></td>		
			</tr>
			<tr>
				<td><center>Total</td>
				<td><center><?php echo "<br>".$sum ?></td>			
			</tr>
			<tr>
				<td></td>
				<td><span id = "thankyou"><?php echo "<br>"."Thank You ".$_SESSION['use']."!!"."<br>"."Your order has been  placed  successfully!!!!!"?></span></td>			
			</tr>
	</table>
		
		</div>

		
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


</body>
</html>
