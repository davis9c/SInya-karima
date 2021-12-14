<?php
$id = $_GET['id'];
include_once '../db_koneksi.php';
$query = "SELECT * FROM admin where id=".$id;
$result = $koneksi->query($query);
while ($row = $result->fetch_assoc()){
    $id    = $row['id'];
    $nama  = $row['nama'];
    $telp  = $row['no_telp'];
    $gender= $row['gender'];
}
$koneksi->close();
?>
<table>
    <tr>
        <td colspan="2" align="center"><b>Detail</b></td>
    </tr>
    <tr>
        <td>ID</td>
        <td><?php echo $id;?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $nama;?></td>
    </tr>
    <tr>
        <td>No Telp</td>
        <td><?php echo $telp;?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo $gender;?></td>
    </tr>
</table>