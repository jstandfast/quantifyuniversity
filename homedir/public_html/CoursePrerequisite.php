<?php
    session_start();
    include 'header_footer.php';
    include 'functionsphp.php';
    
    htmlheader_root();
    
    $CourseID = $_GET['CourseID'];
    
    $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
    $port=3306;
    $socket="";
    $user="admin";
    $password="gupta2022";
    $dbname="quantify";

    $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
        or die ('Could not connect to the database server' . mysqli_connect_error());
        
    $coursedata=getCourseData($con,$CourseID);
    
    $coursename=$coursedata['CourseName'];
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
            <a> </a><a> </a><a> </a><a> </a>
            </a><a> </a></a><a> </a></a><a> </a><a> 
            <a href="AdminMasterSchdeule.php">Master Schdeule</a>    
            <a href="Academics.php.php">Course Catalog</a> 
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
          
            <div class = "container text-center">
                <h2>Viewing Prerequisites for <?php print($CourseID . " " . $coursename);?></h2>
            </div>
            <table class="table table-striped table-dark">
                <tr>
                    <th style="width:12%;">Course ID</th>
                    <th style="width:12%;">Course Name</th>
                    <th style="width:12%;">Required Grade</th>
                    <th style="width:12%;">Credits</th>
                    <th style="width:12%;">Level</th>
                    <th style="width:12%;">Course Type</th>
                    <th style="width:12%;">Department</th>
                </tr>
    
            
                <?php
                    
                    $prereqarray=getPrereqs($con,$CourseID);
                    
                    for($counter=0;$counter<count($prereqarray);$counter++) {
                        
                        $prereqid=$prereqarray[$counter];
                        
                        $prereqdata=getCourseData($con,$prereqid);
                        
                        $prereqname=$prereqdata['CourseName'];
                        
                        $prereqcredits=$prereqdata['Credits'];
                        
                        $prereqlevel=$prereqdata['Level'];
                        
                        $prereqtype=$prereqdata['CourseType'];
                        
                        $prereqdept=$prereqdata['DeptName'];
                        
                        $prereqgrade=getRequiredPrereqGrade($con,$prereqid,$CourseID);
                        
                        print("<tr>
                                    <td>$prereqid</td>
                                    <td>$prereqname</td>
                                    <td>$prereqgrade</td>
                                    <td>$prereqcredits</td>
                                    <td>$prereqlevel</td>
                                    <td>$prereqtype</td>
                                    <td>$prereqdept</td>
                                </tr>");
                        
                    }
                    
                    
                    $con->close();
                ?>
                
            </table>
        </div>
    </main>
    </body>
</html>
    