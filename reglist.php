<?php
       include 'functions.php';

       $obj = new register;    
?>



<?php
    include 'menu.php';
   
   ?>
   <br>
   <br>

<div class="container text-center">
                          <div class="row">
                            <div class="col-md-12">
                              
                            <div class="text-center">
                <img src="images\mainlogo.png" alt="mainlogo" style="height: 200px;">
                </div>  <h1>Listed Registered Students</h1>




                              <table class="table table-primary table-bordered table-hover">
                                <thead>
                                  <tr>
                                    
                                    <th>Entry Pass ID</th>
                                    <th>Name</th>
                                    <th>Father Name</th>
                                    <th>Phone Number</th>
                                    <th>SSC Batch</th>
                                    <th>Designation</th>
                                    
                                    <th>NO of Guest</th>
                                    <th>Payment Amount</th>
                                    <th>Image</th>
                                    <th>Payment status</th>
                                  </tr>
                                </thead>



                              <?php

                                                    
                                  $alldata = $obj -> viewmethod();

                                  while($data = $alldata -> fetch_assoc()):  ?>

                                <tbody>
                                  <tr>
                                    <td><?php echo $data['id']; ?></td>
                                    <td><?php echo $data['name'] ;?></td>
                                    <td><?php echo $data['fname']; ?></td>
                                    <td><?php echo $data['contact']; ?></td>
                                    <td><?php echo $data['ssc']; ?></td>
                                    <td><?php echo $data['designation']; ?></td>
                                    <td><?php echo $data['noguest']?></td>
                                    
                                    <td><?php echo $data['payamount']?></td>
                                    <td><img style="height:50px;" src="images/<?php echo $data['image']; ?>"></td>
                                    <td>verified</td>
                                   
                                    
                                  </tr>


                                
                                </tbody>

                                <?php
                                    endwhile;
                                ?>
                              </table>




                            </div>
                                       
                          </div>
                   
                    


</div>




<?php
    include "footer.php"
?>




