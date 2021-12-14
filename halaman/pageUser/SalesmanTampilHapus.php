<?php
$id         = $_GET['id'];
include_once '../db_koneksi.php';
$query = "DELETE FROM salesman WHERE id=".$id;
//echo $query;
if ($koneksi->query($query)){
    echo 'Data sales ID '.$id.' telah dihapus';
}else{
    echo 'gagal<br>'.$koneksi->error;
}
$koneksi->close();