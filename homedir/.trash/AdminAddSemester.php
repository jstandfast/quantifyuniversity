<?php
session_start();
include 'header_footer.php';
include 'functionsphp.php';

htmlheader_root();
?>

<html>
    <head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0">
        <title>Quantify University</title>
        <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no'>
        
        <link rel='stylesheet' href='https://www.w3schools.com/lib/w3.css'>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://www.w3schools.com/lib/w3-colors-2017.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">

        <script type='text/javascript' src='js/functions.js'> </script>
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
        
        .floatright {
            float: right;
        }
    </style>


    <body>
      <section class="header">  
        <div class="navbar">
            
            <a href="index.html"><img src="images/StudLog.png"></a>
            <div class="floatright">
                <a href="AdminHomePage.php">Administrator Home</a> 
                <a href="Logout.html">Log Out</a> 
            </div>
        </div>
    
          <header class="w3-container w3-black w3-text-white">
            <h6>Signed in as <?php echo $_SESSION['Email']?> 
          </header>
    
      </section>   
    
    
      <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
            <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
            
                <a class="w3-quarter" style="text-decoration: none;" href="AdminMasterSchedule.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Master Schedule</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminViewDepartments.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Departments</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminMajors.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Majors</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminMinor.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Minors</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminCourseOption.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Courses</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminViewbuildings.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Buildings & Rooms</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="ViewUsers.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Users</h3>
                    </div>
                  </div>
                </a>
                 <a class="w3-quarter" style="text-decoration: none;" href="AdminStudents.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Holds</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminSemester.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Semesters</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminTimeSlots.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Time Slots</h3>
                    </div>
                  </div>
                </a>
            </div>
        </div>
        
        <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
            <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        

                <a class="w3-quarter" style="text-decoration: none;" href="AdminHomePage.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back To Administrator Homepage</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminAddTimeSlot.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Add a Time Slot</h3>
                    </div>
                  </div>
                </a>   

            </div>  
        </div> 
            
        <div class = "container text-center">
            <h2>Time Slots</h2>
        </div>

    		<?php
    
    			$host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
    			$port=3306;
    			$socket="";
    			$user="admin";
    			$password="gupta2022";
    			$dbname="quantify";
    
    			$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
    				or die ('Could not connect to the database server' . mysqli_connect_error());
    
    			$query="SELECT * FROM timeslot";
    		    
    			if(!mysqli_select_db($con,$dbname))
    				die("<p>Could not open School Database.</p></body></html>");
    
    			if(!($result=mysqli_query($con,$query))) {
    			        print("<p>Could not execute query!</p>");
    			        die(mysqli_error()."</body></html>");
    			}
    		     
    		    print("<div style='height:900px; width: auto; ;'>
                        <table class='table table-striped table-dark'>
    		         	<thead>
    		         	    <th>Time Slot ID</th>
    		            	<th>Time Slot Name</th>
    		         	</thead>");
    
    		    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
    		    {
    		        
    		       	foreach ($row as $element=>$value ) 
    		          print("<td>$value</td>");
    
    		      	print("</tr>");
    
    		    }
    
    			$con->close();
    		?>
		</div>
	</body>
</html>