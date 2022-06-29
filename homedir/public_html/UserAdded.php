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
        

                <a class="w3-quarter" style="text-decoration: none;" href="AdminHomePage.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back To Administrator Homepage</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="ViewUsers.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back to Users</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div> 
        
        <div class = "container text-center">
            <h2>Add a User</h2>
        </div>
        
        <div class="content">

        
            <?php
            
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $userid = $_POST['userid'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $street = $_POST['street'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zipcode = $_POST['zipcode'];
                $phone = $_POST['phone'];
                $usertype = $_POST['usertype'];
                $email = $_POST['email'];
                $password = $_POST['password'];
                
                $insertintouser = "INSERT INTO quantify.user(UserID,FirstName,LastName,Street,City,State,ZipCode,Phone,UserType) VALUES ('$userid','$fname','$lname','$street','$city','$state','$zipcode','$phone','$usertype')";
                
                $insertintologin = "INSERT INTO quantify.login(UserID,Email,Password,UserType) VALUES ('$userid','$email','$password','$usertype')";
                
                $insertintotype = "";
                $insertsecondary= "";
                $inserttertiary= "";
                
                date_default_timezone_set('America/New_York');
                $todaysdate=date("Y-m-d");
                
                if(!strcmp($usertype,'Admin')) {
                    $insertintotype = "INSERT INTO quantify.administrator(AdminID,AccessLevel) VALUES ('$userid','Level2')";
                } else if(!strcmp($usertype,'Student')) {
                    $insertintotype = "INSERT INTO quantify.student(StudentID,StudentType) VALUES ('$userid','NA')";
                    $insertsecondary = "INSERT INTO undergrad_student (StudentID,Year) VALUES ('$userid', 'Freshman')";
                    $inserttertiary= "INSERT INTO `quantify`.`pt_undergrad` (`StudentID`, `MinCredits`, `MaxCredits`, `CreditsTaken`) VALUES ('$userid', '1', '11', '0');";
                } else if(!strcmp($usertype,'Faculty')) {
                    $insertintotype = "INSERT INTO quantify.faculty(FacultyID,FacultyRank,FacultyType) VALUES ('$userid','NA','NA')";
                    $insertsecondary="INSERT INTO `quantify`.`faculty_dept` (`FacultyID`, `DeptID`, `YearsService`, `AppointDate`) VALUES ('$userid', 'D18', '0', '$todaysdate');";
                } else if(!strcmp($usertype,'Researcher')) {
                    $insertintotype = "INSERT INTO quantify.researcher(ResearcherID,Status) VALUES ('$userid','Assistance')";
                }
                
                print("<p>Adding user...");
                
                if(mysqli_query($con, $insertintouser)){
                    echo "<p>$userid inserted successfully.";
                  
                } else{
                  echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
                }
                
                if(mysqli_query($con, $insertsecondary)){
                    
                    echo "<p>$userid given secondary properties.";
                    
                } else{
                  echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
                }
                    
                if(mysqli_query($con, $inserttertiary)){
                    echo "<p>$userid given tertiary properties.";
                } else{
                    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
                }
              
                if(mysqli_query($con, $insertintologin)){
                  echo "<p>Login credentials inserted successfully.";
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
                
                if(mysqli_query($con, $insertintotype)){
                  echo "<p>User inserted successfully into $usertype table.";
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            
                $con->close();
            ?>
        </div>
    </body>
</html>