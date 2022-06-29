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
  <link rel="stylesheet" href="">
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
            <a href="AdminCourseCatalog.php">Course Catalog</a> 
            <a href="AdminMajors.php">Majors</a> 
            <a href="AdminMinor.php">Minors</a> 
            <a href="AdminViewDepartments.php">Deparments</a> 
            <a href="Adminviewbuildings.php">Buildings</a> 
            <a href="logout.php">Log Out</a> 

        </div>
  </div>
</div>   



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

  <header class="w3-container w3-black w3-text-white">
  <h6>Signed in as <?php echo $_SESSION['Email']?> 
  </header>

  </body>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"
 integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    


<div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
    <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        
        <!-- Start Card -->

<a class="w3-quarter" style="text-decoration: none;" href="AdminMajors.php">
          <div class="w3-center ">
            <!--<img src="img/file_icon.png"  alt="icon">-->
            <i class=" fa-5x" aria-hidden="true"></i>
            <div class="w3-container">
              <h3>Back To Majors Options</h3>
            </div>
          </div>
        </a>


         </div>  </div>  </div>    

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
</div></div>

        <h1 style="text-align:center">Add New Major</h1>
        <div class="w3-panel w3-center" >
            <form class="w3-container" action = "AdminMajorAddedSubmit.php" method = "post">
            <label class="w3-label w3-white"><b>Department</b></label>
<!--            <input class="w3-input" type="number" name="dept">-->
            <select class="w3-select w3-border" name="DeptID" required>
                <?php getAllDepartments(); ?>
            </select><br><br>
            <form class="w3-container" action = "AdminMajorAddedSubmit.php" method = "post">
            <label class="w3-label w3-white"><b>Major ID</b></label>
            <input class="w3-input" type="text" name="MajorID">
            <br>
            <label class="w3-label w3-white"><b>Major Name</b></label>
            <input class="w3-input" type="text" name="MajorName">
            <br>
               <label class="w3-label w3-white"><b>Degree Type</b></label>
            <input class="w3-input" type="text" name="DegreeType">
            <br>
            <label class="w3-label w3-white"><b>Credit Required</b></label>
            <input class="w3-input" type="text" name="CreditRequired"></input>
            <br>


            <div>
                <button class="w3-btn w3-black" type="submit" onclick="validateEmptyFields();">Create Major</button>
            </div>
            </form>
        </div>
    </div>
