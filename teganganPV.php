<?php
//author BYH 
//koneksi ke database

$konek = mysqli_connect("localhost","root","","iotplts");
//baca database ke web
$sql = mysqli_query($konek,"SELECT * from tbsensor order by ID desc");

$data = mysqli_fetch_array($sql);
$tegPV = $data["teganganpv"];

//testing 

if($tegPV == "") $tegPV = 0;
echo $tegPV

?>