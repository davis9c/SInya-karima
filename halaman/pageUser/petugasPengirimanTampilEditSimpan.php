<?php
$id         = $_POST['id'];
$namaSales  = $_POST['nama'];
$telpSales  = $_POST['telp'];
$genderSales= $_POST['gender'];
include_once '../db_koneksi.php';
$query = "UPDATE petugasPengiriman SET "
        . "nama='".$nama."',"
        . "no_telp='".$telp."',"
        . "gender='".$gender."' "
        . "WHERE id=".$id;
//echo $query;
if ($koneksi->query($query)){
    echo 'berhasil';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();