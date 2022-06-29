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
            <a href="Academics.php">Course Catalog</a> 
            <a href="AdminMajors.php">Majors</a> 
            <a href="AdminMinor.php">Minors</a> 
            <a href="AdminViewDepartments.php">Deparments</a> 
            <a href="Adminviewbuildings.php">Buildings</a> 
            <a href="logout.php">Log Out</a> 

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
                    <th style="width:18%;">Prerequisite</th>
                    <th style="width:18%;">Course ID</th>
                    <th style="width:18%;">Course Name</th>
                    <th style="width:18%;">Credits</th>
                    <th style="width:18%;">Level</th>
                    <th style="width:18%;">Course Type</th>
                    <th style="width:18%;">Department</th>

                </tr>


                <div class='content'>
        
        </div>
    <?php
        
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $searchtype = $_POST['searchtype'];
                $search = $_POST['search'] . "%";
                
                $query="SELECT DISTINCT course.CourseID,course.CourseName,course.Credits,course.Level,course.CourseType,department.DeptName
                FROM course NATURAL JOIN department  WHERE $searchtype LIKE '$search'";
            
          if(!mysqli_select_db($con,$dbname))
            die("<p>Could not open School Database.</p></body></html>");
    
          if(!($result=mysqli_query($con,$query))) {
                  print("<p>Could not execute query!</p>");
                  die(mysqli_error()."</body></html>");
          }
          
          $result2 = mysqli_query($con,$query) or die(mysql_error());

          $count = mysqli_num_rows($result);
          
          if($count==0) {
              print("<p>No course Found.</p>");
              die(mysqli_error()."</body></html>");
          } else {
             
        
                for ($counter=0;$row=mysqli_fetch_row($result);++$counter)
                {
                    
                    print("<tr><td class = 'clean'><a class = 'clean' href = 'CoursePrerequisite.php?CourseID=$row[0]'>Prerequisite</a></td>");
                    foreach ($row as $element=>$value ) 
                      print("<td>$value</td>");
        
                    print("</tr>");
        
                }
          }
            
              $con->close();
            ?>
        </div>
  </body>
</html>