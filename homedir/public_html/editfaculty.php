<?php
session_start();
include 'header_footer.php';
include 'functionsphp.php';

$userid = $_GET["UserID"]; 
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
        
        .smalldiv {
            margin-left: 15px;
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
        

                <a class="w3-quarter" style="text-decoration: none;" href="ViewUsers.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back to Users</h3>
                    </div>
                  </div>
                </a>
                <a class = 'clean' href = 'studentinfo.php?UserID=$row[0]'>
                <?php print("<a class='w3-quarter' style='text-decoration: none;'' href='AdminFacultyInfo.php?UserID=$userid'>"); ?>
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>Back to Faculty Information</h3>
                    </div>
                  </div>
                </a>
                <a class="w3-quarter" style="text-decoration: none;" href="SearchFaculty.php">
                  <div class="w3-center ">
                    <i class=" fa-5x" aria-hidden="true"></i>
                    <div class="w3-container">
                      <h3>New Faculty Search</h3>
                    </div>
                  </div>
                </a>

            </div>  
        </div> 
        
    
        <div class="container text-center">
            <h2>Edit Faculty Information</h2>
        </div>

        <div class='content'>
            <div class='smalldiv'>
            
            <?php 
            
                $host="quantify.cy8rwonvm5qr.us-east-1.rds.amazonaws.com";
                $port=3306;
                $socket="";
                $user="admin";
                $password="gupta2022";
                $dbname="quantify";
                
                $con = new mysqli($host, $user, $password, $dbname, $port, $socket)
                or die ('Could not connect to the database server' . mysqli_connect_error());
                
                $facultydata = getFacultyData($con,$userid);
                
                $facultyname=$facultydata['FirstName'] . " " . $facultydata['LastName'];
                
                print("<p>Faculty Member $userid $facultyname</p>");
                
                if(isset($_GET["Rank"])) {
                    
                    $currentrank=$facultydata['FacultyRank'];
                    
                    print("<p>Change faculty rank (Currently $currentrank):
                        
                        <form action='' method='post'>
                            <p><label for='rank'>Rank: </label>
                                <select id='rank' name='rank'>");
                                
                    $rankarray=getListOfFacultyRanks($con);
                    
                    for($i=0;$i<count($rankarray);$i++) {
                        
                        $rank=$rankarray[$i];
                        
                        if(strcmp($rank,$currentrank)) {
                            print("<option value='$rank'>$rank</option>");
                        }
                        
                    }
     
                    print("</select>
                            <p><input type='submit' name='submit' value='Submit'>
                        </form>    

                    ");
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(isset($_POST['rank'])) {
        	                
        	                $newrank=$_POST['rank'];
        	                
        	                if(updateRank($con,$userid,$newrank)) {
        	                    echo "<p>Rank updated to $newrank.</p>";
        	                } else {
        	                    echo "<p>Could not update rank to $newrank.</p>";
        	                }
        	                
        	            }
                    }
                }
                
                if(isset($_GET["Dept"])) {
                    
                    $dept[0]=$facultydata['DeptName'];
                    $dept[1]=$facultydata['AdditionalDept1'];
                    
                    $arrayinc = 1;
                    
                    while(!empty($dept[$arrayinc])) {
                        
                        $arrayinc++;
                        
                        $additionaldept="AdditionalDept" . strval($arrayinc);
                        
                        if(!empty($facultydata[$additionaldept]))
                            $dept[$arrayinc]=$facultydata[$additionaldept];
                        
                    }
                    
                    print("<form action='' method='post'>
                                <label for='deletedept[]'>Delete current department(s) from Faculty:</label>");
                    
                    for($i=0;$i<count($dept);$i++) {
                        
                        if(!empty($dept[$i])) {
                            $deptid=getDeptIDByName($con,$dept[$i]);
                            
                            print("<p><input type='checkbox' name='deletedept[]' value='$deptid'> $dept[$i]</p>");
                        }
                        
                    }
                    
                    $alldepts=getAllDeptartmentIDs($con);
                    
                    print("<p><label for='adddept'>Add Department to Faculty: </label>
                                <select id='adddept' name='adddept'>
                                    <option value='' selected>Select a Department</option>");
                    
                    for($j=0;$j<count($alldepts);$j++) {
                        
                        $deptid=$alldepts[$j];
                        
                        $deptname=getDeptNameByID($con,$deptid);
                        
                        print("<option value='$deptid'>$deptname</option>");
                        
                    }
                    
                    print("</select>
                            <p><input type='submit' name='submit' value='Submit'></p>
                        </form>    

                    ");
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(!empty($_POST['deletedept'])) {
        	                
        	                $deletedepts=$_POST['deletedept'];
        	                
        	                for($k=0;$k<count($deletedepts);$k++) {
        	                    
        	                    if(removeDeptFromFaculty($con,$userid,$deletedepts[$k])) {
        	                        
        	                        $deleteddeptname=getDeptNameByID($con,$deletedepts[$k]);
        	                        
        	                        echo "<p>$facultyname removed from department $deleteddeptname.</p> ";
        	                        
        	                    }
        	                    
        	                }
        	                
        	            }
        	            
        	            if(!empty($_POST['adddept'])) {
        	                
        	                $adddeptid=$_POST['adddept'];
        	                
        	                if(addDeptToFaculty($con,$userid,$adddeptid)) {
        	                    
        	                    $adddeptname=getDeptNameByID($con,$adddeptid);
        	                    
        	                    echo "<p>$facultyname added to department $adddeptname.</p> ";
        	                    
        	                }
        	                
        	            }
                    }
                    
                }
                
                if(isset($_GET['Advisees'])) {
                    
                    print("<form action='' method='post'>
                                <label for='deleteadvisee[]'>Delete current advisee(s) from Faculty Member:</label>");
                    
                    listAdviseesForm1($con,$userid);
                    
                    print("<p><label for='addadvisee'>Add Advisee (input Student ID): &nbsp;</label><input type='text' id='addadvisee' name='addadvisee'></p>
                        <p><input type='submit' name='submit' value='Submit'></p>
                        </form>    

                    ");
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(!empty($_POST['deleteadvisee'])) {
        	                
        	                $deleteadvisees=$_POST['deleteadvisee'];
        	                
        	                for($i=0;$i<count($deleteadvisees);$i++) {
        	                    
        	                    if(removeAdvisee($con,$userid,$deleteadvisees[$i])) {
        	                        
        	                        $deletedadviseeID=$deleteadvisees[$i];
        	                        
        	                        echo "<p>Student ID $deletedadviseeID removed from $facultyname as advisee.</p>";
        	                        
        	                    }
        	                    
        	                }
        	                
        	            }
        	            
        	            if(!empty($_POST['addadvisee'])) {
        	                
        	                $addadviseeid=$_POST['addadvisee'];
        	                
        	                if(addAdvisee($con,$userid,$addadviseeid)) {
        	                    
        	                    echo "<p>Student ID $deletedadviseeID added to $facultyname as advisee.</p>";
        	                    
        	                }
        	                
        	            }
                    }
                    
                }
                
                if(isset($_GET['Sched'])) {
                    
                    getNextFacultyScheduleForm1($con,$userid);
                    
                    $submitted=$_POST['submit'];
    	    
        	        if($submitted) {
        	            
        	            if(!empty($_POST['reassignsection'])) {
        	                
        	               $crnarray=$_POST['crn'];
        	               $reassignfacultyarray=$_POST['reassignsection'];
        	               
        	               for($i=0;$i<count($reassignfacultyarray);$i++) {
        	                   
        	                   if(!empty($reassignfacultyarray[$i])) {
        	                       
        	                       $newfacultyarray=getFacultyData($con,$reassignfacultyarray[$i]);
        	                       
        	                       $newfacultyname=$newfacultyarray['FirstName'] . " " . $newfacultyarray['LastName'];
        	                       
        	                       $crn=$crnarray[$i];
        	                       
        	                       if(assignFacultyToSectionAsAdmin($con,$reassignfacultyarray[$i],$crn)) {
        	                           echo "<p>$newfacultyname reassigned to the course section $crn.</p>";
        	                       }
        	                       
        	                   }
        	                   
        	                   
        	               }
        	                
        	                
        	            }
        	            
        	            if(!empty($_POST['assignsection'])) {
        	                
        	                $assigncrn=$_POST['assignsection'];
        	                
        	               if(assignFacultyToSectionAsAdmin($con,$userid,$assigncrn)) {
        	                   echo "<p>$facultyname reassigned to the course section $assigncrn.</p>";
        	               }
        	                
        	            }
                    }
                    
                }

                    
                ?>
            </div>
        </div>
    </body>
</html>