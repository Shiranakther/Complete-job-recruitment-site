<?php
include_once("config.php")

?>
<?php
 $jobTitle = $_POST['job_title'];
 $jobDescription = $_POST['job_description'];
 $requirements = $_POST['requirements'];
 $salary = $_POST['salary'];
 $location = $_POST['location'];
 $employmentType = $_POST['employment_type'];
 $applicationEmail = $_POST['application_email'];

 $sql="INSERT INTO job(job_id,job_title,job_description,requirements,salary,loc,employment_type,application_email)VALUE('','$jobTitle','$jobDescription','$requirements','$salary','$location','$employmentType','$applicationEmail')";

 if(mysqli_query($conn,$sql)){

    echo"<script>alert('record incertionsuccesfull')</script>";
    header("Location:employer.php");
    }
    else
    {
    echo"<script>alart('inseraction error')</script>";
    }
    mysqli_close($conn);

?>
