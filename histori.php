<?php
//author BYH 
//koneksi ke database

$history = mysqli_connect("localhost","root","","iotplts");
//baca database ke web
$histori = mysqli_query($history,"SELECT * from tbsensor order by ID desc");

$historii = mysqli_fetch_array($histori);
$historie = $historii["teganganpv,aruspv,dayapv,teganganbatt,arusbatt,dayabat,tanggal"];

//testing 

if($historie == "") $historie = 0;
echo $historie

?>