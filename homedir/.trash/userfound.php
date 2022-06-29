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
            <h2>Add a User</h2>
        </div>
        
        <div class='content'>
        
            <p><a href="ViewUsers.php" ><img src="images/BackToUsers.png" style="width:200px;height:200px;"></a></p>


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
                    
                $idnumber;
    		    $projectedID;
    		    $test = 1;
                
                while($test) {
    
    			    $min = 1000000;
    			    $max = 9999999;
    			    $idnumber = rand($min, $max);
    			    $projectedID = 'Q' . $idnumber;
    
    			    $query = "SELECT * FROM quantify.user WHERE UserID = '$projectedID';";
    
                    $result = mysqli_query($con,$query) or die(mysql_error());

			        $count = mysqli_num_rows($result);
			    
    			    if($count==0)
    					$test = 0;
    		    }
                
                print("
    
                        <form action='AddUserCheck.php' method='post'>
                            <p><label for='userid'>UserID: $projectedID</label>
                                <input type='hidden' name='userid' value='$projectedID'>
                            <p><label for='fname'>First Name: </label>
                                <input type='text' name='fname'>
                            <p><label for='lname'>Last Name: </label>
                                <input type='text' name='lname'>
                            <p><label for='street'>Street: </label>
                                <input type='text' name='street'>
                            <p><label for='city'>City: </label>
                                <input type='text' name='city'>
                            <p><label for='state'>State: </label>
                                <input type='text' name='state'>
                            <p><label for='zipcode'>ZipCode: </label>
                                <input type='text' name='zipcode'>
                            <p><label for='phone'>Phone: </label>
                                <input type='tel' name='phone'>
                            <p><label for='usertype'>User Type:</label>
                                <select id='usertype' name='usertype'>
                                  <option value='Admin'>Administrator</option>
                                  <option value='Faculty'>Faculty</option>
                                  <option value='Researcher'>Researcher</option>
                                  <option value='Student'>Student</option>
                                </select> 
                            <p><input type='submit' value='Submit'><input type='reset' value='Reset'>
                        </form>");
                
                $con->close();
            ?>
        </div>
    </body>
</html>