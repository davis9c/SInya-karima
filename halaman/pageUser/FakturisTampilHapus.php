<?php
$id         = $_GET['id'];
include_once '../db_koneksi.php';
$query = "DELETE FROM fakturis WHERE id=".$id;
//echo $query;
if ($koneksi->query($query)){
    echo 'Data Fakturis ID '.$id.' telah dihapus';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();