<div>
    <ul>
        <li><a class="subMenu" href="AboutTentang">Tentang</a></li>
        <li><a class="subMenu" href="AboutVisiMisi">Visi Misi</a></li>
    </ul>
</div>

<div style="padding-top: 10px;padding-left: 110px;height: 250px">
    <h1 style="margin-top: 0px;margin-bottom: 0px;">About</h1>
    <hr>
    <div id="subMenu">
        
    </div>
</div>

<script>
    $(document).ready(function(){
        $(".subMenu").click(function(){
            event.preventDefault();
            var t = $(this).attr('href');
            t = "halaman/page" + t + ".php";
            $("#subMenu").load(t);
            console.log(t);
        });
    });
</script>