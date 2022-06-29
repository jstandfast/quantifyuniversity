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
            
            .bottomportion {
                margin-top: 600px;
                background-color: whitesmoke;
                width: 100%;
            }
        </style>
    </head>


    <body>
    	<section class="header">	
            <div class="navbar"> 
    	        <a href="index.html"><img src="images/logo3.png"></a>
                    <a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a>
                     <a href="MasterScheule.php">Master Schedule</a>
        <a href="AcademicCalander2.php">Academic Calendar</a>
         <a href="ViewBuildingHome.php">View Buildings</a>
            
      	            <a href="log-in.php">Login</a>   
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


			
		?>
        
        <div class = "smalldiv">
            <form action='' method='post'>
                <p></p><label for='semester'>Semester: </label>
                <select id='semester' name='semester'>
                    <option value='none' selected disabled hidden>Select an Option</option>
                    <?php
                        
                        $query="SELECT SemesterID,SemesterName,SemesterYear FROM semester WHERE  SemesterID IN ('SEM011','SEM012')";
		                
            			if ($result=mysqli_query($con,$query)) {
                            for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                		    {
                		        
                		        $semesterid=$row[0];
                		        $semestername=$row[1];
                		        $semesteryear=$row[2];
                		        
                		        echo "<option value='$semesterid'>$semestername $semesteryear</option>";
                		        
                		    }
                        } else {
                            echo "Error: " . $sql . "<br>" . $con->error;
                        }
                    
                    ?>
                </select></p>
                <p><label for='filter'>Filter by Department: </label>
                <select id='dept' name='dept'>
                    <option value=''>View All Course Sections</option>
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
                </select></p>
                
                <p><input type='submit' name='submit' value='Submit'>
            </form>

    	<?php
    	    
    	    $submitted=$_POST['submit'];
    	    
    	    if($submitted) {
    	        
		        if(isset($_POST['semester'])) {
		            
		            $semesterid = $_POST['semester'];

		            $query = "SELECT * FROM course_section NATURAL JOIN course WHERE SemesterID='$semesterid'";
		            
		            if(!empty($_POST['dept'])) {
		                
		                $deptid = $_POST['dept'];
		                
		                $query .= " AND DeptID='$deptid'";
		                
		            }
		            
		            if ($result=mysqli_query($con,$query)) {
		                
		                $detailsquery = "SELECT SemesterName,SemesterYear FROM semester JOIN department WHERE SemesterID='$semesterid';";
		                $detailsresult = mysqli_query($con,$detailsquery) or die(mysql_error());
		                $detailsrow = mysqli_fetch_row($detailsresult);
		                $semestername = $detailsrow[0];
		                $semesteryear = $detailsrow[1];
		                
		                echo "<p>Viewing Semester: $semestername $semesteryear</p>
		                    <p><a href='AdminAddCourseSection.php?SemesterID=$semesterid'></a></p>";
		                    
                        for ($countera=0;$row=mysqli_fetch_row($result);++$countera)
            		    {
            		        
            		        $courseid=$row[0];
                            $subject=substr($courseid,0,2); //2 chars from the course ID
                            $course=substr($courseid,-4); //4 digits from the course ID
            		        
            		        $crn=$row[1]; //CRN, self-explanatory
            		        
            		        correctSeatsAvail($con,$crn);
            		        
            		        $section=$row[2]; //Section, self-explanatory
            		        
            		        $facultyid=$row[3];
            		        
            		        $facultyname; //Will be filled with faculty name as FirstName Lastname
            		        
            		        $retrievefaculty = "SELECT FirstName,LastName FROM user WHERE UserID='$facultyid'";
            		        
            		        if ($facultyinfo=mysqli_query($con,$retrievefaculty)) {
            		            
            		            $facultyrow=mysqli_fetch_row($facultyinfo);
            		            
            		            $facultyname=$facultyrow[0] . " " . $facultyrow[1];

                            } else {
                                echo "Error: " . $sql . "<br>" . $con->error;
                            }
                            
            		        $timeslotid=$row[4];
            		        
            		        $day; //Array that will contain all days of the course section
            		        
            		        $retrievedays = "SELECT DayName FROM course_section NATURAL JOIN timeslot NATURAL JOIN timeslot_day NATURAL JOIN day WHERE TimeSlotID='$timeslotid' AND CRN='$crn'";
            		        
            		        if ($dayinfo=mysqli_query($con,$retrievedays)) {
            		            for($counterb=0;$dayrow=mysqli_fetch_row($dayinfo);$counterb++) {
            		                $day[$counterb] = $dayrow[0];
            		            }
            		           
                            } else {
                                echo "Error: " . $sql . "<br>" . $con->error;
                            }
                		    
                		    
                            
                            $starttime; //Start time of the course section - filled below
                            $endtime; //End time of the course section - filled below
                            
                            $retrievetimes = "SELECT StartTime,EndTime FROM course_section NATURAL JOIN timeslot NATURAL JOIN timeslot_period NATURAL JOIN period WHERE CRN='$crn' AND TimeSlotID='$timeslotid'";
                            
                            if ($timeinfo=mysqli_query($con,$retrievetimes)) {
            		            for($counterc=0;$timerow=mysqli_fetch_row($timeinfo);$counterc++) {
            		                
            		                $currentperiodstart = $timerow[0];
            		                
            		                if($counterc==0) {
            		                    $starttime=$currentperiodstart;
            		                }
            		                
            		                if($starttime<=$currentperiodstart) {
            		                    $endtime = $timerow[1];
            		                }
            		            }
            		           
                            } else {
                                echo "Error: " . $sql . "<br>" . $con->error;
                            }
            		        
            		        $roomid=$row[5];
            		        
            		        $getroomnum = "SELECT RoomNum FROM room WHERE RoomID='$roomid'";
            		        
            		        $getroomresult = mysqli_query($con,$getroomnum) or die(mysql_error());
            		        
            		        $getroomrow = mysqli_fetch_row($getroomresult);
            		        
            		        $roomnum = $getroomrow[0];
            		        
            		        $buildingid=$row[6];
            		        
            		        $getbuildingname = "SELECT BuildingName FROM building WHERE BuildingID='$buildingid'";
            		        
            		        $getbuildingresult = mysqli_query($con,$getbuildingname) or die(mysql_error());
            		        
            		        $getbuildingrow = mysqli_fetch_row($getbuildingresult);
            		        
            		        $buildingname = $getbuildingrow[0];
            		        
            		        $seats=$row[8];
            		        $coursename=$row[9];
            		        $credits=$row[10];
            		        $level=$row[11];
            		        $coursetype=$row[12];
            		        $deptid=$row[13];
            		       
            		        echo "<table border='1px'>
                		                <thead>
                		                    <th style='width:50px'>CRN</th>
                		                    <th style='width:50px'>Subject</th>
                		                    <th style='width:50px'>CourseID</th>
                		                    <th style='width:180px'>Course Name</th>
                		                    <th style='width:70px'>Section</th>
                		                    <th style='width:150px'>Faculty Member</th>
                		                    <th style='width:100px'>Days</th>
                		                    <th>Start Time</th>
                		                    <th>End Time</th>
                		                    <th style='width:150px'>Building</th>
                		                    <th>Room</td>
                		                    <th>Seats Avail</th>
                		                    <th>Credit Hours</th>
                		                    <th>Level</th>
                		                    <th>Course Type</th>
                		                </thead>
                		                <tbody>
                    		                <tr>
                    		                   
                    		                    <td>$crn</td>
                    		                    <td>$subject</td>
                    		                    <td>$course</td>
                    		                    <td>$coursename</td>$course
                    		                    <td>$section</td>
                    		                    <td>$facultyname</td>
                    		                    <td>";
                    		                    
                                        		  for($counterd=0;$counterd<count($day);$counterd++) {
                                        		      echo "$day[$counterd]<br>";
                                        		  }
                    		                    
                    		                    
                    		              echo "</td>
                    		                    <td>$starttime</td>
                    		                    <td>$endtime</td>
                    		                    <td>$buildingname</td>
                    		                    <td>$roomnum</td>
                    		                    <td>$seats</td>
                    		                    <td>$credits</td>
                    		                    <td>$level</td>
                    		                    <td>$coursetype</td>
                    		                </tr>
                    		              </tbody>
                		              </table>
                		          <br>
                		      ";    
                		        
            		    }
                    } else {
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }
	
		            
		        } else {
		            echo "Please select a semester.";
		        }
                echo "</form>";
		    }

		    $con->close();
    	?>
		</div>
	</body>
</html>