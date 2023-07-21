<?php
include 'functions.php';

$obj=new register();


$sscyear = $obj -> ssc();

while($sscyearss = $sscyear -> fetch_array()):

  print($sscyearss['ssc']);


  endwhile;






?>
