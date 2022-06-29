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
        
        .smalldiv {
            margin-left: 15px;
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
                <a class="w3-quarter" style="text-decoration: none;" href="AdminSemester.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>View Semesters</h3>
                    </div>
                  </div>
                </a>   

            </div>  
        </div> 
            
        <div class = "container text-center">
            <h2>Add a Semester</h2>
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
    
                if(!mysqli_select_db($con,$dbname))
                    die("<p>Could not open School Database.</p></body></html>");
                    
                $idnumber;
    		    $semesterid;
    		    $season;
    		    $year;
    		    $month;
    		    $month2;

    		    $query = "SELECT SemesterID FROM semester";
    
                $result = mysqli_query($con,$query) or die(mysql_error());
    
    	        $idnumber = mysqli_num_rows($result) + 1;
    	        
    	        if($idnumber>9 && $idnumber<100) {
    	            $semesterid = "SEM0" . $idnumber;
    	        } else if($idnumber>99) {
    	            $semesterid = "SEM" . $idnumber;
    	        } else {
    	            $semesterid = "SEM00" . $idnumber;
    	        }
    	        
    	        $query = "SELECT SemesterName,SemesterYear FROM semester ORDER BY SemesterID DESC LIMIT 1";
    	        
    	        $result = mysqli_query($con,$query) or die(mysql_error());
    	        
    	        $row = mysqli_fetch_row($result);
    	        
    	        if(!strcmp($row[0],"SPRING")) {
    	            $season = "FALL";
    	        } else {
    	            $season = "SPRING";
    	        }
    	        
    	        if(!strcmp($season,"SPRING")) {
    	            $year = $row[1] + 1;
    	            $month = "01";
    	            $month2 = "01";
    	        } else {
    	            $year = $row[1];
    	            $month = "08";
    	            $month2 = "09";
    	        }
    	        
                print("<div class='smalldiv'>
                        <form action='' method='post'>
                            <p>New Semester ID: $semesterid
                            <p>Season: $season
                            <p>Year: $year
                            
                            <p><label for='startdate'>Start Date:</label>
                            <input name='startdate' type='date' min='$year-$month-01' max='$year-$month2-30'>

                            <br><p><input type='submit' name='submit' value='Submit'><input type='reset' value='Reset'>
                        </form>
                        
                    </div>");
                    
                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        if(isset($_POST['startdate'])) {
                            
                            $startdate = $_POST['startdate'];
                            $date = date("Y-m-d", strtotime($startdate.'+ 0 days'));
                            $enddate = date("Y-m-d", strtotime($date.'+ 119 days'));
                            $gradeduedate = date("Y-m-d", strtotime($enddate.'+ 2 days'));
                            $registrationdate = date("Y-m-d", strtotime($date.'+ 5 days'));
                            $dropcoursedate = date("Y-m-d", strtotime($date.'+ 30 days'));
                            
                            echo "<p>Semester ID: $semesterid
                                    <p>Name: $season
                                    <p>Year: $year
                                    <p>Start Date: $date
                                    <p>End Date: $enddate
                                    <p>Grade Due Date: $gradeduedate
                                    <p>Registration Date: $registrationdate
                                    <p>Drop Course Date: $dropcoursedate
                                    ";
                                    
                            $query = "INSERT INTO semester (SemesterID,SemesterName,SemesterYear,SemStartDate,SemEndDate,GradeDueDate,RegistrationDate,DropCourseDate) VALUES ('$semesterid','$season','$year','$date','$enddate','$gradeduedate','$registrationdate','$dropcoursedate');";

                            if ($con->query($query) === TRUE) {
                                echo "<p>New semester created!";
                            } else {
                                echo "Could not add new semester." . $con->error;
                            }
                            
                        } else {
                            echo "Start date not selected.";
                        }
                        
                    } else {
                        echo "Make a selection.";
                    }
                
                $con->close();
            ?>
        </div>
    </body>
</html>