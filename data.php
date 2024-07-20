<?php
$d1 = mysqli_connect("localhost","root","","iotplts");
$tinggalin  = mysqli_query($d1,"Select tanggal from tbsensor order by ID asc");
$teg4nganpv  = mysqli_query($d1,"select teganganpv from tbsensor order by id asc");
$ruspv  = mysqli_query($d1,"select aruspv from tbsensor order by id asc");
$dapv  = mysqli_query($d1,"select dayapv from tbsensor order by id asc");
$teg4nganb4t  = mysqli_query($d1,"select teganganbatt from tbsensor order by id asc");
$arusb4t  = mysqli_query($d1,"select arusbatt from tbsensor order by id asc");
$dabat = mysqli_query($d1,"select dayabat from tbsensor order by id asc");

?>

