<?php
session_start();
include 'header_footer.php';
include 'functionsphp.php';

htmlheader_root();
?>

<html>
    <head>
        <meta name="viewport" content="with=device-width,initial-scale=1.0">
        <title>Quantify University</title>
        <link rel="stylesheet" href="style3.css">
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
            <a href="Adminviewbuildings.php">Log Out</a> 

        </div>
  </div>
</div>


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
    
        <div class = "container text-center">
            <h2>Administrator Home</h2>
        </div>
        
        <div class="content">
            <p><a href="ViewUsers.php"><img src="images/User.png" style="width:200px;height:200px;"></a><a href="Academics.php"><img src="images/Academics.png" style="width:200px;height:200px;"></a><a href="Operations.php"><img src="images/Operations.png" style="width:200px;height:200px;"></a><a href="Facilities.php"><img src="images/Facilities.png" style="width:200px;height:200px;"></a></p>
        </div>
    </body>
</html>
