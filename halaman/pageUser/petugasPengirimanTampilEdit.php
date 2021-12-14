<?php
$id = $_GET['id'];
include_once '../db_koneksi.php';
$query = "SELECT * FROM petugasPengiriman where id=".$id;
$result = $koneksi->query($query);
while ($row = $result->fetch_assoc()){
    $id    = $row['id'];
    $nama  = $row['nama'];
    $telp  = $row['no_telp'];
    $gender= $row['gender'];
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
                <input type="hidden" name="id" value="<?php echo $id;?>">
                <?php echo $idSales;?>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" value="<?php echo $nama;?>">
            </td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td>
                <input type="text" name="telp" value="<?php echo $telp;?>">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="<?php echo $gender;?>"checked="s">Saved(<?php echo $gender;?>)<br>
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
                url     : '../halaman/pageUser/petugasPengirimanTampilEditSimpan.php',
                data    : data,
                success: function(){
                    $("#salesTampil").load("halaman/pageUser/petugasPengirimanTampil.php");
                    $("#notif").text("!!! Data Berhasil Diubah !!!");
                }
            });
        });
    });
</script>