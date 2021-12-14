<h3 style="margin-top: 0px;margin-bottom: 0px;">Admin</h3>
<hr>
<table>
    <tr>
        <td valign="top" align="center">
            <div>
                <a id="addSales" href="#">Tambah Sales</a>
            </div>
            <div id="salesTampil">
                <?php
                include 'AdminTampil.php';
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
            $("#salesAction").load("../halaman/pageUser/AdminTampilBaru.php");
        });
    });
</script>