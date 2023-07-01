<!DOCTYPE html>
<html>
  <head>
    <title>companies-Infiny jobs</title>
          <link rel="preconnect" href="https://fonts.googleapis.com">
          <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="header.css">
    <link rel="stylesheet" href="footer.css">
        <style>
         body{
        font-family: 'Roboto', sans-serif;
        font-size: 20px;
       
     
      }
         .header{
          background-color: rgb(210, 210, 255);
          height:120px;
          padding-top:20px;
         }
         
            .register{
              margin:40px;
              display:flex;
              flex-direction:row;
              justify-content: space-evenly;
              
            }
            .register-div{
              height:150px;
              width:500px;
             background-color:#f0f8ff;
             text-align: center;
             border:3px rgb(69, 3, 100) solid;
             border-radius:20px;
             
            }
            .register-div:hover{
              transform: scale(1.1);
              transition-duration: 0.2s;
              cursor: pointer;
            }
            .register-div-type{
              margin-top:50px;
              font-size: 40px;
              font-weight: bold;
              color:rgb(2, 43, 62);

            }
            .reg-pic{
              height:300px;
              border-radius: 20px;
            }
            .already-have-account{
              color:red;
              font-size:15px;
            }

         
        </style>
  </head>
  <body>
      <div>
      <!--header-->
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
           <a href="login.php"> <button class="header-right-button-login">LOGIN</button></a>      
           <p class="already-have-account">Already have an Account?</P>   
          <!--<a href="register.html"><button class="header-right-button-register">REGISTER</button></a>-->
                          
      </div>
          </div>
          <!--end of header-->
          <!--register-->
          <div class="register">
            <a href="employer_reg.php"> <div class="register-div"><p class="register-div-type">Register As a Employer</p></div></a>
            <a href="signup.php"><div class="register-div"><p class="register-div-type">Register As a Job seeker</p></div></a>

          </div>
          <div class="register">
            <div class="reg-img"><img class="reg-pic" src="images/reg-pic1 (1).jpg"></div>
            <div class="reg-img"><img class="reg-pic" src="images/reg-pic1 (2).jpg"></div>
          </div>

         
    
   

  <!--horizontel line-->
          <hr class="hrs">

      <!--footer-->
      <?php include_once 'footer.php'
      ?>