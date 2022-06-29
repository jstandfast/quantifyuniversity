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
        

                <?php
                
                    $CourseID = $_POST['CourseID']; 
                    print("<a class='w3-quarter' style='text-decoration: none;' href='AdminEditCourseSelected.php?CourseID=$CourseID'>"); 
                    
                ?>
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back to Course</h3>
                    </div>
                  </div>
                </a>
               

            </div>  
        </div> 
        
        <div class = "container text-center">
            <h2>Edit Course</h2>
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
                
                $CourseID = $_POST['CourseID'];
                $DeptID = $_POST['DeptID'];
                $CourseName = $_POST['CourseName'];
                $Credits = $_POST['Credits'];
                $CourseType = $_POST['CourseType'];
                $CurrentPrereqs = $_POST['CurrentPrereqs'];
                $Prereq = $_POST['Prereq'];
                $Grade = $_POST['Grade'];
                
                if(!empty($CourseName)) {
                    
                    $updatecoursename="UPDATE course SET CourseName='$CourseName' WHERE CourseID='$CourseID'";
                    
                    if(mysqli_query($con, $updatecoursename)){
                        echo "<p>$CourseID name updated successfully to $CourseName.";
                    } else{
                      echo "Error: " . $sql . "<br>" . $con->error;
                    }
                    
                }
                
                if(!empty($Credits)) {
                    
                    $updatecredits="UPDATE course SET Credits='$Credits' WHERE CourseID='$CourseID'";
                    
                    if(mysqli_query($con, $updatecredits)){
                        echo "<p>$CourseID credits updated successfully to $Credits.";
                    } else{
                      echo "Error: " . $sql . "<br>" . $con->error;
                    }
                    
                }
                
                if(!empty($CourseType)) {
                    
                    $updatecoursetype="UPDATE course SET CourseType='$CourseType' WHERE CourseID='$CourseID'";
                    
                    if(mysqli_query($con, $updatecoursetype)){
                        echo "<p>$CourseID course type updated successfully to $CourseType.";
                    } else{
                      echo "Error: " . $sql . "<br>" . $con->error;
                    }
                    
                }
                
                if(!empty($Prereq)) {
                    
                    $addprereq="INSERT INTO prerequisite (CourseID,PrereqID,MinGrade) VALUES ('$CourseID','$Prereq','$Grade');";
                    
                    if(mysqli_query($con,$addprereq)){
                        echo "<p>$Prereq added to $CourseID as a prerequisite.</p>";
                    } else{
                        echo "Error: " . $sql . "<br>" . $con->error;
                    }
                    
                }
                
                if(!empty($CurrentPrereqs)) {
                    
                    for($i=0;$i<count($CurrentPrereqs);$i++) {
                        
                        $prereqtotest = $CurrentPrereqs[$i];
                        
                        $prereqcheckbox = $_POST[$prereqtotest];
                        
                        if($prereqcheckbox) {
                            $deleteprereq="DELETE FROM prerequisite WHERE CourseID='$CourseID' AND PrereqID='$prereqtotest'";
                            
                            if(mysqli_query($con,$deleteprereq)){
                                echo "<p>$prereqtotest deleted from $CourseID as a prerequisite.</p>";
                            } else{
                                echo "Error: " . $sql . "<br>" . $con->error;
                            }
                            
                        }
                        
                    }
                    
                }
             
            
                $con->close();
            ?>
        </div>
    </body>
</html>