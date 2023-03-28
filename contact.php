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
  <?php include "header.php"?>
   <main  class="margin-x">
    <!-- thank you modal on submit button -->

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Confirmation Messege</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Thank You For Contact US</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- addresses  -->
  <div class="w-75 mx-auto"> 
    <h1 class="contact-header">Visit Us</h1>
    <div class="row  mx-auto mb-3">
    <div class="col-md-6 col-12 block-1 ">
        <div class="mb-5">
            <h5 class="border-bottom mb-3">Our Address</h5>
            <i class="fa-solid fa-location-dot "></i>
            <address class=" d-inline"> 
                BPTT, Hashim Tower, 4th floor, Suite A-4,<br> 205/1A Gulshan-Tejgaon Link Road,Dhaka-1208
            </address>
          </div>
       <div class="mb-5">
        <h5 class="border-bottom mb-3">Get in touch</h5>
        <p class=""><i class="fa-solid fa-phone me-2"></i>+8801914-243061</p>
        <p class=""><i class="fa-solid fa-envelope me-2"></i></i>inquiry@bpttbd.com</p>
       </div>
    </div>
    <div class="col-md-6 col-12 block-4  map-container text-c">
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