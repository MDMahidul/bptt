<!-- db connection -->
<?php

    include_once 'db.php';

?>


    <title>BPTT-BLOG</title>
  <!-- Navbar section -->
  <?php include "header.php"?>
<main  class="margin-x">
<div class="container mt-3 py-5">
  <?php
            $sql = "SELECT * FROM blog ORDER BY id DESC";
            $result = mysqli_query($conn, $sql);
            
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
                    echo "
                    <div class='card mb-3' data-aos='slide-up'>
                    <div class='row' >
                        <div class='col-md-3 my-auto'>
                          <img id='blog-img' src=".$row['b_image']." class='img-fluid rounded-start p-2 rounded' alt=''>
                        </div>
                        <div class='col-md-9'>
                          <div class='card-body blog'>
                            <h5 class='card-title' id='blog-title'>".$row['b_title']."</h5>
                            <p class='card-text' id='blog-body'>".$row['b_long_des']."</p>
                            <a href='blogdes.php?id=".$row['id']."&".$row['b_title']."' class='btn btn-primary read-more'>READ MORE</a>
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
</main>
<?php include "footer.php" ?>
