<?php

    session_start();
?>

<?php
    include 'menu.php';
   


?>

<?php

include 'functions.php';

$obj =new register;

$u = $obj -> ses($_SESSION['id']);

$updatename=$_SESSION['name'];
$updatecontact=$_SESSION['contact'];

//print $updatecontact;
//print $updatename;



if(isset($_POST['submit'])){  

    //print($_FILES['image']['name']); die();

    if(!empty($_FILES['image']['name'])){
        $image=$_FILES['image']['name'];
    
        $imaget=$_FILES['image']['tmp_name'];

        $exp =explode('.', $image);

        $ext =strtolower(end($exp));
        $uimage= $updatename."-".$updatecontact.".".$ext;
        $del_img = 'images/'.$_SESSION['image'];
        unlink("$del_img");
        

        move_uploaded_file($imaget,'images/'.$uimage);

        $data = $obj -> imgupdate($updatename,$updatecontact,$uimage);
        if($data){
            $successm="image update  Registration Complete Successfully!";
        }else{
            $errorm="Please do registration with proper information!";
        }

    }else{
        echo "<script> alert('আপনি কোনো ছবি বাছাই করেননি।');</script>";
		echo "<script type='text/javascript'> document.location ='imageup.php'; </script>";
    }


                             

}

?>





<br>
<br>


<div class="container">
        <div class="col-md-12 text-center">
                            <div class="col-md-6">
                                <div class="logimg" style="height:150px;">
                                <span><?php echo $successm; ?></span>
                                <span><?php echo $errorm; ?></span>
                                <h2>Here your image, If you want to update upload another one</h2>
                                    <img style="height:150px; "src="images/<?php echo $u['image']; ?>">
                                    
                                </div>
                            </div>
                            <br>
                            <br>
                            <br>
                            <div class="col-md-6">
                                <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST" enctype="multipart/form-data">
                                    <label  for="inputImage" class="col-form-label">Upload Your Image(Size will be 300*300)</label>
                                    <input name="image" class="form-control" type="file" id="formFile" >
                                    <input hidden type="text" name="old_image" value="<?php echo $_SESSION['image']; ?>" placeholder=" img name: <?php echo $_SESSION['image']; ?>">
                                    
                                    <input type="submit" name="submit" value="Update" class="btn btn-primary submit">
                                </form>
                                </div>

                            
                            <div class="ticket-number">
                                <p>
                                contact:<?php echo $_SESSION['contact']; ?>
                                </p>
                               
                            </div>
                        
                      

        </div>

</div> 

</br>
</br>


  <?php
        include 'footer.php';
    ?>


                                   