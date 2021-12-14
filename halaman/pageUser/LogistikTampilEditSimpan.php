<?php
$id         = $_POST['id'];
$namaSales  = $_POST['nama'];
$noSika  = $_POST['no_sika'];
$telp  = $_POST['telp'];
$gender= $_POST['gender'];
include_once '../db_koneksi.php';
$query = "UPDATE logistik SET "
        . "nama='".$namaSales."',"
        . "no_sika='".$noSika."',"
        . "no_telp='".$telpSales."',"
        . "gender='".$genderSales."' "
        . "WHERE id=".$id;
//echo $query;
if ($koneksi->query($query)){
    echo 'berhasil';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();