<!-- db connection -->
<?php

    include_once 'db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <title>Best Price Tours and Ticket</title>
  <style>
     .carousel{
        max-width: 80vw;
    }
    .carousel-indicators li { visibility: hidden; }
  </style>
  <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1343489139762343');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1343489139762343&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-5J2TSTB9C9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-5J2TSTB9C9');
</script>
  

    <!-- Messenger Chat plugin Code -->
    <div id="fb-root"></div>

    <!-- Your Chat plugin code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "117360217966186");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
    </head>
    <body>
  <!-- Navbar section -->
   <?php include "header.php"?>
   
  <header class="mx-auto slider-header">
    <div id="demo" class="carousel slide mx-auto" data-bs-ride="carousel">
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="img/slider/visa.webp" alt="visa" class="d-block" style="width:100%">
          <div class="carousel-caption banner-text">
            <h3 class="dancing-font-banner">best tourism agency in Bangladesh</h3>
            <h1 class="banner-header">Job Visa Services</h1>
            <h5 class="banner-des"></h5>
            <button class="btn btn-primary btn-text" onclick="location.href = 'appointment.php';">BOOK APPOINTMENT</button>
          </div>  
        </div>
        <div class="carousel-item ">
          <img src="img/slider/cabin.webp" alt="airplane" class="d-block" style="width:100%">
          <div class="carousel-caption banner-text">
            <h3 class="dancing-font-banner">best tourism agency in Bangladesh</h3>
            <h1 class="banner-header">Air Ticket Services</h1>
            <h5 class="banner-des"></h5>
            <button class="btn btn-primary btn-text" onclick="location.href = 'appointment.php';">BOOK APPOINTMENT</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slider/migrate.webp" alt="migrate" class="d-block" style="width:100%">
          <div class="carousel-caption banner-text">
            <h3 class="dancing-font-banner">best tourism agency in Bangladesh</h3>
            <h1 class="banner-header">Migration/ Immigration Services</h1>
            <h5 class="banner-des"></h5>
            <button class="btn btn-primary btn-text" onclick="location.href = 'appointment.php';">BOOK APPOINTMENT</button>
          </div>  
        </div>
        <div class="carousel-item ">
          <img src="img/slider/travelvisa.webp" alt="travelvisa" class="d-block" style="width:100%">
          <div class="carousel-caption banner-text">
            <h3 class="dancing-font-banner">best tourism agency in Bangladesh</h3>
            <h1 class="banner-header">Tour Program Coordinate Services</h1>
            <h5 class="banner-des"></h5>
            <button class="btn btn-primary btn-text" onclick="location.href = 'appointment.php';">BOOK APPOINTMENT</button>
          </div>
        </div>
      </div>
      
      <!-- Left and right controls/icons -->
      <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>
    </div>
    
  </header>
  
    <!-- our services section -->
    <section class="our-services" >
      <div class="feature-text text-center  mx-auto mb-4">
        <h3 class="section-header">Our Services</h3>
        <p class=""> Best Price Tours and Ticket-BPTT is a company that specializes in providing recruitment services for foreign workers. Our company has been in operation for several years and has helped many businesses to fill various positions with skilled and qualified foreign workers. Our primary goal is to assist businesses to bridge the gap in the labor market by providing a pool of skilled workers who are ready to work in various sectors. </p>
      </div>
      <div class="row" data-aos="slide-up">
        <?php
            $sql = "SELECT * FROM services";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <div class='col-md-6 col-lg-6 col-xl-3 col-12 mb-3 mt-3'>
                    <div class='card'>
                      <img src=".$row['s_image']." class='card-img-top' alt='migration' />
                      <div class='card-body'>
                        <h5 class='card-title'>".$row['s_title']."</h5>
                        <p class='card-text'>".$row['s_short_des']."</p>
                       <div class='d-flex justify-content-between align-itmes-center'>
                        <a class='btn btn-primary' href = 'appointment.php';>BOOK APPOINTMENT</a>
                        <a class='outline-btn btn ' href = 'servicesdetails.php?id=".$row['id']."&".$row['s_title']."'>LEARN MORE</a>
                       </div>
                      </div>
                    </div>
                  </div>
                    ";
                  }
                }else {
                    echo "0 results";
                }
        ?>
        
      </div>
    </section>
    <!-- why choose us section -->
    <section class=" mt-5 ">
      <div class="row mx-auto about-us" data-aos="slide-up">
        <div class="col-sm-12 col-md-12 col-lg-6" >
          <h3 class="section-header">Why Choose <span style="color: #2c6532ce;">BPTT</span> ?</h3>
          <p class="ptag-des">There are several reasons why clients should choose BPTT:</p>
          <ul>
          <li><strong>Expertise:</strong> Our team of professionals has extensive experience in the recruitment of foreign workers. We have a deep understanding of the labor market and have developed effective recruitment strategies that have helped us to successfully fill various positions in different sectors.</li>
          <li><strong>Efficiency:</strong> Our recruitment process is efficient and streamlined, ensuring that we fill positions within the shortest possible time. We understand that time is of the essence in the recruitment process, and we strive to deliver results within the shortest possible time.</li>
          <li><strong>Flexibility:</strong> We understand that different businesses have different recruitment needs. We provide our clients with flexible recruitment options that are designed to meet their specific needs. We work closely with our clients to understand their recruitment needs and develop customized solutions that are tailored to their requirements.</li>
          <li><strong>Customer Service:</strong> We place a high premium on customer service. We understand that our clients are the backbone of our business, and we strive to provide them with exceptional service at all times. We work closely with our clients to ensure that we meet their needs and exceed their expectations.</li>
        </div>
          </ul>
        <div class="col-sm-12 col-md-12 col-lg-6 text-center" >
          <img class="w-75 img-fluid" src="img/why.webp" alt="why choose us" />
        </div>
      </div>
    </section>
    <!-- feature jobs -->
       <section class="  feature-jobs">
      <!-- card section -->
      <div class="feature-text text-center  mx-auto mb-4" data-aos="zoom-in" >
        <h3 class="dancing-font">Our Agency's</h3>
        <h3><span style="color: #2c6532ce;">Offerd Job Opportunites</span></h3>
      </div>
      <div class="row autoPlay row-cols-md-12 g-4" data-aos="slide-up">

        <?php
            $sql = "SELECT * FROM job";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <div class='col-12 text-center'>
                      <div class='card job-card'>
                       <img src=".$row['j_image']." class='card-img-top' alt='".$row['j_title']."' />
                        <div class='card-body'>
                          <h4 class='card-title mb-3'>".$row['j_title']."</h4>
                          <a class='outline-btn btn' href='jobdetails.php?id=".$row['id']."&".$row['j_title']."'>LEARN MORE</a>
                        </div>
                      </div>
                    </div>
                    ";
                  }
                }else {
                    echo "0 results";
                }
        ?>  
 
      </div>
    </section>
    <!-- feature trips -->
    <section class=" mt-5 feature-trips">
      <!-- card section -->
      <div class="feature-text text-center  mx-auto mb-4" data-aos="zoom-in">
        <h3 class="dancing-font">Our Agency's</h3>
        <h3><span style="color: #2c6532ce;">Feature Trips</span></h3>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4" id="scroll-content" data-aos="slide-up">
      <?php
            $sql = "SELECT * FROM feature_trips";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <div class='col'>
                        <div class='card'>
                          <img src=".$row['t_image']." class='card-img-top' alt='maldives' />
                          <div class='card-body'>
                            <h5 class='card-title'>".$row['t_title']."</h5>
                            <p class='card-text text-justify'>".$row['t_short_des']."</p>
                            <a class='btn btn-primary' href= 'appointment.php'>BOOK APPOINTMENT</a>
                          </div>
                          </div>
                        </div>
                    ";
                  }
                }else {
                    echo "0 results";
                }
        ?> 
      </div>
    </section>

    <!-- provide pack -->
    <section class=" mt-5">
      <div class="packeges-text text-center mx-auto mb-4" data-aos="zoom-in">
        <h3 class="dancing-font">Our Agency's</h3>
        <h3 class="dancing-font"><span style="color: #2c6532ce;">Provided Packeges</span></h3>
      </div>
      <!--  -->
      <div class="row slider row-cols-md-12 g-4" data-aos="slide-up">
        <div class="col-12 text-center">
          <div class="card packege-card">
            <i class="fa-solid fa-hotel"></i>
            <div class="card-body">
              <h5 class="card-title">Migration/ Immigration</h5>
              <p class="card-text">
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <div class="card packege-card">
             <i class="fa-solid fa-passport"></i>
            <div class="card-body">
              <h5 class="card-title">Job Visa</h5>
              <p class="card-text">
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <div class="card packege-card">
           <i class="fa-solid fa-suitcase-rolling"></i>
            <div class="card-body">
              <h5 class="card-title">Tour Program</h5>
              <p class="card-text">
              </p>
              
            </div>
          </div>
        </div>
        <div class="col-12 text-center">
          <div class="card packege-card">
          <i class="fa-solid fa-plane-departure"></i>
            <div class="card-body">
              <h5 class="card-title">Air Ticket</h5>
              <p class="card-text">
              </p>
              
            </div>
          </div>
        </div>
      </div>
      <!--  -->
    </section>
  <!-- footer -->
  <?php include "footer.php" ?>


  <script src="js/app.js"></script>
</body>
</html>