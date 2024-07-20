<?php
//author BYH 
//koneksi ke database

$konek1 = mysqli_connect("localhost","root","","iotplts");
//baca database ke web
$sql1 = mysqli_query($konek1,"SELECT * from tbsensor order by ID desc");

$data3 = mysqli_fetch_array($sql1);
$dayaPV = $data3["dayapv"];

//testing 

if($dayaPV == "") $dayaPV = 0;
echo $dayaPV

?>