<h3 style="margin-top: 0px;margin-bottom: 0px;">Petugas Pengiriman</h3>
<hr>
<table>
    <tr>
        <td valign="top" align="center">
            <div>
                <a id="addSales" href="#">Tambah Petugas Pengiriman</a>
            </div>
            <div id="salesTampil">
                <?php
                include 'petugasPengirimanTampil.php';
                ?>
            </div>
        </td>
        <td valign="top" align="center">
            <div id="notif"></div>
            <div id="salesAction"></div>
        </td>
    </tr>
</table>
<script>
    $(document).ready(function(){
        $("#addSales").click(function(){
            event.preventDefault();
            $("#salesAction").load("../halaman/pageUser/petugasPengirimanTampilBaru.php");
        });
    });
</script>