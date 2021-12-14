<h3 style="margin-top: 0px;margin-bottom: 0px;">Fakturis</h3>
<hr>
<table>
    <tr>
        <td valign="top" align="center">
            <div>
                <a id="addSales" href="#">Tambah Fakturis</a>
            </div>
            <div id="salesTampil">
                <?php
                include 'FakturisTampil.php';
                ?>
            </div>
        </td>
        <td valign="top" align="center">
            <div id="notif">
                
            </div>
            <div id="salesAction">
                
            </div>
        </td>
    </tr>
</table>
<script>
    $(document).ready(function(){
        $("#addSales").click(function(){
            event.preventDefault();
            $("#salesAction").load("../halaman/pageUser/FakturisTampilBaru.php");
        });
    });
</script>