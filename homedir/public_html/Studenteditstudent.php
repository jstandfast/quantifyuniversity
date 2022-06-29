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
        <a class="w3-quarter" style="text-decoration: none;" href="registration.php">
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
                <h1>Student Registration</h1></div></div>
                <?php 
            
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                $studentid = $_SESSION['UserID']; 
                $studentdata = getStudentData($con,$studentid);
                

                
                if(isset($_GET["Major"])) {
                    
                    print("<p>Change student major:
                        
                        <form action='' method='post'>
                            <p><label for='major'>Major: </label>
                                <select id='major' name='major'>");
                                
                    $majors=getMajors($con);

                    for($i=0;$i<count($majors);$i++) {
                        
                        $majorid=$majors[$i];
                        
                        $majorname=getMajorName($con,$majorid);
                        
                        print("<option value='$majorid'>$majorname</option>");
                        
                    }
     
                    print("</select>
                            <p><label for='delete'>Delete current major?:</label></p>
                             <p><input type='radio' id='yes' name='delete' value='yes' selected>
                            <label for='yes'>Yes</label><br>
                            <input type='radio' id='no' name='delete' value='no'>
                            <label for='no'>No</label><br>
                            <p><input type='submit' name='submit' value='Submit'>
                        </form>    

                    ");
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(isset($_POST['major'])) {
        	                
        	                $delete=$_POST['delete'];
        	                
        	                if(!strcmp($delete,"yes")) {
        	                    deleteStudentMajor($con,$studentid);
        	                    
        	                    echo "<p>Current student major deleted.</p>";
        	                }
        	                
        	                $major=$_POST['major'];
        	            
                            addStudentMajor($con,$studentid,$major);
        	                
        	            }
                    }
                }
                
                if(isset($_GET["Minor"])) {
                    
                    print("<p>Change student minor:
                        
                        <form action='' method='post'>
                            <p><label for='minor'>Minor: </label>
                                <select id='minor' name='minor'>
                                    <option value='' selected hidden>Select an Option</option>");
                                
                    $minors=getMinors($con);
                    
                    echo $minors[0];

                    for($i=0;$i<count($minors);$i++) {
                        
                        $minorid=$minors[$i];
                        
                        $minorname=getMinorName($con,$minorid);
                        
                        print("<option value='$minorid'>$minorname</option>");
                        
                    }
     
                     print("</select>
                            <p><label for='delete'>Delete current minor?:</label></p>
                             <p><input type='radio' id='yes' name='delete' value='yes' selected>
                            <label for='yes'>Yes</label><br>
                            <input type='radio' id='no' name='delete' value='no'>
                            <label for='no'>No</label><br>
                            <p><input type='submit' name='submit' value='Submit'>
                        </form>    

                    ");
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(isset($_POST['minor'])) {
        	                
        	                $minorid=$_POST['minor'];
        	                
        	                if(!empty($minorid)) {
        	                    updateStudentMinor($con,$studentid,$minorid);
        	                }
        	                
        	                $delete=$_POST['delete'];
        	                
        	                if(!strcmp($delete,"yes")) {
        	                    deleteStudentMinor($con,$studentid);
        	                    echo "<p>Current student minor deleted.</p>";
        	                }  
        	                $minors=$_POST['minor'];
        	                
        	            }
                    }
                }
                
                
        	       
                    
                        
                
                    
                ?>