<?php include ("navbar/navbar.php"); ?>
<style>
.image_total {
    position: relative;
    height: fit-content;
    margin-top: 14rem;
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

.shoptitle {
    font-size: calc(1.7rem + 1vw);
    position: absolute;
    bottom: 30%;
    left: 10%;
}

.txtbig {

    font-size: calc(3rem + 1vw);
}

.shoppingstore {
    background: white;
    height: 18rem;
}

.selectcat {
    background: red;
}

.textselect {
    background: green;
    width: 10rem;
    display: flex;
    height: 2rem;
    /* text-align: center; */
    border-radius: 25rem;
    align-items: center;
    justify-content: center;
    align-content: center;
}
</style>

<body>

    <div class="image_total">
        <div class="imgshop"></div>
        <div class="shoptitle">
            <div class="txtbig"> Bem vindo</div> á nossa loja online!
        </div>
    </div>
    <div class="shoppingstore">
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