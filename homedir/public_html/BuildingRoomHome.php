<!doctype html>
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
    <a href="index.html"><img src="images/logo3.png"></a>
    <a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a>
        <a href="MasterScheule.php">Master Schedule</a>
        <a href="AcademicCalander.php">Academic Calander</a>
         <a href="ViewBuildingHome.php">View Buildings</a>
        
    <a href="log-in.php">Login</a>   
    </div>
  </div>
</div>
 </nav>     


<body>

</body>
</html> 
  </body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
    <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        
        <!-- Start Card -->

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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

<div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
            <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
            
                <a class="w3-quarter" style="text-decoration: none;" href="ViewBuildingHome.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back To Buildings</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div>  </div>  </div> 
    

<main>
  <div class="container-fluid">
    <div class="row">
        <nav 
        class="col-md-3 col-lg-2 d-md-block .bg-dark sidebar collapse">
            <div class="position-sticky pt-3">
                <ul class="nav flex-column">
                        <a style="color :white;" class="nav-link active" aria-current="page" href="javascript:void(0);">
                            <span data-feather="users"></span>
                        </a>
                        
                        </ul>

                        </ul>
                        
                </ul>

        </nav>


<main class="col-md-2 ms-sm-auto col-lg-9 px-md-1 left">
<br>

<br>
      <div style="height:900px; width: auto; ;">
        <table class="table table-striped table-dark">
        <thead>
            <tr>
                     <th style="width:25%;">Room Number</th>
                    <th style="width:25%;">Room Type</th>
                    <th style="width:25%;">Building</th>


                </tr>


                <?php
            global $BuildingID;
            $BuildingID = $_GET['id'];


            $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
            $port=3306;
            $socket="";
            $user="admin";
            $password="gupta2022";
            $dbname="quantify";

            $conn = mysqli_connect($host, $user, $password, $dbname, $port, $socket);
                 if (mysqli_connect_errno()) {
                     die("Could not connect to the database server: " . mysqli_connect_error());
                     }

                    $sql = "SELECT room.RoomNum,room.RoomUse,room.BuildingID,building.BuildingName FROM room NATURAL JOIN building
                    WHERE BuildingID = '$BuildingID'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td><a '?id=".$row["BuildingID"]."'>
                        ".$row["RoomNum"]. "</a></td><td>"
                        .$row["RoomUse"]. "</td><td>" 
                        .$row["BuildingName"]. "</td><td>"; 

                }
            } else {
                $conn->close();
            }

        ?>
