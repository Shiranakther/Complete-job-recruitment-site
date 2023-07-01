<?php include_once 'header.php'
?>
          <!--end of header-->

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
    <!--end of find job-->

    <!--Browse companies by industry-->
    <div class="company-by-industry">
      <div class="company-by-industry-h1">Browse companies by Industry</div>
      <div class="company-by-industry-companies">
        <div  class="company-by-industry-companies-div">
          <div class="company-by-industry-companies-div-image">
            <img class="industry-image" src="images/it.png">
          </div>
          <div class="company-by-industry-companies-div-h2">
            Information technology
          </div>
        </div>
        <div  class="company-by-industry-companies-div">
          <div class="company-by-industry-companies-div-image">
            <img class="industry-image" src="images/engineering.png">
          </div>
          <div class="company-by-industry-companies-div-h2">
            Engineering/Construction
          </div>
        </div>
        <div  class="company-by-industry-companies-div">
          <div class="company-by-industry-companies-div-image">
            <img class="industry-image" src="images/digital-marketing.png">
          </div>
          <div class="company-by-industry-companies-div-h2">
            Digital Marketing
          </div>
        </div>
        <div  class="company-by-industry-companies-div">
          <div class="company-by-industry-companies-div-image">
            <img class="industry-image" src="images/health.png">
          </div>
          <div class="company-by-industry-companies-div-h2">
            Healthcare
          </div>
        </div>
        <div  class="company-by-industry-companies-div">
          <div class="company-by-industry-companies-div-image">
            <img class="industry-image" src="images/automobile.png">
          </div>
          <div class="company-by-industry-companies-div-h2">
            Automobile
          </div>
        </div>
        <div  class="company-by-industry-companies-div">
          <div class="company-by-industry-companies-div-image">
            <img class="industry-image" src="images/agriculture.png">
          </div>
          <div class="company-by-industry-companies-div-h2">
            Agriculture
          </div>
        </div>      
      </div>
      <button class="see-more-industry-button">See More</button>

    </div>
     <!--end of Browse companies by industry-->

    <!--start of populer companies-->
    <div class="populer-companies">
      <div class="populer-companies-h1">Populer companies</div>
      <div class="populer-companies-div">
        <div class="populer-companies-div-companies">
          <div class="populer-companies-div-companies-image">
            <img class="populer-company-image" src="images/keells.png">
          </div>
          <div class="populer-companies-div-companies-description">JK marketing Pvt(Ltd) </div>
        </div>
        <div class="populer-companies-div-companies">
          <div class="populer-companies-div-companies-image">
            <img class="populer-company-image" src="images/Daraz.png">
          </div>
          <div class="populer-companies-div-companies-description">Daraz Pvt(Ltd)</div>
        </div>
        <div class="populer-companies-div-companies">
          <div class="populer-companies-div-companies-image">
            <img class="populer-company-image" src="images/dialog.png">
          </div>
          <div class="populer-companies-div-companies-description">Dialog Axiata Pvt(Ltd)</div>
        </div>
        <div class="populer-companies-div-companies">
          <div class="populer-companies-div-companies-image">
            <img class="populer-company-image" src="images/asiri.png">
          </div>
          <div class="populer-companies-div-companies-description">Asiri Healthcare Pvt(Ltd)</div>
        </div>
      </div>
    </div>
    <!--End of populer companies-->
  <!--horizontel line-->
          <hr class="hrs">

      <!--footer-->
      <?php include_once 'footer.php'
?>