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
  
 mysql_select_db('webdbs');

if(isset($_POST['submit'])){
	if(!empty($_POST['choice'])) {
		// Counting number of checked checkboxes.
		$checked_count = count($_POST['choice']);
		echo "You have selected following ".$checked_count." option(s): <br/>";
		// Loop to store and display values of individual checked checkbox.
		foreach($_POST['choice'] as $selected) {
			
			$array = (explode(' ',$selected));
			
			$sum = $sum+$array[3];
			//$array1 = (explode(' ',$selected));
		        $concarray = $concarray.$selected;
		}
	echo "TOTAL:".$sum."<br>"; 
		echo $concarray."<br>";
	$_SESSION['orderdetails']=$concarray;	
	$_SESSION['total']=$sum;
	echo '<script type="text/javascript"> window.open("traveldetails.php","_self");</script>';
	}
	else{
		?><script>alert("Please Select Atleast One Option");</script>

	<?php
		echo '<script type="text/javascript"> window.open("sakharmenu.php","_self");</script>';
	
	/*$str = for($_POST['choice'] as $selected);
	echo $str;
*/
// zero limit
//print_r(explode(',',$str,0));
 
}
}
   
?>
<html>
<head>
	<link rel = "stylesheet" type = "text/css" href = "navstyle.css">
	<link rel = "stylesheet" type = "text/css" href = "menu.css">	
	
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


	

		<div id = "abt1">
			<div class = "logores">
					<img src = "images/sahkar.jpg" width = "100px" height = "100px" >
			</div>
			<div class = "resinfo">
				
				<span id = "resname">Sahkar Restaurant</span> <br><br>
				<span> <img src = "images/locationicon.png" width = "20px" height = "20px" hspace = "7px"> Ring Road, Indore</span>
				
				<br>
				<span> <img src = "images/cheficon.jpg" width = "20px" height = "20px" hspace = "7px">   Punjabi, Chinese, Continental, Mughlai, </span>
				<span> <img src = "images/vegetarianicon.png" width = "15px" height = "25px" > </span>
				<span> <img src = "images/swaminarayan.png" width = "15px" height = "25px" > </span>
				<span> <img src = "images/jain.png" width = "15px" height = "25px"  > </span>
				
			</div>
			<div>
			
					<input type = "button" value = "BACK" id = "orderbutton" onclick = "window.open('vasairoad.php','_self');"> 
			</div>
		</div>
		</div>
	
	
	
			<div id = "placeyourorder">
				<span id = "h4">	<font align = "center"><h2>MENU </h2></font> <h3>

			<form method = "POST" action = "<?php $_PHP_SELF ?>">
			
						<table class = "t3"   cellpadding = "10px">
						<thead align = "center">
						<tr>
							<th class = "rowdish">Main Course</th>
							<th class = "rowprice">Price</th>
							
							<th class = "rowcart">Add to cart</th>
						</tr>
						</thead>
				
						<tr>
							<td><center>Palak Paneer</td>
							<td><center>Rs.190.00</td>
							
							<td><center><input type = "checkbox" value = "Palak Paneer : 190.00" id = "input" name = "choice[]" ></td>
						</tr>
						<tr>
							<td><center>Aloo Jeera</td>
							<td><center>Rs.180.00</td>
							
							<td><center><input type = "checkbox" value = "Aloo Jeera : 180.00" id = "input" name = "choice[]"></td>
						</tr>
						<tr>
							<td><center>Gobi Aloo</td>
							<td><center>Rs.180.00</td>
							
							<td><center><input type = "checkbox" value = "Gobi Aloo : 180.00" id = "input" name = "choice[]" ></td>
						</tr>
						<tr>
							<td><center>Methi Mutter </td>
							<td><center>Rs.180.00</td>
							
							<td><center><input type = "checkbox" value = "Methi Mutter : 180.00" id = "input" name = "choice[]"></td>
						</tr>
						<tr>
							<td><center>Methi Aloo</td>
							<td><center>Rs.180.00</td>
							
							<td><center><input type = "checkbox" value = "Methi Aloo : 180.00" id = "input" name = "choice[]"></td>
						</tr>
						<tr>
							<td><center>Kadai Paneer</td>
							<td><center>Rs.200.00</td>
							
							<td><center><input type = "checkbox" value = "Kadai Paneer : 200.00" id = "input" name = "choice[]"></td>
						</tr>
						<tr>
							<td><center>Shahi Paneer</td>
							<td><center>Rs.200.00</td> 
							
							<td><center><input type = "checkbox" value = "Shahi Paneer : 200.00" id = "input" name = "choice[]"></td>
						</tr>
						<tr>
							<td><center>Paneer Bhurji</td>
							<td><center>Rs.200.00</td>
					
							
					
							<td><center><input type = "checkbox" value = "Paneer Bhurji : 200.00" id = "input" name = "choice[]"></td>
						</tr>
						<tr>
							<td><center>Bhindi Aloo</td>
							<td><center>Rs.150.00</td>
							
							<td><center><input type = "checkbox" value = "Bhindi Aloo : 150.00" id = "input" name = "choice[]"></td>
						</tr>
						<tr>
							<td><center>Dal Fry</td>
							<td><center>Rs.200.00</td>
							
							<td><center><input type = "checkbox" value = "Dal Fry : 200.00" id = "input" name = "choice[]"></td>
						</tr>
						<tr>
							<td><center>Dal Makhani</td>
							<td><center>Rs.200.00</td>
							
							<td><center><input type = "checkbox" value = "Dal Makhani : 200.00" id = "input" name = "choice[]" ></td>
						</tr>
						
						<tr>
							<td><center>Jeera Rice</td>
							<td><center>Rs.150.00</td>
							
							<td><center><input type = "checkbox" value = "Jeera Rice : 150.00" id = "input" name = "choice[]" ></td>
						</tr>
						<tr>
							<td><center>Steamed Rice</td>
							<td><center>Rs.150.00</td>
							
							<td><center><input type = "checkbox" value = "Steamed Rice : 150.00" id = "input" name = "choice[]" ></td>
						</tr>
						<tr>
							<td><center>Veg Biryani</td>
							<td><center>Rs.200.00</td>
							
							<td><center><input type = "checkbox" value = "Veg Biryani : 200.00" id = "input" name = "choice[]" ></td>
						</tr>
					<tr>
						<td><center>Plain roti</td>
						<td><center>Rs.10.00</td>
						
						<td><center><input type = "checkbox" value = "Plain roti : 10.00" id = "input" name = "choice[]" ></td>
					</tr>
					<tr>
						<td><center>Kulcha Parantha</td>
						<td><center>Rs.50.00</td>
						
						<td><center><input type = "checkbox" value = "Kulcha Parantha : 50.00" id = "input" name = "choice[]" ></td>
					</tr>
					<tr>
						<td><center>Aloo Parantha</td>
						<td><center>Rs.100.00</td>
						
						<td><center><input type = "checkbox" value = "Aloo Parantha : 100.00" id = "input" name = "choice[]" </</td>
					</tr>
					<tr>
						<td><center>Gobi Parantha </td>
						<td><center>Rs.100.00</td>
						
						<td><center><input type = "checkbox" value = "Gobi Parantha : 100.00" id = "input" name = "choice[]" ></td>
					</tr>
					<tr></tr>
					
					<tr>
						<td> </td>	
						<td><center><input type = "submit" value = "Place your order" name = "submit" id = "order"></center> 
					</tr>			
							</form>
							</table>
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
