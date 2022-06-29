<?php
session_start();
$servername = "quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
$username = "admin";
$password = "gupta2022";
$dbname = "quantify";

$connect = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
$cnnect  = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
try
{
  if(isset($_SESSION["Email"])){
    header("location:login_success.php");
  }
     if(isset($_POST["login"]))
     {
       $_SESSION["ip"] = getenv("REMOTE_ADDR");
       $tries =15;
          if(empty($_POST["Email"]) || empty($_POST["Password"]))
          {
               $message = '<label class="red-text text-darken-2">All fields are required</label>';
          }
          else
          {
               $query = "SELECT * FROM login WHERE Email = :Email AND Password = :Password";
               $statement = $connect->prepare($query);
               $statement->execute(
                    array(
                         'Email'     =>     $_POST["Email"],
                         'Password'     =>     $_POST["Password"]
                    )
               );
               $count = $statement->rowCount();
               if($count > 0)
               {
                    $_SESSION["strikes"] =0;
                    $result = $statement->fetch(PDO::FETCH_ASSOC);
                    $_SESSION["Email"] = $_POST["Email"];
                    $_SESSION["UserType"] = $result["UserType"];
                    $_SESSION["UserID"] = $result["UserID"];
                    header("location:login_success.php");

               }
               else
               {
                    $_SESSION["strikes"] +=1;
                    if(isset($_SESSION["strikes"]) && $_SESSION["strikes"] >=15)
                    {
                      $message = '<label class="red-text text-darken-2">IP '.$_SESSION["ip"].' Has Been Logged and may NOT login. Please Contact an Administrator</label>';
                    }
                    else
                    {
                      $message = '<label class="red-text text-darken-2">Wrong Email or Password</label>';
                    }
               }
          }
     }
}
catch(PDOException $error)
{
     $message = $error->getMessage();
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
    <title>Log In</title>
    <link href="https://cdn.datatables.net/v/dt/dt-1.10.16/datatables.min.css" rel="stylesheet">
    <link href="css/jqvmap.css" rel="stylesheet">
    <link href="css/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
    <!-- Fullcalendar-->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.7.0/fullcalendar.min.css" rel="stylesheet">
    <!-- Materialize-->
    <link href="css/admin-materialize.min.css" rel="stylesheet">
    <!-- Material Icons-->
   <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
  <nav class="black" role="navigation">
    <div class="nav-wrapper container">

      <a id="logo-container" href="index.html" class="white-text">Back to Home Page</a>
      <ul class="right hide-on-med-and-down">
        <li><a href="panel/log-in.php"class="white-text">login</a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav">
        <li><a href="panel/log-in.php"class="white-text">Login</a></li>
      </ul>
    </div>
  </nav>
  <div class="container">
    <div class="section">
     
      <div class="container">
  <div class="row">
    <div class="col s8 offset-s2 center-align">
      <div class="card card-login ">

          <div class="wrapper">

          </div>

          <img src="img/geometric-cave.jpg" alt="">
        </div>
        <div class="card-content">
          <span class="card-title">Log In</span>
          <form method='post'>
            <div class="input-field">
              <input id="Email" name="Email" type="text" class="validate">
              <label for="Email"></label>
            </div>
            <div class="input-field">
              <input id="Password" name="Password" type="Password" class="validate">
              <label for="Password"></label>
            </div>
            <?php
              if(isset($message)){
                echo '<label>'.$message.'</label>';
              }
            ?>
            <a href="forgotpassword.php">Forgot Password?</a>

            <br><br>
            <div>
              <?php
              if(isset($_SESSION["strikes"]) && $_SESSION["strikes"]>=15)
              {
                echo '<input class="btn right disabled" type="submit" name ="login" value="Login">';
              }
              else
              {
                echo '<input class="btn right" type="submit" name ="login" value="Login">';
              }
              ?>
            </div>

          </form>
        </div>
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
