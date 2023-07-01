<?php
session_start();
?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <style>
      body{
      font-family: roboto;
      }
      .main{
        display:flex;
        flex-direction:column;
        align-items:center;
        border:2px rgb(95, 8, 139) solid;
        width:30%;
        margin-left:500px;
        position: relative;
        background-color: rgb(240, 245, 250);
        flex-wrap:wrap;

      }
      .welcome{
        font-size: 50px;
        font-weight: bold;
        margin-top:0;
        margin-bottom:0;
        color: rgb(6, 64, 112);
      }
      .main-div{
        display:flex;
        flex-direction:row;
        justify-content: space-between;
        
        
        margin:15px;
        padding:15px;
       
      }
      .post-job{
        margin-top:20px;
        margin-bottom:20px;
        background-color: rgb(230, 42, 74);
        font-weight: bold;
        font-size: 30px;
        color:white;
        border-radius:10px;
        height:60px;
        width:350px;
        border:none;
        box-shadow:2px 2px 3px rgba(0,0,0,0.8);
        cursor: pointer;
       
      }
      .main-div-image{
        border:5px rgb(4, 80, 137) solid;
        border-radius:20px;
        padding:4px;
        height:80px;
        width:80px;
      }
      .image-info{
        height:80px;
        width:80px;
      }
      .main-div-button{
        height:50px;
        width:200px;
        margin-top:22px;
        margin-left:70px;
        border:none;
        background-color: rgb(13, 49, 115);
        font-weight: bold;
        font-size: 25px;
        color:white;
        border-radius:10px;
        box-shadow:  -6px -5px 5px rgba(255, 255, 255, 0.8), 3px 2px 5px rgba(0, 0, 0, 0.8);
        cursor: pointer;
      }
      .close-button{
        position: absolute;
        top:5px;
        right:5px;
        background-color:rgb(240, 245, 250);
        border:none;
      }
      .close{
        height:40px;
      }
    </style>

    <script src="employer.js"></script>


  </head>

    <body> 
      <div class="main">
        <p class="welcome">Welcome <?php  
              if(isset($_SESSION["username"]))
              {
                echo $_SESSION["username"]."!";
              }else{
                echo 'user!';
              } ?> </p>
        <button class="post-job" onclick="redirectToEmployer()">Post a job +</button>      
        <div class="main-div">
          
          <div class="main-div-image"><img class="image-info" src="profile-image.png"></div>
        <button class="main-div-button" onclick="Profileinfo()">Profile</button>
        </div>

        <div class="main-div">
          
          <div class="main-div-image"><img class="image-info" src="jobs-image.png"></div>
        <button class="main-div-button">Jobs</button>
        </div>

        <div class="main-div">
          <div class="main-div-image"><img class="image-info" src="candidate-image.png"></div>
        <button class="main-div-button">Candidate</button>
        </div>

        <div class="main-div">
          <div class="main-div-image"><img class="image-info" src="interview-image.png"></div>
        <button class="main-div-button">Interview</button>
        </div>

        <div class="main-div">
          <div class="main-div-image"><img class="image-info" src=""> </div>
        <button class="main-div-button" onclick="logout()">Logout</button>
        </div>
        <button class="close-button"><img class="close" src="close.png"></button>
      </div>
    </body>

  </html>