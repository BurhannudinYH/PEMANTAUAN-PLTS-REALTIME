<?php
//koneksi ke database
$iko = mysqli_connect("localhost","root","","iotplts");

//baca data yang dikirim
//pv
$tegbeban = $_GET['tegangan'];
$arbeban = $_GET['arus'];
$dayabeban = $_GET['daya'];
//beban
$tgpv = $_GET['tegangan2'];
$amperpv = $_GET['arus2'];
$duarr = $_GET['daya2'];
//simpan tabel sensor
//auto increment = 1

mysqli_query($iko,"ALTER TABLE tbsensor AUTO_INCREMENT =1");
//SIMPAN DATA SENSOR KE TABELSENSOR
$simpan = mysqli_query($iko,"Insert into tbsensor(teganganpv,aruspv,dayapv,teganganbatt,arusbatt,dayabat)values('$tegbeban','$arbeban','$dayabeban','$tgpv','$amperpv','$duarr')");
//uji simpan respon
if($simpan)
echo"Data berhasil dikirim";
else
    echo "Data Gagal terkirim";
?>