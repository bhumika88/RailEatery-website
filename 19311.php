<?php   session_start();  ?>
<html>
<head>

		<link rel = "stylesheet" type = "text/css" href = "navstyle.css">
 	
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


	<div class="container" id="m-top">
  <div class="row ">


    <div class="col">
      <h1>Online Order delicious food in train at your seat!</h1>
    </div>
     <div class="col">
       <table align="center" class="table">
            <thead>
              <tr>
                <th style="display:none">PNR No</th>
                <th>Train No</th>
                <th>Train Name</th>
                <th>Starts From</th>
                <th>Ends At</th>
                <th style="display:none">Date</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                
                <td>19311</td>
                <td>PUNE INDORE EXP</td>
                <td>PUNE</td>
                <td>INDB</td>
                 <br>  
           </tr>
              
            </tbody>
          </table>

     </div>

</div>
  <div class="row">

     <div class="col">
       <table align=center id="train_list_table" class="table">
            <thead>
              <tr>
                <th>#</th>
                <th>Station Name</th>
                <th>Arrival</th>
                <th>Departure</th>
                <th>Day</th>
                <th>Order Meal</th>
              </tr>
            </thead>
            <tbody>
                     <tr>
                <td>1</td>
                <td> Pune Jn</a></td>
                <td>First</td>
                <td>15.20</td>
                <td>
                    1                </td>
                <td><form method="POST" action="selectstation.php">        
		<input type = "hidden" value = "pune" name = "stationname">
        	<input type = "submit" class="button" value = "Order Meal" name = "submit"></td>
		</form></td>
                	              </tr>
                           <tr >
                <td>2</td>
                <td> Chinchwad</a></td>
                <td>15.37</td>
                <td>15.38</td>
                <td>
                    1                </td>
                <td>	              </tr>
                           <tr >
                <td>3</td>
                <td> Lonavla</a></td>
                <td>16.13</td>
                <td>16.15</td>
                <td>
                    1                </td>
                <td>	              </tr>
                           <tr >
                <td>4</td>
                <td> Karjat</a></td>
                <td>16.58</td>
                <td>17.00</td>
                <td>
                    1                </td>
                <td>	              </tr>
                           <tr >
                <td>5</td>
                <td> Kalyan Jn</a></td>
                <td>17.42</td>
                <td>17.45</td>
                <td>
                    1                </td>
                <td>	                	<form method="POST" action="selectstation.php">        
		<input type = "hidden" value = "kalyan" name = "stationname">
        	<input type = "submit" class="button" value = "Order Meal" name = "submit"></td>
		</form></td>
                	              </tr>
                           <tr >
                <td>6</td>
                <td>Bhivandi Road</a></td>
                <td>18.33</td>
                <td>18.35</td>
                <td>
                    1                </td>
                <td>	              </tr>
                  <tr >
		        <td>7</td>
		        <td> Vasai Road</a></td>
		        <td>19.50</td>
		        <td>20.05</td>
		        <td>1</td>
		        <td><form method="POST" action="selectstation.php">        
		<input type = "hidden" value = "vasai road" name = "stationname">
        	<input type = "submit" class="button" value = "Order Meal" name = "submit"></td>
		</form></td>
                  </tr>
                           
                 <tr>
                <td>6</td>
                <td>Surat</a></td>
                <td>23.15</td>
                <td>23.20</td>
                <td>
                    1                </td>
                <td>	              </tr>
                          
		 <tr>
                <td>6</td>
                <td>Vadodra</a></td>
                <td>01.05</td>
                <td>01.15</td>
                <td>
                    1                </td>
                <td>	              </tr>
                      
		 <tr >
                <td>10</td>
                <td> Godhra Jn</a></td>
                <td>02.28</td>
                <td>02.30</td>
                <td>
                    2                </td>
                <td>	              </tr>
                           <tr >
                <td>11</td>
                <td>Dahod</a></td>
                <td>03.25</td>
                <td>03.27</td>
                <td>
                    2                </td>
                <td>	              </tr>
                           <tr >
                <td>12</td>
                <td> Meghnagar</a></td>
                <td>03.50</td>
                <td>03.52</td>
                <td>
                    2                </td>
                <td>	              </tr>
                 <tr >
                <td>13</td>
                <td>Ratlam Jn</a></td>
                <td>05.25</td>
                <td>05.35</td>
                <td>2</td>
		<td></td>
                
               </tr>
                  <tr>
                <td>14</td>
                <td> Nagda Jn</a></td>
                <td>06.18</td>
                <td>06.20</td>
                <td>
                    2                </td>
                <td>	                	<form method="POST" action="selectstation.php">        
		<input type = "hidden" value = "nagda" name = "stationname">
        	<input type = "submit" class="button" value = "Order Meal" name = "submit"></td>
		</form></td>
                	              </tr>
                           <tr >
                <td>15</td>
                <td>Ujjain Jn</a></td>
                <td>07.20</td>
                <td>07.30</td>
                <td>
                    2                </td>
                <td>	                	<form method="POST" action="selectstation.php">        
		<input type = "hidden" value = "ujjain" name = "stationname">
        	<input type = "submit" class="button" value = "Order Meal" name = "submit"></td>
		</form></td>
                	              </tr>
                           <tr >
                <td>16</td>
                <td>Dewas</a></td>
                <td>08.19</td>
                <td>09.02</td>
                <td>
                    2                </td>
                <td>	              </tr>
                           <tr >
                <td>17</td>
                <td> Indore Jn</a></td>
                <td>09.50</td>
                <td>Last</td>
                <td>
                    2                </td>
                <td>	              </tr>
              
            </tbody>
          </table>
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
