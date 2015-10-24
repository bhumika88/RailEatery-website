<?php   session_start();  ?>
<html>
  
<head>
	
    <link rel = "stylesheet" type = "text/css" href = "stylehome.css">
    <link rel = "stylesheet" type = "text/css" href = "navstyle.css">
    
	<script type="text/javascript">
    function validatephone()
        		{
				if(document.getElementById("trainno").value != "")
				{
					if(isNaN(document.getElementById("trainno").value))
					{
							document.getElementById("phoneerror").innerHTML = "Please enter only numbers";
					
					}
					
					else
					{
					
				
						if (document.getElementById("trainno").value.length !=5) {
            						document.getElementById("phoneerror").innerHTML = "Train number should be 5 digit";
						}
						else
						{
						   document.getElementById("phoneerror").innerHTML="";					
						}
					}
					
					
				}
				else if(document.getElementById("trainno").value == "")
				{
					document.getElementById("phoneerror").innerHTML = "Please enter train number."; 					}
				
			}	 
    </script>
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
	<br>
	<div id = "header">
	<div id = "heading">
		Place Your Order Now !!!
	</div>
	<div id = list>
		<span id = "lst1">Available trains</span> <br>
			<ul>
	<li>12939/Pune-Jaipur Express</li>
	<li>12961/Avantika Express(BCT-INDB)</li>
	<li>12962/Avantika Express(INDB-BCT)</li>
	<li>19311/Pune-Indore Express</li>
	<li>19312/Indore-Pune Express</li>
	
	</ul>
	</div>
	<div id="mid">
		<table cellpadding = "10px" align = "center"  >
			<form  method="POST" action="searchtrain.php">
			
			<tr>
				<br>
				<td><input type = "tel" class = "inputsmall" id="trainno" name="trainno" placeholder = "Train Number" onblur = "validatephone()" required/> </td>
				<br>
		        </tr>
			<tr>
			<td><span id = "phoneerror" class = "error"></span></td><tr>
	</tr>
			
				
	       
		<br>
		<tr>
	    <td><input type = "submit" class = "button" value = "Search Food" name ="submit" /></td>
		</tr>
			</form>
				
	        </table>
		<br>
		
	</div>
	
	</div>

	<div id = "steps">
		<div id = "stepstoorder">
			<h2 class="topics" style="padding-bottom:130px;" align="center">Order Food in 4 Easy Steps</h2>
		</div>
      			<!-- Example row of columns -->
      		<div id="rowtext">
     					
        		
		<div class="col-sm-3 text" id = "step1">
				<!--  <h2 class="steps">Step 1</h2>-->
					<img src="images/Cap.png" class="stepimages" title="First food ordering step Rail Rider Enter PNR or Train Number" alt="Enter PNR or Train Number"> <br>
					<p class="step">Enter Train Number.</p>  
				</div>

				<div class="col-sm-3 text" id = "step2">
					<!--  <h2 class="steps">Step 2</h2>-->
					 <img src="images/food.png " class="stepimages" title="To order food in Railway Choose your favorite food" alt="Favorite Food - Rail rider”"> <br>
					<p class = "step"> Choose your favorite food.</p>

				</div>
				<div class="col-sm-3 text" id = "step3">
					 <!--<h2 class="steps">Step 3</h2>-->
					 <img src="images/r.png " class="stepimages" title="Rail Rider Pay online or cash on delivery." alt="Pay online or COD- Rail rider"><br>
					 <p class="step">Cash on delivery mode of payment.</p>

				 </div>
				 <div class="col-sm-3 text" id = "step4">
					<!--  <h2 class="steps">Step 4</h2>-->
					<img src="images/Smile.png" id = "step4img" title="Enjoy your food on your selected station" alt='Smile'><br>
					<p class="step"><font align = "center">Enjoy your food on your selected station.</font></p>

				</div>

		</div>
	
</div>
<div id = "trans">
		<marquee direction="right"><img src = "images/anitrain.gif"  height = "90px" width = "150px"></marquee>
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
