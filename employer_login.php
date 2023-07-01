<?php

include_once"config.php"

?>
<?php
session_start();


if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $username=$_POST["username"];
   $password=$_POST["pword"];

$sql=" SELECT *FROM recruiterinfo WHERE Username='$username' AND PW='$password' ";
$result=mysqli_query($conn,$sql);
if ($result === false) {
    
    echo "Query error: " . mysqli_error($conn);
    
} 
else if(mysqli_num_rows($result)==1)
{
    $row = mysqli_fetch_assoc($result);
    $_SESSION["loggedin"]=true;
    $_SESSION["username"]= $username;
    $_SESSION["Companyname"] = $row["Company_name"];
    $_SESSION["Full_name"] = $row["Full_name"];
    $_SESSION["phone_number"] = $row["Phone_number"];
    $_SESSION["Email"] = $row["Email"];


    header("location:employer.php");
}
else
{
    header("location:invaild.html");

}

}

