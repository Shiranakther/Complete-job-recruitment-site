<?php
include_once"config.php"

?>

<?php
$cname=$_POST["Company_Name"];
$fname=$_POST["Full_name"];
$pnumber=$_POST["Phone_number"];
$email=$_POST["Email"];
$username=$_POST["Username"];
$password=$_POST["Password"];

$sql="INSERT INTO recruiterinfo (Emp_ID,Company_name,Full_name,Phone_number,Email,Username,PW)values('','$cname','$fname','$pnumber','$email','$username','$password')";

if(mysqli_query($conn,$sql)){

echo"<script>alert('record incertionsuccesfull')</script>";
header("Location:employer_reg.php");
}
else
{
echo"<script>alart('inseraction error')</script>";

}
mysqli_close($conn);
