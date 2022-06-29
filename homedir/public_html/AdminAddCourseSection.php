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
                <a class="w3-quarter" style="text-decoration: none;" href="AdminMasterSchedule.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back To Master Schedule</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div> 
            
        <div class = "container text-center">
            <h2>Add a Course Section</h2>
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
		
		    $semesterid = $_GET['SemesterID'];

    		$semester = getsqlarray($con,"SELECT SemesterName,SemesterYear FROM semester WHERE SemesterID='$semesterid'");
    		
    		$semestername = $semester[0];
    		$semesteryear = $semester[1];
    		$deptid;
    		$deptname;
    		$courseid;
    		$coursename;
    		$tsidnumber;
            $tsid;
    		
		?>
        
        <div class = "smalldiv">
            <p>Semester: <?php echo $semestername . " " . $semesteryear; ?></p>

            <form name='add' action='' method='post'>
                <p><label for='semester'>Select Department: </label>
                <select id='dept' name='dept' onchange='selectDept(this.value)'>
                    <option value='' selected disabled hidden>Select an Option</option>
                    <?php
                        
                        $query="SELECT DeptID,DeptName FROM department";
		                
            			if ($result=mysqli_query($con,$query)) {
                            for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                		    {
                		        
                		        $deptid=$row[0];
                		        $deptname=$row[1];
                		        
                		        echo "<option value='$deptid'>$deptname</option>";
                		        
                		    }
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                    
                    ?>
                </select><input type='submit' name='deptsubmit' value='Submit Department'></p>
                <?php
                
                    if(isset($_POST['deptsubmit'])) {
                        
                        echo "<form action='' method='post'><p><label for='course'>Select Course: </label>
                        <select id='course' name='course'>
                        <option value='' selected disabled hidden>Select an Option</option>";

                        $deptid = $_POST['dept'];
                        
                        $query="SELECT CourseID,CourseName,CourseType FROM course WHERE DeptID='$deptid'";
	                
            			if ($result=mysqli_query($con,$query)) {
                            for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                		    {
                		        
                		        $courseid=$row[0];
                		        $coursename=$row[1];
                		        $coursetype=$row[2];
                		        
                		        echo "<option value='$courseid'>$coursename $coursetype</option>";
                		        
                		    }
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                        
                        echo "</select></p>";
                        
                        echo "<p><label for='faculty'>Select Faculty: </label>
                            <select id='faculty' name='faculty'>
                            <option value='' selected disabled hidden>Select an Option</option>";
                            
                        $query="SELECT FacultyID FROM faculty_dept WHERE DeptID='$deptid'";
                        
                        if ($result=mysqli_query($con,$query)) {
                            for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                		    {
                		        
                		        $facultyid=$row[0];
                		        $name=getsqlarray($con,"SELECT FirstName,LastName FROM user WHERE UserID='$facultyid'");
                		        
                		        $facultyfname=$name[0];
                		        $facultylname=$name[1];
                		        

                		        echo "<option value='$facultyid'>$facultyfname $facultylname</option>";
                		        
                		    }
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                        
                        echo "</select></p>";
                        
                        echo "<p><label for='timeslot'>Select Time Slot: </label>
                            <select id='timeslot' name='timeslot'>
                            <option value='' selected disabled hidden>Select an Option</option>";
                            
                        $query="SELECT TimeSlotID,TimeSlotName FROM timeslot";
                        
                        if ($result=mysqli_query($con,$query)) {
                            for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                		    {
                		        
                		        $tsid=$row[0];
                		        $timeslotname=$row[1];
                		        
                		        echo "<option value='$tsid'>$timeslotname</option>";
                		        
                		    }
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                        
                        echo "</select></p>";
                        
                        
        
            		    $query = "SELECT TimeSlotID FROM timeslot ORDER BY TimeSlotID DESC LIMIT 1";
            
                        $result = mysqli_query($con,$query) or die(mysql_error());
                        
                        $row = mysqli_fetch_row($result);
                        
                        $lastid=$row[0];
                        
                        $splitlastid=str_split($lastid,2);
                    
            	        $tsidnumber = intval($splitlastid[1]) + 1;
            	        
            	        $tsid = "TS" . $tsidnumber;
            	        
                        echo "<p>Or Create New Time Slot, ID: $tsid
                            <input type='hidden' name='tsid' value='$tsid'>
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
                                </select>";
                        
                        echo "<p><label for='room'>Select Room: </label>
                            <select id='room' name='room'>
                            <option value='' selected disabled hidden>Select an Option</option>";
                            
                        $query="SELECT RoomID,BuildingID,RoomNum,BuildingName,RoomUse FROM room NATURAL JOIN building NATURAL JOIN department WHERE DeptID='$deptid'";
                        
                        if ($result=mysqli_query($con,$query)) {
                            for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                		    {
                		        
                		        $roomid=$row[0];
                		        $buildingid=$row[1];
                		        $roomnum=$row[2];
                		        $buildingname=$row[3];
                		        $roomuse=$row[4];
                		        
                		        if(strcmp($roomuse,"OFFICE")) {
                		            echo "<option value='$roomid'>$buildingname $roomnum $roomuse</option>";
                		        }
                		        
                		    }
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                        
                        echo "</select></p>";
                        
                        
                        echo "<p><input type='submit' name='submit' value='Submit'><input type='reset' value='Reset'>
                            </form><p>$tsid";
                       
                        
                    }
                    
                        
                ?>
    
                
                

    	<?php
    	    
    	    $submitted=$_POST['submit'];
    	    
    	    if($submitted) {
    	        
		        if(!empty($_POST['course'])) {
		            
		            if(!empty($_POST['faculty'])) {
		                
	                    if(!empty($_POST['timeslot']) || isset($_POST['Monday']) || isset($_POST['Tuesday']) || isset($_POST['Wednesday']) || isset($_POST['Thursday']) || isset($_POST['Friday'])) {
	                        
	                        if(empty($_POST['timeslot'])) {
	                            
                                if(isset($_POST['startperiod']) && isset($_POST['endperiod'])) {
                                    
                                    if(isset($_POST['Monday']) || isset($_POST['Tuesday']) || isset($_POST['Wednesday']) || isset($_POST['Thursday']) || isset($_POST['Friday'])) {
                                        
                                        $tsid=$_POST['tsid'];
                                        
                                        $timeslotname;
                                
                                        $starttime=$_POST['startperiod'];
                                        $endtime=$_POST['endperiod'];
                                        
                                        if(strcmp($endtime,$starttime)>=0) {
                                        
                                            $sql = "INSERT INTO timeslot (TimeSlotID) VALUES ('$tsid')";
                                                
                                            if ($con->query($sql) === TRUE) {
                                                echo "<p>New time slot created.";
                                            } else {
                                                echo "Error: " . $sql . "<br>" . $con->error;
                                            }
                                                    
                                            if(isset($_POST['Monday'])) {
                                                
                                                $monday = $_POST['Monday'];
                                                
                                                $sql = "INSERT INTO timeslot_day (TimeSlotID,DayID) VALUES ('$tsid','$monday')";
                                                
                                                if ($con->query($sql) === TRUE) {
                                                    echo "<p>Monday added to timeslot.";
                                                    $timeslotname .= 'M';
                                                } else {
                                                    echo "Error: " . $sql . "<br>" . $con->error;
                                                }
                                                
                                            }
                                            
                                            if(isset($_POST['Tuesday'])) {
                                                
                                                $tuesday=$_POST['Tuesday'];
                                                
                                                $sql = "INSERT INTO timeslot_day (TimeSlotID, DayID) VALUES ('$tsid','$tuesday')";
                                                
                                                if ($con->query($sql) === TRUE) {
                                                    echo "<p>Tuesday added to timeslot.";
                                                    $timeslotname .= 'T';
                                                } else {
                                                    echo "Error: " . $sql . "<br>" . $con->error;
                                                }
                                                
                                            }
                                            
                                            if(isset($_POST['Wednesday'])) {
                                                
                                                $wednesday=$_POST['Wednesday'];
                                                
                                                $sql = "INSERT INTO timeslot_day (TimeSlotID, DayID) VALUES ('$tsid','$wednesday' )";
                                                
                                                if ($con->query($sql) === TRUE) {
                                                    echo "<p>Wednesday added to timeslot.";
                                                    $timeslotname .= 'W';
                                                } else {
                                                    echo "Error: " . $sql . "<br>" . $con->error;
                                                }
                                                
                                            }
                                            
                                            if(isset($_POST['Thursday'])) {
                                                
                                                $thursday=$_POST['Thursday'];
                                                
                                                $sql = "INSERT INTO timeslot_day (TimeSlotID, DayID) VALUES ('$tsid','$thursday' )";
                                                
                                                if ($con->query($sql) === TRUE) {
                                                    echo "<p>Thursday added to timeslot.";
                                                    $timeslotname .= 'R';
                                                } else {
                                                    echo "Error: " . $sql . "<br>" . $con->error;
                                                }
                                                
                                            }
                                            
                                            if(isset($_POST['Friday'])) {
                                                
                                                $friday=$_POST['Friday'];
                                                
                                                $sql = "INSERT INTO timeslot_day (TimeSlotID, DayID) VALUES ('$tsid','$friday')";
                                                
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
                                                    
                                                    $sql = "INSERT INTO timeslot_period (TimeSlotID, PeriodID) VALUES ('$tsid','$periodid')";
                                                
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
                                            
                                            $sql = "UPDATE timeslot SET TimeSlotName = '$timeslotname' WHERE TimeSlotID = '$tsid';";
                                                
                                            if ($con->query($sql) === TRUE) {
                                                echo "<p>Timeslot named $timeslotname.";
                                                
                                            } else {
                                                echo "Error: " . $sql . "<br>" . $con->error;
                                            }
                                        } else {
                                            echo "<p>Please select at least one day</p>";
                                        }
                                        
                                    } else {
                                        echo "<p>End time must be after start time.";
                                    }
                                    
                                    
                                } else {
                                    echo "<p>Select both start and end times.";
                                }
                                
                            } else {
                                $tsid=$_POST['timeslot'];
                            }
                        
	                    } else {
	                        echo "<p>Please select a time slot.</p>";
	                    }
		                
	                    if(!empty($_POST['room'])) {
	                        
	                        $courseid = $_POST['course'];
	                        $facultyid = $_POST['faculty'];
	                       
	                        $roomid = $_POST['room'];
	                        
	                        $courseinfo=getsqlarray($con,"SELECT Level,CourseType FROM course WHERE CourseID='$courseid'");
	                        
	                        $courselevel=$courseinfo[0];
	                        
	                        $coursetype=$courseinfo[1];
	                        
	                        $coursetype=strtoupper($coursetype);
	                        
	                        $roominfo=getsqlarray($con,"SELECT RoomUse,BuildingID FROM room WHERE RoomID='$roomid'");
	                        $roomuse=$roominfo[0];
	                        $buildingid=$roominfo[1];
	                        $seats;

	                        if(!strcmp($roomuse,$coursetype)) {
	                            
	                            if(!strcmp($roomuse,"LECTURE")) {
	                                $seatarray=getsqlarray($con,"SELECT Seats FROM lecture WHERE RoomID='$roomid'");
	                                $seats=$seatarray[0];
		                        } else if(!strcmp($roomuse,"LAB")) {
		                            $seatarray=getsqlarray($con,"SELECT Computers FROM lab WHERE RoomID='$roomid'");
		                            $seats=$seatarray[0];
		                        }
		                        

		                        //Acutally building the course now and checking everything first:
		                        
		                        $query="SELECT * FROM course_section WHERE SemesterID='$semesterid' AND CourseID='$courseid'";

                    			$result = mysqli_query($con,$query) or die(mysql_error());
                
                			    $count = mysqli_num_rows($result);
                			    
                			    $section = $count + 1; //OFFICIAL SECTION #
                			    
                			    $crn = generateCRN($courseid,$section,$semesterid); //OFFICIAL CRN
                			    
                			    if(roomAvailable($con,$tsid,$roomid,$semesterid)) {
                			        
                			        if(facultyAvailable($con,$tsid,$facultyid,$semesterid)) {
                			            
                			            if(!facultyMaxed($con,$facultyid,$semesterid)) {
                			                
                			                $insertsection = "INSERT INTO course_section (CRN,CourseID,Section,FacultyID,TimeSlotID,RoomID,BuildingID,SemesterID,Seats) VALUES ('$crn','$courseid','$section','$facultyid','$tsid','$roomid','$buildingid','$semesterid','$seats')";
                			            
                    			            $result = mysqli_query($con,$insertsection) or die(mysql_error());
                    			            
                    			            $insertfaculty = "INSERT INTO faculty_history (FacultyID,CRN,CourseID,SemesterID) VALUES ('$facultyid','$crn','$courseid','$semesterid')";
                    			            
                    			            $result = mysqli_query($con,$insertfaculty) or die(mysql_error());
                    			            
                    			            echo "<p>Course Section has been added!</p>";
                    			            
                			            } else {
                			                echo "<p>Faculty member is teaching too many courses this semester.";
                			            }
                			            
                			        } else {
                			            echo "<p>Faculty member is not available for that time slot.</p>";
                			        }
                			        
                			    } else {
                			        echo "<p>Room is not available for that time slot.</p>";
                			    }
		                        
	                        } else {
	                            echo "<p>Course type must match room use</p>";
	                        }
	                        
	                
    		            } else {
    		                echo "<p>Please select a room.</p>";
    		            }
	                
                    } else {
                        echo "<p>Please select a faculty member.</p>";
                    }
                    
                } else {
                    echo "<p>Please select a course.</p>";
                }
    	    }


		    $con->close();
    	?>
		</div>
	</body>
</html>