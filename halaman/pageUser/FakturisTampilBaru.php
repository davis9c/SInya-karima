<form id="formBaru" method="POST">
    <table>
        <tr>
            <td colspan="2" align="center"><b>Edit</b></td>
        </tr>
        <tr>
            <td>ID</td>
            <td>
                <input type="hidden" name="id" value="0"> Id created by Sistem
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>
                <input type="text" name="nama" placeholder="Jhon Smith">
            </td>
        </tr>
        <tr>
            <td>No Telp</td>
            <td>
                <input type="text" name="telp" placeholder="021-223344">
            </td>
        </tr>
        <tr>
            <td>Gender</td>
            <td>
                <input type="radio" name="gender" value="Laki-laki" checked="">Laki-laki<br>
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
            var data = $("#formBaru").serialize();
            $.ajax({
                type    : 'POST',
                url     : '../halaman/pageUser/FakturisTampilBaruSimpan.php',
                data    : data,
                success: function(){
                    $("#salesTampil").load("../halaman/pageUser/FakturisTampil.php");
                    $("#notif").text("!!! Data Berhasil Disimpan !!!");
                }
            });
        });
    });
</script>