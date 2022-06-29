<?php

session_start();
$servername = "quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "gupta2022";
$dbname = "quantify";

$connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
$cnnect  = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  if(!isset($_SESSION["Email"])&& $_SESSION["UserType"] =='Researcher'){
    header("location:/panel/log-in.php");
  }
  else
  {
    //students
    $getNumOfStudents ='SELECT COUNT(studentID) FROM student';
    $getNumOfStudentsSTMT = $connect->prepare($getNumOfStudents);
    $getNumOfStudentsSTMT->execute();
    $result1 = $getNumOfStudentsSTMT->fetch(PDO::FETCH_ASSOC);
    $numberOfStudents = $result1["COUNT(studentID)"];

    //undergrad
    $getNumOfUnderGrad ='SELECT COUNT(studentID) FROM undergrad_student';
    $getNumOfUnderGradSTMT = $connect->prepare($getNumOfUnderGrad);
    $getNumOfUnderGradSTMT->execute();
    $result2 = $getNumOfUnderGradSTMT->fetch(PDO::FETCH_ASSOC);
    $numberOfUndergrad = $result2["COUNT(studentID)"];

    //grad
    $getNumOfGrad ='SELECT COUNT(studentID) FROM grad_student';
    $getNumOfGradSTMT =$connect->prepare($getNumOfGrad);
    $getNumOfGradSTMT->execute();
    $result3 = $getNumOfGradSTMT->fetch(PDO::FETCH_ASSOC);
    $numberOfGrad = $result3["COUNT(studentID)"];

    //fac
    $getNumOfFac ='SELECT COUNT(facultyID) FROM faculty';
    $getNumOfFacSTMT =$connect->prepare($getNumOfFac);
    $getNumOfFacSTMT->execute();
    $result4 = $getNumOfFacSTMT->fetch(PDO::FETCH_ASSOC);
    $numberOfFaculty = $result4["COUNT(facultyID)"];
  }
  
  ?>


<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="msapplication-tap-highlight" content="no">
        <meta name="description" content="">
        <title>Profile - Researcher</title>
        <link href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css" rel="stylesheet">
        <link href="jqvmap.css" rel="stylesheet">
        <link href="flag-icon.min.css" rel="stylesheet">
        <!-- Fullcalendar-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css" rel="stylesheet">
        <!-- Materialize-->
        <link href="admin-materialize.min.css" rel="stylesheet">
        <!-- Material Icons-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      </head>
     

       <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="black" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="ResearcherHomePage.php" class="white-text">Researcher Homepage</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="logout.php"class="white-text">Log Out</a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="logout.php"class="white-text">Log Out</a></li>
      </ul>
    </div>

  </nav>
<nav class="black" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="ResearcherHomePage.php" class="white-text">Signed in as <?php echo $_SESSION['Email']?></a>
      <ul class="right hide-on-med-and-down">
      </ul>
  </header>
 

  <div class="container">
    <div class="section">
          <div class="container">
            <div class="row">
              <div class="col  m7">
                <div class="card-panel black">
                  <h5 class="white-text">Number of Students</h5>
                  <h4 class="white-text"><?php echo $numberOfStudents; ?>
                  </h4>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s6 m7">
                <div class="card-panel black">
                  <h5 class="white-text">Number of Undergraduate Students </h5>
                  <h4 class="white-text"><?php echo $numberOfUndergrad; ?>
                  </h4>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12 m7">
                <div class="card-panel black">
                  <h5 class="white-text">Number of Graduate</h5>
                  <h4 class="white-text"><?php echo $numberOfGrad; ?>
                  </h4>
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col s12 m7">
                <div class="card-panel black">
                  <h5 class="white-text">Number of Faculty</h5>
                  <h4 class="white-text"><?php echo $numberOfFaculty; ?>
                  </h4>
                </div>
              </div>
            </div>

          </div>





        </main><!-- Scripts -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="js/materialize.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment.min.js"></script>

        <!-- External libraries -->

        <!-- jqvmap -->
        <script type="text/javascript" src="js/jqvmap/jquery.vmap.min.js"></script>
        <script type="text/javascript" src="js/jqvmap/jquery.vmap.world.js" charset="utf-8"></script>
        <script type="text/javascript" src="js/jqvmap/jquery.vmap.sampledata.js"></script>

        <!-- ChartJS -->
        <script type="text/javascript" src="js/Chart.js"></script>
        <script type="text/javascript" src="js/Chart.Financial.js"></script>


        <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.js"></script>
        <script src="js/imagesloaded.pkgd.min.js"></script>
        <script src="js/masonry.pkgd.min.js"></script>


        <!-- Initialization script -->
        <script src="js/admin.js"></script>
            <script src="js/init.js"></script>
          </body>
        </html>
