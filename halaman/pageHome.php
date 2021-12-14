<div>
    <ul>
        <li><a class="subMenu" href="link1">Data1</a></li>
        <li><a class="subMenu" href="link1">Data2</a></li>
        <li><a class="subMenu" href="link1">Data3</a></li>
        <li><a class="subMenu" href="link1">Data4</a></li>
    </ul>
</div>

<div style="padding-top: 10px;padding-left: 110px;height: 250px">
    <h1 style="margin-top: 0px;margin-bottom: 0px;">Home</h1>
    <hr>
    <div id="subMenu">
        Home Page
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