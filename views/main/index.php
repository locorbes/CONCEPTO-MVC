<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MVC</title>
    <?php require "views/head.php";?>
</head>
<body>

<div id="myNav" class="overlay">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <div class="overlay-content">
        <a href="#">CONCEPTO MVC</a>
        <a href="docs">Documentación</a>
        <a href="news">Novedades</a>
        <a href="#">GitHub</a>
        <p style="color:#aaa; margin-top:25px;">v1.0.0</p>
    </div>
</div>
<div class="main">
    <div>
        <img src="assets/images/logo.svg" class="logo"><br>
        <span style="font-size:16px;cursor:pointer;top:5px;" class="brk-btn" onclick="openNav()">MENU</span>
    </div>
</div>     
</body>
<script>
    function openNav() {
        document.getElementById("myNav").style.width = "100%";
    }

    function closeNav() {
        document.getElementById("myNav").style.width = "0%";
    }
</script>
</html>
