<!DOCTYPE html>
<html>
<head>
<title>profile</title>
<?php
session_start();
?>




</head>



<body>

<p> Username :<?php  
              if(isset($_SESSION["username"]))
              {
                echo $_SESSION["username"]."!";
              }else{
                echo 'user!';
              } ?> 

</p>


<p> Company name :<?php  
              if(isset($_SESSION["Companyname"]))
              {
                echo $_SESSION["Companyname"];
              }else{
                echo 'user!';
              } ?> 



</p>

<p> Full name :<?php  
              if(isset($_SESSION["Full_name"]))
              {
                echo $_SESSION["Full_name"];
              }else{
                echo 'user!';
              } ?> 


</p>


<p> phone number :<?php  
              if(isset($_SESSION["phone_number"]))
              {
                echo $_SESSION["phone_number"];
              }else{
                echo 'user!';
              } ?> 


</p>

<p> Email :<?php  
              if(isset($_SESSION["Email"]))
              {
                echo $_SESSION["Email"];
              }else{
                echo 'user!';
              } ?> 


</p>





</body>




</html>