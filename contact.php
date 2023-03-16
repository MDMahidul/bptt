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
    <title>BPTT-Contact</title>
</head>
<body>
  <!-- Navbar section -->
  <nav class="navbar navbar-expand-lg bg-light fixed-top">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php"
        ><img src="img/logo.png" alt=""
      /></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="ourservices.php">OUR SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">ABOUT US</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="faq.php">FAQ</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link disabled text-dark" href="#"><i class="fa-solid fa-phone me-2"></i>+88 01914-243061</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <main  class="margin-x">
    <!-- thank you modal on submit button -->

  <!-- Modal -->

  <!-- addresses  -->
  <div class="w-75 mx-auto"> 
    <h1 class="contact-header">Visit Us</h1>
    <div class="row  mx-auto mb-2">
      <div class="col-md-6 col-12 block-1 " data-aos="slide-left">
          <div class="mb-5">
              <h5 class="border-bottom mb-3">Our Address</h5>
              <i class="fa-solid fa-location-dot "></i>
              <address class=" d-inline"> 
                  BPTT, Hasim Tower (4th floor), Suit A-4, <br>Bir Uttam Mir Shawkat Sarak,<br> 205/1AToejgaon Gulshan Link Road 1208 Dhaka, <br>Dhaka Division, Bangladesh.
              </address>
          </div>
        <div class="mb-5">
          <h5 class="border-bottom mb-3">Get in touch</h5>
          <p class=""><i class="fa-solid fa-phone me-2"></i>09611-600500</p>
          <p class=""><i class="fa-solid fa-envelope me-2"></i></i>inquiry@bptt.io</p>
          <p class=""><i class="fa-solid fa-envelope me-2"></i></i>info@bptt.io</p>
        </div>
      </div>
      <div class="col-md-6 col-12 block-4  map-container text-c" data-aos="slide-right">
        <iframe class="responsive-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d228.20799912536305!2d90.41148944390626!3d23.771332124484033!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c75ee3158299%3A0xe7fb8d54825fe7bb!2sOSCL%20-%20Overseas%20Study%20Counseling%20Ltd.!5e0!3m2!1sen!2sbd!4v1677474754730!5m2!1sen!2sbd"></iframe>
      </div>
   
    </div>
  </div>

  </main>
   <?php include "footer.php"?>
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