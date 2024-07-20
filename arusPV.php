<?php
//author BYH 
//koneksi ke database

$connect = mysqli_connect("localhost","root","","iotplts");
//baca database ke web
$aql = mysqli_query($connect,"SELECT * from tbsensor order by ID desc");

$data2 = mysqli_fetch_array($aql);
$arPV = $data2["aruspv"];

//testing 

if($arPV == "") $arPV = 0;
echo $arPV

?>