<?php
  session_start();

  if(isset($_SESSION["Email"])){
    echo '<title>Log Successful -Redirecting...</title>';
    echo '<h3>Login Success, Welcome - '.$_SESSION["Email"].' role '.$_SESSION["UserType"].' UserID '.$_SESSION["UserID"].'</h3>';
    if(isset($_SESSION["Email"])and $_SESSION["UserType"]==='Admin'){
      header("location:AdminHomePage.php");
      exit();
    }
    if (isset($_SESSION["Email"])and $_SESSION["UserType"]==='Faculty'){
          header("Location:Facultyhome.php");
      exit();
    }
    elseif (isset($_SESSION["Email"])and $_SESSION["UserType"]=='Student'){
        header("Location:StudentHome.php");
      exit();
    }elseif (isset($_SESSION["Email"])and $_SESSION["UserType"]=='Researcher'){
          header("location:ResearcherHomePage.php");
      exit();
    }
  }else{
    header("location:log-in.php");
    exit();
  }
 ?>
