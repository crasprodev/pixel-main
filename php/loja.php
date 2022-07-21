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
    background: #F1AC1D;
    width: 15rem;
    display: flex;
    height: 2rem;
    border-radius: 25rem;
    align-items: center;
    justify-content: center;
    align-content: center;
}

.textselect:nth-child(2n) {
    background: #E4398C;
}

.textselect:nth-child(3n) {
    background: #234F9D;
}


.selectcat {
    width: 80%;
    background: red;
    margin-left: auto;
    margin-right: auto;
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(9rem, 1fr));
    column-gap: 1rem;
    /* row-gap: 0.2rem; */
    /* align-items: center; */
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
            </a>
            <a href="" class="">
                <div class="textselect">GRANDE FORMATO</div>
            </a>
            <a href="" class="">
                <div class="textselect">PEQUENO FORMATO</div>
            </a>
            <a href="" class="">
                <div class="textselect">VINIL</div>
            </a>
            <a href="" class="">
                <div class="textselect">TÊXTIL</div>
            </a>
            <a href="" class="">
                <div class="textselect">BRINDES</div>
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