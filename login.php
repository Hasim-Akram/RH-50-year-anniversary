
 <?php

include 'functions.php';
include 'menu.php';

$obj=new register;                               
  

 $sscyear = $obj-> ssc();




?>

    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-2">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-2">
                <a href="index.php" class="logo d-flex align-items-center w-auto">
                 
                  <span class="d-none d-lg-block"></span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-2">
                <div class="card-body">
                  <div class="text-center">
                <img src="images\mainlogo.png" alt="mainlogo" style="height: 200px;">
                </div>
                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Download Your Entry Pass</h5>
                    <h6 class="text-center small">Select Your SSC Batch Year & Enter Your Registered Phone Number</h6>
                  </div>

                  <form class="row g-3 needs-validation" action="<?php echo $_SERVER['PHP_SELF'] ?>"  method="POST" novalidate>

                    <div class="col-md-12">                      
                                  <label  for="inputText" class="col-form-label">SSC Year</label>
                                           
                                                  <select name="sscyear"  class="form-select" aria-label="Default select example">
                                                    <option >Select SSC Year</option>
                                                 
                                                <?php 
                                                    while($sscyearg= $sscyear -> fetch_assoc()):
                                                    
                                                ?>
                                                  <option><?php echo $sscyearg['ssc']; ?></option>
                                                  <?php 
                                                        endwhile;
                                                 ?>
                                              </select>
                                          
                      
                    </div>
                   

                                  <div class="col-md-12">
                                    <label for="contact" class="form-label">Registered Phone Number</label>
                                    <input type="number" name="contact"  class="form-control" id="contactnumber" required>
                                    <div class="invalid-feedback">Please enter your phone number!</div>
                                  </div>

                                  <div class="col-md-12">
                                    <div class="form-check">
                                      <input class="form-check-input" type="checkbox" name="remember" value="true" id="rememberMe">
                                      <label class="form-check-label" for="rememberMe">Remember me</label>
                                    </div>
                                  </div>
                                  <div class="col-md-12">
                                    <button name="submit" class="btn btn-primary w-100" type="submit">Download Entry Pass</button>
                                  </div>
                                  <div class="col-md-12">
                                    <p class="small mb-0">Don't registered? <a  href="registration.php">Please Do Registration</a></p>
                                  </div>
                                </form>

                </div>
              </div>
              </div>
          </div>
        </div>

      </section>

    </div>



    <?php
    include 'footer.php';
?>