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
        <a class="w3-quarter" style="text-decoration: none;" href="CurrentSchedule.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Current Schedule </h3>
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
         <a class="w3-quarter" style="text-decoration: none;" href="registration.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Holds</h3>
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
        <a class="w3-quarter" style="text-decoration: none;" href="registration.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Next Semester Schdeule</h3>
            </div>
          </div>
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
                <h1>User Info-Select to Edit</h1></div></div>
                  <?php 
        
            $UserID = $_SESSION['UserID']; 
        
            print("<div class='content'>");

                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $query = "SELECT * FROM quantify.user WHERE UserID = '$UserID';";
                
                $result = mysqli_query($con,$query) or die(mysql_error());
                
                $row=mysqli_fetch_row($result);
                
                $FirstName = $row[1];
                $LastName= $row[2];               
                $Street = $row[3];      
                $City = $row[4];   
                $State = $row[5];
                $ZipCode = $row[6]; 
                $Phone = $row[7]; 
                $UserType = $row[8]; 
//CourseName  DeptID Level  Credits
                print("
                    <form action='StudentInfoUpdated.php' method='post'>
                        <table style='width:500px'>
                            <tr>
                                <th style='width:100px'></th>
                                <th style='width:200px,text-align:center'>Current:</th>
                                <th style='width:200px,text-align:center'>Change to:</th>
                            </tr>
                            <tr>
                                <td><label for='userid'>User ID: </td>
                                <td>$UserID</td>
                                <td><input type='hidden' name='UserID' value='$UserID'>Cannot Change</td>
                            </tr>

                            <tr>
                                <td><label for='FirstName'>First Name: </td>
                                <td>$FirstName</td>
                                <td><input type='text' name='FirstName'></td>
                            </tr>
                            <tr>
                                <td><label for='LastName'>Last Name: </td>
                                <td>$LastName</td>
                                <td><input type='text' name='LastName'></td>
                            </tr>

                            <tr>
                                <td><label for='Street'>Street: </td>
                                <td>$Street</td>
                                <td><input type='text' name='Street'></td>
                            </tr>
                            <tr>
                                <td><label for='City'>City: </td>
                                <td>$City</td>
                                <td><input type='text' name='City'></td>
                            </tr>
                            <tr>
                                <td><label for='State'>State: </td>
                                <td>$State</td>
                                <td><input type='text' name='State'></td>
                            </tr>
                            <tr>
                                <td><label for='ZipCode'>ZipCode: </td>
                                <td>$ZipCode</td>
                                <td><input type='text' name='ZipCode'></td>
                              </tr>
                              <tr>
                                
                                <td><label for='Phone'>Phone: </td>
                                <td>$Phone</td>
                                <td><input type='text' name='Phone'></td>
                            </tr>
                             <tr>
                                <td><label for='UserType'>User Type: </td>
                                <td>$UserType</td>
                                <td><input type='hidden' name='UserType' value='$UserType'>Cannot Change</td>
                            </tr>

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