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
         .login-main{
          align-content: center;
          
          display:flex;
          justify-content: center;
          
         }
         .login-main-div2{
          margin:30px;
          background-color: rgb(239, 255, 255);
          width: 500px;
          display: flex;
          flex-direction:column;
          justify-content: space-evenly;
          align-items: center;
          border:3px rgb(23, 6, 108) solid;
          border-radius:20px;
         }
         .login-main-div2-h1{
          font-size: 40px;
          font-weight: bold;
          color:rgb(5, 58, 74);
         }
         .login-username{
          
          width:450px;
         }
         .login-username-p{
          
          font-size:25px;
          color:rgb(75, 6, 52);
         }
         .login-username-input{
          
          height:40px;
          width:400px;
          border:2px rgb(7, 7, 66) solid;
          border-radius:10px;
          
         }

         .login-password{
          
          width:450px;
         }
         .login-password-p{
          
          font-size:25px;
          color:rgb(75, 6, 52);
         }
         .login-password-input{
          
          height:40px;
          width:400px;
          border:2px rgb(7, 7, 66) solid;
          border-radius:10px;
         }
         .login-main-div2-bottom{
          margin-top:20px;
          display:flex;
          flex-direction: row;
          width:400px;
          justify-content: space-evenly;
         }
         .login-button{
          width:170px;
          height:40px;
          background-color: rgb(226, 5, 5);
          color:white;
          font-size:20px;
          font-weight:bold;
          border:none;
          border-radius:10px;
          box-shadow: 2px 2px rgba(51, 32, 32, 0.8);
         }
         .login-button:hover
         {
          transform: scale(1.05);
            transition-duration: 0.2s;
            background-color: rgb(177, 8, 8);
          color:white;
          cursor: pointer;
         }
         .reset-password{
          font-size:18px;
          color:rgb(82, 5, 87);
          text-decoration: underline;
          cursor: pointer;
         }

         
        </style>
  </head>
  <body>
      <div>
      <!--header-->
      <?php include_once 'header.php';
?> 
          <!--end of header-->

         <!--login page -->
         <div class="login-main">
          <form action="include/login.inc.php" method = "POST">
             
          <div class="login-main-div2">
            <p class="login-main-div2-h1">LOGIN</p>
            <div class="login-username">
              <p class="login-username-p">User name or E-mail address <span style="color:red;">*</span>
                </p>
            <input class="login-username-input" type="text" name="uid">
            </div>

            <div class="login-password">
              <p class="login-password-p">Password <span style="color:red;">*</span></p>
            <input class="login-password-input" type="password" name="pwd">

            </div>
            <div class="login-main-div2-bottom">
            <button type="submit" class="login-button" name="submit">LOGIN</button>
            <P class="reset-password">Forgot password ?</P>
          </div>
          </form>
          <?php
    if(isset ($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo'<div class="error">Fill all fields</div>';
        }elseif($_GET["error"] == "wronglogin"){
            echo'<div class="error">invalid Details</div>';
    }
    
        
    
        elseif($_GET["error"] == "stmtfailed"){
            echo'<div class="error">Something went wrong </div>';
    }
        elseif($_GET["error"] == "none"){
            echo'<div class="error">Account created </div>';
    }
        
}
?>
<p >
 New Here? <a href="signup.php">register<a>
</p>
          </div>
         </div>
   

  <!--horizontel line-->
          <hr class="hrs">

      <!--footer-->
      <div class="footer">
          <div class="footer-top">
              <div class="footer-top-div1">
                <div class="footer-top-div1-image">
                  <img class="award" src="images/award.webp">
                </div>
                <div class="footer-top-div1-content">
                      <div class="footer-top-div1-content-h1">Winner</div>
                      <div class="footer-top-div1-content-h2">Marketing & Communication</div>
                      <div class="footer-top-div1-content-h3">Category</div>
                      <div class="footer-top-div1-content-h4">Sri Lanka</div>
                      <div class="footer-top-div1-content-h5">2023</div>
                      
                </div>
              </div>
              <div class="footer-top-div2">
                  <div class="footer-topic">Quick links</div>
                  <div class="footer-text">Home</div>
                  <div class="footer-text">Sectors</div>
                  <div class="footer-text">Help</div>
              </div>
              <div class="footer-top-div3">
                <div class="footer-topic">Our company</div>
                <div class="footer-text">About us</div>
                <div class="footer-text">Privercy policy</div>
                <div class="footer-text">Terms and conditions</div>
              </div>
              <div class="footer-top-div4">
                <div class="footer-topic">Download our app</div>
                <div ><img class="apps" src="images/gooogle play.png"></div>
                <div ><img class="apps-appl" src="images/appl.png"></div>
              </div>
          </div>
          
          <div class="footer-bottom">2023 INFINITYJOBS PVT(Ltd)-All right recived</div>
      </div>
    </div>

  </body>
  </html>