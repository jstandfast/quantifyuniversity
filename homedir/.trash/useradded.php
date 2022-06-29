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
		<p><a href="removeuser.php">Remove a user</a>
		<?php

			$host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
			$port=3306;
			$socket="";
			$user="admin";
			$password="gupta2022";
			$dbname="quantify";

			$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
				or die ('Could not connect to the database server' . mysqli_connect_error());

			$userid = $_POST['userid'];
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$street = $_POST['street'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zipcode = $_POST['zipcode'];
			$phone = $_POST['phone'];
			$usertype = $_POST['usertype'];

			$insert = "INSERT INTO quantify.user(UserID,FirstName,LastName,Street,City,State,ZipCode,Phone,UserType) VALUES ('$userid','$fname','$lname','$street','$city','$state','$zipcode','$phone','$usertype')";

			print("<p>Adding user: $userid $fname $lname $street $city $state $zipcode $phone $usertype<p>");

			if(mysqli_query($con, $insert)){
	    		echo "Records inserted successfully.";
			} else{
	   			echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
			}

			$con->close();
		?>
	</body>
</html>