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
            margin-left: 30px;
            width: 500px;
        }
        
        .bigdiv {
            margin-right: 30px;
            float: right;
            width: auto;
        }
        
        .float-container {
            border: 3px solid #fff;
            padding: 20px;
        }
        
        .float-child {
            width: 50%;
            float: left;
            padding: 20px;
            
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
            <h2>Edit Course Section</h2>
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
                
                <?php
                    
                    if($todaysdate<$semesterstart) {
                        
                    
                        print("<p><label for='faculty'>Change Faculty: </label>
                            <select id='faculty' name='faculty'>
                                <option value='' selected disabled hidden>Select an Option</option>");
                        
                        
                        $query="SELECT FacultyID FROM faculty_dept WHERE DeptID='$deptid'";
                        
                        if ($result=mysqli_query($con,$query)) {
                            for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                		    {
                		        
                		        $facultyid=$row[0];
                		        
                		        if(strcmp($facultyid,$facultydata['FacultyID'])) {
                		            $facultydata2=getFacultyData($con,$facultyid);
                		        
                    		        $facultyfname=$facultydata2['FirstName'];
                    		        $facultylname=$facultydata2['LastName'];
                    		        
    
                    		        echo "<option value='$facultyid'>$facultyfname $facultylname</option>";
                		        }
                		        
                		    }
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                
                        
                        print("</select>
                                </p>");
                    }
                ?>
                <p>Time Slot: <?php echo $timeslot; ?></p>
                <?php
                
                    if($todaysdate<$semesterstart) {
                        
                        print("<p><label for='timeslot'>Change Time Slot: </label>
                            <select id='timeslot' name='timeslot'>
                                <option value='' selected disabled hidden>Select an Option</option>");
                            
                            
                        $query="SELECT TimeSlotID,TimeSlotName FROM timeslot";
                
                        if ($result=mysqli_query($con,$query)) {
                            for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                		    {
                		        
                		        $timeslotidtest=$row[0];
                		        $timeslotname=$row[1];
                		        
                		        if(strcmp($crndata['TimeSlotID'],$timeslotidtest)) {
                		            echo "<option value='$timeslotidtest'>$timeslotname</option>";
                		        }
                		        
                		    }
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                    
                            
                        print("</select>
                            </p>");
                    }
                ?>
                <p>Room: <?php echo $buildingname . " Room " . $roomnum . " " . "(" . $roomuse . ")"; ?></p>
                
                <?php
                    if($todaysdate<$semesterstart) {
                        
                        print("<p><label for='room'>Change Room: </label>
                            <select id='room' name='room'>
                                <option value='' selected disabled hidden>Select an Option</option>");
                            
                            
                                $query="SELECT RoomID FROM room NATURAL JOIN building NATURAL JOIN department WHERE DeptID='$deptid'";
                        
                                if ($result=mysqli_query($con,$query)) {
                                    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                        		    {
                        		        
                        		        $roomidtest = $row[0];
                        		        
                        		        $roomdata2=getRoomData($con,$roomidtest);
                        		        
                        		        $roomname = $roomdata2['BuildingName'] . " Room " . $roomdata2['RoomNum'] . " " . "(" . $roomdata2['RoomUse'] . ")"; 
                        		        
                        		        if(strcmp($crndata['RoomID'],$roomidtest)  && !strcmp($roomdata2['RoomUse'],$roomuse)) {
                        		            echo "<option value='$roomidtest'>$roomname</option>";
                        		        }
                        		        
                        		    }
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }
                    
                            
                        print("</select>
                                </p>");
                    }
                ?>
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
                                
                                echo "<label for='$studentarray[$i]'>Grade: $studentgrade &nbsp;</label>Change?: 
                                    <select id='$studentarray[$i]' name='$studentarray[$i]'>
                                        <option value='' selected disabled hidden>Don't Change</option>
                                        <option value='A+'>A+</option>
                                        <option value='A'>A</option>
                                        <option value='A-'>A-</option>
                                        <option value='B+'>B+</option>
                                        <option value='B'>B</option>
                                        <option value='B-'>B-</option>
                                        <option value='C+'>C+</option>
                                        <option value='C'>C</option>
                                        <option value='C-'>C-</option>
                                        <option value='D+'>D+</option>
                                        <option value='D'>D</option>
                                        <option value='D-'>D-</option>
                                        <option value='F'>F</option>
                                        <option value='W'>W</option>
                                        <option value='IC'>IC</option>
                                    </select><br>";
                                
                            }
                            
                        }
                    }
                    
                
                    if($todaysdate<$semesterstart) {
                        
                        print("<p>
                            <label for='addstudent'>Add Student (input Student ID): &nbsp;</label><input type='text' id='addstudent' name='addstudent'>
                        </p>
                        <p>Delete Course Section? 
                            <input type='radio' id='yes' name='delete' value='yes'><lable for='yes'>Yes</lable>
                            <input type='radio' id='no' name='delete' value='no' checked><lable for='no'>No</lable>
                        </p>");
                        
                    }
                ?>
                <p><input type='submit' name='submit' value='Submit'><input type='reset' name='reset' value='Reset'></p>
            </form>

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
                            
                            $deletecoursesection="DELETE FROM course_section WHERE CRN='$crn'";
                            
                            if ($deletecoursesectionresult=mysqli_query($con,$deletecoursesection)) {
                                       
                               echo "<p>Course section has been deleted.</p>";
                                
                            } else {
                                echo "Error: " . $sql . "<br>" . $con->error;
                            }
                            
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
        	                
        	                addStudentToSectionAsAdmin($con,$studenttoadd,$crn);
        	                
        	            } 
        	            
        	            if(strcmp($newtimeslotid,$timeslotid)) {
    	                   
    	                    $newtimeslotdata=getTimeSlotData($con,$newtimeslotid);
    	                    
    	                    if(roomAvailable($con,$newtimeslotid,$newroomid,$semesterid)) {
    	                        
    	                        if(facultyavailable($con,$newtimeslotid,$newfacultyid,$semesterid)) {
    	                            
    	                            $query="UPDATE course_section SET TimeSlotID='$newtimeslotid' WHERE CRN='$crn'";
    	                            
                                    if ($result=mysqli_query($con,$query)) {
                                       
                                       echo "<p>Time slot updated to $newtimeslotdata";
                                        
                                    } else {
                                        echo "Error: " . $sql . "<br>" . $con->error;
                                    }
                                
    	                        } else {
    	                            echo "<p>$newfacultyname is not available for this time slot.</p>";
    	                        }
    	                        
    	                    } else {
    	                        echo "<p>Room $newroomnum is not available in that time slot.</p>";
    	                    }
    	                   
    	                }
    	               
    	                if(strcmp($newroomid,$roomid)) {
    	                   
    	                    $newroomdata=getRoomData($con,$newroomid);
    	                   
    	                    $newroomnum=$newroomdata['RoomNum'];
    	                   
    	                    $newbuildingname=$newroomdata['BuildingName'];
    	                    
    	                    $newbuildingid=$newroomdata['BuildingID'];
    	                   
    	                    $newroomuse=$newroomdata['RoomUse'];
    	                   
    	                    if(roomAvailable($con,$newtimeslotid,$newroomid,$semesterid)) {
    	                       
    	                        $query="UPDATE course_section SET RoomID='$newroomid' WHERE CRN='$crn'";
    	                           
                                if ($result=mysqli_query($con,$query)) {
                                   
                                   echo "<p>Room has been updated to $newroomnum ($newroomuse).</p>";
                                    
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }
                                
                                $query="UPDATE course_section SET BuildingID='$newbuildingid' WHERE CRN='$crn'";
    	                           
                                if ($result=mysqli_query($con,$query)) {
                                   
                                   echo "<p>Building has been updated to $newbuildingname.</p>";
                                    
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }
                                
    	                    } else {
    	                       
    	                       echo "<p>Room $newroomnum is not available in that time slot.</p>";
    	                       
    	                    }
    	                   
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
    	               
    	                if($studentstoremove != NULL) {
    	                    
    	                    for($k=0;$k<count($studentstoremove);$k++) {
                        
                                $removedstudentdata = getStudentData($con,$studentstoremove[$k]);
                                
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
        	
        </div>
	</body>
</html>