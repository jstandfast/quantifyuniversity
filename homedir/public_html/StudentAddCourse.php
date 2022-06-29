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

    <a href="StudentHome.php"><img src="images/StudLog.png"></a>
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
</div></div></div>
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

  <header class="w3-container w3-black w3-text-white">
  <h6>Signed in as <?php echo $_SESSION['Email']?> 
  </header>


    <!-- Cards start -->

   <!-- <div class="w3-row-padding w3-margin-top w3-animate-right w3-card-4 w3-light-grey" style = "color:black"> -->
    <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
    <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        
        <!-- Start Card -->

<a class="w3-quarter" style="text-decoration: none;" href="StudentHomeInfo.php">
        <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>View Student Information</h3>
            </div>
          </div>
        </a>
          <a class="w3-quarter" style="text-decoration: none;" href="registration.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Registration</h3>
            </div>
          </div>
        </a>
        <a class="w3-quarter" style="text-decoration: none;" href="CurrentSchedule.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Current Schedule </h3>
            </div>
          </div>
        </a>
        <a class="w3-quarter" style="text-decoration: none;" href="NextSemester.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Next Semester Schdeule</h3>
            </div>
          </div>
        </a>
        <a class="w3-quarter" style="text-decoration: none;" href="DegreeAudit.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Degree Audit</h3>
            </div>
          </div>
        </a>
        </a>

     
        <a class="w3-quarter" style="text-decoration: none;" href="Transcript.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Transcript</h3>
            </div>
          </div>
        </a>

</div></div></div>

   <div class = "container text-center">
                <h1>Register For Course</h1></div></div>
            <?php
    
    $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
    $port=3306;
    $socket="";
    $user="admin";
    $password="gupta2022";
    $dbname="quantify";

    $con = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
   
    $studenttoadd = $_SESSION['UserID']; 
    $crndata=getCourseSectionData($con,$crn);
    
    $semesterid=$crndata['SemesterID'];
    
    $semesterdata=getSemesterData2($con,$semesterid);
    
    $registrationdate=$semesterdata['RegistrationDate'];
    
    $seatsavail=$crndata['Seats'];
    
    $todaysdate=date("Y-m-d");
    
    if($registrationdate<$todaysdate) {
        
        $query="SELECT * FROM student WHERE StudentID='$studenttoadd'";
        
        $result=mysqli_query($con,$query) or die(mysql_error());
    
        $count = mysqli_num_rows($result);
        
        if($count>0) {
            
            $courseid=$crndata['CourseID'];
            
            $coursedata=getCourseData($con,$courseid);

            $courselevel=$coursedata['Level'];
            
            $studentdata=getStudentData($con,$studenttoadd);
            
            $studentlevel=$studentdata['DegreeType'];
            
            if(!strcmp($studentlevel,"Undergraduate")) {
                $studentlevel="UG";
            } else if(!strcmp($studentlevel,"Graduate")) {
                $studentlevel="G";
            }
            
            if(!strcmp($studentlevel,$courselevel)) {
                
                $timeslotid=$crndata['TimeSlot'];
                
                if(studentAvailable($con,$timeslotid,$studenttoadd,$semesterid)) {
                    
                    if(!studentMaxed($con,$studenttoadd,$semesterid)) {
                        
                        if(checkStudentPrereqs($con,$studenttoadd,$crn)) {
                            
                            if(!checkStudentHolds($con,$studenttoadd)) {
                                
                                if($seatsavail>0) {
                                    $query="INSERT INTO enrollment (StudentID,CRN,CourseID,SemesterID) VALUES ('$studenttoadd','$crn','$courseid','$semesterid')";
            
                                    $result=mysqli_query($con,$query) or die(mysql_error());
                            
                                    echo "<p>Student $studenttoadd added to course section!</p>";
                                } else {
                                    echo "<p>No more seats available.</p>";
                                }
                                
                            } else {
                                echo "<p>Student $studenttoadd has a hold that will prevent registration to the course section.</p>";
                            }
                            
                        } else {
                            echo "<p>Student $studenttoadd does not have the necessary prerequisites to add to the course section.</p>";
                        }
                        
                    } else {
                        echo "<p>Student $studenttoadd is taking too many classes to add to the course section.</p>";
                    }
                    
                } else {
                    
                    echo "<p>Student $studenttoadd is not available for this course section.</p>";
                }
                
                
                
            } else {
                echo "<p>Student $studenttoadd cannot be registered to a course in different degree type.</p>";
            }
            
        } else {
            echo "<p>Student $studenttoadd not found.</p>";
        }
        
        
    } else {
        
        echo "<p>Registration date has passed. Cannot add $studenttoadd to course section.</p>";
    }
    
    
    
        ?>