<?php
    define("title","picture");
    require_once "header.php";
?>
<link rel="stylesheet" href="css/recipe.css">
<link rel="stylesheet" href="css/ress.css">
<link rel="stylesheet" href="css/picture.css">
<body>
<div>
    <canvas
        id="draw-area"
        width="355px"
        height="355px"
        margin="0 10px"
        style="border: 1px solid #000000;">
    </canvas>
</div>
    <div class="hide">
        <button id="clear-button">全消し</button>
    </div>
    <div class="hide">
        <button id="eraser-button">消しゴムモード</button>
    </div>

    <script src="js/main.js"></script>
</body>
<style>
    header{
        margin-bottom: 100px;
    }
    .hide{
        display: none;
    }
    canvas{
        margin: 0 10px;
        margin-top: 200px;
        background: url("img/curry.svg") no-repeat center center;
        background-size: 355px 400px;
    }
</style>
<?php
require_once "footer.php";
?>
</html>