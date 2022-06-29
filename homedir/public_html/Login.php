<html>
<head>
    <meta name="viewport" content="with=device-width,initial-scale=1.0">
    <title>Univversity Registrion Site</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="style4.css">
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
    <a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a><a> </a>
        <a href="MasterScheule.php">Master Schedule</a>
        <a href="AcademicCalander.php">Academic Calander</a>
        
    <a href="Login.php">Login</a>     
    </div>
  </div>
<body>
 
        <div class="container">    
         <?php echo isset($message) ? $message : ''?>                                          
        <div class = "w3-content w3-container w3-center w3-margin-bottom" style="max-width:450px">
          <form action = "?" method = "post" id = "loginForm"  onsubmit ="validateLogin();">    


            <br> <br>  <br> <br> <br> <br>  <br> <br> 
            <input class="w3-input w3-round login" type="Email" placeholder="" id = "Email" name = "Email"  <?php echo isset($_SESSION['usernamefield']) ? 'value="'. $_SESSION['usernamefield'] .'"' : '' ?> <?php echo isset($error_username_css) ? 'style="'. $error_username_css .'"' : ''?>>
                <span class = "errormsg" id="errorUsername" style = "color: #CD2627"> <?php echo isset($errorUsername) ? $errorUsername : ''?> </span>  
                <label><b>Enter your Email</b></label> 
                
                    <br> <br>  <br> <br> 
                
                <input class="w3-input w3-round login" type="Password" placeholder="" id = "Password" name = "Password"  <?php echo isset($_SESSION['passwordfield']) ? 'value="'. $_SESSION['passwordfield'] .'"' : '' ?> <?php echo isset($error_password_css) ? 'style="'. $error_password_css .'"' : ''?>>
                <span class = "errormsg" id="passwordError" style = "color: #CD2627"> <?php echo isset($errorPassword) ? $errorPassword : ''?></span> 
                <label><b>Enter Password</b></label>
                    <br> <br>     
                <input class="w3-btn-block w3-black w3-section w3-padding" type="submit" name = "submit" value = "Login">

                </form>
            </div>

                <div class="w3-container w3-content w3-center w3-padding-16 w3-white" style="max-width:420px">
                  <span class="w3-padding"> <a href="#" onclick="alert('Please Email');">forgot password</a></span>
                </div>

</body>
</html>

<?php
include 'functionsphp.php';
session_start();
if (isset($_POST['Email']) && isset($_POST['Password'])) {

    //Creating global SESSION variables for username and password for textbox diplay (This prevents the user from entering field data again after failed form submission)
    $_SESSION['usernamefield'] = $_POST['Email'];
    $_SESSION['passwordfield'] = $_POST['Password'];

    $login = validateLogin($_POST['Email'], $_POST['Password']);

    if ($login[0] == "" && $login[1] == "") {

    $Email = $_POST['Email'];
    $Password = $_POST['Password'];

    $con = mysqlConnect();

    $sql = "SELECT * FROM login WHERE Email = '$Email' AND Password = '$Password'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_array($result);

    if (!mysqli_num_rows($result) == 0) {
        $_SESSION['UserID'] = $row['UserID'];
        $_SESSION['Email'] = $row['Email'];
        $_SESSION['Password'] = $row['Password'];
        //echo ("Welcome " . $_SESSION['username']);
        $user = $row['UserType'];
        $_SESSION['UserType'] = $user;


        switch($user) {
            case "Admin":
                header("Location: AdminHomePage.php");
                break;
            case "Student":
                header("Location: StudentHome.php");
                break;
            case "Faculty":
                header("Location: Facultyhome.php");
                break;
            case "research";
                header("Location: ResearcherHomePage.php");
                break;
        }
    }
    else {
        //$errMsg = "invalid username or password";
        $message = "<div class='w3-container w3-content w3-center w3-red w3-margin-top' style='max-width:420px'>
            <p>Invalid Email or Password.</p>
        </div> <br>";
    }
    
}
    else {
        //Updating Errors
        $errorUsername = $login[0];
        $errorPassword = $login[1];
        
        //Updating CSS for Errors
        $error_username_css = $login[2];
        $error_password_css = $login[3];
     }
}

?>

<?php
unset($_SESSION['usernamefield']);
unset($_SESSION['passwordfield']);
?>