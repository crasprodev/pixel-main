<?php include ("navbar/navbar.php"); ?>
<style>
.image_total {
    position: relative;
    height: fit-content;
}

.imgshop {
    background: url("../img/Background/computerguy.jpg");
    height: 24rem;
    width: 100%;
    background-size: cover;
    background-repeat: no-repeat;
    position: relative;
    background-position: center;
    filter: hue-rotate(210deg) contrast(0.7);
}

.image_total.shoptitle {
    position: absolute;
    bottom: 0;
}
</style>

<body>

    <div class="image_total">
        <div class="imgshop"></div>
        <div class="shoptitle">
            <div class="txtbig"> Bem vindo</div> á nossa loja online!
        </div>
    </div>
    <div class="selectcat">
        <a href="" class="">
            <div class="textselect">VER TUDO</div>
            <div class="imgtext"></div>
        </a>
        <a href="" class="">
            <div class="textselect">VINIL</div>
            <div class="imgtext"></div>
        </a>
        <a href="" class="">
            <div class="textselect">TÊXTIL</div>
            <div class="imgtext"></div>
        </a>
        <a href="" class="">
            <div class="textselect">BRINDES</div>
            <div class="imgtext"></div>
        </a>
        <a href="" class="">
            <div class="textselect"></div>
            <div class="imgtext"></div>
        </a>
    </div>
</body>

</html>
<div>

    <script src="../Jquery/jquery.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</div>