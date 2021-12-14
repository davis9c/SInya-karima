<?php
$id         = $_POST['id'];
$nama  = $_POST['nama'];
$noSika  = $_POST['no_sika'];
$telp  = $_POST['telp'];
$gender= $_POST['gender'];
include_once '../db_koneksi.php';
$query = "INSERT INTO logistik ("
        . "nama, no_sika, no_telp, gender)"
        . "VALUES ("
        . "'".$nama."',"
        . "'".$noSika."',"
        . "'".$telp."',"
        . "'".$gender."')";
//echo $query;
if ($koneksi->query($query)){
    echo 'berhasil';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();