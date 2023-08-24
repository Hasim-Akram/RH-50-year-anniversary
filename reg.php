<?php
     session_start();
?>



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
                                                        $tshirt=$_POST['tshirt'];
                    
                                                            $image=$_FILES['image']['name'];
                                                            $imaget=$_FILES['image']['tmp_name'];
                    

                                                            // print_r([$name,$fname,$mname,$designation,$sscyear,$blood,$email,$contact,$guestno,$guestname,$paymode,$payamount,$paydate,$paynumber,$trxid,$presentadd,$tshirt,$uimage,$imaget]);
                    
                                      $exp =explode('.', $image);
                    
                                      $ext =strtolower(end($exp));
                                      // $uimage= md5(time().$image).".".$ext;
                                      $uimage= $name."-".$contact.".".$ext;
                    
                                          $data = $obj -> mainreg($name,$fname,$mname,$designation,$sscyear,$blood,$email,$contact,$guestno,$guestname,$paymode,$payamount,$paydate,$paynumber,$trxid,$presentadd,$tshirt,$uimage,$imaget);
                                                                 
                    
                                      }
                    
                                    

                                    



?>

<?php
    include 'menu.php';
?>

<link rel="stylesheet" href="css\reg.css">

<div class="container register">
                <div class="row">
                    
                    
                <div class="form-wizard">  
                  <h2><?php echo $successm; ?> </h2>
                    <h2><?php echo $errorm; ?> </h2>
                    <h2><?php echo $contact_err; ?> </h2>
                            <div class="steps">
                                <ul>
                                <li>
                                    <span>1</span>
                                    Registration
                                </li>
                                <li>
                                    <span>2</span> 
                                    Personal Info
                                </li>
                                <li>
                                    <span>3</span>
                                    Payment Info
                                </li>
                                    <li>
                                    <span>4</span>
                                    Finish
                                </li>
                                </ul>
                            </div>
                            
                            <div class="myContainer">
                                <div class="form-container animated">
                                <h2 class="text-center form-title">Registration</h2>
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                    <input type="text" name="name" placeholder="Name" required>
                                    </div>
                                    <div class="form-group">
                                    <input  name="contact" type="number" class="form-control" placeholder="Phone Number" required>
                                    </div>
                                    

                                    <div class="form-group">

                                                    
                                                 
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
                                    <div class="form-group">
                                        <input name="designation" type="text" class="form-control" placeholder="designation">
                                    </div>
                                    <div class="form-group text-center mar-b-0">
                                    <input type="button" value="NEXT" class="btn btn-primary next">        
                                    </div>
                                
                                </div>
                                <div class="form-container animated">
                                <h2 class="text-center form-title">Personal Info</h2>
                               
                                    <div class="form-group">
                                    <input name="fname" type="text" class="form-control" placeholder="Father Name">
                                    </div>
                                    <div class="form-group">
                                    <input name="mname" type="text" class="form-control" placeholder="Mother Name">
                                    </div>
                                    <div class="form-group">
                                    <input name="email"  type="email" class="form-control" placeholder="Email If You Have">

                                    </div>
                                    <div class="form-group">
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
                                    <div class="form-group">
                                        <textarea name="presentadd" placeholder="Address"></textarea>
                                    </div>
                                    <div class="form-group text-center mar-b-0">
                                    <input type="button" value="BACK" class="btn btn-default back">        
                                    <input type="button" value="NEXT" class="btn btn-primary next">        
                                    </div>
                              
                                </div>
                                <div class="form-container animated">
                                <h2 class="text-center form-title">Payment Info</h2>
                               
                                    <div class="form-group">
                                    <input  name="guestno" type="number" class="form-control" placeholder="Number Of Guest (for no guest type=0)">
                                    </div>
                                    <div class="form-group">
                                    <input name="guestname" type="text" class="form-control" placeholder="names of the guest (for no guest keep blank)" >
                                    </div>
                                    <div class="form-group">
                                    <select name="paymode"  class="form-select" aria-label="Default select example" required>
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
                                    <div class="form-group">
                                    <input  name="payamount" type="number" class="form-control" placeholder="Payment Amount" required>
                                    </div>
                                    <div class="form-group">
                                    <label for="inputDate" class="col-form-label">Payment Date</label>
                                    <input name="paydate"  type="date" class="form-control" required>
                                    </div>
                                    <div class="form-group">                                   
                                    <input name="paynumber"  type="text" class="form-control" placeholder="payment phone number/Referece" required>
                                    </div>
                                    <div class="form-group">
                                    <input name="trxid"  type="text" class="form-control" placeholder="Transaction Id/Card/Cheque Number" required>
                                    </div>
                                    
                                    <div class="form-group text-center mar-b-0">
                                    <input type="button" value="BACK" class="btn btn-default back">        
                                    <input type="button" value="NEXT" class="btn btn-primary next">        
                                    </div>
                             
                                </div>
                                <div class="form-container animated">
                                <h2 class="text-center form-title">Submit and Finish</h2>
                            
                                    <div class="form-group">
                                    <h3 class="text-center">Thanks for Stay Tuned!</h3>
                                    <p class="text-center">Welcomed to Golden Jubilee</p>
                                    </div>
                                     <div class="form-group">
                                     <select name="tshirt"  class="form-select" aria-label="Default select example" required>
                                                        <option >Select Your T-Shirt Size</option>
                                                        
                                                        <option >Small</option>
                                                        <option >Medium</option>
                                                        <option >Large</option>
                                                        <option >Extra Large</option>
                                                        <option >2 times Extra Large</option>
                                                        
                                                   </select>
                                    </div>
                                    <div class="form-group">
                                    <label  for="inputNumber" class="col-form-label">Upload Your Image(Size will be 300*300)</label>
                                    <input name="image" class="form-control" type="file" id="formFile" required>
                                    </div>

                                    
                                    <div class="form-group text-center mar-b-0"> 
                                    <input type="button" value="BACK" class="btn btn-default back"> 
                                    <input type="submit" name="submit" value="SUBMIT" class="btn btn-primary submit">


                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>

                </div>

            </div>


            <br>
            <br>


            <script>
                var totalSteps = $(".steps li").length;

                        $(".submit").on("click", function(){
                        return true; 
                        });

                        $(".steps li:nth-of-type(1)").addClass("active");
                        $(".myContainer .form-container:nth-of-type(1)").addClass("active");

                        $(".form-container").on("click", ".next", function() { 
                        $(".steps li").eq($(this).parents(".form-container").index() + 1).addClass("active"); 
                        $(this).parents(".form-container").removeClass("active").next().addClass("active flipInX");   
                        });

                        $(".form-container").on("click", ".back", function() {  
                        $(".steps li").eq($(this).parents(".form-container").index() - totalSteps).removeClass("active"); 
                        $(this).parents(".form-container").removeClass("active flipInX").prev().addClass("active flipInY"); 
                        });


                        /*=========================================================
                        *     If you won't to make steps clickable, Please comment below code 
                        =================================================================*/
                        $(".steps li").on("click", function() {
                        var stepVal = $(this).find("span").text();
                        $(this).prevAll().addClass("active");
                        $(this).addClass("active");
                        $(this).nextAll().removeClass("active");
                        $(".myContainer .form-container").removeClass("active flipInX");  
                        $(".myContainer .form-container:nth-of-type("+ stepVal +")").addClass("active flipInX");     
                        });
            </script>

                


<?php
    include "footer.php"
?>