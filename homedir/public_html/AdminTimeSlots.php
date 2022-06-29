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
        <script language='JavaScript'>
            function toggle(source) {
              checkboxes = document.getElementsByName('timeslotid[]');
              for(var i=0, n=checkboxes.length;i<n;i++) {
                    checkboxes[i].checked = source.checked;
              }
            }
        </script>
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
                 <a class="w3-quarter" style="text-decoration: none;" href="AdminHolds.php">
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
    		            <form action='' method='post'>
                        <table class='table table-striped table-dark'>
    		         	<thead>
    		         	    <th><input type='checkbox' onClick='toggle(this)' />&nbsp;Select All</th>
    		         	    <th>Time Slot ID</th>
    		            	<th>Time Slot Name</th>
    		         	</thead>");
    
    		    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
    		    {
    		        
    		        $timeslotidx=$row[0];
    		        
    		        print("<td><input type='checkbox' name='timeslotid[]' value='$timeslotidx'></td>");
    		        
    		       	foreach ($row as $element=>$value ) 
    		          print("<td>$value</td>");
    
    		      	print("</tr>");
    
    		    }
    		    
                print("
		            <input type='submit' name='submit' value='Delete Selected Time Slot(s)'>
		        </form><br>");
    		        
    		    if($_SERVER['REQUEST_METHOD'] == 'POST') {
    		        
    		        
    		        
    		        if(isset($_POST['submit'])) {
    		            
        		        $idarray=$_POST['timeslotid'];
        		            
        		        $timeslottestid;
        		        
        		        $totalchecked = count($idarray);
        		        
        		        echo "<p>$totalchecked Time Slots Selected.";
        		        
        		        for($j=0;$j<$totalchecked;$j++) {
        		            
        		            $timeslottestid=$idarray[$j];

                            $query1 = "SELECT TimeSlotID FROM timeslot";
        		        
        		            $result1 = mysqli_query($con,$query1) or die(mysql_error());
        		            
            		        for($counter=0;$row=mysqli_fetch_row($result1);++$counter) {
            		            
            		            $timeslottoremoveid=$row[0];
            		            
            		            if(!strcmp($timeslottoremoveid,$timeslottestid)) {
            		                
            		                $query2 = "SELECT TimeSlotID FROM course_section WHERE TimeSlotID = '$timeslottoremoveid';";

            		                $result2 = mysqli_query($con,$query2) or die(mysql_error());
            		                
            		                $count2 = mysqli_num_rows($result2);
            		               
            		                if($count2==0) {
                        			    $query3 = "DELETE FROM timeslot WHERE (TimeSlotID = '$timeslottoremoveid');";
                        			    $result3 = mysqli_query($con,$query3) or die(mysql_error());
                        			    echo "<p>$timeslottoremoveid removed. <a href=".">Refresh page</a> to see updated list.";
                        		    } else {
                        		        echo "<p>Could not remove $timeslottoremoveid. Time Slot is in use.<br>";
                        		    }
            		            }
            		        }
        		        }
    		        } else {
    		            echo "<br>";
    		        }

    		    } else {
    		        echo "<br>";
    		    }
    
    			$con->close();
    		?>
    		
		</div>
	</body>
</html>