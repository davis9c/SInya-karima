<?php
$id    = $_POST['id'];
$nama  = $_POST['nama'];
$telp  = $_POST['telp'];
$gender= $_POST['gender'];
include_once '../db_koneksi.php';
$query = "UPDATE fakturis SET "
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