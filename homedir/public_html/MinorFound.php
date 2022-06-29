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
        <a href="AcademicCalander.php">Academic Calander</a>
        
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
    <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
            <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
            
                <a class="w3-quarter" style="text-decoration: none;" href="HomePageMinor.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back To Minor</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div> 


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

                    <th style="width:33%;">Major</th>
                    <th style="width:33%;">Course ID</th>
                    <th style="width:33%;">Credits</th>

                </tr>

   
        
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
                
                $query="SELECT MinorName, MinorID, CreditsRequired
                FROM minor WHERE $searchtype LIKE '$search'";
            
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