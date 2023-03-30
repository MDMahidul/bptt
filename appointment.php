<!-- db connection -->
<?php

    include_once 'db.php';

?>
  <title>BPTT- APPOINTMENT</title>
  <!-- Navbar section -->
   <?php include "header.php"?>
   
   <main  class="margin-x">
  <!-- addresses  -->
    <div class="container pb-5 mb-5 contact-form-block" >
    <h1 class="contact-header">Make An Appointment</h1>
    <form method="post" action="action.php" >
        <div class="form-section border border-2 border-warning-subtle rounded p-5">
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Name" name="c_name" required>
              </div>
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Email</label>
                <input type="email" class="form-control" id="formGroupExampleInput" placeholder="Email" name="c_mail" required>
              </div>
             
              <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Mobile Number</label>
                <input type="number" class="form-control" id="formGroupExampleInput2" placeholder="Enter Your Mobile Number" name="c_phone" required pattern="[0-1]{2}[0-9]{9}">
              </div>
            
              <div class="mb-3">
                <input type="submit" class="form-control btn btn-primary" id="formGroupExampleInput2" value="Submit" name="submit">
              </div>
        </div>
    </form>
    </div>
   </main>
   <?php include "footer.php"?>
