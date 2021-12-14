<div>
    <ul>
        <li><a class="subMenu" href="Admin">Admin</a></li>
        <li><a class="subMenu" href="Fakturis">Fakturis</a></li>
        <li><a class="subMenu" href="Salesman">Salesman</a></li>
        <li><a class="subMenu" href="petugasPengiriman">Pengiriman</a></li>
        <li><a class="subMenu" href="Logistik">Logistik</a></li>
    </ul>
</div>

<div style="padding-top: 10px;padding-left: 110px;">
    <h1 style="margin-top: 0px;margin-bottom: 0px;">Anggota</h1>
    <hr>
    <div id="subMenu">
    </div>
</div>

<script>
    $(document).ready(function(){
        $("#subMenu").load("halaman/pageUser/Admin.php");
        $(".subMenu").click(function(){
            event.preventDefault();
            var t = $(this).attr('href');
            t = "halaman/pageUser/" + t + ".php";
            $("#subMenu").load(t);
            console.log(t);
        });
    });
</script>

