<?php
      include_once  'header.php'
      ?>
      <?php
 require_once 'include/search_results.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    <title>JOB-RESULT</title>
    
</head>
<style>
      
 
      
      .search-result{
        height:100px;
        background-color: rgb(233, 241, 247);
        margin-bottom:20px;
      }
      .search-result-text{
       font-size:50px; 
       font-weight:bold;
       color: rgb(8, 77, 130);
       padding-top:10px;
       
      }
      .result-container{
        border:2px solid black;
      }
      .jobs-center-left-job-position{
        margin-left:350px;
      }
      
    </style>
<body>

<div class="search-result"> <center><div class="search-result-text">SEARCH RESULTS</div></center></div>

 
 <div class="result-main">
  <?php
if (count($results) > 0) {
    foreach ($results as $row) {
        echo '<div class="jobs-center-left-job-position">';
        
        echo '<div class="jobs-center-left-job-position-left">';
        echo '<img class="jobs-center-left-job-position-left-image" src="" alt="No image Found">';
        echo '</div>';

        echo '<div class="jobs-center-left-job-position-center">';
        echo '<div class="job-position">'. $row['jobtitle'] .'</div>';
        echo '<div class="company-name">'. $row['companyname'] .'</div>';
        echo '<div class="location">';
        echo '<img class="job-location" src="images/location.png">'. $row['location'] .'</div>';
        echo '</div>';

        echo '<div class="jobs-center-left-job-position-right">';
        echo '<div class="expires-on">Expires on</div>';
        echo '<div class="expire-date">'. $row['expdate'] .'</div>';
        echo '<button class="job-type">'. $row['jobtype'] .'</button>';
        echo '</div>';

        echo '</div>';
    }
} else {
    echo "No results found.";
}
?>
<div>
</body>
</html>



<?php
      include_once  'footer.php'
      ?>