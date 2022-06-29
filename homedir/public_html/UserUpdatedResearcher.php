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
            <a> </a><a> </a><a> </a><a> </a></a><a> </a>
            </a><a> 
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
                
                $updateuser = "UPDATE quantify.user SET ";
                
                if(strcmp($fname,'')!=0) {
                    $updateuser .= "FirstName = '$fname'";
                }
                
                if(strcmp($fname,'')!=0 && strcmp($lname,'')!=0) {
                    $updateuser .= ",LastName = '$lname'";
                } else if(strcmp($lname,'')!=0) {
                    $updateuser .= "LastName = '$lname'";
                }
                
                if((strcmp($fname,'')!=0 || strcmp($lname,'')!=0) && strcmp($street,'')!=0) {
                    $updateuser .= ",Street = '$street'";
                } else if(strcmp($street,'')!=0) {
                    $updateuser .= "Street = '$street'";
                }

                if((strcmp($fname,'')!=0 || strcmp($lname,'')!=0 || strcmp($street,'')!=0) && strcmp($city,'')!=0) {
                    $updateuser .= ",City = '$city'";
                } else if(strcmp($city,'')!=0) {
                    $updateuser .= "City = '$city'";
                }
              
                if((strcmp($fname,'')!=0 || strcmp($lname,'')!=0 || strcmp($street,'')!=0 || strcmp($city,'')!=0) && strcmp($state,'')!=0) {
                    $updateuser .= ",State = '$state'";
                } else if(strcmp($state,'')!=0) {
                    $updateuser .= "State = '$state'";
                }
                
                if((strcmp($fname,'')!=0 || strcmp($lname,'')!=0 || strcmp($street,'')!=0 || strcmp($city,'')!=0 || strcmp($state,'')!=0) && strcmp($zipcode,'')!=0) {
                    $updateuser .= ",ZipCode = '$zipcode'";
                } else if(strcmp($zipcode,'')!=0) {
                    $updateuser .= "ZipCode = '$zipcode'";
                }
                
                if((strcmp($fname,'')!=0 || strcmp($lname,'')!=0 || strcmp($street,'')!=0 || strcmp($city,'')!=0 || strcmp($state,'')!=0 || strcmp($zipcode,'')!=0) && strcmp($phone,'')!=0) {
                    $updateuser .= ",Phone = '$phone'";
                } else if(strcmp($phone,'')!=0) {
                    $updateuser .= "Phone = '$phone'";
                }
                
                if((strcmp($fname,'')!=0 || strcmp($lname,'')!=0 || strcmp($street,'')!=0 || strcmp($city,'')!=0 || strcmp($state,'')!=0 || strcmp($zipcode,'')!=0 || strcmp($phone,'')!=0) && strcmp($usertype,'')!=0) {
                    $updateuser .= ",UserType = '$usertype'";
                } else if(strcmp($usertype,'')!=0) {
                    $updateuser .= "UserType = '$usertype'";
                }
             
                $updateuser .= " WHERE UserID = '$userid'";
                
                if(mysqli_query($con, $updateuser)){
                    echo "<p>$userid updated successfully.";
                } else{
                  echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                }
            
                $con->close();
            ?>
        </div>
    </body>
</html>