<?php
$id = $_GET['id'];
include_once '../db_koneksi.php';
$query = "SELECT * FROM salesman where id=".$id;
$result = $koneksi->query($query);
while ($row = $result->fetch_assoc()){
    $idSales    = $row['id'];
    $namaSales  = $row['nama'];
    $areaSales  = $row['area'];
    $nopolSales = $row['no_kendaraan'];
    $telpSales  = $row['no_telp'];
    $genderSales= $row['gender'];
}
$koneksi->close();
?>
<table>
    <tr>
        <td colspan="2" align="center"><b>Detail</b></td>
    </tr>
    <tr>
        <td>ID</td>
        <td><?php echo $idSales;?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td><?php echo $namaSales;?></td>
    </tr>
    <tr>
        <td>Area</td>
        <td><?php echo $areaSales;?></td>
    </tr>
    <tr>
        <td>No Kendaraan</td>
        <td><?php echo $nopolSales;?></td>
    </tr>
    <tr>
        <td>No Telp</td>
        <td><?php echo $telpSales;?></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td><?php echo $genderSales;?></td>
    </tr>
</table>