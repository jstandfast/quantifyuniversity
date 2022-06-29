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



    <!-- Cards start -->

   <!-- <div class="w3-row-padding w3-margin-top w3-animate-right w3-card-4 w3-light-grey" style = "color:black"> -->

        <!-- Start Card -->

            
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
                    <th style="width:25%;">Department</th>
                </tr>


                <div class='content'>
        
            

            <form action="CourseFound.php" method="post">
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
          <div class = "container text-center">
                <h1>Courses-Click On Course For Prerequisite</h1></div></div>
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
                    echo "<tr><td><a href='HomeCoursePrerequisite.php?id=".$row["CourseID"]."'>
                        ".$row["courseName"]. "</a></td><td>"
                        .$row["CourseID"]. "</td><td>"  
                        .$row["Credits"]. "</td><td>"  
                        .$row["courseType"]. "</td><td>" 
                        .$row["Deptname"]. "</td><td>" ;

                
           } } else {
                $conn->close();
            }
          
        ?>
        
        <table class="table table-striped table-dark">
            <thead>
                <th></th>
                <th></th>
                <th></th>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>Student ID: </td>
                    <td><?php print("$userid"); ?></td>
                </tr>
                <tr>
                    <td></td>
                    <td>Name: </td>
                    <td><?php print("$lname, $fname"); ?></td>
                </tr>
                <tr>
                    <td><?php print("<a href='editstudent.php?UserID=$userid&StudentType=1' class='clean'>Edit</a>"); ?></td>
                    <td>Student Type: </td>
                    <td><?php print("$studenttype"); ?></td>
                </tr>
                <tr>
                    <td><?php print("<a href='editstudent.php?UserID=$userid&FullTime=1' class='clean'>Edit</a>"); ?></td>
                    <td>Fulltime?: </td>
                    <td><?php print("$fulltime"); ?></td>
                </tr>
            </table>

        </div>

</div>
        
    </div>
 </nav>

   
   