<?php
session_start();
include 'header_footer.php';
include 'functionsphp.php';
$userid = $_GET["UserID"];
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
                <h1>Search Student</h1></div></div>
                 <?php 
        
            $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
            $port=3306;
            $socket="";
            $user="admin";
            $password="gupta2022";
            $dbname="quantify";
            
            $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
            or die ('Could not connect to the database server' . mysqli_connect_error());
            
            $studenttype;
            $studenttypetable;
            $fulltime;
            $year = 'NA';
            $departmentid;
            $mincredits;
            $maxcredits;
            $numcredits;
            $gpa = 'NA';
            $holds = 'NA -';
            $major = 'NA -';
            $minor = 'NA';

            $query0 = "SELECT * FROM grad_student WHERE StudentID='$userid';";
            
            $result0 = mysqli_query($con,$query0) or die(mysql_error());
            
            $count0 = mysqli_num_rows($result0);
        
            $query1 = "SELECT * FROM undergrad_student WHERE StudentID='$userid';";
            
            $result1 = mysqli_query($con,$query1) or die(mysql_error());

		    $count1 = mysqli_num_rows($result1);
		    
		    if($count0>=1) {
		        $studenttype='Graduate';
			    $studenttypetable='grad_student';
                $row=mysqli_fetch_row($result0) or die(mysql_error());
    			$departmentid=$row[1];
		    } else if($count1>=1) {
		        $studenttype='Undergraduate';
			    $studenttypetable='undergrad_student';
			    $row=mysqli_fetch_row($result1) or die(mysql_error());
			    correctUndergradYear($con,$userid);
			    $year=getUndergradYear($con,$userid);
		    } else {
		        $studenttype='Unknown';
		        $studenttypetable='student';
		    }
          
            $query = "SELECT FirstName, LastName FROM user WHERE UserID = '$userid';";
            
            $result = mysqli_query($con,$query) or die(mysql_error());
          
            $row=mysqli_fetch_row($result);
          
            $fname = $row[0];

            $lname = $row[1];
          
            $query = "SELECT StudentType FROM student WHERE StudentID = '$userid';";
         
            $result = mysqli_query($con,$query) or die(mysql_error());
          
            $row=mysqli_fetch_row($result);
            
            $fulltime = $row[0];
            
            if(!strcmp($fulltime,'FT')) {
                $fulltime = 'Full Time';
            } else if(!strcmp($fulltime,'PT')) {
                $fulltime = 'Part Time';
            } else if(!strcmp($fulltime,'NA')) {
                $fulltime = 'NA';
            } else {
                $fulltime = 'Edit ASAP';
            }
            
            $studenttablechild;

            if(!strcmp($fulltime,'Full Time') && !strcmp($studenttype,'Graduate')) {
                $studenttablechild='ft_grad';
                $query = "SELECT MinCredits, MaxCredits, CreditsTaken FROM $studenttablechild WHERE StudentID = '$userid';";
                $result = mysqli_query($con,$query) or die(mysql_error());
                $row=mysqli_fetch_row($result);
                $count = mysqli_num_rows($result);
                if(!($count==0)) {
                    $mincredits=$row[0];
                    $maxcredits=$row[1];
                    $numcredits=$row[2];
                }
            } else if(!strcmp($fulltime,'Part Time') && !strcmp($studenttype,'Graduate')) {
                $studenttablechild='pt_grad';
                $query = "SELECT MinCredits, MaxCredits, CreditsTaken FROM $studenttablechild WHERE StudentID = '$userid';";
                $result = mysqli_query($con,$query) or die(mysql_error());
                $row=mysqli_fetch_row($result);
                $count = mysqli_num_rows($result);
                if(!($count==0)) {
                    $mincredits=$row[0];
                    $maxcredits=$row[1];
                    $numcredits=$row[2];
                }
            } else if(!strcmp($fulltime,'Full Time') && !strcmp($studenttype,'Undergraduate')) {
                $studenttablechild='ft_undergrad';
                $query = "SELECT MinCredits, MaxCredits, CreditsTaken FROM $studenttablechild WHERE StudentID = '$userid';";
                $result = mysqli_query($con,$query) or die(mysql_error());
                $row=mysqli_fetch_row($result);
                $count = mysqli_num_rows($result);
                if(!($count==0)) {
                    $mincredits=$row[0];
                    $maxcredits=$row[1];
                    $numcredits=$row[2];
                }
            } else if(!strcmp($fulltime,'Part Time') && !strcmp($studenttype,'Undergraduate')) {
                $studenttablechild='pt_undergrad';
                $query = "SELECT MinCredits, MaxCredits, CreditsTaken FROM $studenttablechild WHERE StudentID = '$userid';";
                $result = mysqli_query($con,$query) or die(mysql_error());
                $row=mysqli_fetch_row($result);
                $count = mysqli_num_rows($result);
                if(!($count==0)) {
                    $mincredits=$row[0];
                    $maxcredits=$row[1];
                    $numcredits=$row[2];
                }
            } else {
                $mincredits='NA';
                $maxcredits='NA';
                $numcredits='NA';
            }
            
            correctActiveCredits($con,$userid,$studenttablechild);
            
            $numcredits=getActiveCredits($con,$userid);
            
            if(!strcmp($fulltime,"Full Time") && $numcredits<12) {
                updateFTorPT($con,$userid);
            } else if(!strcmp($fulltime,"Part Time") && $numcredits>11) {
                updateFTorPT($con,$userid);
            }
            
        ?>
        
        <table class="table table-striped table-dark">
            <thead>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Student ID: </td>
                    <td><?php print("$userid"); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Name: </td>
                    <td><?php print("$lname, $fname"); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Student Type: </td>
                    <td><?php print("$studenttype"); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Fulltime?: </td>
                    <td><?php print("$fulltime"); ?></td>
                </tr>
            

        <?php
        
            if(!strcmp($studenttype,'Graduate')) {
                $query = "SELECT DeptName FROM department WHERE DeptID = '$departmentid';";
                $result = mysqli_query($con,$query) or die(mysql_error());
                $row=mysqli_fetch_row($result);
                $department = $row[0];
                print("
                
                    <tr>
                        <td></td>
                        <td>Fulltime?: </td>
                        <td>$fulltime</td>
                    </tr>
                
                ");
            } else {
                print("
                
                    <tr>
                        <td></td>
                        <td>Student Year: </td>
                        <td>$year</td>
                    </tr>
                
                ");
            }
            
            
            
            print("
                <tr>
                    <td></td>
                    <td>Current Active Credits: </td> 
                    <td>$numcredits</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Maximum Credits Per Semester: </td>
                    <td>$maxcredits</td>
                </tr>
                <tr>
                    <td></td>
                    <td>Minimum Credits Per Semester: </td>
                    <td>$mincredits</td>
                </tr>
                <tr>
                    <td></td>
                    <td>GPA: </td>
                    <td>");
                    
            $gpa = calculateGPA($con,$userid);        
            echo $gpa;
            
            print("</td>
                </tr>
                <tr>
                    <td><a href='editstudent.php?UserID=$userid&Holds=1' class='clean'></a></td>
                    <td>Hold(s): </td>
                    <td>- 
            
            ");
            
            $query = "SELECT HoldType FROM student_hold NATURAL JOIN hold WHERE StudentID = '$userid';";
         
            $result = mysqli_query($con,$query) or die(mysql_error());
            
            $count = mysqli_num_rows($result);
            
            if($count>0) {
                
                for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
                    $holds=$row[0];
                    print("$holds - ");
                }
                
            } else print("$holds");
            
            print("
                    </td>
                </tr>
                <tr>
                    <td><a href='editstudent.php?UserID=$userid&Major=1' class='clean'></a></td>
                    <td>Major(s): </td>
                    <td>- 
                    
            ");
            
            $query = "SELECT MajorName FROM student_major NATURAL JOIN major WHERE StudentID = '$userid';";
         
            $result = mysqli_query($con,$query) or die(mysql_error());
            
            $count = mysqli_num_rows($result);
            
            if($count>0) {
                
                for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
                    $majors=$row[0];
                    print("$majors - ");
                }

            } else print("$major");
            
            print("
                    </td>
                </tr>
                <tr>
                    <td><a href='editstudent.php?UserID=$userid&Minor=1' class='clean'></a></td>
                    <td>Minor: </td>
                    <td>
                    
            ");
            
            $query = "SELECT MinorName FROM student_minor NATURAL JOIN minor WHERE StudentID = '$userid';";
         
            $result = mysqli_query($con,$query) or die(mysql_error());
            
            $count = mysqli_num_rows($result);
            
            if($count>0) {
                
                $row=mysqli_fetch_row($result);
                
                foreach ($row as $element=>$value) {
                    $minor = $value;
                    print("$minor</td></tr>");
                }
		          

            } else print("$minor</td></tr>");
            
            print("
                <tr>
                    <td><a href='editstudent.php?UserID=$userid&Advisor=1' class='clean'></a></td>
                    <td>Advisor: </td>
                    <td>
            ");
            
            $advisor = getStudentAdvisor($con,$userid);
            
            print("$advisor</td></tr>");
            
            print("
                <tr>
                    <td></td>
                    <td>Degree Audit:</td>
                    <td><a href='FacStudentDegreeAudit.php?StudentID=$userid' class='clean'>View Degree Audit</a></td></tr>
            ");
            
            
            print("
                <tr>
                    <td><a href='editstudent.php?UserID=$userid&Enrollment=1' class='clean'></a></td>
                    <td>Currently Enrolled: </td>
                    <td>
            ");
            
            getStudentEnrollment($con,$userid);
            
            print("</td></tr>");
            
            print("
                <tr>
                    <td><a href='editstudent.php?UserID=$userid&Transcript=1' class='clean'></a></td>
                    <td>Student Transcript: </td>
                    <td>
            ");
            
            getStudentHistory($con,$userid);
            
            print("</td></tr>");
    
            $con->close();
        ?>
        </tbody>
        </table>
        </div>
    </body>
</html>