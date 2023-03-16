<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" type="image/x-icon" href="img/BPT.png" />
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css" />
  <link rel="stylesheet" href="css/responsive.css" />
  <script src="https://kit.fontawesome.com/0500892bc1.js" crossorigin="anonymous" ></script>
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
  <title>Best Price Tours and Ticket</title>
  <style>
     .carousel{
        max-width: 80vw;
    }
    .carousel-indicators li { visibility: hidden; }
  </style>
  
</head>
<body>
  <!-- Navbar section -->
  <?php include "header.php"?>
  <header class="mx-auto slider-header">
    <div id="demo" class="carousel slide mx-auto" data-bs-ride="carousel">
      <!-- The slideshow/carousel -->
      <div class="carousel-inner">
      <div class="carousel-item active">
          <img src="img/slider/visa.webp" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption banner-text">
            <h3 class="dancing-font-banner">best tourism agency in Bangladesh</h3>
            <h1 class="banner-header">Job Visa Services</h1>
            <h5 class="banner-des"></h5>
            <button class="btn btn-primary btn-text" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
          </div>  
        </div>
        <div class="carousel-item ">
          <img src="img/slider/cabin.webp" alt="Chicago" class="d-block" style="width:100%">
          <div class="carousel-caption banner-text">
            <h3 class="dancing-font-banner">best tourism agency in Bangladesh</h3>
            <h1 class="banner-header">Air Ticket Services</h1>
            <h5 class="banner-des"></h5>
            <button class="btn btn-primary btn-text" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
          </div>
        </div>
        <div class="carousel-item">
          <img src="img/slider/migrate.webp" alt="New York" class="d-block" style="width:100%">
          <div class="carousel-caption banner-text">
            <h3 class="dancing-font-banner">best tourism agency in Bangladesh</h3>
            <h1 class="banner-header">Migration/ Immigration Services</h1>
            <h5 class="banner-des"></h5>
            <button class="btn btn-primary btn-text" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
          </div>  
        </div>
        <div class="carousel-item ">
          <img src="img/slider/travelvisa.webp" alt="Los Angeles" class="d-block" style="width:100%">
          <div class="carousel-caption banner-text">
            <h3 class="dancing-font-banner">best tourism agency in Bangladesh</h3>
            <h1 class="banner-header">Tour Program Coordinate Services</h1>
            <h5 class="banner-des"></h5>
            <button class="btn btn-primary btn-text" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
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
  <main>
    <!-- our services section -->
    <section class="our-services" >
      <div class="feature-text text-center  mx-auto mb-4" data-aos="zoom-in">
        <h3 class="section-header">Our Services</h3>
        <p class=""> Best Price Tours and Ticket-BPTT is a company that specializes in providing recruitment services for foreign workers. Our company has been in operation for several years and has helped many businesses to fill various positions with skilled and qualified foreign workers. Our primary goal is to assist businesses to bridge the gap in the labor market by providing a pool of skilled workers who are ready to work in various sectors. </p>
      </div>
      <div class="row"  data-aos="slide-up">
        <div class="col-md-3 col-12 mb-3 mt-3">
          <div class="card">
            <img src="img/services/migrate.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Migration/ Immigration Services</h5>
              <p class="card-text">BPTT provides migration and immigration services to foreign workers who are interested in working in various countries.</p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>

        <div class="col-md-3 col-12 mb-3 mt-3">
          <div class="card">
            <img src="img/services/job.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Job Visa Services</h5>
              <p class="card-text"> BPTT also provides job visa services to foreign workers who are interested in working in various countries. </p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12 mb-3 mt-3">
          <div class="card">
            <img src="img/services/travel.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Air Ticket Services</h5>
              <p class="card-text">BPTT provides air ticket services to our clients. We work with reputable airlines to ensure that our clients get the best deals on air tickets.</p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
        <div class="col-md-3 col-12 mb-3 mt-3">
          <div class="card">
            <img src="img/services/travelcard.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tour Program Coordinate Services</h5>
              <p class="card-text">BPTT provides tour program coordination services to our clients. We work with reputable airlines to ensure that our clients get the best deals. </p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- why choose us section -->
    <section class="  ">
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
          <img class="w-75 img-fluid" src="img/why.webp" alt="" />
        </div>
      </div>
    </section>
    <!-- feature jobs -->
    <section class="  feature-trips">
      <!-- card section -->
      <div class="feature-text text-center  mx-auto mb-4" data-aos="zoom-in" >
        <h3 class="dancing-font">Our Agency's</h3>
        <h3><span style="color: #2c6532ce;">Offerd Job Opportunites</span></h3>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4" id="scroll-content"  data-aos="slide-up">
        <div class="col">
          <div class="card">
            <img src="img/job/driver.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Driving</h5>
              <p class="card-text"></p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/job/nurse.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Nursing</h5>
              <p class="card-text"></p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/job/tech.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Technician </h5>
              <p class="card-text"></p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/job/welder.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Welder</h5>
              <p class="card-text"></p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- feature trips -->
    <section class="  feature-trips">
      <!-- card section -->
      <div class="feature-text text-center  mx-auto mb-4" data-aos="zoom-in">
        <h3 class="dancing-font">Our Agency's</h3>
        <h3><span style="color: #2c6532ce;">Feature Trips</span></h3>
      </div>
      <div class="row row-cols-1 row-cols-md-4 g-4" id="scroll-content" data-aos="slide-up">
        <div class="col">
          <div class="card">
            <img src="img/trips/maldives.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Maldives</h5>
              <p class="card-text">Maldives is a popular tourist destination, known for its pristine beaches, crystal-clear waters, and vibrant marine life. Tourists from all over the world visit here to relax, and experience the natural beauty. With luxurious resorts, and cultural experiences, there is something for every type of traveler.</p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/trips/eiffel.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Paris</h5>
              <p class="card-text">The Eiffel Tower is a popular tourist destination in Paris, France. It was built in 1889 and stands at 324 meters tall. Visitors can take the elevator or stairs to the top and enjoy stunning views of the city. The tower attracts millions of tourists each year, making it one of the most visited landmarks in the world.</p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/trips/venice.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Venice </h5>
              <p class="card-text">Venice is a popular tourist destination known for its beautiful canals, stunning architecture, and rich history. Visitors can take gondola rides, visit historic landmarks like St. Mark's Basilica and the Doge's Palace, and explore the charming streets and shops of the city. This is one of the most beautiful place in the world.</p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img src="img/trips/kuala.webp" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Petronas Towers</h5>
              <p class="card-text">The Petronas Towers in Kuala Lumpur, Malaysia are a popular tourist destination, attracting millions of visitors each year. Visitors can take a guided tour of the towers. The towers are also surrounded by a park, shopping mall, and other attractions, making it a great place to spend the day.</p>
              <button class="btn btn-primary" onclick="location.href = 'appointment.php';">BOOK YOUR APPOINTMENT</button>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- provide pack -->
    <section class=" ">
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
  </main>
  <!-- footer -->
  <?php include "footer.php" ?>
  

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer" ></script>
  <script src="js/app.js"></script>
  <!-- aos lib -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({ offset: 200, duration: 400, once:true });
  </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
