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
                <a class="w3-quarter" style="text-decoration: none;" href="SearchFaculty.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>New Faculty Search</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div> 
        
    
        <div class="container text-center">
            <h2>Faculty Information</h2>
        </div>

        <div class='content'>
            
            <?php 
            
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $facultydata=getFacultyData($con,$userid);
                
                $fname=$facultydata['FirstName'];
                $lname=$facultydata['LastName'];
                $rank=$facultydata['FacultyRank'];
                $fulltime=$facultydata['FacultyType'];
                $dept=$facultydata['DeptName'];
                $dept2=$facultydata['AdditionalDept1'];
                $dept3=$facultydata['AdditionalDept2'];
                $fname=$facultydata['FirstName'];
                $fname=$facultydata['FirstName'];
                $fname=$facultydata['FirstName'];
                
            ?>
            
            <table class="table table-striped table-dark">
                <tbody>
                    <tr>
                        <td></td>
                        <td>Faculty ID: </td>
                        <td><?php print("$userid"); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Name: </td>
                        <td><?php print("$lname, $fname"); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Fulltime?: </td>
                        <td><?php print("$fulltime"); ?></td>
                    </tr>
                    <tr>
                        <td><?php print("<a href='editfaculty.php?UserID=$userid&Rank=1' class='clean'>Edit</a>"); ?></td>
                        <td>Rank: </td>
                        <td><?php print("$rank"); ?></td>
                    </tr>
                    <tr>
                        <td><?php print("<a href='editfaculty.php?UserID=$userid&Dept=1' class='clean'>Edit</a>"); ?></td>
                        <td>Department(s): </td>
                        <td><?php print("<p>$dept</p><p>$dept2</p><p>$dept3</p>"); ?></td>
                    </tr>
                    <tr>
                        <td><?php print("<a href='editfaculty.php?UserID=$userid&Advisees=1' class='clean'>Edit</a>"); ?></td>
                        <td>Advisees: </td>
                        <td><?php listAdvisees($con,$userid); ?>
                            
                        </td>
                    </tr>
                    <tr>
                        <td><?php print("<a href='editfaculty.php?UserID=$userid&Sched=1' class='clean'>Edit</a>"); ?></td>
                        <td>Next Semester Schedule: </td>
                        <td><?php getNextFacultySchedule($con,$userid); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Current Semester Schedule: </td>
                        <td><?php getFacultySchedule($con,$userid); ?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>Course History: </td>
                        <td><?php getFacultyHistory4($con,$userid); ?></td>
                    </tr>
                
            
            <?php
            
                $con->close();
                
            ?>
        </tbody>
        </table>
        </div>
    </body>
</html>