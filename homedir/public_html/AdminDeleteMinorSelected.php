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
        <meta name='viewport' content='width=device-width; initial-scale=1.0; maximum-scale=1.0; user-scalable=no'>
        
        <link rel='stylesheet' href='https://www.w3schools.com/lib/w3.css'>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel='stylesheet' href='https://www.w3schools.com/lib/w3-colors-2017.css'>
        <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootswatch@4.5.2/dist/cosmo/bootstrap.min.css" integrity="sha384-5QFXyVb+lrCzdN228VS3HmzpiE7ZVwLQtkt+0d9W43LQMzz4HBnnqvVxKg6O+04d" crossorigin="anonymous">

        <script type='text/javascript' src='js/functions.js'> </script>
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
        
        .floatright {
            float: right;
        }
    </style>


    <body>
      <section class="header">  
        <div class="navbar">
            
            <a href="index.html"><img src="images/StudLog.png"></a>
            <div class="floatright">
                <a href="AdminHomePage.php">Administrator Home</a> 
                <a href="logout.php">Log Out</a> 
            </div>
        </div>
    
          <header class="w3-container w3-black w3-text-white">
            <h6>Signed in as <?php echo $_SESSION['Email']?> 
          </header>
    
      </section>   
    
    
     
        
        <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
            <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        

                <a class="w3-quarter" style="text-decoration: none;" href="AdminMinor.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back To Minors</h3>
                    </div>
                  </div>
                </a>
            </div>  
        </div> 
            
        <div class = "container text-center">
            <h2>Delete Minor</h2>
        </div>
        <?php

        $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
          $port=3306;
          $socket="";
          $user="admin";
          $password="gupta2022";
          $dbname="quantify";
    
          $conn = new mysqli($host, $user, $password, $dbname, $port, $socket)
          or die ('Could not connect to the database server' . mysqli_connect_error());
    

        $MinorID = $_GET['MinorID'];
        $sql = "DELETE FROM minor WHERE MinorID = '$MinorID'";
         if (mysqli_query($conn, $sql)) {
        echo "<div class='w3-panel w3-black w3-center'><h2>Minor has been deleted!</h2></div>";
        } else if(mysqli_errno($conn) == 1451) {
            echo "<br><h3 class='w3-center w3-red'>ERROR: You cannot delete a Minor!</h3>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>" . mysqli_errno($conn);
        }


        $conn->close();


    ?>