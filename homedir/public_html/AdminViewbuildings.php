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
              checkboxes = document.getElementsByName('buildingid[]');
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
                <a href="logout.php">Log Out</a> 
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
                <a class="w3-quarter" style="text-decoration: none;" href="AdminAddBuilding.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Add a Building</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div>
        
        <div class = "container text-center">
            <h2>Buildings</h2>
        </div>
        
        <div style="height:900px; width: 75%; ;">
            <form action='' method='post'>
		    <input type='submit' name='submit' value='Delete Selected Building(s)'><br><br>
		            
            <table class="table table-striped table-dark">
                <thead>
                    <tr>
                        
                        <th style="width:fit-content"><input type='checkbox' onClick='toggle(this)' />&nbsp;Select All</th>
                        <th style="width:25%;">Building Name</th>
                        <th style="width:25%;">Building ID</th>
                        <th style="width:25%;">Building Use</th>
        
                    </tr>
                </thead>
                
        		<?php
        
                    $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                    $port=3306;
                    $socket="";
                    $user="admin";
                    $password="gupta2022";
                    $dbname="quantify";
                
                    $con = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
                    
                    if (mysqli_connect_errno()) {
                        die("Could not connect to the database server: " . mysqli_connect_error());
                    }
        
                    $sql = "SELECT BuildingID,BuildingName,BuildingUse FROM building";
                   
                    $result = $con->query($sql);
        
                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr><td><input type='checkbox' name='buildingid[]' value=".$row['BuildingID'].">"
                                ."<td><a href='BuildingRoom.php?id="
                                .$row["BuildingID"]."'>"
                                .$row["BuildingName"]."</a></td><td>"
                                .$row["BuildingID"]."</td><td>" 
                                .$row["BuildingUse"]."</td><td></tr>"; 
        
                        }
                        
                    }
                    
                    print("</table></form>");
                    
                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                    
                        if(isset($_POST['submit'])) {
                            
                            if(!empty($_POST['buildingid'])) {

                                $buildingarray=$_POST['buildingid'];
            		            
                		        $totalchecked=count($buildingarray);
                		       
                		        $buildingid;
                		        
                		        $currentsemester=getCurrentSemester($con);
                		        
                		        echo "<p>$totalchecked Building(s) Selected.";
                		        
                		        if($totalchecked>0) {
            		            
                		            for($i=0;$i<$totalchecked;$i++) {
                		                
                		                $buildingid=$buildingarray[$i];
                		                
                		                $query="SELECT BuildingID FROM course_section WHERE BuildingID='$buildingid' AND SemesterID='$currentsemester'";
                		                
                		                $result=mysqli_query($con,$query) or die(mysql_error());
                		                
                		                $count = mysqli_num_rows($result);
                		                
                		                if($count>0) {
                		                    
                		                    echo "<p>Could not remove building $buildingid. It is currently in use.</p>";
                		                    
                		                } else {
                		                    
                		                    $delete="DELETE FROM building WHERE BuildingID='$buildingid'";
                		                    
                		                    $result=mysqli_query($con,$delete) or die(mysql_error());
                		                    
                		                    echo "<p>Building $buildingid successfully removed.</p>";
                		                    
                		                }
            		                
            		                }
                                
                                }
        		            
            		        }
    
        		        }
                    }
                    
                    $con->close();
                ?>
            </form>
        </div>
    </body>
</html>