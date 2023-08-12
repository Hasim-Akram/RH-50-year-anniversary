
<?php
     session_start();
?>





<?php
    include 'menu.php';
   


?>

<br>
<br>


<script language="javascript">
function printPage(printContent) {
var display_setting="toolbar=yes,menubar=yes,";
display_setting+="scrollbars=yes,width=850, height=1000, left=10, top=20";


var printpage=window.open("","",display_setting);
printpage.document.open();
printpage.document.write('<html><head><title>Print Page</title></head>');
printpage.document.write('<body onLoad="self.print()" align="center" "width=600px" "height=500px">'+ printContent +'</body></html>');
printpage.document.close();
printpage.focus();
}
</script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="css\ticket.css">

    <div class="container">
        <div class="row col-md-12">
		
                <div class="ticket">
                    <div class="left">
                        <div class="image">
                            <div class="logimg" style="height:150px;">
                                <img style="height:150px; margin:100px 50px;" src="images/<?php echo $_SESSION['image']; ?>">
                            </div>
                            <p class="admit-one">
                                <span>ADMIT ONE</span>
                                <span>ADMIT ONE</span>
                                <span>ADMIT ONE</span>
                            </p>
                            <div class="ticket-number">
                                <p>
                                Pass id:<?php echo $_SESSION['id']; ?>
                                </p>
                               
                            </div>
                        </div>
                        <div class="ticket-info">
                            <p class="date">
                                <span>Saturday</span>
                                <span class="june-29">April 13TH</span>
                                <span>2024</span>
                            </p>
                            <div class="show-name">
                                <h1>Golden Jubilee 2024</h1>
                                <h2><?php echo $_SESSION['name']; ?></h2>
                            </div>
                            <div class="time">
                                <p>Batch<span>@</span><?php echo $_SESSION['ssc']; ?></p>
                                <p>Mobile <span>@</span><?php echo $_SESSION['contact']; ?></p>
                            </div>
                            <p class="location"><span>Raster Hat Hazi A. Gapur High School</span>
                                <span class="separator"><i class="far fa-smile"></i></span><span>Ramgoti, Lukhipur</span>
                            </p>
                        </div>
                    </div>
                    <div class="right">
                        <p class="admit-one">
                            <span>Entry Pass</span>
                            
                        </p>
                        <div class="right-info-container">
                            <div class="show-name">                                
                                <h1><?php echo $_SESSION['name']; ?> <a href="logout.php">Logout</a></h1>
                                <h1></h1>
                            </div>
                            <div class="time">
                                <p>Total guest <span>:</span> <?php echo $_SESSION['noguest']; ?></p>
                                <p>Paid Amount <span>@</span> <?php echo $_SESSION['payamount']; ?>/=</p>
                            </div>
                            <div class="barcode">
                                <img src="https://external-preview.redd.it/cg8k976AV52mDvDb5jDVJABPrSZ3tpi1aXhPjgcDTbw.png?auto=webp&s=1c205ba303c1fa0370b813ea83b9e1bddb7215eb" alt="QR code">
                            </div>
                            <p class="ticket-number">Pass id:
                                    <?php echo $_SESSION['id']; ?>
                            </p>
                            <p class="ticket-number">T-Shirt:
                                    <?php echo $_SESSION['tshirt']; ?>
                            </p>
                        </div>
                    </div>
                </div>
               
            </div>
            <br>
            <div class="print text-center">
                                <button class="btn btn-info"><h5><a href="edit.php?contact=<?php echo $_SESSION['contact'];?>">Edit</a></h5> </button>                                
                                <button class="btn btn-info button1" onclick="myFunction()" ><h5><a href="">Print</a></h5></button>
                                <button class="btn btn-info button" onclick="javascript:demoFromHTML();"><h5><a href="">Download</a></h5></button>
            </div>
            
        </div>


   

    <br>
    <br>
<script>
function myFunction() {
    window.print();
}
</script> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js" integrity="sha512-Qlv6VSKh1gDKGoJbnyA5RMXYcvnpIqhO++MhIM2fStMcGT9i2T//tSwYFlcyoRRDcDZ+TYHpH8azBBCyhpSeqw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>


<script>
</script>

    <?php
        include 'footer.php';
    ?>


