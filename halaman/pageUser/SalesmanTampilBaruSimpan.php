<?php
//$id    = "1";
//$namaSales  = "Nama Saya";
//$areaSales  = "area";
//$nopolSales = "GG 2345 WP";
//$telpSales  = "883087";
//$genderSales= "Banci";
$id         = $_POST['id'];
$namaSales  = $_POST['nama'];
$areaSales  = $_POST['area'];
$nopolSales = $_POST['nopol'];
$telpSales  = $_POST['telp'];
$genderSales= $_POST['gender'];
include_once '../db_koneksi.php';
$query = "INSERT INTO salesman ("
        . "nama, area, no_kendaraan, no_telp, gender)"
        . "VALUES ("
        . "'".$namaSales."',"
        . "'".$areaSales."',"
        . "'".$nopolSales."',"
        . "'".$telpSales."',"
        . "'".$genderSales."')";
//echo $query;
if ($koneksi->query($query)){
    echo 'berhasil';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();