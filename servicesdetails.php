<!-- db connection -->
<?php

    include_once 'db.php';

?>

    <title>BPTT- SERVICES DETAILS</title>

  <!-- Navbar section -->
   <?php include "header.php"?>
  <main  class="margin-x">

    <section>
    <?php
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM services WHERE id = $id"; 
        $result = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($result);
    }

    if(isset($row)) {
        echo "
            <div class='fish-details card mb-3'>
                <div class='row g-0'>
                    <div class='text-center'>
                        <h1 class='page-header mt-4'>".$row['s_title']."</h1>
                    </div>
                    <div class='col-md-5 align-self-center pe-2'>
                        <img src='".$row['s_image_2']."' class='img-fluid service-img' alt='".$row['s_title']."'>
                    </div>
                    <div class='col-md-7'>
                        <div class='card-body'>
                            <p>".$row['s_long_des']."</p>
                            <form action='order.php' method='post'>
                                <a class='btn btn-primary' type='submit' href='appointment.php'>BOOK APPOINTMENT</a>
                                <input type='hidden' name='id' value='".$row['id']."'/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        ";
    }else{
      echo "nothign found";
    }
?>
    </section>

  </main>
   <!-- footer -->
   <?php include "footer.php"?>
