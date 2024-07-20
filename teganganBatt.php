<?php
//author BYH 
//koneksi ke database

$konek2 = mysqli_connect("localhost","root","","iotplts");
//baca database ke web
$sql2 = mysqli_query($konek2,"SELECT * from tbsensor order by ID desc");

$data4 = mysqli_fetch_array($sql2);
$tegBatt = $data4["teganganbatt"];

//testing 

if($tegBatt == "") $tegBatt = 0;
echo $tegBatt;

?>