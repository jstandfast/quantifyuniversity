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
            <a href="AdminHomePage.php"><img src="images/StudLog.png"></a>
            <a> </a><a> </a><a> </a><a> </a></a><a> </a>
            </a><a> </a></a><a> </a></a><a> </a><a> 
            <a href="AdminMasterSchdeule.php">Master Schdeule</a>    
            <a href="AdminCourseCatalog.php">Course Catalog</a> 
            <a href="AdminMajors.php">Majors</a> 
            <a href="AdminMinor.php">Minors</a> 
            <a href="AdminViewDepartments.php">Deparments</a> 
            <a href="Adminviewbuildings.php">Buildings</a> 
            <a href="logout.php">Log Out</a> 

        </div>
  </div>
</div>   



<!doctype html>
            <html>
                <head>
 
                    <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no'>
    <link rel='stylesheet' href='https://www.w3schools.com/lib/w3.css'>
  
   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel='stylesheet' href='https://www.w3schools.com/lib/w3-colors-2017.css'>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
    <script type='text/javascript' src='js/functions.js'> </script>
                </head>

  <header class="w3-container w3-black w3-text-white">
  <h6>Signed in as <?php echo $_SESSION['Email']?> 
  </header>

  </body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
    <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        
        <!-- Start Card -->

<a class="w3-quarter" style="text-decoration: none;" href="AdminHomePage.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Back Admin Home Page</h3>
            </div>
          </div>
        </a>
      <a class="w3-quarter" style="text-decoration: none;" href="AdminAddDepartments.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Add Departments</h3>
            </div>
          </div>
        </a>   
     <a class="w3-quarter" style="text-decoration: none;" href="AdminEditDepartments.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Edit Departments</h3>
            </div>
          </div>
        </a>  
         <a class="w3-quarter" style="text-decoration: none;" href="AdminDeleteDepartments.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Delete Departments</h3>
            </div>
          </div>
        </a>  




         </div>  </div>  </div>
         <div class = "container text-center">
            <h2>Delete Departments</h2>
        </div>
        
          <?php

        $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
          $port=3306;
          $socket="";
          $user="admin";
          $password="gupta2022";
          $dbname="quantify";
    
          $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());
    

        $DeptID = $_GET['DeptID'];
        $sql = "DELETE FROM department WHERE DeptID = '$DeptID'";
         if (mysqli_query($conn, $sql)) {
        echo "<div class='w3-panel w3-black w3-center'><h2>Department has been deleted!</h2></div>";
        } else if(mysqli_errno($conn) == 1451) {
            echo "<br><h3 class='w3-center w3-red'>ERROR: You cannot delete a Department that is active!</h3>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>" . mysqli_errno($conn);
        }


        $conn->close();


    ?>