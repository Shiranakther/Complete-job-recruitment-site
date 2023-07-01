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
         .reg-type{
          background-color: rgb(229, 218, 255);
          color:rgb(94, 104, 119);
          text-align: center;
          font-size:40px;
          font-weight:bold;
          height:80px;
          padding-top:20px;
         }
      .employer-register{
       
        display:flex;
        flex-direction:row;
        justify-content:space-evenly;
        margin:50px;
        padding:30px;
      }
      .employer-register-left{
        
        width:400px;
        height:600px;
      }
      .employer-register-left-h1{
        margin-top:0px;
        color:rgb(13, 33, 86);
        font-size:30px;
        font-weight:bold;
      }
      .employer-register-left-login{
        background-color: #f5fafd;
        padding:10px;
        border:2px rgb(4, 4, 52) solid;
        border-radius:10px;
      }
      .employer-login-username{
        font-size:20px;
        color:rgb(6, 6, 85);
      }
      .employer-login-username-input{
        height:35px;
        width:350px;
        border-radius:4px;
        border:2px rgb(147, 147, 147) solid;
      }
      .employer-login-username-input:hover{
        transform: scale(1.03);
            transition-duration: 0.2s;
      }
      .employer-login-password{
        font-size:20px;
        color:rgb(6, 6, 85);
      }
      .employer-login-password-input{
        height:35px;
        width:350px;
        border-radius:4px;
        border:2px rgb(147, 147, 147) solid;
      }
      .employer-login-password-input:hover{
        transform: scale(1.03);
            transition-duration: 0.2s;
      }
      .employer-login-bottom-div{
        display:flex;
        flex-direction:row;
        margin-top:10px;
        align-items: center;
        justify-content: flex-start;
      }
      .submit-login{
        width:150px;
          height:40px;
          background-color: rgb(4, 87, 146);
          color:white;
          font-size:20px;
          font-weight:bold;
          border:none;
          border-radius:10px;
          box-shadow: 2px 2px rgba(51, 32, 32, 0.8);
      }
      .submit-login:hover
         {
          transform: scale(1.05);
            transition-duration: 0.2s;
            background-color: rgb(5, 50, 92);
          color:white;
          cursor: pointer;
         }
      .password-reset{
        font-size:18px;
          color:rgb(82, 5, 87);
          margin-left:20px;
          text-decoration: underline;
          cursor: pointer; 
      }
      .other-login-h1{
        font-size:25px;
        margin-bottom: 5px;
        font-weight: 900;
        color:rgb(25, 3, 78);
      }
      .other-login-h2{
        font-size:20px; 
        margin-top:0;
        font-weight: 700;
        color:rgb(84, 78, 79);
      }
      
      .login-image{
        height:100px;
        cursor: pointer;
      }
      .employer-register-right{
      
        width:500px;
        
        display:flex;
        flex-direction:column;
        

      }
      .employer-register-right-h1{
        margin-top:0px;
        margin-bottom:21px;;
        color:rgb(13, 33, 86);
        font-size:30px;
        font-weight:bold;


      }
      .employer-register-right-form{
       padding-top:15px;
        display:flex;
        flex-direction:column;
        background-color: #f5fafd;
        padding-left:20px;
        border:2px black solid;
        border-radius:10px;
      }
      .employer-register-criteria{
        font-size: 20px;
        color:rgb(10, 2, 57);
        font-weight: 500;
      }
      .employer-register-criteria-input{
        height:35px;
        width:350px;
        border:2px rgb(145, 142, 142) solid;
        border-radius:5px;

      }
      .employer-register-criteria-input:hover{
        transform: scale(1.05);
            transition-duration: 0.2s; 

      }
      


.employer-register-button{
  width:150px;
          height:40px;
          background-color: rgb(4, 87, 146);
          color:white;
          font-size:20px;
          font-weight:bold;
          border:none;
          border-radius:10px;
          box-shadow: 2px 2px rgba(51, 32, 32, 0.8);

}
.employer-register-button:hover{
  transform: scale(1.05);
            transition-duration: 0.2s; 
            cursor: pointer;
}
.employer-user-agrement-checkbox-div{
  display:flex;
  flex-direction: row;
  margin: 0;
 
}


         

         
        </style>
  </head>
  <body>
      <div>
      <!--header-->
      <div class="header">
          <div class="header-left">
            <img class="header-left-logo" src="logo-02.jpg" alt="no image">
          </div>

          <div class="header-center">
               <a href="home.html"> <div class="header-center-div">HOME</div></a>
                <a href="jobs.html"><div class="header-center-div">JOBS</div></a>
               <a href="companies.html"> <div class="header-center-div">COMPANIES</div></a>
                <a href="help.html"><div class="header-center-div">HELP</div></a>
          </div>

          <div class="header-right">
           <a href="login.html"> <button class="header-right-button-login">LOGIN</button></a>         
          <a href="register.html"><button class="header-right-button-register">REGISTER</button></a>
                          
      </div>
          </div>
          <!--end of header-->

         <!--employer register-->
          <p class="reg-type">Recruiter Account</p>
          
         <div class="employer-register">
          <form  action="employer_login.php" method="post">
          <div class="employer-register-left">
            
            <p class="employer-register-left-h1">LOGIN</p>
            <div class="employer-register-left-login">
              <p class="employer-login-username">User name or E-mail address</p>
              <input class="employer-login-username-input" type="text" placeholder="E-mail/Username" name="username">

              <p class="employer-login-password">Password</p>
              <input class="employer-login-password-input" type="password" placeholder="Password" name="pword">
              
              <div class="employer-login-bottom-div">
                <button class="submit-login" type="submit">LOGIN</button>
                <P CLASS="password-reset">Forgot Passsword?</P>
              </div>
              <p class="other-login-h1">OR</p>
              <p class="other-login-h2">Use your social networks to sign in</p>
              <div class="other-login-image"><img class="login-image" src="images/login.png"> </div>
              

            </div>
            
          </div>
        </form>
       
        <form action="employer_register.php" method="post" >
          <div class="employer-register-right">
           
            <p class="employer-register-right-h1">REGISTER</p>
            <div class="employer-register-right-form">
            
             <p class="employer-register-criteria">Company Name</p>
             <input type="text" class="employer-register-criteria-input" name="Company_Name">

             <p class="employer-register-criteria">Company logo</p>
             <input type="file" class="company-logo" name="Company_logo">  

             <p class="employer-register-criteria">Full name</p>
             <input type="text" class="employer-register-criteria-input" name="Full_name">

             <p class="employer-register-criteria">Phone number</p>
             <input type="tel" class="employer-register-criteria-input" name="Phone_number">

             <p class="employer-register-criteria">E-mail Address</p>
             <input type="email" class="employer-register-criteria-input" name="Email">

             <p class="employer-register-criteria">Enter A Username</p>
             <input type="text" class="employer-register-criteria-input" name="Username">

             <p class="employer-register-criteria">Password</p>
             <input type="password" class="employer-register-criteria-input" placeholder="Password" name="Password">

             <p class="employer-register-criteria">Confirm Password</p>
             <input type="password" class="employer-register-criteria-input"  placeholder="Password">
              
             
            <div class="employer-user-agrement-checkbox-div">
             <input type="checkbox"> <p class="employer-register-criteria">I Accept the<span style="color:red;cursor: pointer;font-size:16px;"> USER AGREEMENT</span></p></div>
             
             
                <button type="submit" class="employer-register-button">REGISTOR</button>
             
              
              

             
             <p class="other-login-h1">OR</p>
              <p class="other-login-h2">Use your social networks to sign in</p>
              <div class="other-login-image"><img class="login-image" src="images/login.png"> </div>
             
             
            
            </div>
          </div>
        </form>
          </div>
         </div>
        
        
         <!--end of employer registor-->
   

  <!--horizontel line-->
          <hr class="hrs">

      <!--footer-->
      <div class="footer">
          <div class="footer-top">
              <div class="footer-top-div1">
                <div class="footer-top-div1-image">
                  <img class="award" src="award.webp">
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
                <div ><img class="apps" src="gooogle play.png"></div>
                <div ><img class="apps-appl" src="appl.png"></div>
              </div>
          </div>
          
          <div class="footer-bottom">2023 INFINITYJOBS PVT(Ltd)-All right recived</div>
      </div>
    </div>

  </body>
  </html>