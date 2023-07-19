<?php

      

  

   
    include 'functions.php';



    $obj =new register;


      
      if(isset($_POST['submit'])){


      $name=$_POST['name'];
        $fname=$_POST['fname'];
          $mname=$_POST['mname'];
            $designation=$_POST['designation'];
              $sscyear=$_POST['sscyear'];
                $blood=$_POST['blood'];
                   $email=$_POST['email'];
                    $contact=$_POST['contact'];
                      $guestno=$_POST['guestno'];
                        $guestname=$_POST['guestname'];
                          $paymode=$_POST['paymode'];
                            $payamount=$_POST['payamount'];
                              $paydate=$_POST['paydate'];
                                $paynumber=$_POST['paynumber'];
                                  $trxid=$_POST['trxid'];
                                    $presentadd=$_POST['presentadd'];
                                      $permanentadd=$_POST['permanentadd'];
                                        $info=$_POST['info'];
                                          $tshirt=$_POST['tshirt'];

                                              $image=$_FILES['image']['name'];
                                              $imaget=$_FILES['image']['tmp_name'];


                        $exp =explode('.', $image);

                        $ext =strtolower(end($exp));
                        // $uimage= md5(time().$image).".".$ext;
                        $uimage= $name.",".$contact.".".$ext;


                     $data = $obj -> register($name,$fname,$mname,$designation,$sscyear,$blood,$email,$contact,$guestno,$guestname,$paymode,$payamount,$paydate,$paynumber,$trxid,$presentadd,$permanentadd,$info,$tshirt,$uimage,$imaget);






      }
    


?> 






















                 <section class="section">
                 <div class="container">
                      <div class="row">
                        <div class="justify-content-center col-md-12 px-3">

                          <div class="card">
                            <div class="card-body">


                                   
                              <h5 class="card-title">Celebration of Golden Jubilee of Raster Hat Hazi A. Gapur High School</h5>

                              <!-- General Form Elements -->
                              <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Name</label>
                                  <div class="col-sm-9">
                                    <input name="name" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Father Name</label>
                                  <div class="col-sm-9">
                                    <input name="fname" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Mother Name</label>
                                  <div class="col-sm-9">
                                    <input name="mname" type="text" class="form-control" required>
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Designation</label>
                                  <div class="col-sm-9">
                                    <input name="designation" type="text" class="form-control">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">SSC Year</label>
                                            <div class="col-sm-9">
                                                  <select name="sscyear"  class="form-select" aria-label="Default select example">
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
                                        </div>





                              <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Blood Group</label>
                                 


                                            <div class="col-sm-9">
                                                  <select name="blood"  class="form-select" aria-label="Default select example">
                                                    <option >Select Your Blood Group</option>
                                                    <option>A+</option>
                                                    <option>A-</option>
                                                    <option>B+</option>
                                                    <option>B-</option>
                                                    <option>AB+</option>
                                                    <option>AB-</option>
                                                    <option>O+</option>
                                                    <option>O-</option>

                                              </select>
                                            </div>
                                        </div>

                                
                                <div class="row mb-3">
                                  <label for="inputEmail" class="col-sm-3 col-form-label">Email</label>
                                  <div class="col-sm-9">
                                    <input name="email"  type="email" class="form-control" placeholder="If You Have">
                                  </div>
                                </div>
                               
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Contact No:</label>
                                  <div class="col-sm-9">
                                    <input  name="contact" type="number" class="form-control">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Number Of Guest </label>
                                  <div class="col-sm-9">
                                    <input  name="guestno" type="number" class="form-control" placeholder="Pay for Per Guest BDT 500/=(For No guest type 0)">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Guest Name</label>
                                  <div class="col-sm-9">
                                    <input name="guestname" type="text" class="form-control" placeholder="two or more guest write using Comma (,)" >
                                  </div>
                                </div>

                                 
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Payment Mode</label>
                                            <div class="col-sm-9">
                                                  <select name="paymode"  class="form-select" aria-label="Default select example">
                                                        <option >Select Payment Mode</option>
                                                        <option >Bkash</option>
                                                        <option >Nagad</option>
                                                        <option >Rocket</option>
                                                        <option >Upay</option>
                                                        <option >Sure Cash</option>
                                                        <option >Bank</option>
                                                        <option >Other Mode/Bank Cheque</option>
                                                   </select>
                                            </div>
                                </div>

                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Payment Amount</label>
                                  <div class="col-sm-9">
                                    <input  name="payamount" type="number" class="form-control">
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label for="inputDate" class="col-sm-3 col-form-label">Payment Date</label>
                                  <div class="col-sm-9">
                                    <input name="paydate"  type="date" class="form-control">
                                  </div>
                                </div>


                               


                                 

                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Payment Phone Number / Payment Referece</label>
                                  <div class="col-sm-9">
                                    <input name="paynumber"  type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Transaction Id/Card/Cheque Number</label>
                                  <div class="col-sm-9">
                                    <input name="trxid"  type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Present Address</label>
                                  <div class="col-sm-9">
                                    <input name="presentadd"  type="text" class="form-control">
                                  </div>
                                </div>
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Permanent Address</label>
                                  <div class="col-sm-9">
                                    <input name="permanentadd"  type="text" class="form-control">
                                  </div>
                                </div>

                               
                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Anything You want To say</label>
                                  <div class="col-sm-9">
                                    <textarea name="info" class="form-control" style="height: 80px"></textarea>
                                  </div>
                                </div>

                                <div class="row mb-3">
                                  <label  for="inputText" class="col-sm-3 col-form-label">Your T-Shirt Size</label>
                                            <div class="col-sm-9">
                                                  <select name="tshirt"  class="form-select" aria-label="Default select example">
                                                        <option >Select Your T-Shirt Size</option>
                                                        <option >Small</option>
                                                        <option >Medium</option>
                                                        <option >Large</option>
                                                        <option >Extra Large</option>
                                                        <option >2 times Extra Large</option>
                                                        
                                                   </select>
                                            </div>
                                </div>

                                <div class="row mb-3">
                                  <label  for="inputNumber" class="col-sm-3 col-form-label">Image</label>
                                  <div class="col-sm-9">
                                    <input name="image" class="form-control" type="file" id="formFile">
                                  </div>
                                </div>
                            
                                <div class="row mb-3">
                                  
                                  <div class="offset-sm-3 col-sm-3">
                                     <input type="submit" name="submit" class="form-control btn-outline-info">
                                   
                                  </div>
                                </div>

                              </form><!-- End General Form Elements -->

                               

                            </div>
                          </div>

                        </div>
                      </div>
                    </div>
                    </section>

