<?php
session_start();
include 'header_footer.php';
include 'functionsphp.php';

htmlheader_root();
?>

<html>
<head>
  <meta name="viewport" content="with=device-width,initial-scale=1.0">
  <title>Univversity Registrion Site</title>

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

    <a href="Facultyhome.php"><img src="images/StudLog.png"></a>
    <a> </a><a> </a><a> </a><a> </a>
     <a href="MasterScheule.php">Master Schdeule</a> 
            <a href="AcademicCalander.php">Academic Calender</a>     
            <a href="Courses.php">Course Catalog</a> 
            <a href="viewMajors.php">Majors</a> 
            <a href="HomePageMinor.php">Minors</a> 
            <a href="viewDeparments.php">Deparments</a> 
            <a href="ViewBuildingHome.php">Buildings</a> 
            <a href="logout.php">Log Out</a>
    </div>
  </div>
</div>
<!doctype html>
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
                </head>
                </head>

  <header class="w3-container w3-black w3-text-white">
  <h6>Signed in as <?php echo $_SESSION['Email']?> 
  </header>


    <!-- Cards start -->

   <!-- <div class="w3-row-padding w3-margin-top w3-animate-right w3-card-4 w3-light-grey" style = "color:black"> -->
    <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
    <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        
        <!-- Start Card -->

<a class="w3-quarter" style="text-decoration: none;" href="FacultyInfo.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>View User Information</h3>
            </div>
          </div>
        </a>
        <a class="w3-quarter" style="text-decoration: none;" href="FacultyInfo2.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>View Faculty Information</h3>
            </div>
          </div>
        </a>
        <a class="w3-quarter" style="text-decoration: none;" href="Classlist.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>View Class List</h3>
            </div>
          </div>
        </a>
        <a class="w3-quarter" style="text-decoration: none;" href="PastCourses.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Past Courses</h3>
            </div>
          </div>
        </a>


        <a class="w3-quarter" style="text-decoration: none;" href="Attendence.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Attendence </h3>
            </div>
          </div>
        </a>
       <a class="w3-quarter" style="text-decoration: none;" href="FacultyStudents.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>View Students</h3>
            </div>
          </div>
        </a>
         <a class="w3-quarter" style="text-decoration: none;" href="NextSemesterCourses.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Next Semester Courses</h3>
            </div>
          </div>
        </a>
         </a>
         <a class="w3-quarter" style="text-decoration: none;" href="FacultyAdvisor.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>View Advisors</h3>
            </div>
          </div>
        </a>
        </a>

</div></div></div>
  <div class = "container text-center">
                <h1>Past Courses</h1></div></div>
                	<?php

			$host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
			$port=3306;
			$socket="";
			$user="admin";
			$password="gupta2022";
			$dbname="quantify";

			$con = new mysqli($host, $user, $password, $dbname, $port, $socket)
				or die ('Could not connect to the database server' . mysqli_connect_error());
		
		    $crn = $_GET['CRN'];
		    $crndata = getCourseSectionData($con,$crn);
		    
		    $courseid = $crndata['CourseID'];
		    
		    $coursedata = getCourseData($con, $courseid);
		    $coursename = $coursedata['CourseName'];
		    
		    $facultydata = getFacultyData($con, $crndata['FacultyID']);
		    $faculty = $facultydata['FirstName'] . " " . $facultydata['LastName'] . ", " . $facultydata['FacultyRank'];
		    $facultyid = $facultydata['FacultyID'];
		    
		    $deptid = $coursedata['DeptID'];
		    $deptdata = getDepartmentData($con,$deptid);
		    
		    $deptname = $deptdata['DeptName'];
		    
		    $timeslot=getTimeSlotData($con,$crndata['TimeSlotID']);
		    $timeslotid = $crndata['TimeSlotID'];
		    
		    $roomdata = getRoomData($con,$crndata['RoomID']);
		    
		    $roomid = $crndata['RoomID'];
		    
		    $roomnum = $roomdata['RoomNum'];
		    $buildingname = $roomdata['BuildingName'];
		    $roomuse = $roomdata['RoomUse'];
		    
		    $semesterid=$crndata['SemesterID'];
		    
		    $semesterdata=getSemesterData($con,$semesterid);
		    
		    $semesterstart=$semesterdata['SemStartDate'];
		    
		    $todaysdate=date("Y-m-d");
		    
		    
		?>
        
        <div class = "float-container">
            <div class = "float-child">
            <form action="" method="post">
                <p>CRN: <?php echo $crn; ?></p>
                <p>Course Name: <?php echo $coursename; ?></p>
                <p>Faculty Member Assigned: <?php echo $faculty; ?></p>
                
             
                <p>Time Slot: <?php echo $timeslot; ?></p>
            
                <p>Room: <?php echo $buildingname . " Room " . $roomnum . " " . "(" . $roomuse . ")"; ?></p>
                
                
                <?php 
                
                    $studentarray = getSectionStudents($con,$crn);
                    
                    if(count($studentarray)>0) {
                       print("<p>Students Enrolled");
                       
                        if($todaysdate<$semesterstart) {
                            print("(check to remove from course section):</p>");
                        } else {
                            print("</p>");
                        }
                       
                       for($i=0;$i<count($studentarray);$i++) {
                        
                            $studentdata = getStudentData($con,$studentarray[$i]);
                            
                            $studentfname=$studentdata['FirstName'];
                            $studentlname=$studentdata['LastName'];
                            if($todaysdate<$semesterstart) {
                                echo "<input type='checkbox' name='studentarray[]' value='$studentarray[$i]'>";
                            }
                                
                            echo $studentarray[$i] . " " . $studentfname . " " . $studentlname;
                                
                            $studentgrade=getStudentGrade($con,$studentarray[$i],$crn);
                            
                            if(!empty($studentgrade)) {
                                
                                echo "<label for='$studentarray[$i]'>Grade: $studentgrade &nbsp;</label>
                                    <select id='$studentarray[$i]' name='$studentarray[$i]'>
                                      
                                    </select><br>";
                                
                            }
                            
                        }
                    }
                    
                
                
                ?>
  
            </form>

		</div>
		<div class='float-child'>
		    