<?php
//author BYH 
//koneksi ke database

$konek10 = mysqli_connect("localhost","root","","iotplts");
//baca database ke web
$plts = mysqli_query($konek10,"SELECT * from tbsensor order by ID desc");

$data10 = mysqli_fetch_array($plts);
$batri = $data10["dayabat"];

//testing 

if($batri == "") $dbatri = 0;
echo $batri

?>