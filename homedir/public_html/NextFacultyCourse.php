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
                <h1>Next Semester Courses</h1></div></div>
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
		    
		    
		?>
        
        <div class = "float-container">
            <div class = "float-child">
            <form action="" method="post">
                <p>CRN: <?php echo $crn; ?></p>
                <p>Course Name: <?php echo $coursename; ?></p>
                <p>Faculty Member Assigned: <?php echo $faculty; ?></p>

                </p>
                <p>Time Slot: <?php echo $timeslot; ?></p>
                  
                </p>
                <p>Room: <?php echo $buildingname . " Room " . $roomnum . " " . "(" . $roomuse . ")"; ?></p>
                </p>
                
                <?php 
                
                    $studentarray = getSectionStudents($con,$crn);
                    
                    if(count($studentarray)>0) {
                       print("<p>Students Enrolled</p>");
                       
                       for($i=0;$i<count($studentarray);$i++) {
                        
                            $studentdata = getStudentData($con,$studentarray[$i]);
                            
                            $studentfname=$studentdata['FirstName'];
                            $studentlname=$studentdata['LastName'];
                            echo "<input type='checkbox' name='studentarray[]' value='$studentarray[$i]'>
                                <label for='studentarray[]'>$studentarray[$i] $studentfname $studentlname</label>&nbsp;";
                                
                            $studentgrade=getStudentGrade($con,$studentarray[$i],$crn);
                            
                            if(!empty($studentgrade)) {
                                
                                echo "<label for='$studentarray[$i]'>Grade: $studentgrade &nbsp;</label>

                                    </select><br>";
                                
                            }
                            
                        }
                    }
                    
                
                ?>

		</div>
		<div class='float-child'>
		    <?php
		        
		        $submitted=$_POST['submit'];
    	    
    	        if($submitted) {
    	            
    	            $newfacultyid;
    	            $newtimeslotid;
    	            $newroomid;
    	            $studentstoremove;
    	            $studenttoadd;
    	            $newstudentgrades;
    	            $deletesection = $_POST['delete'];
    	            $semesterid = $crndata['SemesterID'];
    	            
    	            if(!strcmp($deletesection,"yes")) {
    	                
    	                echo "<p>Attempting to delete this course section...</p>";
    	                
    	                if(count($studentarray)>5) {
    	                    
    	                    echo "<p>Too many students are registered to the course section.</p>
    	                            <p>Cannot delete course section.</p>";
    	                            
    	                    
    	                } else {
    	                    
    	                    for($i=0;$i<count($studentarray);$i++) {
                        
                                $studentdata = getStudentData($con,$studentarray[$i]);
                                
                                $studentfname=$studentdata['FirstName'];
                                $studentlname=$studentdata['LastName'];
                                $studentemail=$studentdata['Email'];
                                
                                echo "<p><a href='mailto:$studentemail'>Email</a> $studentfname $studentlname to advise course section has been canceled.</p>";
                            
                            }
                            
                            echo "<p>Course section has been deleted.</p>";
    	                    
    	                }
    	                
    	            } else {
    	                
    	                if(!empty($_POST['faculty'])) {
    	                
    	                    $newfacultyid = $_POST['faculty'];
    	           
        	            } else {
        	                
        	                $newfacultyid = $facultyid;
        	                
        	            }
        	                
    	                if(!empty($_POST['timeslot'])) {
    	                    
    	                    $newtimeslotid = $_POST['timeslot'];
    	                    
    	                } else {
    	                    
    	                    $newtimeslotid = $timeslotid;
    	                    
    	                }
        	                
        	            if(!empty($_POST['room'])) {
        	                
        	                $newroomid = $_POST['room'];
        	                
        	            } else {
        	                
        	                $newroomid = $roomid;
        	                
        	            }
        	            
        	            if(!empty($_POST['studentarray'])) {
        	                
        	                $newstudentarray = $_POST['studentarray'];
        	                
        	                for($j=0;$j<count($newstudentarray);$j++) {
        	                    $studentstoremove[$j] = $newstudentarray[$j];
        	                }
        	                
        	                
        	            } else {
        	                
        	                $studentstoremove = NULL;
        	                
        	            }
        	            
        	            for($l=0;$l<count($studentarray);$l++) {
        	                
        	                $teststudentid=$studentarray[$l];
        	                
        	                if(!empty($_POST[$teststudentid])) {
        	                
            	                $newstudentgrades[$teststudentid]=$_POST[$teststudentid];
            	                
            	                $newgrade=$newstudentgrades[$teststudentid];
            	                
            	                if(updateStudentGrade($con,$teststudentid,$crn,$newgrade)) {
    	                                    
    	                            echo "<p>Student $teststudentid grade updated to $newgrade.</p>";
    	                                    
    	                        } 
            	                
            	            } 
        	                
        	            }
        	            
        	            
        	            if(!empty($_POST['addstudent'])) {
        	                
        	                $studenttoadd=$_POST['addstudent'];
        	                
        	                addStudentToSection($con,$studenttoadd,$crn);
        	                
        	            } 
    	                
    	                       
    	                if(strcmp($newfacultyid,$facultyid)) {
    	                   
    	                    $newfacultydata=getFacultyData($con,$newfacultyid);
    	                               
    	                    $newfacultyname = $newfacultydata['FirstName'] . " " . $newfacultydata['LastName'];
    	                   
    	                    if(facultyavailable($con,$newtimeslotid,$newfacultyid,$semesterid)) {
    	                       
    	                        if(!facultyMaxed($con,$newfacultyid,$semesterid)) {
    	                           
    	                            $query="UPDATE course_section SET FacultyID='$newfacultyid' WHERE CRN='$crn'";
    	                           
    	                            if ($result=mysqli_query($con,$query)) {
    	                               
    	                                echo "<p>Faculty member updated to $newfacultyname";
                                        
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $con->error;
                                    }
    	                        } else {
    	                           
    	                           echo "<p>$newfacultyname could not be added to the course section. They are involved in too many course sections this semester.</p>";
    	                           
    	                        }
    	                       
    	                    } else {
    	                       
    	                        echo "<p>$newfacultyname could not be added to the course section. They are not available for this time slot.</p>";
    	                       
    	                    }
    	                   
    	                }
    	               
    	                if(strcmp($newtimeslotid,$timeslotid)) {
    	                   
    	                    $newtimeslotdata=getTimeSlotData($con,$newtimeslotid);
    	                   
    	                    $query="UPDATE course_section SET TimeSlotID='$newtimeslotid' WHERE CRN='$crn'";
    	                           
                            if ($result=mysqli_query($con,$query)) {
                               
                               echo "<p>Time slot updated to $newtimeslotdata";
                                
                            } else {
                                echo "Error: " . $sql . "<br>" . $con->error;
                            }
    	                   
    	                }
    	               
    	                if(strcmp($newroomid,$roomid)) {
    	                   
    	                    $newroomdata=getRoomData($con,$roomid);
    	                   
    	                    $newroomnum=$newroomdata['RoomNum'];
    	                   
    	                    $newbuildingname=$newroomdata['BuildingName'];
    	                   
    	                    $newroomuse=$newroomdata['RoomUse'];
    	                   
    	                    if(roomAvailable($con,$newtimeslotid,$newroomid,$semesterid)) {
    	                       
    	                        $query="UPDATE course_section SET RoomID='$newroomid' WHERE CRN='$crn'";
    	                           
                                if ($result=mysqli_query($con,$query)) {
                                   
                                   echo "<p>Room has been updated to $newbuildingname $newroomnum ($newroomuse).</p>";
                                    
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }
    	                    } else {
    	                       
    	                       echo "<p>Room $newroomnum is not available.</p>";
    	                       
    	                    }
    	                   
    	                }
    	                
    	                if($studentstoremove != NULL) {
    	                    
    	                    for($k=0;$k<count($studentstoremove);$k++) {
                        
                                $removedstudentdata = getStudentData($con,$studentstoremove[$i]);
                                
                                $removedstudentid=$removedstudentdata['StudentID'];
                                $removedstudentfname=$removedstudentdata['FirstName'];
                                $removedstudentlname=$removedstudentdata['LastName'];
                                
                                $query="DELETE FROM enrollment WHERE StudentID='$removedstudentid' and CRN='$crn'";
                                
                                if ($result=mysqli_query($con,$query)) {
                                   
                                   echo "<p>$removedstudentid $removedstudentfname $removedstudentlname has been removed from the course section.</p>";
                                    
                                } else {
                                    
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                    
                                }
                                
                                $query="DELETE FROM student_history WHERE StudentID='$removedstudentid' and CRN='$crn'";
                                
                                if ($result=mysqli_query($con,$query)) {
                                   
                                   echo "<p>$removedstudentid $removedstudentfname $removedstudentlname has been removed from the course section.</p>";
                                    
                                } else {
                                    
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                    
                                }
                            
                            }
    	                    
    	                    
    	                }
    	                
    	                

    	            }
    	            

    	        }
		        
    
    		    $con->close();
        	?>