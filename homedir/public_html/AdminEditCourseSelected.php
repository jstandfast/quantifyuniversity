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
        

                <a class="w3-quarter" style="text-decoration: none;" href="AdminEditCourse.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back to Course Selection</h3>
                    </div>
                  </div>
                </a>
               

            </div>  
        </div> 
        
        <div class = "container text-center">
            <h2>Edit Course</h2>
        </div>

        <?php 
        
            $CourseID = $_GET["CourseID"]; 
        
            print("<div class='content'>");

                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $coursedata=getCourseData($con,$CourseID);
                
                $CourseName = $coursedata['CourseName'];
                $Credits= $coursedata['Credits'];              
                $Level = $coursedata['Level'];    
                $CourseType = $coursedata['CourseType'];  
                $DeptID = $coursedata['DeptID'];
                $DeptName = $coursedata['DeptName'];
//CourseName  DeptID Level  Credits
                print("
                    <form action='CourseUpdated.php' method='post'>
                        <table style='width:500px'>
                            <tr>
                                <th style='width:100px'></th>
                                <th style='width:200px,text-align:center'>Current:</th>
                                <th style='width:200px,text-align:center'>Change to:</th>
                            </tr>
                            <tr>
                                <td><label for='userid'>Course ID: </td>
                                <td>$CourseID</td>
                                <td><input type='hidden' name='CourseID' value='$CourseID'>Cannot Change</td>
                            </tr>

                            <tr>
                                <td><label for='CourseName'>Course Name: </td>
                                <td>$CourseName</td>
                                <td><input type='text' name='CourseName'></td>
                            </tr>
                            <tr>
                                <td><label for='lname'>Credits: </td>
                                <td>$Credits</td>
                                <td><select id='Credits' name='Credits'>
                                    <option value=''>Change Credits</option>");
                                
            			
                    for ($counter=1;$counter<9;++$counter)
        		    {
        		        
        		        if($counter != $Credits) {
        		            echo "<option value='$counter'>$counter</option>";
        		        }
        		        
        		    }
               
                
                
                                
                                
                    print("</select></p></td>
                            </tr>

                            <tr>
                                <td><label for='Level'>Level </td>
                                <td>$Level</td>
                                <td><input type='hidden' name='Level' value='$Level'>Cannot Change</td>
                            </tr>
                            <tr>
                                <td><label for='CourseType'>CourseType: </td>
                                <td>$CourseType</td>
                                <td><select id='CourseType' name='CourseType'>
                                    <option value=''>Change Course Type</option>");
                    
                    
                    $coursetypearray=getListOfCourseTypes($con);
                    
                    for ($counter=0;$counter<count($coursetypearray);$counter++)
        		    {
        		        
        		        $newcoursetype = $coursetypearray[$counter];
        		        
        		        if(strcmp($CourseType,$newcoursetype)) {
        		            echo "<option value='$newcoursetype'>$newcoursetype</option>";
        		        }
        		        
        		    }
                                
                                
                    print("</td>
                              </tr>
                              <tr>
                                <td><label for='DeptID'>Deptartment: </label></td>
                                <td>$DeptName</td>
                                <td><input type='hidden' name='DeptID' value='$DeptID'>Cannot Change</td>
                            </tr>
                            
                            <tr>
                                <td><b><label for='Prereq'>Prerequisites: </label></b></td>
                                <td><b>Delete:</b></td>
                                <td><b>Add:</b></td>
                            </tr>
                            
                            <tr>
                                <td></td>
                                <td>");
                                
                    $prereqs=getPrereqs($con,$CourseID);
                    
                    if(!empty($prereqs)) {
                        
                        for($i=0;$i<count($prereqs);$i++) {
                            
                            print("<input type='hidden' name='CurrentPrereqs[]' value='$prereqs[$i]'>");
                            
                            print("<p>$prereqs[$i] (<input type='checkbox' name='$prereqs[$i]' value='1'> Delete)</p>");
                        
                        }
                        
                    } else {
                        print("NA");
                    }
                                
                    print("</td>
                                <td><input type='text' name='Prereq'>
                                <p><label for='Grade'>Minimum Grade Required: 
                                <select id='Grade' name='Grade'>
                                    <option value='A+'>A+</option>
                                    <option value='A'>A</option>
                                    <option value='A-'>A-</option>
                                    <option value='B+'>B+</option>
                                    <option value='B'>B</option>
                                    <option value='B-'>B-</option>
                                    <option value='C+'>C+</option>
                                    <option value='C' selected>C (default)</option>
                                    <option value='C-'>C-</option>
                                    <option value='D+'>D+</option>
                                    <option value='D'>D</option>
                                    <option value='D-'>D-</option>
                                </select></p></td>
                                    
                                
                            <tr>
                                <td></td>
                                <td></td>
                                <td><input type='submit' value='Submit'><input type='reset' value='Reset'></td>
                            </tr>
                            
                            
                        </table>
                    </form>");
        
                $con->close();
            ?>
        </div>
  </body>
</html>