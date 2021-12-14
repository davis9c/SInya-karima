<?php
//$id    = "1";
//$namaSales  = "Nama Saya";
//$areaSales  = "area";
//$nopolSales = "GG 2345 WP";
//$telpSales  = "883087";
//$genderSales= "Banci";
$id         = $_POST['id'];
$nama  = $_POST['nama'];
$telp  = $_POST['telp'];
$gender= $_POST['gender'];
include_once '../db_koneksi.php';
$query = "INSERT INTO petugasPengiriman ("
        . "nama, no_telp, gender)"
        . "VALUES ("
        . "'".$nama."',"
        . "'".$telp."',"
        . "'".$gender."')";
//echo $query;
if ($koneksi->query($query)){
    echo 'berhasil';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();