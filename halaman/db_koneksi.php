<?php
$servername = "localhost";
$username = "root";
$password = "dvs";
$database = "karima";
$koneksi = new mysqli($servername, $username, $password, $database);
if ($koneksi->connect_error) {
    die("gagal: " . $koneksi->connect_error);
}else{
    //echo 'koneksi berhasil';
}