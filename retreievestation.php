<?php
   $dbhost = 'localhost';
   $dbuser = 'root';
   $dbpass = 'root123';
   
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn )
   {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'SELECT stationid, stationname FROM stationtable';
   mysql_select_db('webdbs');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval )
   {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC))	//constant MYSQL_ASSOC is used as the second argument to mysql_fetch_array(), so that it returns the row as an associative array. With an associative array you can access the field by using their name instead of using the index.
   {
      echo "STATION ID :{$row['stationid']}  <br> ".
         "STATION NAME : {$row['stationname']} <br> ".
        
         "--------------------------------<br>";
   }
   
   echo "Fetched data successfully\n";
   
   mysql_close($conn);
?>
