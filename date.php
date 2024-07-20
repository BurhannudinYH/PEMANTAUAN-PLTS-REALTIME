<?php
//author BYH 
//koneksi ke database

$kon = mysqli_connect("localhost","root","","iotplts");
//baca database ke web
$li = mysqli_query($kon,"SELECT * from tbsensor order by ID desc");

$date1 = mysqli_fetch_array($li);
$date = $date1["tanggal"];

//testing 

if($date == "") $date = 0;
echo $date

?>