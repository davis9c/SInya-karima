<?php
$id         = $_GET['id'];
include_once '../db_koneksi.php';
$query = "DELETE FROM logistik WHERE id=".$id;
//echo $query;
if ($koneksi->query($query)){
    echo 'Data] ID '.$id.' telah dihapus';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();