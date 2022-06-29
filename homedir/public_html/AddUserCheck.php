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
                <a href="Logout.html">Log Out</a> 
            </div>
        </div>
    
          <header class="w3-container w3-black w3-text-white">
            <h6>Signed in as <?php echo $_SESSION['Email']?> 
          </header>
    
      </section>   
    
    
      <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
            <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
            
                <a class="w3-quarter" style="text-decoration: none;" href="AdminMasterSchedule.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Master Schedule</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminViewDepartments.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Departments</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminMajors.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Majors</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminMinor.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Minors</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminCourseOption.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Courses</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminViewbuildings.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Buildings & Rooms</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="ViewUsers.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Users</h3>
                    </div>
                  </div>
                </a>
                 <a class="w3-quarter" style="text-decoration: none;" href="AdminHolds.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Holds</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminSemester.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Semesters</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="AdminTimeSlots.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Time Slots</h3>
                    </div>
                  </div>
                </a>
            </div>
        </div>
        
        <div class = "w3-container w3-card-4 w3-black w3-opacity-min" style="max-width: auto">
            <div class="w3-row-padding w3-margin-top w3-margin-top" style = "color:white; overflow-x: hidden"> 
        

                <a class="w3-quarter" style="text-decoration: none;" href="AdminHomePage.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back To Administrator Homepage</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="ViewUsers.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back to Users</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div> 
        
        <div class = "container text-center">
            <h2>Add a User</h2>
        </div>
        
        <div class="content">

            <?php
        
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $userid = $_POST['userid'];
                $fname = $_POST['fname'];
                $lname = $_POST['lname'];
                $street = $_POST['street'];
                $city = $_POST['city'];
                $state = $_POST['state'];
                $zipcode = $_POST['zipcode'];
                $phone = $_POST['phone'];
                $usertype = $_POST['usertype'];
                $email = sprintf("%s%s@quantifyNYC.edu", $fname, $lname);
                $test = 1;
                
                if(empty($fname) || empty($lname) || empty($street) || empty($city) || empty($state) || empty($zipcode) || empty($phone)) {
                    
                    if(empty($fname)) {
                        echo "<p>Please enter a first name. Go <a href='AddUser.php' style='clean'>Back</a>.</p>";
                    }
                    
                    if(empty($lname)) {
                        echo "<p>Please enter a last name. Go <a href='AddUser.php' style='clean'>Back</a>.</p>";
                    }
                    
                    if(empty($street)) {
                        echo "<p>Please enter a street address. Go <a href='AddUser.php' style='clean'>Back</a>.</p>";
                    }
                    
                    if(empty($city)) {
                        echo "<p>Please enter a city. Go <a href='AddUser.php' style='clean'>Back</a>.</p>";
                    }
                    
                    if(empty($state)) {
                        echo "<p>Please enter a state. Go <a href='AddUser.php' style='clean'>Back</a>.</p>";
                    }
                    
                    if(empty($zipcode)) {
                        echo "<p>Please enter a zip code. Go <a href='AddUser.php' style='clean'>Back</a>.</p>";
                    }
                    
                    if(empty($phone)) {
                        echo "<p>Please enter a phone number. Go <a href='AddUser.php' style='clean'>Back</a>.</p>";
                    }
                
                   
                } else {
                    
                    while($test) {
        
        			    $query = "SELECT * FROM quantify.login WHERE Email = '$email';";
        			    
        			    $result = mysqli_query($con,$query) or die(mysql_error());
    
    			        $count = mysqli_num_rows($result);
    			    
        			    if($count==0)
        					$test = 0;
        				else {
            				$min = 10;
            			    $max = 99;
            			    $randnum = rand($min, $max);
            			    $email = sprintf("%s%s%d@quantifyNYC.edu", $fname, $lname,$randnum);
            			    $test = 1;
        				}
        		    }
        		    
                    function secure_random_string() {
                        $random_string = '';
                        for($i = 0; $i < 8; $i++) {
                            $number = random_int(0, 36);
                            $character = base_convert($number, 10, 36);
                            $random_string .= $character;
                        }
                        
                        return $random_string;
                    }
                    
                    $password = secure_random_string();
                    
                  print("
                    <div class='content'>
                        <p>Are you sure you want to add the following user?: 
                        <p>User ID: $userid 
                        <p>First Name: $fname 
                        <p>Last Name: $lname 
                        <p>Address: $street, $city $state $zipcode 
                        <p>Phone Number: $phone 
                        <p>User Type: $usertype
                        <p>Email: $email
                        <p>Password: $password
                        <form action='UserAdded.php' method='post'>
                            <input type='hidden' name='userid' value='$userid'>
                            <input type='hidden' name='fname' value='$fname'>
                            <input type='hidden' name='lname' value='$lname'>
                            <input type='hidden' name='street' value='$street'>
                            <input type='hidden' name='city' value='$city'>
                            <input type='hidden' name='state' value='$state'>
                            <input type='hidden' name='zipcode' value='$zipcode'>
                            <input type='hidden' name='phone' value='$phone'>
                            <input type='hidden' name='usertype' value='$usertype'>
                            <input type='hidden' name='email' value='$email'>
                            <input type='hidden' name='password' value='$password'>
                            <p><input type='submit' value='Yes, submit' value=''>
                            </form>
                    </div>");
                    
                }
        
              $con->close();
            ?>
        </div>
  </body>
</html>