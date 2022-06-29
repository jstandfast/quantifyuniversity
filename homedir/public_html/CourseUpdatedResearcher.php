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
            <a href="ResearcherHomePage.php"><img src="images/StudLog.png"></a>
            <a> </a><a> </a><a> </a><a> </a></a>
            
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

  <header class="w3-container w3-black w3-text-white">
  <h6>Signed in as <?php echo $_SESSION['Email']?> 
  </header>


  <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
    <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        


<a class="w3-quarter" style="text-decoration: none;" href="ResearcherInfo.php">
          <div class="w3-center ">
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Edit Personal Info</h3>
            </div>
          </div>
        </a>
        <a class="w3-quarter" style="text-decoration: none;" href="ResearcherStats.php">
          <div class="w3-center ">
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Veiw School Statistics </h3>
            </div>
          </div>
        </a>
      


          </div>          </div>          </div>
    <!-- Cards start -->
    <div class = "container text-center">
                <h1>User Info-Select to Edit</h1></div></div>
   <!-- <div class="w3-row-padding w3-margin-top w3-animate-right w3-card-4 w3-light-grey" style = "color:black"> -->
   
    <?php
             $UserID = $_SESSION['UserID']; 
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $UserID = $_POST['UserID'];
                $FirstName = $_POST['FirstName'];
                $LastName = $_POST['LastName'];
                $Street = $_POST['Street'];
                $City = $_POST['city'];
                $State = $_POST['state'];
                $ZipCode = $_POST['ZipCode'];
                $Phone = $_POST['Phone'];
                $UserType = $_POST['UserType'];
                
                $updateuser = "UPDATE quantify.user SET ";
                
                if(strcmp($FirstName,'')!=0) {
                    $updateuser .= "FirstName = '$FirstName'";
                }
                
                if(strcmp($FirstName,'')!=0 && strcmp($LastName,'')!=0) {
                    $updateuser .= ",LastName = '$LastName'";
                } else if(strcmp($LastName,'')!=0) {
                    $updateuser .= "LastName = '$LastName'";
                }
                
                if((strcmp($FirstName,'')!=0 || strcmp($LastName,'')!=0) && strcmp($Street,'')!=0) {
                    $updateuser .= ",Street = '$Street'";
                } else if(strcmp($Street,'')!=0) {
                    $updateuser .= "Street = '$Street'";
                }

                if((strcmp($FirstName,'')!=0 || strcmp($LastName,'')!=0 || strcmp($Street,'')!=0) && strcmp($City,'')!=0) {
                    $updateuser .= ",City = '$City'";
                } else if(strcmp($City,'')!=0) {
                    $updateuser .= "City = '$City'";
                }
              
                if((strcmp($FirstName,'')!=0 || strcmp($LastName,'')!=0 || strcmp($Street,'')!=0 || strcmp($City,'')!=0) && strcmp($State,'')!=0) {
                    $updateuser .= ",State = '$State'";
                } else if(strcmp($State,'')!=0) {
                    $updateuser .= "State = '$State'";
                }
                
                if((strcmp($FirstName,'')!=0 || strcmp($LastName,'')!=0 || strcmp($Street,'')!=0 || strcmp($City,'')!=0 || strcmp($State,'')!=0) && strcmp($ZipCode,'')!=0) {
                    $updateuser .= ",ZipCode = '$ZipCode'";
                } else if(strcmp($ZipCode,'')!=0) {
                    $updateuser .= "ZipCode = '$ZipCode'";
                }
                
                if((strcmp($FirstName,'')!=0 || strcmp($LastName,'')!=0 || strcmp($Street,'')!=0 || strcmp($City,'')!=0 || strcmp($State,'')!=0 || strcmp($ZipCode,'')!=0) && strcmp($Phone,'')!=0) {
                    $updateuser .= ",Phone = '$Phone'";
                } else if(strcmp($Phone,'')!=0) {
                    $updateuser .= "Phone = '$Phone'";
                }
                
                if((strcmp($FirstName,'')!=0 || strcmp($LastName,'')!=0 || strcmp($Street,'')!=0 || strcmp($City,'')!=0 || strcmp($State,'')!=0 || strcmp($ZipCode,'')!=0 || strcmp($Phone,'')!=0) && strcmp($UserType,'')!=0) {
                    $updateuser .= ",UserType = '$UserType'";
                } else if(strcmp($UserType,'')!=0) {
                    $updateuser .= "UserType = '$UserType'";
                }
             
                $updateuser .= " WHERE UserID = '$UserID'";
                
                if(mysqli_query($con, $updateuser)){
                    echo "<p>$UserID updated successfully.";
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            
                $con->close();
            ?>
        </div>
    </body>
</html>