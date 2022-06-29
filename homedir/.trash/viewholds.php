<!DOCTYPE html>

<html>
	<head>
  	<meta name="viewport" content="with=device-width,initial-scale=1.0">
  	<title>Quantify University</title>
  	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<a href="admin.html">Return to Admin Homepage</a>
		<?php

			$host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
			$port=3306;
			$socket="";
			$user="admin";
			$password="gupta2022";
			$dbname="quantify";

			$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
				or die ('Could not connect to the database server' . mysqli_connect_error());

			$query="SELECT * FROM hold";
		    
			if(!mysqli_select_db($con,$dbname))
				die("<p>Could not open School Database.</p></body></html>");

		  if(!($result=mysqli_query($con,$query))) 
		     {
		        print("<p>Could not execute query!</p>");
		        die(mysqli_error()."</body></html>");
		     }
		     
		    print("<h1>Holds</h1>
		      	<table border='1'>
		         	<caption>List of all holds</caption>
		         	<tr>
		         		<th>HoldID</th>
		            	<th>HoldType</th>
		         	</tr>");

		    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
		    {

		    	print("<tr>");

		       	foreach ($row as $element=>$value ) 
		          print("<td>$value</td>");

		      	print("</tr>");

		    }

			$con->close();
		?>
	</body>
</html>