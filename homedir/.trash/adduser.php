<!DOCTYPE html>

<html>
	<head>
  	<meta name="viewport" content="with=device-width,initial-scale=1.0">
  	<title>Quantify University</title>
  	<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<p><a href="admin.html">Return to Admin Homepage</a>
		<p><a href="viewusers.php">Return to Users</a>
		<?php

			$host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
			$port=3306;
			$socket="";
			$user="admin";
			$password="gupta2022";
			$dbname="quantify";

			$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
				or die ('Could not connect to the database server' . mysqli_connect_error());

			if(!mysqli_select_db($con,$dbname))
				die("<p>Could not open School Database.</p></body></html>");
		     

			print('<form action="useradded.php" method="post">
			<p>UserID: <input type="text" name="userid">
			<p>First Name: <input type="text" name="fname">
			<p>Last Name: <input type="text" name="lname">
			<p>Street: <input type="text" name="street">
			<p>City: <input type="text" name="city">
			<p>State: <input type="text" name="state">
			<p>ZipCode: <input type="text" name="zipcode">
			<p>Phone: <input type="text" name="phone">
			<p>Email: <input type="text" name="email">
			<p>UserType: <input type="text" name="usertype">
			<input type="submit">
			</form>');
    
			$con->close();
		?>
	</body>
</html>