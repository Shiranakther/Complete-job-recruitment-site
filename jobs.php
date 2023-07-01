

<?php include_once 'header.php';
?>

  <!--find job part-->

  <div class="find-job">
    <div class="find-job-h1">FIND THE JOB THAT FITS YOUR LIFE</div>
    <div class="find-job-h2">We offer thousends of job veconcies right now</div>
    <form method="post" action="searchitems.php">
            <div class="find-job-h3">
                <input class="find-job-h3-search1" type="text" placeholder="Job Title,Keyword,Company" name="search">
                <input class="find-job-h3-search2" type="text" placeholder="Location"  name="search"> 
                <button class="find-job-h3-search3" type="submit" name="submit"> Search</button>
                
            </div> </form>
</div>
  <!--Jobs center -->

  <div class="jobs-center">
    

      <div class="jobs-center-left">
 
      

        <p class="jobs-center-topic">Featured jobs</p>
       <a href="job-application.php"> <div class="jobs-center-left-job-position" >

          <div class="jobs-center-left-job-position-left"><img class="jobs-center-left-job-position-left-image" src="images/jobs-mobitel.jpg"></div>
          <div class="jobs-center-left-job-position-center">
              <div class="job-position">Manager-Radio Network Planing</div>
              <div class="company-name">Mobitel(pvt)Ltd</div>
              <div class="location"><img class="job-location" src="images/location.png"> Colombo</div>
          </div>
          <div class="jobs-center-left-job-position-right">
            <div class="expires-on">Expires on</div>
              <div class="expire-date">2023-07-16</div>
               <button class="job-type">Full time</button>                         
          </div>

        </div>
        </a>
        <div class="jobs-center-left-job-position"  >

          <div class="jobs-center-left-job-position-left"><img class="jobs-center-left-job-position-left-image" src="images/keells-logo.jpg"></div>
          <div class="jobs-center-left-job-position-center">
              <div class="job-position">Cashier</div>
              <div class="company-name">Keells Supermarket</div>
              <div class="location"><img class="job-location" src="images/location.png">Colombo</div>
          </div>
          <div class="jobs-center-left-job-position-right">
            <div class="expires-on">Expires on</div>
              <div class="expire-date">2023-10-12</div>
              <button class="job-type">Full time</button>
          </div>
        </div>
        <div class="jobs-center-left-job-position">


          <div class="jobs-center-left-job-position-left"><img class="jobs-center-left-job-position-left-image" src="images/sisco-logo.png"></div>
          <div class="jobs-center-left-job-position-center">
              <div class="job-position">Full Stack Developer</div>
              <div class="company-name">SISCO Labs</div>
              <div class="location"><img class="job-location" src="images/location.png"> Colombo</div>
          </div>
          <div class="jobs-center-left-job-position-right">
            <div class="expires-on">Expires on</div>
              <div class="expire-date">2023-08-15</div>
              <button class="job-type">Full time</button>
          </div>
        </div>
        <div class="jobs-center-left-job-position" >

          <div class="jobs-center-left-job-position-left"><img class="jobs-center-left-job-position-left-image" src="images/jobs-palawatte.jpg"></div>
          <div class="jobs-center-left-job-position-center">
              <div class="job-position">MCC Supervisor-FMCG</div>
              <div class="company-name">Palawatte Dairy</div>
              <div class="location"><img class="job-location" src="images/location.png">Anuradhapure</div>
          </div>
          <div class="jobs-center-left-job-position-right">
            <div class="expires-on">Expires on</div>
              <div class="expire-date">2023-09-12</div>
              <button class="job-type">Full time</button>
          </div>
          
        </div>
        
        <div class="more-jobs">
          <button class="more-jobs-buttons"><<</button>
          <button class="more-jobs-buttons">1</button>
          <button class="more-jobs-buttons">2</button>
          <button class="more-jobs-buttons">3</button>
          <button class="more-jobs-buttons">4</button>
          <button class="more-jobs-buttons">5</button>
          <button class="more-jobs-buttons">>></button>
        </div>
        
      </div>
      <div class="jobs-center-right">
        <p class="jobs-center-topic">Jobs by Category</p>
        <div class="jobs-center-right-category-main">

          <div class="jobs-center-right-category-main-div">Business Management</div>
          <div class="jobs-center-right-category-main-div">IT-Software/Internet</div>
          <div class="jobs-center-right-category-main-div">Customet Service/ Call Center</div>
          <div class="jobs-center-right-category-main-div">FMCG/Food Industry</div>
          <div class="jobs-center-right-category-main-div">Media/Advertising</div>
          <div class="jobs-center-right-category-main-div">Retail/Fashion</div>
          <div class="jobs-center-right-category-main-div">Administration/Secretarial</div>
          <div class="jobs-center-right-category-main-div">Engieering/Manufacturing</div>
          <div class="jobs-center-right-category-main-div">Digitel Marketing</div>
          <div class="jobs-center-right-category-main-div">Delivery/Driving</div>
          <div class="jobs-center-right-category-main-div" >Other</div>
          

          <button class="more-category">More</button>
       
        </div>
      </div>
    </div>
    <hr class="hrs">

  <!--footer-->
 
              
  
  <?php include_once 'footer.php';
?>