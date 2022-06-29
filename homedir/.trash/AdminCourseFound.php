<html>
    <head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0">
        <title>Quantify University</title>
        <link rel="stylesheet" href="style3.css">
    </head>
    <style>
        .navbar {
          overflow: hidden;
          background-color: #000000;
          font-family: Arial;
        }
        
        /* Links inside the navbar */
        .navbar a {
          float: left;
          font-size: 16px;
          color: white;
          text-align: left;
          padding: 10px 30px;
          text-decoration: none;
        }
    </style>

    <body>

      <section class="header">  
        <div class="navbar"> 
            <a href="index.html"><img src="images/StudLog.png"></a>
            <a href="AdminHomePage.php">Admin</a> 
            <a href="MasterSchdeule.php">Master Schdeule</a> 
            <a href="Advisors.php">Advisors</a>   
            <a href="CourseCatalog.php">Course Catalog</a> 
            <a href="AdminMajors.php">Majors</a> 
            <a href="AdminMinor.php">Minors</a> 
            <a href="AdminViewDepartments.php">Deparments</a> 
            <a href="Adminviewbuildings.php">Buildings</a> 
        </div>
        
        <div class = "container text-center">
            <h2>Search Users</h2>
        </div>
        
        <div class="content">
            <p><a href="Academics.php" ><img src="images/BackToUsers.png" style="width:200px;height:200px;"></a><a href="SearchUser.php" ><img src="images/NewUserSearch.png" style="width:200px;height:200px;"></a></p>
        
            <?php
        
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $searchtype = $_POST['searchtype'];
                $search = $_POST['search'] . "%";
                
                $query="SELECT * FROM course WHERE $searchtype LIKE '$search'";
    		    
    			if(!mysqli_select_db($con,$dbname))
    				die("<p>Could not open School Database.</p></body></html>");
    
    			if(!($result=mysqli_query($con,$query))) {
    			        print("<p>Could not execute query!</p>");
    			        die(mysqli_error()."</body></html>");
    			}
    			
    			$result2 = mysqli_query($con,$query) or die(mysql_error());

			    $count = mysqli_num_rows($result);
			    
			    if($count==0) {
			        print("<p>No course Found.</p>");
    			    die(mysqli_error()."</body></html>");
			    } else {
    		     
        		    print("<table border='1'>
        		         	<caption>course Found</caption>
        		         	<tr>
        		         	    <th>Select User</th>
        		            	<th>UserID</th>
        		            	<th>FirstName</th>
        		            	<th>LastName</th>
        		            	<th>Street</th>
        		            	<th>City</th>
        		            	<th>State</th>
        		            	<th>ZipCode</th>
        		            	<th>Phone</th>
        		            	<th>UserType</th>
        		         	</tr>");
        
        		    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
        		    {
        
        		    	print("<tr><td class = 'clean'><a class = 'clean' href = 'userinfo.php?UserID=$row[0]'>Select</a></td>");
        
        		       	foreach ($row as $element=>$value ) 
        		          print("<td>$value</td>");
        
        		      	print("</tr>");
        
        		    }
			    }
    		    
              $con->close();
            ?>
        </div>
  </body>
</html>