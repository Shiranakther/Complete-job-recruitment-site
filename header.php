<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home-Infiny jobs</title>
    

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="jobs.css">
    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="jobseeker-dashboard.css">
    <link rel="stylesheet" href="privercypolicy.css">
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="terms.css">
    <link rel="stylesheet" href="companies.css">
    <link rel="stylesheet" href="help.css">
    <link rel="stylesheet" href="job-application.css">
    <link rel="stylesheet" href="footer.css">
   
   


  </head>
  <body>
    <div>
<div class="header">
        <div class="header-left">
          <img class="header-left-logo" src="images/logo-02.jpg" alt="no image">
        </div>

        <div class="header-center">
             <a href="index.php"> <div class="header-center-div">HOME</div></a>
              <a href="jobs.php"><div class="header-center-div">JOBS</div></a>
             <a href="companies.php"> <div class="header-center-div">COMPANIES</div></a>
              <a href="help.php"><div class="header-center-div">HELP</div></a>
        </div>

        <div class="header-right">
          
        <?php
          if(isset($_SESSION["username"])) { 
           echo '<a href="include/logout.inc.php"> <button class="header-right-button-login"> Logout </button></a>';         
           echo '<a href="jsDash.php"> <button class="header-right-button-login-dashboard" ">' . $_SESSION["username"] . '</button></a>';
           
          } else {
            echo '<a href="login.php"> <button class="header-right-button-login">LOGIN</button></a>';
            echo '<a href="register.php"> <button class="header-right-button-login">REGISTER</button></a>';
          } 
          ?>

          
                        
    </div>
        </div>