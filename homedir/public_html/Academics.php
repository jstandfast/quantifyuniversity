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
            < <a href="AdminHomePage.php"><img src="images/StudLog.png"></a>
            <a> </a><a> </a><a> </a><a> </a></a><a> </a>
            </a><a> </a></a><a> </a></a><a> </a><a> 
            <a href="AdminMasterSchdeule.php">Master Schdeule</a>    
            <a href="Academics.php">Course Catalog</a> 
            <a href="AdminMajors.php">Majors</a> 
            <a href="AdminMinor.php">Minors</a> 
            <a href="AdminViewDepartments.php">Deparments</a> 
            <a href="Adminviewbuildings.php">Buildings</a> 
            <a href="Adminviewbuildings.php">Log Out</a> 

        </div>
  </div>
</div>   
            
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    

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

                    <th style="width:25%;">Course Name</th>
                    <th style="width:25%;">Course ID</th>
                    <th style="width:25%;">Type</th>
                    <th style="width:25%;">Level</th>
                    <th style="width:25%;">Deparment</th>
                </tr>


                <div class='content'>
        
            

            <form action="AdminCourseFound.php" method="post">
                <p><label for='searchtype'>Search by: </label>
                <select id='searchtype' name='searchtype'>
                    <option value='CourseName'>Couse Name</option>
                    <option value='CourseID'>CourseID</option>
                    <option value='Deptname'>User Type</option>
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

            $sql = "SELECT DISTINCT  course.courseName, course.CourseID, course.Credits, course.courseType,department.DeptID, department.Deptname 
                    from course course NATURAL JOIN department
                     ";
           
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    echo "<tr><td><a href='CoursePrerequisite.php?id=".$row["CourseID"]."'>
                        ".$row["courseName"]. "</a></td><td>"
                        .$row["CourseID"]. "</td><td>"  
                        .$row["Credits"]. "</td><td>"  
                        .$row["courseType"]. "</td><td>" 
                        .$row["Deptname"]. "</td><td>" ;

                
           } } else {
                $conn->close();
            }
          
        ?>
            </table>

        </div>

</div>
        
    </div>
 </nav>

   