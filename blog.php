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
    <title>BPTT-Blog</title>
  </head>
<body>
  <!-- Navbar section -->
  <?php include "header.php"?>
<!-- blog page modal -->
<main  class="margin-x">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg  modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel blog-modal-title"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="text-center">
        <img id="modal-image" src="" alt="Modal Image" class="w-75 mb-4">
       </div>
        <p id="modal-description" class=""></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->
<div class="container mt-3 py-5">
 <div class="row" data-aos="slide-up">
  <?php
            $sql = "SELECT * FROM blog";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <div class='card-group '>
                    <div class='card mb-3'>
                        <div class='col-md-4 my-auto '>
                          <img id='blog-img' src=".$row['b_image']." class='img-fluid rounded-start p-3 rounded' alt='>
                        </div>
                        <div class='col-md-8'>
                          <div class='card-body blog'>
                            <h5 class='card-title' id='blog-title'>".$row['b_title']."</h5>
                            <p class='card-text' id='blog-body'>".$row['b_long_des']."</p>
                            <button data-bs-toggle='modal' data-bs-target='#exampleModal' class='btn btn-primary read-more '>READ MORE</button>
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
</div>
</main>
<!-- end -->
<?php include "footer.php" ?>

      <script src="js/blog.js"></script>
<script src="js/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <!-- aos lib -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({ offset: 200, duration: 400, once:true });
  </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>
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
<!-- blog page modal -->
<main  class="margin-x">

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg  modal-dialog-scrollable">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel blog-modal-title"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="text-center">
        <img id="modal-image" src="" alt="Modal Image" class="w-75 mb-4">
       </div>
        <p id="modal-description" class=""></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" id="close">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- modal end -->
<div class="container mt-3 py-5">
 <div class="row">
  <div class="col-md-6 col-12" data-aos="slide-right">
    <div class="card-group ">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4 my-auto ">
            <img id="blog-img" src="img/blog/bali.jpg" class="img-fluid rounded-start p-3 rounded" alt="...">
          </div>
          <div class="col-md-8">
            <div class="card-body blog">
              <h5 class="card-title" id="blog-title">Travel to Bali</h5>
              <p class="card-text" id="blog-body">One of the most well-liked travel locations in Southeast Asia is Bali, which serves as a hub for yogis, hippies, and digital nomads. When I started going in 2010, it was well-liked, and popularity has only grown since then.<br><br>
  
                Despite the fact that some areas of Bali experience overtourism (I'm looking at you, Kuta Beach), there are still vast areas of the island where you can avoid the crowds and take in the picturesque scenery.<br><br>
                
                Whatever your interests or budget, there are a ton of fantastic things to see and do on this island. Popular activities in Bali include hiking, surfing, tanning, discovering the local cuisine, taking a cooking class, spotting wildlife, visiting hot springs, and simply unwinding.One of the most well-liked travel locations in Southeast Asia is Bali, which serves as a hub for yogis, hippies, and digital nomads. When I started going in 2010, it was well-liked, and popularity has only grown since then.<br><br>
  
                Despite the fact that some areas of Bali experience overtourism (I'm looking at you, Kuta Beach), there are still vast areas of the island where you can avoid the crowds and take in the picturesque scenery.<br><br>
                
                Whatever your interests or budget, there are a ton of fantastic things to see and do on this island. Popular activities in Bali include hiking, surfing, tanning, discovering the local cuisine, taking a cooking class, spotting wildlife, visiting hot springs, and simply unwinding.</p>
              <button data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-primary read-more ">READ MORE</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 </div>
  </div>
</div>
</main>
<!-- end -->
<?php include "footer.php" ?>

      <script src="js/blog.js"></script>
<script src="js/app.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
  <script
    src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js"
    integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
  ></script>
  <!-- aos lib -->
  <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init({ offset: 200, duration: 400, once:true });
  </script>
  <script src="js/bootstrap.min.js"></script>
  </body>
</html>