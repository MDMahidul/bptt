
  <!-- db connection -->
<?php

include_once 'db.php';

?>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php 
    if(isset($_POST['submit'])){
        $name = $_POST['c_name'];
        $mail   = $_POST['c_mail'];
        $phone = $_POST['c_phone'];
        $to = "inquiry@bpttbd.com";
        $subject = "Mail From website";
        $txt ="Name : ". $name . "\r\n  Email : " . $mail . "\r\n Phone Number : " . $phone;
        $headers = "From: noreply@yoursite.com" . "\r\n";
        /* validation */
        if($name != "" && $mail != "" && $phone != ""){ 
          $sql = "INSERT INTO clients_info values('','$name','$mail','$phone',NOW())";
          $data = mysqli_query($conn,$sql);
            mail($to,$subject,$txt,$headers);
            if($data){?>
              <script>
                 new swal({ title: "Thank You For Contact Us",
                    text:"Our Representative Will Contact You Soon",
                  type: "success"}).then(okay => {
                  if (okay) {
                      window.location.href = "index.php";
                  }
                  });
              </script>
              <?php
              // header("Location:contact.php");
              }else
              echo "fail";
          }
        }else{
        echo '<script>alert("Please Fill up All the Field!")</script>';
    }
?>




  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
