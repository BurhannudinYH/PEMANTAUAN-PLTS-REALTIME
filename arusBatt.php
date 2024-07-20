<?php
//author BYH 
//koneksi ke database

$konek3 = mysqli_connect("localhost","root","","iotplts");
//baca database ke web
$sql3 = mysqli_query($konek3,"SELECT * from tbsensor order by ID desc");

$data5 = mysqli_fetch_array($sql3);
$arbatt = $data5["arusbatt"];

//testing 

if($arbatt == "") $arbatt = 0;
echo $arbatt

?>