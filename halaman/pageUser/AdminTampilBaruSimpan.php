<?php
$nama  = $_POST['nama'];
$telp  = $_POST['telp'];
$gender= $_POST['gender'];
//$nama  = "SUSAN";
//$telp  = "88899900";
//$gender= "Wariah";
include_once '../db_koneksi.php';
$query = "INSERT INTO "
        . "admin (nama, gender, no_telp)"
        . "VALUES ('".$nama."', '".$gender."', '".$telp."')";
//echo $query;
if ($koneksi->query($query)){
    echo 'berhasil';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();