<?php
session_start();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>job seeker dashboard</title>
    <link rel="stylesheet" href="jsDash.css">
  </head>

    <body> 
      <div class="main">
        <p class="welcome"> Hello 
        <?php 
              if(isset($_SESSION["username"]))
              {
                echo $_SESSION["username"]."!";
              }else{
                echo 'user!';
              }
      ?>
        </p>
            
        <div class="main-div">
          
          <div class="main-div-image"><img class="image-info" src="images/profile-image.png"></div>
        <a href="include/updatejs.php"><button class="main-div-button">Profile</button></a> 
        </div>

        <div class="main-div">
          
          <div class="main-div-image"><img class="image-info" src="images/jobs-image.png"></div>
        <button class="main-div-button">My Jobs</button>
        </div>

        <div class="main-div">
          <div class="main-div-image"><img class="image-info" src="images/candidate-image.png"></div>
        <button class="main-div-button">Notification</button>
        </div>

        <div class="main-div">
          <div class="main-div-image"><img class="image-info" src="images/help-image.png"> </div>
          <a href="help.php"> <button class="main-div-button">Help</button></a>
       </div>
         <a href="include/logout.inc.php"><button class="jobseeker-logout"> Logout </button></a>
        <a href="index.php"> <button class="close-button"><img class="close" src="images/close.png"></button></a>
        </div>

        
      
    </body>

  </html>