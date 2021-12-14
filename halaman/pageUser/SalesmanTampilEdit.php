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
<form id="formEdit" method="POST">
    <table>
        <tr>
            <td colspan="2" align="center"><b>Edit</b></td>
        </tr>
        <tr>
            <td>ID</td>
            <td>
                <input type="hidden" name="id" value="<?php echo $idSales;?>">
                <?php echo $idSales;?>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="<?php echo $namaSales;?>">
            </td>
        </tr>
        <tr>
            <td>Area</td>
            <td>
                <input type="text" name="area" value="<?php echo $areaSales;?>">
            </td>
        </tr>
        <tr>
            <td>No Kendaraan</td>
            <td>
                <input type="text" name="nopol" value="<?php echo $nopolSales;?>">
            </td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td>
                <input type="text" name="telp" value="<?php echo $telpSales;?>">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="<?php echo $genderSales;?>"checked="s">Saved(<?php echo $genderSales;?>)<br>
                <input type="radio" name="gender" value="Laki-laki">Laki-laki<br>
                <input type="radio" name="gender" value="Perempuan">Perempuan
            </td>
        </tr>
        <tr>
            <td colspan="2" align="center">
                <div>
                    <a href="#" id="submit">
                        <div>
                            Simpan
                        </div>
                    </a>
                </div>
            </td>
        </tr>
    </table>
</form>
<script>
    $(document).ready(function(){
        $("#submit").click(function(){
            var data = $("#formEdit").serialize();
            $.ajax({
                type    : 'POST',
                url     : '../halaman/pageUser/SalesmanTampilEditSimpan.php',
                data    : data,
                success: function(){
                    $("#salesTampil").load("halaman/pageUser/SalesmanTampil.php");
                    $("#notif").text("!!! Data Berhasil Diubah !!!");
                }
            });
        });
    });
</script>