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
                <a href="Logout.html">Log Out</a> 
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
        

                <a class="w3-quarter" style="text-decoration: none;" href="ViewUsers.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back to Users</h3>
                    </div>
                  </div>
                </a>
                <a class = 'clean' href = 'studentinfo.php?UserID=$row[0]'>
                <?php print("<a class='w3-quarter' style='text-decoration: none;'' href='studentinfo.php?UserID=$userid'>"); ?>
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back to Student Information</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="SearchStudent.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>New Student Search</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div> 
        
    
        <div class="container text-center">
            <h2>Edit Student Information</h2>
        </div>

        <div class='content'>
            <div class='smalldiv'>
            
            <?php 
            
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $studentdata = getStudentData($con,$userid);
                
                $studentname=$studentdata['FirstName'] . " " . $studentdata['LastName'];
                
                print("<p>Student $userid $studentname</p>");
                
                if(isset($_GET["StudentType"])) {
                    $studenttype;
                    
                    print("<p>Change Student Type:
                        
                        <form action='' method='post'>
                            <p><label for='studenttype'>Student Type: </label>
                                <select id='studenttype' name='studenttype'>
                                  <option value='Undergraduate'>Undergraduate</option>
                                  <option value='Graduate'>Graduate</option>
                                </select> 
                            <p><input type='submit' value='Submit'>
                        </form>    

                    ");
                    
                    if(isset($_POST["studenttype"])) {
                        
                        $studenttype=$_POST["studenttype"];
                        
                        print("<p>You selected $studenttype as the Student Type.
                            <p>Updating database...
                        ");
                    
                        if(!strcmp($studenttype,'Undergraduate')) {
                            
                            $query="INSERT INTO undergrad_student one (UserID,Year) VALUES ('$userid','NA') WHERE NOT EXISTS (SELECT * FROM undergrad_student two WHERE one.StudentID = two.StudentID);";
                            
                            if(mysqli_query($con, $query)){
                                echo "<p>$userid added to Undergraduate students.";
                                $query="SELECT StudentType FROM student WHERE StudentID='$userid'";
                                $result=mysqli_query($con,$query);
                                $row=mysqli_fetch_row($result);
                                
                                if(strcmp($row[0],'FT')) {
                                    $query="INSERT INTO ft_undergrad one (StudentID,MinCredits,MaxCredits,CreditsTaken) VALUES ('$userid',12,18,'NA') WHERE NOT EXISTS (SELECT * FROM ft_undergrad two WHERE one.StudentID = two.StudentID);";
                                    mysqli_query($con,$query) or die();
                                } else if(strcmp($row[0],'PT')) {
                                    $query="INSERT INTO pt_undergrad one (StudentID,MinCredits,MaxCredits,CreditsTaken) VALUES ('$userid',12,18,'NA') WHERE NOT EXISTS (SELECT * FROM pt_undergrad two WHERE one.StudentID = two.StudentID);";
                                    mysqli_query($con,$query) or die();
                                }
                                
                                $query="DELETE FROM grad_student WHERE UserID = '$userid'";
                                
                                if(mysqli_query($con, $query)){
                                    echo "<p>$userid removed from Graduate students.";
                                } else{
                                    echo "<p>ERROR: Could not remove $userid from $sql. " . mysqli_error($link);
                                }
                                
                            } else{
                                echo "<p>ERROR: Could not add $userid to $sql. " . mysqli_error($link);
                            }
                            
                        } else if(!strcmp($studenttype,'Graduate')) {
                            $query="INSERT INTO grad_student one (UserID,Year) VALUES ('$userid','NA') WHERE NOT EXISTS (SELECT * FROM grad_student two WHERE one.StudentID = two.StudentID);";
                            
                            if(mysqli_query($con, $query)){
                                echo "<p>$userid added to Graduate students.";
                                $query="SELECT StudentType FROM student WHERE StudentID='$userid'";
                                $result=mysqli_query($con,$query);
                                $row=mysqli_fetch_row($result);
                                
                                if(strcmp($row[0],'FT')) {
                                    $query="INSERT INTO ft_grad one (StudentID,MinCredits,MaxCredits,CreditsTaken) VALUES ('$userid',12,18,'NA') WHERE NOT EXISTS (SELECT * FROM ft_grad two WHERE one.StudentID = two.StudentID);";
                                    mysqli_query($con,$query) or die();
                                } else if(strcmp($row[0],'PT')) {
                                    $query="INSERT INTO pt_grad one (StudentID,MinCredits,MaxCredits,CreditsTaken) VALUES ('$userid',12,18,'NA') WHERE NOT EXISTS (SELECT * FROM pt_grad two WHERE one.StudentID = two.StudentID);";
                                    mysqli_query($con,$query) or die();
                                }
                                
                                $query="DELETE FROM undergrad_student WHERE UserID = '$userid'";
                            
                                if(mysqli_query($con, $query)){
                                    echo "<p>$userid removed from Undergrad students.";
                                } else{
                                    echo "<p>ERROR: Could not remove $userid from $sql. " . mysqli_error($link);
                                }
                                
                            } else{
                                echo "<p>ERROR: Could not add $userid to Graduate Students. " . mysqli_error($link);
                            }
                            

                        }
                        
                        echo "<p><a href='studentinfo.php?UserID=$userid'>Return to User</a></p>";
                    }

                }
                
                if(isset($_GET["FullTime"])) {
                    
                    $ftorpt=$studentdata['StudentType'];
                    
                    if(!strcmp($ftorpt,"PT")) {
                        print("<p>Change student from part-time to full-time?:
                        
                        <form action='' method='post'>
                            <p><input type='radio' id='yes' name='ptorft' value='yes'>
                            <label for='yes'>Yes</label><br>
                            <input type='radio' id='no' name='ptorft' value='no'>
                            <label for='no'>No</label><br>
                            <p><input type='submit' name='submit' value='Submit'>
                        </form>    

                        ");
                    } else if(!strcmp($ftorpt,"FT")) {
                        print("<p>Change student from full-time to part-time?:
                        
                        <form action='' method='post'>
                            <p><input type='radio' id='yes' name='ptorft' value='yes'>
                            <label for='yes'>Yes</label><br>
                            <input type='radio' id='no' name='ptorft' value='no'>
                            <label for='no'>No</label><br>
                            <p><input type='submit' name='submit' value='Submit'>
                        </form>    

                        ");
                    } else {
                        print("<p>
                        <form action='' method='post'>
                            <p><label for='ptorft'>Select full-time or part-time: </label>
                                <select id='fttopt' name='ptorft'>
                                  <option value='ft'>Full-time</option>
                                  <option value='pt'>Part-time</option>
                                </select> 
                            <p><input type='submit' name='submit' value='Submit'>
                        </form>    

                        ");
                    }
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {

        	            $ptorft=$_POST['ptorft'];
        	            
        	            if(!strcmp($ptorft,"yes")) {

        	                updateFTorPT($con,$userid);
        	            }
        	            
                    }
                }
                
                if(isset($_GET["Dept"])) {
                    echo "error 3";
                }
                
                if(isset($_GET["Year"])) {
                    echo "error 4";
                }
                
                if(isset($_GET["Holds"])) {
                    
                    print("<p>Add hold to student:
                        
                        <form action='' method='post'>
                            <p><label for='hold'>Hold: </label>
                                <select id='hold' name='hold'>
                                    <option value='' selected disabled hidden>Choose here</option>");
                                
                    $holds=getHolds($con);

                    for($i=0;$i<count($holds);$i++) {
                        
                        $holdid=$holds[$i];
                        
                        $holdname=getHoldName($con,$holdid);
                        
                        print("<option value='$holdid'>$holdname</option>");
                        
                    }
                    
                    print("</select></p>");
                    
                    $query = "SELECT HoldID FROM student_hold WHERE StudentID = '$userid';";
         
                    $result = mysqli_query($con,$query) or die(mysql_error());
                    
                    $count = mysqli_num_rows($result);
                    
                    if($count>0) {
                        
                        print("<p>Remove holds?:</p>");
                        
                        for($counter=0;$row=mysqli_fetch_row($result);$counter++) {
                            $holds=$row[0];
                            
                            $studentholdname=getHoldName($con,$holds);
                            
                            print("<p><input type='checkbox' name='holdtodelete[]' value='$holds'><label for='holdtodelete[]'>$studentholdname</label></p>");
                        }
                        
                    }
                    
                    print("
                            
                            <p><input type='submit' name='submit' value='Submit'>
                        </form>    

                    ");
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(!empty($_POST['hold'])) {
        	                $hold=$_POST['hold'];
        	            
                            addHoldtoStudent($con,$userid,$hold);
        	            }
        	            
        	            if(!empty($_POST['holdtodelete'])) {
        	                
        	                $holdstodelete=$_POST['holdtodelete'];
        	                
        	                for($counter=0;$counter<count($holdstodelete);$counter++) {
        	                    
        	                    $holdidtodelete=$holdstodelete[$counter];
        	                    
        	                    deleteStudentHold($con,$userid,$holdidtodelete);
        	                    
        	                    $deletedholdname=getHoldName($con,$holdidtodelete);
        	                    
        	                    echo "<p>$deletedholdname removed from student.</p>";
        	                    
        	                }
        	                
        	            }
                    }
                }
                
                if(isset($_GET["Major"])) {
                    
                    print("<p>Change student major:
                        
                        <form action='' method='post'>
                            <p><label for='major'>Major: </label>
                                <select id='major' name='major'>");
                                
                    $majors=getMajors($con);
                    $studentdegreetype=$studentdata['DegreeType'];
                    
                    echo $studentdegreetype;

                    for($i=0;$i<count($majors);$i++) {
                        
                        $majorid=$majors[$i];
                        
                        $majordata=getMajorData($con,$majorid);
                        $majorname=$majordata['MajorName'];
                        $majorcredits=$majordata['CreditRequired'];
                        
                        if(!strcmp($studentdegreetype,"Graduate") && $majorcredits>120) {
                            print("<option value='$majorid'>$majorname</option>");
                        } 
                        
                        if(!strcmp($studentdegreetype,"Undergraduate") && $majorcredits<=120) {
                            print("<option value='$majorid'>$majorname</option>");
                        }
                        
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
        	                    deleteStudentMajor($con,$userid);
        	                    
        	                    echo "<p>Current student major deleted.</p>";
        	                }
        	                
        	                $major=$_POST['major'];
        	                
        	                if(!empty($major)) {
        	                    addStudentMajor($con,$userid,$major);
        	                }
        	            
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
     
                    print("     <option value='remove'>Remove Minor</option>
                            </select>
                            <p><input type='submit' name='submit' value='Submit'>
                        </form>    

                    ");
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(isset($_POST['minor'])) {
        	                
        	                $minor=$_POST['minor'];
        	                
        	                if(!strcmp($minor,"remove")) {
        	                    
        	                    deleteStudentMinor($con,$userid);
        	                } else {
        	                    updateStudentMinor($con,$userid,$minor);
        	                }
        	                
        	                
        	            }
                    }
                }
                
                if(isset($_GET["Advisor"])) {
                    
                    $studentmajor=$studentdata['MajorID'];
                    
                    $majordata=getMajorData($con,$studentmajor);
                    
                    $deptid=$majordata['DeptID'];
                    
                    $advisor = getStudentAdvisor($con,$userid);
                    
                    print("<form action='' method='post'>
                        <label for='faculty'>Change advisor: </label>
                        <select id='faculty' name='faculty'>
                            <option value='' selected disabled hidden>Select an Option</option>");

                                $query="SELECT FacultyID FROM faculty_dept WHERE DeptID='$deptid'";
                                
                                if ($result=mysqli_query($con,$query)) {
                                    for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                        		    {
                        		        
                        		        $facultyid=$row[0];
                        		        
                        		        $facultydata=getFacultyData($con,$facultyid);
                        		        
                        		        $facultyname=$facultydata['FirstName'] . " " . $facultydata['LastName'];
                        		        
                        		        if(!strcmp($advisor,$facultyname)) {
                        		            
                        		        } else {
                        		                             		                echo "<option value='$facultyid'        >$facultyname</option>";
                        		        }
                        		    }
                                } else {
                                    echo "Error: " . $sql . "<br>" . $con->error;
                                }
                    
                    
                    print("</select>                            
                        <p><input type='submit' name='submit' value='Submit'>
                        </form>");
                        
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(isset($_POST['faculty'])) {
        	                
        	                $advisorid=$_POST['faculty'];
        	                
        	                changeStudentAdvisor($con,$userid,$advisorid);
        	                
        	                $newadvisor=getStudentAdvisor($con,$userid);
        	                
        	                echo "<p>Advisor changed to $newadvisor.</p>";

        	            }
                    }
                        
                }
                
                if(isset($_GET["Register"])) {
                    
                    getStudentEnrollmentForm5($con,$userid);
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(isset($_POST['crn'])) {
        	                
        	                $crnarray=$_POST['crn'];
        	                
        	                for($i=0;$i<count($crnarray);$i++) {
        	                    
        	                    $crn=$crnarray[$i];
        	                    
        	                    removeStudentFromSection($con,$userid,$crn);
        	                }
        	                
        	            }
        	            
        	            if(!empty($_POST['register'])) {
        	                
        	                $crn=$_POST['register'];
        	                
        	                addStudentToSection($con,$userid,$crn);
        	            }
                    }
                        
                }
                
                
                if(isset($_GET["Enrollment"])) {
                    
                    getStudentEnrollmentForm1($con,$userid);
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(isset($_POST['crn'])) {
        	                
        	                $crnarray=$_POST['crn'];
        	                
        	                for($i=0;$i<count($crnarray);$i++) {
        	                    
        	                    $crn=$crnarray[$i];
        	                    
        	                    removeStudentFromSectionAsAdmin($con,$userid,$crn);
        	                }
        	                
        	            }
        	            
        	            if(!empty($_POST['register'])) {
        	                
        	                $crn=$_POST['register'];
        	                
        	                addStudentToSectionAsAdmin($con,$userid,$crn);
        	            }
                    }
                        
                }
                
                if(isset($_GET["Transcript"])) {
                    
                    getStudentHistoryForm1($con,$userid);
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(isset($_POST['crn'])) {
        	                
        	                $crnarray=$_POST['crn'];
        	                
        	                for($i=0;$i<count($crnarray);$i++) {
        	                    
        	                    $crn=$crnarray[$i];
        	                    
        	                    removeStudentFromSectionAsAdmin($con,$userid,$crn);
        	                }
        	                
        	            }
        	            
        	            if(!empty($_POST['register'])) {
        	                
        	                $crn=$_POST['register'];
        	                
        	                $grade=$_POST['grade'];
        	                
        	                addStudentToSectionHistoryAsAdmin($con,$userid,$crn,$grade);
        	            }
                    }
                        
                }
                    
                ?>
            </div>
        </div>
    </body>
</html>