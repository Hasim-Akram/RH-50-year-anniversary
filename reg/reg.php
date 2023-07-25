<?php
    include 'menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reg.css">
    <title>Document</title>
</head>
<body>


<div class="container register">
                <div class="row">
                <div class="form-wizard">  
                            <div class="steps">
                                <ul>
                                <li>
                                    <span>1</span>
                                    Create Account
                                </li>
                                <li>
                                    <span>2</span> 
                                    Personal Info
                                </li>
                                <li>
                                    <span>3</span>
                                    Social Info
                                </li>
                                    <li>
                                    <span>4</span>
                                    Finish
                                </li>
                                </ul>
                            </div>
                            <div class="myContainer">
                                <div class="form-container animated">
                                <h2 class="text-center form-title">Create Account</h2>
                                <form>
                                    <div class="form-group">
                                    <input type="text" placeholder="Username">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" placeholder="Email Address">
                                    </div>
                                    <div class="form-group">
                                    <input type="password" placeholder="Password">
                                    </div>
                                    <div class="form-group text-center mar-b-0">
                                    <input type="button" value="NEXT" class="btn btn-primary next">        
                                    </div>
                                </form>
                                </div>
                                <div class="form-container animated">
                                <h2 class="text-center form-title">Personal Info</h2>
                                <form>
                                    <div class="form-group">
                                    <input type="text" placeholder="First Name">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" placeholder="Last Name">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" placeholder="Phone No.">
                                    </div>
                                    <div class="form-group">
                                    <textarea placeholder="Address"></textarea>
                                    </div>
                                    <div class="form-group text-center mar-b-0">
                                    <input type="button" value="BACK" class="btn btn-default back">        
                                    <input type="button" value="NEXT" class="btn btn-primary next">        
                                    </div>
                                </form>
                                </div>
                                <div class="form-container animated">
                                <h2 class="text-center form-title">Social Media Info</h2>
                                <form>
                                    <div class="form-group">
                                    <input type="text" placeholder="Facebook">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" placeholder="Twitter">
                                    </div>
                                    <div class="form-group">
                                    <input type="text" placeholder="Instagram">
                                    </div>
                                    <div class="form-group text-center mar-b-0">
                                    <input type="button" value="BACK" class="btn btn-default back">        
                                    <input type="button" value="NEXT" class="btn btn-primary next">        
                                    </div>
                                </form>
                                </div>
                                <div class="form-container animated">
                                <h2 class="text-center form-title">Finish</h2>
                                <form>
                                    <div class="form-group">
                                    <h3 class="text-center">Thanks for Stay Tuned!</h3>
                                    <p class="text-center">Made by <a href="https://codepen.io/HanumanSahay/" target="_blank">@Hanuman Sahay</a></p>
                                    </div>
                                    <div class="form-group text-center mar-b-0"> 
                                    <input type="button" value="BACK" class="btn btn-default back"> 
                                    <input type="submit" value="SUBMIT" class="btn btn-primary submit">         
                                    </div>
                                </form>
                                </div>
                            </div>
                            </div>

                </div>

            </div>


            <script>
                var totalSteps = $(".steps li").length;

                        $(".submit").on("click", function(){
                        return false; 
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

                
</body>
</html>


<?php
    include "reg/./footer.php"
?>
reg\registration.php