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
    <a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a>
        <a href="MasterScheule.php">Master Schedule</a>
        <a href="AcademicCalander2.php">Academic Calander</a>
        
    <a href="log-in.php">Login</a>    
    </div>
  </div>
</div>




 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    
 <div class = "container text-center">
                <h1>All Majors Within Department</h1></div></div>
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

                    <th style="width:25%;">Major Name</th>
                    <th style="width:15%;">Degree Type</th>
                    <th style="width:15%;">Department</th>
                </tr>

      <?php
            global $DeptID;
            $DeptID = $_GET['id'];


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

                    $sql = "SELECT major.MajorName, major.MajorID, major.DegreeType, major.DeptID,department.DeptName 
                    From major NATURAL JOIN department
                    WHERE DeptID = '$DeptID'";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td><a href='DeptCourse.php?id=".$row["DeptID"]."'>
                        ".$row["MajorName"]. "</a></td><td>"
                        .$row["DegreeType"]. "</td><td>" 
                        .$row["DeptName"]. "</td><td>" ;

                }
            } else {
                $conn->close();
            }

        ?>