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
    <title>BPTT-Services</title>
</head>
<body>
  <!-- Navbar section -->
   <?php include "header.php"?>
  <main  class="margin-x">

    <section>
    <?php
        if(isset($_GET['id'])) {
          $id = $_GET['id'];
          $sqld = "SELECT * FROM job WHERE id=$id";
          $resultd = mysqli_query($conn, $sqld);
          $row = mysqli_fetch_assoc($resultd);
      }
      if(isset($row)) {
        echo "
          <div class='fish-details card mb-3'>
            <div class='row g-0'>
            <div class='text-center'>
              <h1 class='page-header mt-4 '>".$row['j_title']."</h1>
            </div>
                <div class='col-md-5 align-self-center pe-2 '>
                    <img src=".$row['j_image']." class='img-fluid service-img' alt='".$row['j_title']."' >
                </div>
                <div class='col-md-7'>
                  <div class='card-body'>
                    <p>".$row['j_des']."</p>
                    <form action='order.php' method='post'>
                    <a class='btn btn-primary' type='submit' href = 'appointment.php'>BOOK APPOINTMENT</a>
                    <input type='hidden' name='id' value='".$row['id']."'/>
                    </form>
                  </div>
                </div>
              
            <div>
          </div>
        ";
    }
            ?>
    </section>

  </main>
   <!-- footer -->
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