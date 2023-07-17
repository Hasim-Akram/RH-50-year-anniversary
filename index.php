<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <link rel="stylesheet" href="flip\flip.min.css">
    <link rel="stylesheet" href="css\style.css">


    <title>RH-50</title>
  </head>
  <body>
    
        <section class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-12 justify-content-center menu">       
                        <!--Nav strat here-->
                        <nav class="navbar logo navbar-expand-sm bg-info">
                           
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                               <span class="navbar-toggler-icon">মেনু</span>
                            </button>
                            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                <ul class="navbar-nav">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="#home-section">হোম <span class="sr-only">(current)</span></a>
                                            
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#explore-head-section" data-toggle="modal" data-target="#exampleModal">রেজিষ্ট্রেশন</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#create-head-section" data-toggle="modal" data-target="#exampleModallog">লগইন</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="#share-head-section" data-toggle="modal" data-target="#exampleModalins">নির্দেশনা</a>
                                        </li>                               
                                
                                </ul>
                            
                            </div>
                        </nav>
                    </div>
              
                
            </div>
        </section>
         



    <!-- modal-->
            <!-- Button trigger modal -->


                            <!-- Modal registration-->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">reg</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <?php include 'registration.php' ?>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>

                            <!-- Modal login-->
                            <div class="modal fade" id="exampleModallog" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">login in</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <!-- log in -->
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>

                             <!-- Modal instruction-->
                             <div class="modal fade" id="exampleModalins" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">instruction</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    ...
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                                </div>
                            </div>
                            </div>




    <!-- section Banner for 50 years -->
                            <section class="banner">
                                            <div class="container">
                                                <div class="row">
                                                 <div class="col-md-12">
                                                     <img src="images\mainlogo.png">
                                                  </div>
                                                </div>
                                            </div>
                             </section>
  
    
            
               <!--section time count down  -->


        <section class="timecount">
            <div class="container">
               <div class="row">
                    <div class="col-md-6">
                        <div class="schoollogo">
                           
                                    <img src="images/sbanner.png" alt="school Image">
                        </div>
                           
                    </div>
            
                  <div class="col-md-6  border border-info text-center">
                        <h3>রেজিষ্ট্রেশনের শেষ তারিখ ৩১ ডিসেম্বর পর্যন্ত।  </h3>
                        <h4>রেজিষ্ট্রেশনের আর বাকি </h4>
                        <hr>
                        <div class="container">
                                    
                                    <div id="countdown">
                                        <ul>
                                        <li><span id="days"></span>দিন</li>
                                        <li><span id="hours"></span>ঘন্টা</li>
                                        <li><span id="minutes"></span>মিনটি</li>
                                        <li><span id="seconds"></span>সেকেন্ড</li>
                                        </ul>
                                    </div>
                                  
                                    </div>
                                
                                        <!-- START OF FLIP EXAMPLE PRESET -->

                                        
                             </div>
                         <div>
                    </div>

         </section>


      <!-- Information Section -->
             
            
        <section class="informationsec">
             <div class="container">         
          
                <div class="row">

                <div class="col-md-4">
                        <div class="gears">
                            <i class="fa fa-cloud"  style="font-size: 40px"></i>
                            

                       
                            <div class="card text-center">
                                    <div class="card-header">
                                            <h4>রেজিষ্ট্রেশন ফি</h4>
                                    </div>
                                    
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                        <i class="fa fa-check"></i>স্কুলের প্রাক্তন ছাত্র-ছাত্রী =১,০০০/-টাকা 
                                        </li>
                                        <li class="list-group-item">
                                        <i class="fa fa-check"></i>স্কুলের বর্তমান ছাত্র-ছাত্রী =৫০০/-টাকা 
                                        </li>
                                        <li class="list-group-item">
                                        <i class="fa fa-check"></i>প্রতিজন অতিথি =৫০০/-টাকা
                                        </li>
                                    </ul>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">রেজিষ্ট্রেশন</button>
                                    
                                </div>   
                        </div>
                    </div>
           
                    <div class="col-md-4 text-center">
                        <div class="gears">
                            <i class="fa fa-gears"  style="font-size: 40px"></i>
                          
                            <div class="card text-center">
                                    <div class="card-header">
                                            <h4>স্থান ও সময়</h4>
                                                </div>
                                                <div class="card-title">
                                                    <h4>স্থানঃ স্কুল প্রাঙ্গণ</h4>
                                                    
                                                    <h4>সময়ঃ ১৩ এপ্রিল ২০২৪ <br> রোজঃ শনিবার </h4>
                                                
                                                </div>
                                                <div class="card-text">
                                                    <p>
            </p>
                                                </div>
                                            
                                                <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">রেজিষ্ট্রেশন</button>
                                                
                                            </div>
                                   
                        </div>
                    </div>
                    
                    
                    <div class="col-md-4">
                        <div class="gears">
                            <i class="fa fa-cart-plus"  style="font-size: 40px"></i>
                            
                            
                                <div class="card text-center">
                                    <div class="card-header">
                                            <h4>রেজিষ্ট্রেশনের সাথে কি কি পাবেন</h4>
                                    </div>
                                    
                                   
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                        <i class="fa fa-check"></i>টি-শার্ট, দুপুরের খাবার, গিফট বক্স
                                        </li>
                                        
                                        <li class="list-group-item">
                                        <i class="fa fa-check"></i>সাংস্কৃতিক অনুষ্ঠান ও লটারি
                                        </li>                                        
                                    </ul>
                                    <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">রেজিষ্ট্রেশন</button>
                                    
                                </div>   
                        </div>
                          

                    </div>
                    
                </div>
            </div>
        </section>
       
          <!-- Registration info section -->
            <section class="regothers">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card text-center">
                                <div class="card-header">
                                    <h4>সূবর্ণজয়ন্তী-২০২৪ প্রয়োজনীয় লিংক</h4>
                                </div>
                                    <div class="card-body">
                                        <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">রেজিষ্ট্রেশন</a>
                                        <a href="#" class="btn btn-primary">ডোনেশন</a>
                                        <a href="#" class="btn btn-primary">পেমেন্ট স্ট্যাটাস চেক</a></br></br>
                                        <a href="#" class="btn btn-primary">অংশগ্রহনকারীর কপি</a>
                                        <a href="#" class="btn btn-primary">জরুরী যোগাযোগ</a></br></br>
                                    </div>
                                </div>
                            </div>

                    
                        <div class="col-md-6">
                             <div class="card text-center">
                                <div class="card-header">
                                       <h4>সর্বমোট অনলাইনে রেজিষ্ট্রেশন লিস্ট</h4>
                                </div>
                                <div class="card-body">
                                    <h5 class="card-title">অনলাইন => </h5>
                                    
                                    <p class="card-text">আপনি রেজিষ্ট্রেশন ও পেমেন্ট সম্পুর্ন করলে আপনার নাম ও টোকেন দেখতে পাবেন</p>
                                    <a href="#" class="btn btn-primary">অনলাইনে রেজিষ্ট্রেশন লিস্ট</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>  

            <!-- আয়োজনে -->
            <section class="regothers">
                <div class="container">                      
                    <div class="col-md-12">
                        <div class="card text-center border-info mb-3 mb-3">
                                    <div class="card-header">আয়োজনেঃসকল প্রাক্তন ছাত্র-ছাত্রী রাস্তার হাট হাজী এ গফুর উচ্ছ বিদ্যালয়</div>
                                        <div class="card-body">
                                            <h5 class="card-title"></h5>
                                                <h4>“এসো হাতে হাত রাখি, এসো গান করি”</h4> 
                                                <h4>"ঘরে বসে থেকে লাভ কী বলো, এসো উল্লাস করি"</h4>                                          
                                        </div>
                                    </div>
                        </div>
                    </div>
                </div>
            </section> 

        <!-- Footer Section -->

            
                <section class="container">  
                    <div class="row bg-info">
                        <div class="col-md-4 offset-md-4 col-sm-6 offset-sm-3">
                                <div class="developer">
                                <p>Developed by<a href="facebook.com/hasim.akram.bd">@Hasim-Akram Batch-2011</a></p>

                                </div>


                                <!-- Button trigger modal -->
                            
                        </div>                    
                    </div>
                </section>
            

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    

    
    <script type="text/javascript">(function () {
                                    const second = 1000,
                                            minute = second * 60,
                                            hour = minute * 60,
                                            day = hour * 24;

                                    //I'm adding this section so I don't have to keep updating this pen every year :-)
                                    //remove this if you don't need it
                                    let today = new Date(),
                                        dd = String(today.getDate()).padStart(2, "0"),
                                        mm = String(today.getMonth() + 1).padStart(2, "0"),
                                        yyyy = today.getFullYear(),
                                        nextYear = yyyy + 1,
                                        dayMonth = "12/31/",
                                        birthday = dayMonth + yyyy;
                                    
                                    today = mm + "/" + dd + "/" + yyyy;
                                    if (today > birthday) {
                                        birthday = dayMonth + nextYear;
                                    }
                                    //end
                                    
                                    const countDown = new Date(birthday).getTime(),
                                        x = setInterval(function() {    

                                            const now = new Date().getTime(),
                                                distance = countDown - now;

                                            document.getElementById("days").innerText = Math.floor(distance / (day)),
                                            document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
                                            document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
                                            document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);

                                            //do something later when date is reached
                                            if (distance < 0) {
                                            document.getElementById("headline").innerText = "Time Up!";
                                            document.getElementById("countdown").style.display = "none";
                                            document.getElementById("content").style.display = "block";
                                            clearInterval(x);
                                            }
                                            //seconds
                                        }, 0)
                                    }());
                                                        </script>
 
</body>
</html>