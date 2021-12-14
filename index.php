<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <script src="js/script.js"></script>
    </head>
    <body>
        <header>
            <ul>
                <li><a class="menu" href="Home">Home</a></li>
                <li><a class="menu" href="About">About</a></li>
                <li class="dropdown">
                    <div href="javascript:void(0)" class="dropbtn">Keanggotaan</div>
                    <div class="dropdown-content">
                        <a class="menu" href="User">User</a>
                    </div>
                </li>
            </ul>
        </header>
        <main>
            <div id="main"></div>
        </main>
        <footer>
            <p>powered by KarimaCorp<br>
                <?php
                echo date('Y');
                ?>
            </p>
        </footer>
        <script>
            $(document).ready(function(){
                $("#main").load("halaman/pageHome.php");
                $(".menu").click(function(){
                    event.preventDefault();
                    var t = $(this).attr('href');
                    t = "../halaman/page" + t + ".php";
                    $("#main").load(t);
                });
            });
        </script>
    </body>
</html>
