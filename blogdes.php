<!-- db connection -->
<?php

    include_once 'db.php';

?>

<title>BPTT- BLOG DETAILS</title>

  <!-- Navbar section -->
   <?php include "header.php"?>
  <main  class="container margin-x">

    <section>
    <?php
        if(isset($_GET['id'])) {
          $id = $_GET['id'];
          $sqld = "SELECT * FROM blog WHERE id=$id";
          $resultd = mysqli_query($conn, $sqld);
          $row = mysqli_fetch_assoc($resultd);
      }
      if(isset($row)) {
        echo "
          <div class='fish-details card mb-3'>
            <div class='row g-0'>
            <div class='text-center'>
              <h1 class='page-header mt-4 '>".$row['b_title']."</h1>
            </div>
                <div class='align-self-center pe-2' data-aos='fade-down' >
                    <img src=".$row['b_image']." class='img-fluid service-img' alt='".$row['b_title']."' >
                </div>
                <div class=''>
                  <div class='card-body' data-aos='slide-up' >
                    <p>".$row['b_long_des']."</p>
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
