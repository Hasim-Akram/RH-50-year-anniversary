<?php
     session_start();
?>
 <?php
include 'functions.php';
include 'menu.php';


$obj=new register; 

 if (isset($_POST['submit'])) {

  $sscyear=$_POST['sscyear'];
  $contact=$_POST['contact'];

  if (empty($sscyear) || empty($contact)) {

      echo "<h2>Please fill the field</h2>";

    // code...
  }else{
   $data = $obj -> mainlogin($sscyear,$contact);
   print_r($data);

  }



// code...
}




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
                                  <select name="sscyear"  class="form-select" aria-label="Default select example" required>
                                                      <option >Select Your SSC Year</option>
                                                      <option >1972</option>
                                                      <option >1973</option>
                                                      <option >1974</option>
                                                      <option >1975</option>
                                                      <option >1976</option>
                                                      <option >1977</option>
                                                      <option >1978</option>
                                                      <option >1979</option>
                                                      <option >1980</option>
                                                      <option >1981</option>
                                                      <option >1982</option>
                                                      <option >1983</option>
                                                      <option >1984</option>
                                                      <option >1985</option>
                                                      <option >1986</option>
                                                      <option >1987</option>
                                                      <option >1988</option>
                                                      <option >1989</option>
                                                      <option >1990</option>
                                                      <option >1991</option>
                                                      <option >1992</option>
                                                      <option >1993</option>
                                                      <option >1994</option>
                                                      <option >1995</option>
                                                      <option >1996</option>
                                                      <option >1997</option>
                                                      <option >1998</option>
                                                      <option >1999</option>
                                                      <option >2000</option>
                                                      <option >2001</option>
                                                      <option >2002</option>
                                                      <option >2003</option>
                                                      <option >2004</option>
                                                      <option >2005</option>
                                                      <option >2006</option>
                                                      <option >2007</option>
                                                      <option >2008</option>
                                                      <option >2009</option>
                                                      <option >2010</option>
                                                      <option >2011</option>
                                                      <option >2012</option>
                                                      <option >2013</option>
                                                      <option >2014</option>
                                                      <option >2015</option>
                                                      <option >2016</option>
                                                      <option >2017</option>
                                                      <option >2018</option>
                                                      <option >2019</option>
                                                      <option >2020</option>
                                                      <option >2021</option>
                                                      <option >2022</option>
                                                      <option >2023</option>
                                                      <option >others</option>

                                                  </select>        
                                                 
                                          
                      
                    </div>
                   

                                  <div class="col-md-12">
                                    <label for="contact" class="form-label">Phone Number</label>
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
                                    <button name="submit" class="btn btn-primary w-100" type="submit">Submit</button>
                                  </div>
                                  <div class="col-md-12">
                                    <p class="mb-0">Already registered? <a  href="main.php">Please Log In Here</a></p>
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