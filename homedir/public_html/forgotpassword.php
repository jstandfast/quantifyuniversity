<?php
  session_start();
$servername = "quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "gupta2022";
$dbname = "quantify";

$connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
$cnnect  = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);

  if(isset($_POST["Email"]))
  {
    $Email = $_POST["Email"];
    $sql = 'SELECT *  FROM login INNER JOIN user ON login.UserID =user.UserID WHERE login.Email ="'.$Email.'"';
    $statement = $connect->prepare($sql);
    $statement->execute();
    $row = $statement->fetch(PDO::FETCH_ASSOC);
    $fetchName =$row["FirstName"];

      

    

   }

 ?>
 <!DOCTYPE html>
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="">
    <title>Log In</title>
    <link href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css" rel="stylesheet">
    <link href="jqvmap.css" rel="stylesheet">
    <link href="flag-icon.min.css" rel="stylesheet">
    <!-- Fullcalendar-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css" rel="stylesheet">
    <!-- Materialize-->
    <link href="admin-materialize.min.css" rel="stylesheet">
    <!-- Material Icons-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>

</head>
<body>
  <nav class="black" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="index.html" class="white-text">Back to Home Page</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="log-in.php"class="white-text">login</a></li>
      </ul>

        <li><a href="log-in.php"class="white-text">Login</a></li>
      </ul>
    </div>
  </nav>
     <header>
       <div class="navbar-fixed">
         <nav class="navbar white">
           <div class="nav-wrapper"><a href="#!" class="brand-logo grey-text text-darken-4">Forgot Password</a>
             <ul id="nav-mobile" class="right">
               <li class="hide-on-med-and-down"><a href="https://themes.materializecss.com/products/admin"></a></li>
             </ul><a href="#!" data-target="sidenav-left" class="sidenav-trigger left"><i class="material-icons black-text">menu</i></a>
           </div>
         </nav>
       </div>
      
     </header>
     <main>
       <div class="container">
         <div class="row">
           <div class="col s12">
             <div class="center">
             </br>
             </br>
             </br>
             </br>
             </br>
             </br>
             </br>
             </br>
             </br>
               <span>If you have forgotten your password, fill out the form below to have instructions sent to your email</span>
               <form method="POST">
                 <div class="input-field col s6 offset-s3">
                   <input id="Email" type="Email" name="Email" class="validate">
                   <label for="Email">Email</label>
                   <button class="btn waves-effect waves-light teal darken-1" type="submit" name="action">Reset
                      <i class="material-icons right"></i>
                    </button>
                 </div>
               </form>
             </div>
           </div>
          </div>
        </div>