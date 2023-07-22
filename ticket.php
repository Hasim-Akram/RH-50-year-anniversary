
<?php
     session_start();
?>

<?php
    include 'menu.php';
   


?>

<br>
<br>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<link rel="stylesheet" href="css\ticket.css">
<div class="col-md-12">
    <div class="container">
        <div class="row">
                <div class="ticket">
                    <div class="left">
                        <div class="image">
                            <div class="logimg">
                                <?php echo $_SESSION['image']; ?>
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
                                <h1><?php echo $_SESSION['name']; ?></h1>
                                <h1><a href="logout.php">Logout</a></h1>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>