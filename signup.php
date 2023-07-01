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
      .candidate-register{
       
        display:flex;
        flex-direction:row;
        justify-content:space-evenly;
        margin:50px;
        padding:30px;
      }
      .candidate-register-left{
        
        width:400px;
        height:600px;
      }
      .candidate-register-left-h1{
        margin-top:0px;
        color:rgb(13, 33, 86);
        font-size:30px;
        font-weight:bold;
      }
      .candidate-register-left-login{
        background-color: #f5fafd;
        padding:10px;
        border:2px rgb(4, 4, 52) solid;
        border-radius:10px;
      }
      .candidate-login-username{
        font-size:20px;
        color:rgb(6, 6, 85);
      }
      .candidate-login-username-input{
        height:35px;
        width:350px;
        border-radius:4px;
        border:2px rgb(147, 147, 147) solid;
      }
      .candidate-login-username-input:hover{
        transform: scale(1.03);
            transition-duration: 0.2s;
      }
      .candidate-login-password{
        font-size:20px;
        color:rgb(6, 6, 85);
      }
      .candidate-login-password-input{
        height:35px;
        width:350px;
        border-radius:4px;
        border:2px rgb(147, 147, 147) solid;
      }
      .candidate-login-password-input:hover{
        transform: scale(1.03);
            transition-duration: 0.2s;
      }
      .candidate-login-bottom-div{
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
        color:rgb(78, 83, 84);
      }
      
      .login-image{
        height:100px;
        cursor: pointer;
      }
      .candidate-register-right{
      
        width:500px;
        
        display:flex;
        flex-direction:column;
        

      }
      .candidate-register-right-h1{
        margin-top:0px;
        margin-bottom:21px;;
        color:rgb(13, 33, 86);
        font-size:30px;
        font-weight:bold;


      }
      .candidate-register-right-form{
       padding-top:15px;
        display:flex;
        flex-direction:column;
        background-color: #f5fafd;
        padding-left:20px;
        border:2px black solid;
        border-radius:10px;
      }
      .candidate-register-criteria{
        font-size: 20px;
        color:rgb(10, 2, 57);
        font-weight: 500;
      }
      .candidate-register-criteria-input{
        height:35px;
        width:350px;
        border:2px rgb(145, 142, 142) solid;
        border-radius:5px;

      }
      .candidate-register-criteria-input:hover{
        transform: scale(1.05);
            transition-duration: 0.2s; 

      }
      .gender{
        display:flex;
        flex-direction: row;
      }
      .candidate-register-bottom{
        margin-top: 20px;;
        display:flex;
        flex-direction:row;
      }
      
      .candidate-register-bottom-right{
        display:flex;
        flex-direction:row;
        
        align-items: center;
        margin-right:20px;

}
.candidate-register-button{
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
.candidate-register-button:hover{
  transform: scale(1.05);
            transition-duration: 0.2s; 
            cursor: pointer;
}
.candidate-register-criteria-checkbox-div{
  display:flex;
  flex-direction: row;
  margin: 0;
 
}
.gender-type{
  color:rgb(72, 59, 59);
  font-size:18px;
}
input[type=file]{
  
  width:430px;
  padding:10px;
  border:2px rgb(120, 5, 109) solid;
}
input[type=file]::file-selector-button {
  margin-right: 20px;
  border: none;
  background: #134dc9;
  padding: 10px 20px;
 
  border-radius: 10px;
  color: #fff;
  cursor: pointer;
  transition: background .2s ease-in-out;
}

input[type=file]::file-selector-button:hover {
  background: #0d45a5;
}
.error{
  font-size:15px;
  color:red;
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
           <!-- <a href="login.php"> <button class="header-right-button-login">LOGIN</button></a>      
           <p class="already-have-account">Already have an Account?</P>   
         <a href="register.html"><button class="header-right-button-register">REGISTER</button></a>-->
                          
      </div>
          </div>

      
          <!--end of header-->

         <!--candidate register-->
         <p class="reg-type">Job seeker Account</p>
         
         <div class="candidate-register">
          <form action="include/login.inc.php" method = "POST">

          <div class="candidate-register-left">
            
            <p class="candidate-register-left-h1">LOGIN</p>
            <div class="candidate-register-left-login">
              <p class="candidate-login-username">User name or E-mail address</p>
              <input class="candidate-login-username-input" type="text" placeholder="E-mail/Username" name="uid">

              <p class="candidate-login-password">Password</p>
              <input class="candidate-login-password-input" type="password" placeholder="Password" name="pwd">
              
              <div class="candidate-login-bottom-div">
                <button class="submit-login" type="submit" name="submit">LOGIN</button>
                <P CLASS="password-reset">Forgot Passsword?</P>
              </div>
              <p class="other-login-h1">OR</p>
              <p class="other-login-h2">Use your social networks to sign in</p>
              <div class="other-login-image"><img class="login-image" src="images/login.png"> </div>
              

            </div>
          
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

<!--finish login part-->
        <form action="include/signup.inc.php" method="post">
          <div class="candidate-register-right">
           
            <p class="candidate-register-right-h1">REGISTER</p>
            <div class="candidate-register-right-form">
            
             <p class="candidate-register-criteria" >Your full name</p>
             <input type="text" class="candidate-register-criteria-input" name="name" required>

             <p class="candidate-register-criteria">Phone number</p>
             <input type="tel" class="candidate-register-criteria-input" name="tel"  required>

             <p class="candidate-register-criteria">Your Hometown</p>
             <input type="text" class="candidate-register-criteria-input" name="city" required>

             <p class="candidate-register-criteria">E-mail Address</p>
             <input type="email" class="candidate-register-criteria-input" name="email"  required>

             <p class="candidate-register-criteria">Enter A Username</p>
             <input type="text" class="candidate-register-criteria-input" name="uid"  required>

             <p class="candidate-register-criteria">Password</p>
             <input type="password" class="candidate-register-criteria-input" placeholder="Password" name="pwd"  required>

             <p class="candidate-register-criteria">Confirm Password</p>
             <input type="password" class="candidate-register-criteria-input"  placeholder="Password" name="pwdrepeat"  required >
              
             <p class="candidate-register-criteria">Your Gender</p>
             <!--<input type="text" class="candidate-register-criteria-input"  placeholder="gender" name="gender"  required >-->
             <div class="gender-type" required>
              <input type="radio" id="male" name="gender" value="male" >
              <label for="male">Male</label><br>
              
              
              <input type="radio" id="female" name="gender" value="female" >
              <label for="female">Female</label><br>
          
            </div>
             <p class="candidate-register-criteria">CV</p>
             <input type="file" name="pdf_file" accept=".pdf" >
             <div class="candidate-register-bottom">
              <div class="candidate-register-bottom-right">
                <button type="submit" class="candidate-register-button" name="submit">REGISTOR</button>
              </div>
              <div class="candidate-register-bottom-left">
                <div class="candidate-register-criteria-checkbox-div">
                <input type="checkbox" required> <p class="candidate-register-criteria" > I Accept the<span style="color:red;cursor: pointer;font-size:16px;"  > USER AGREEMENT</span></p>
              </div>
              <div class="candidate-register-criteria-checkbox-div">
                <input type="checkbox"  > <p class="candidate-register-criteria">Receive jobs by E- mail</p>
              </div>

              </div>
              

             </div>
             <p class="other-login-h1">OR</p>
              <p class="other-login-h2">Use your social networks to sign in</p>
              <div class="other-login-image"><img class="login-image" src="images/login.png"> </div>
             
             
            
            </div>
           
          </div>
        </form>
        <?php
    if(isset ($_GET["error"])){
        if ($_GET["error"] == "emptyinput"){
            echo'<div class="error">Fill all fields</div>';
        }elseif($_GET["error"] == "invaliduid"){
            echo'<div class="error">invalid username</div>';
    }
        elseif($_GET["error"] == "invalidemail"){
            echo'<div class="error">invalid email</div>';
    }
        elseif($_GET["error"] == "passworddontmatch"){
            echo'<div class="error">Passwords not match</div>';
    }
        elseif($_GET["error"] == "stmtfailed"){
            echo'<div class="error">Something went wrong </div>';
    }
        elseif($_GET["error"] == "none"){
            echo'<div class="error">Account created </div>';
    }
        elseif($_GET["error"] == "usernametaken"){
            echo'<div class="error">Username already exixt </div>';
    }
}
?>
         </div>
        
         <!--end of candidate registor-->
   

  <!--horizontel line-->
          <hr class="hrs">

      <!--footer-->
      <?php include_once 'footer.php';
?>