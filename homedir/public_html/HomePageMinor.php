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




 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">
         <div class = "container text-center">
                <h1>All Minors</h1></div></div>

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

                    <th style="width:25%;">Minor Name</th>
                    <th style="width:25%;">Minor ID</th>
                    <th style="width:25%;">Credits</th>
                    <th style="width:25%;">Department</th>
                </tr>

            <div class='content'>
            <form action="MinorFound.php" method="post">
                <p><label for='searchtype'>Search by: </label>
                <select id='searchtype' name='searchtype'>
                    <option value='MinorName'>Minor Name</option>
                    <option value='MinorID'>Minor ID</option>
                </select> 
                <p>Search: <input type="text" name="search">
                <p><input type="submit">
            </form>
        
        </div>  
    <?php

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

            $sql = "SELECT DISTINCT minor.MinorID, minor.DeptID, minor.MinorName,minor.CreditsRequired,department.deptName   
            FROM minor NATURAL JOIN department";
           
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                    echo "<tr><td><a href='?id=".$row["DeptID"]."'>
                        ".$row["MinorName"]. "</a></td><td>"
                        .$row["MinorID"]. "</td><td>"  
                        .$row["CreditsRequired"]. "</td><td>" 
                        .$row["deptName"]. "</td><td>" ;

                
           } } else {
                $conn->close();
            }
            $conn->close();
        ?>
            </table>

        </div>

</div>
        
    </div>
 </nav>