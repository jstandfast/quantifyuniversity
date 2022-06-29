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
                <a class="w3-quarter" style="text-decoration: none;" href="AdminTimeSlots.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>View Time Slots</h3>
                    </div>
                  </div>
                </a>   

            </div>  
        </div> 
            
        <div class = "container text-center">
            <h2>Add a Time Slot</h2>
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
    		    $timeslotid;

    		    $query = "SELECT TimeSlotID FROM timeslot ORDER BY TimeSlotID DESC LIMIT 1";
    
                $result = mysqli_query($con,$query) or die(mysql_error());
                
                $row = mysqli_fetch_row($result);
                
                $lastid=$row[0];
                
                $splitlastid=str_split($lastid,2);
            
    	        $idnumber = intval($splitlastid[1]) + 1;
    	        
    	        $timeslotid = "TS" . $idnumber;
    	        

                print("<div class='smalldiv'>
                        <form action='' method='post'>
                            <p>New Time Slot ID: $timeslotid
                            <p><label>Days: </label></lh>
                            <ul plain>
                                <div class='smalldiv'>
                                    <li><input type='checkbox' name='Monday' value='DAY1'><label for='Monday'> Monday</label></li>
                                    <li><input type='checkbox' name='Tuesday' value='DAY2'><label for='Tuesday'> Tuesday</label></li>
                                    <li><input type='checkbox' name='Wednesday' value='DAY3'><label for='Wednesday'> Wednesday</label></li>
                                    <li><input type='checkbox' name='Thursday' value='DAY4'><label for='Thursday'> Thursday</label></li>
                                    <li><input type='checkbox' name='Friday' value='DAY5'><label for='Friday'> Friday</label></li>
                                </div>
                            </ul>

                            <label for='startperiod'>Start Time: </label>
                                <select id='startperiod' name='startperiod'>
                                    <option value='none' selected disabled hidden>Select an Option</option>
                                    <option value='PER01'>7:10 AM</option>
                                    <option value='PER02'>8:10 AM</option>
                                    <option value='PER03'>9:10 AM</option>
                                    <option value='PER04'>10:10 AM</option>
                                    <option value='PER05'>11:10 AM</option>
                                    <option value='PER06'>12:10 PM</option>
                                    <option value='PER07'>1:10 PM</option>
                                    <option value='PER08'>2:10 PM</option>
                                    <option value='PER09'>3:10 PM</option>
                                    <option value='PER10'>4:10 PM</option>
                                    <option value='PER11'>5:10 PM</option>
                                    <option value='PER12'>6:10 PM</option>
                                    <option value='PER13'>7:10 PM</option>
                                    <option value='PER14'>8:10 PM</option>
                                    <option value='PER15'>9:10 PM</option>
                                </select>
                            
                            <label for='endperiod'>End Time: </label>
                                <select id='endperiod' name='endperiod'>
                                    <option value='none' selected disabled hidden>Select an Option</option>
                                    <option value='PER01'>8:00 AM</option>
                                    <option value='PER02'>9:00 AM</option>
                                    <option value='PER03'>10:00 AM</option>
                                    <option value='PER04'>11:00 AM</option>
                                    <option value='PER05'>12:00 AM</option>
                                    <option value='PER06'>1:00 PM</option>
                                    <option value='PER07'>2:00 PM</option>
                                    <option value='PER08'>3:00 PM</option>
                                    <option value='PER09'>4:00 PM</option>
                                    <option value='PER10'>5:00 PM</option>
                                    <option value='PER11'>6:00 PM</option>
                                    <option value='PER12'>7:00 PM</option>
                                    <option value='PER13'>8:00 PM</option>
                                    <option value='PER14'>9:00 PM</option>
                                    <option value='PER15'>10:00 PM</option>
                                </select>
                                
                            <br><p><input type='submit' name='submit' value='Submit'><input type='reset' value='Reset'>
                        </form>
                        
                    </div>");
                    
                    if($_SERVER['REQUEST_METHOD'] == 'POST') {
                        
                        if(isset($_POST['Monday']) || isset($_POST['Tuesday']) || isset($_POST['Wednesday']) || isset($_POST['Thursday']) || isset($_POST['Friday'])) {
                            
                            if(isset($_POST['startperiod']) && isset($_POST['endperiod'])) {
                                
                                $timeslotname;
                                
                                $starttime=$_POST['startperiod'];
                                $endtime=$_POST['endperiod'];
                                
                                if(strcmp($endtime,$starttime)>=0) {
                                
                                    $sql = "INSERT INTO timeslot (TimeSlotID) VALUES ('$timeslotid')";
                                        
                                    if ($con->query($sql) === TRUE) {
                                        echo "<p>New time slot created.";
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $con->error;
                                    }
                                    
                                    if(isset($_POST['Monday'])) {
                                        
                                        $monday = $_POST['Monday'];
                                        
                                        $sql = "INSERT INTO timeslot_day (TimeSlotID,DayID) VALUES ('$timeslotid','$monday')";
                                        
                                        if ($con->query($sql) === TRUE) {
                                            echo "<p>Monday added to timeslot.";
                                            $timeslotname .= 'M';
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $con->error;
                                        }
                                        
                                    }
                                    
                                    if(isset($_POST['Tuesday'])) {
                                        
                                        $tuesday=$_POST['Tuesday'];
                                        
                                        $sql = "INSERT INTO timeslot_day (TimeSlotID, DayID) VALUES ('$timeslotid','$tuesday')";
                                        
                                        if ($con->query($sql) === TRUE) {
                                            echo "<p>Tuesday added to timeslot.";
                                            $timeslotname .= 'T';
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $con->error;
                                        }
                                        
                                    }
                                    
                                    if(isset($_POST['Wednesday'])) {
                                        
                                        $wednesday=$_POST['Wednesday'];
                                        
                                        $sql = "INSERT INTO timeslot_day (TimeSlotID, DayID) VALUES ('$timeslotid','$wednesday' )";
                                        
                                        if ($con->query($sql) === TRUE) {
                                            echo "<p>Wednesday added to timeslot.";
                                            $timeslotname .= 'W';
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $con->error;
                                        }
                                        
                                    }
                                    
                                    if(isset($_POST['Thursday'])) {
                                        
                                        $thursday=$_POST['Thursday'];
                                        
                                        $sql = "INSERT INTO timeslot_day (TimeSlotID, DayID) VALUES ('$timeslotid','$thursday' )";
                                        
                                        if ($con->query($sql) === TRUE) {
                                            echo "<p>Thursday added to timeslot.";
                                            $timeslotname .= 'R';
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $con->error;
                                        }
                                        
                                    }
                                    
                                    if(isset($_POST['Friday'])) {
                                        
                                        $friday=$_POST['Friday'];
                                        
                                        $sql = "INSERT INTO timeslot_day (TimeSlotID, DayID) VALUES ('$timeslotid','$friday')";
                                        
                                        if ($con->query($sql) === TRUE) {
                                            echo "<p>Friday added to timeslot.";
                                            $timeslotname .= 'F';
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $con->error;
                                        }
                                        
                                    }
                                    
                                    for($i=1;$i<16;++$i) {
                                        
                                        $periodid = "PER";
                                        $timename;
                                        
                                        if($i<10) {
                                            $periodid .= "0" . $i;
                                        } else {
                                        	$periodid .= $i;
                                        }

                                        if(!strcmp($periodid,$starttime)) {
                                            switch ($i) {
                                                case 1:
                                                    $timename .= "7to";
                                                    break;
                                                case 2:
                                                    $timename .= "8to";
                                                    break;
                                                case 3:
                                                    $timename .= "9to";
                                                    break;
                                                case 4:
                                                    $timename .= "10to";
                                                    break;
                                                case 5:
                                                    $timename .= "11to";
                                                    break;
                                                case 6:
                                                    $timename .= "12to";
                                                    break;
                                                case 7:
                                                    $timename .= "1to";
                                                    break;
                                                case 8:
                                                    $timename .= "2to";
                                                    break;
                                                case 9:
                                                    $timename .= "3to";
                                                    break;
                                                case 10:
                                                    $timename .= "4to";
                                                    break;
                                                case 11:
                                                    $timename .= "5to";
                                                    break;
                                                case 12:
                                                    $timename .= "6to";
                                                    break;
                                                case 13:
                                                    $timename .= "7to";
                                                    break;
                                                case 14:
                                                    $timename .= "8to";
                                                    break;
                                                case 15:
                                                    $timename .= "9to";
                                                    break;
                                                
                                            }
                                        }
                                        
                                        if(!strcmp($periodid,$endtime)) {
                                            switch ($i) {
                                                case 1:
                                                    $timename .= "8AM";
                                                    break;
                                                case 2:
                                                    $timename .= "9AM";
                                                    break;
                                                case 3:
                                                    $timename .= "10AM";
                                                    break;
                                                case 4:
                                                    $timename .= "11AM";
                                                    break;
                                                case 5:
                                                    $timename .= "12PM";
                                                    break;
                                                case 6:
                                                    $timename .= "1PM";
                                                    break;
                                                case 7:
                                                    $timename .= "2PM";
                                                    break;
                                                case 8:
                                                    $timename .= "3PM";
                                                    break;
                                                case 9:
                                                    $timename .= "4PM";
                                                    break;
                                                case 10:
                                                    $timename .= "5PM";
                                                    break;
                                                case 11:
                                                    $timename .= "6PM";
                                                    break;
                                                case 12:
                                                    $timename .= "7PM";
                                                    break;
                                                case 13:
                                                    $timename .= "8PM";
                                                    break;
                                                case 14:
                                                    $timename .= "9PM";
                                                    break;
                                                case 15:
                                                    $timename .= "10PM";
                                                    break;
                                                
                                            }
                                        }
                                        
                                        if(strcmp($periodid,$starttime)>=0) {
                                            
                                            $sql = "INSERT INTO timeslot_period (TimeSlotID, PeriodID) VALUES ('$timeslotid','$periodid')";
                                        
                                            if ($con->query($sql) === TRUE) {
                                                echo "<p>Period $periodid added to timeslot.";
                                            } else {
                                                echo "Error: " . $sql . "<br>" . $con->error;
                                            }
                                        }
                                        
                                        if(!strcmp($periodid,$endtime)) {
                                            
                                            $timeslotname .= $timename;
                                            break;
                                        }
                                        
                                    }
                                    
                                    $sql = "UPDATE timeslot SET TimeSlotName = '$timeslotname' WHERE TimeSlotID = '$timeslotid';";
                                        
                                    if ($con->query($sql) === TRUE) {
                                        echo "<p>Timeslot named $timeslotname.";
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $con->error;
                                    }
                                    
                                } else {
                                    echo "<p>End time must be after start time.";
                                }
                                
                                
                            } else {
                                echo "<p>Select both start and end times.";
                            }
                            
                        } else {
                            echo "<p>No days selected.";
                        }
                        
                    } else {
                        echo "<p>Make a selection.";
                    }
                
                $con->close();
            ?>
        </div>
    </body>
</html>