<table border="1">
    <tr>
        <td align="center">Nama</td>
        <td align="center">Action</td>
    </tr>
    <?php
    include_once '../db_koneksi.php';
    $query = "SELECT * FROM petugasPengiriman";
    $result = $koneksi->query($query);
    if ($result->num_rows > 0){
        while ($row = $result->fetch_assoc()){
    ?>
    <tr>
        <td><?php echo $row['nama'];?></td>
        <td>
            [<a class="idSales" href="<?php echo $row['id'];?>">detail</a>]
            [<a class="editSales" href="<?php echo $row['id'];?>">edit</a>]
            [<a class="hapusSales" href="<?php echo $row['id'];?>">hapus</a>]
        </td>
    </tr>
    <?php
        }
    }else{
        echo "<tr><td colspan='2'>Tidak ada Data</td></tr>";
    }
    $koneksi->close();
    ?>
</table>
<script>
    $(document).ready(function(){
        $(".idSales").click(function(){
            event.preventDefault();
            var t = $(this).attr('href');
            t = "../halaman/pageUser/petugasPengirimanTampilDetail.php?id=" + t;
            $("#salesAction").load(t);
            console.log(t);
        });
        $(".editSales").click(function(){
            event.preventDefault();
            var t = $(this).attr('href');
            t = "../halaman/pageUser/petugasPengirimanTampilEdit.php?id=" + t;
            $("#salesAction").load(t);
            console.log(t);
        });
        $(".HapusSales").click(function(){
            event.preventDefault();
            var t = $(this).attr('href');
            t = "../halaman/pageUser/petugasPengirimanTampilHapus.php?id=" + t;
            $("#salesAction").load(t);
            $("#salesTampil").load("../halaman/pageUser/petugasPengirimanTampil.php");
            console.log(t);
        });
    });
</script>