<?php include ("navbar/navbar.php"); ?>

<body>
    <style>
    .progressmodule {
        margin-top: 12rem;
        background: red;
        padding-top: 1rem;
        padding-bottom: 1rem;
        text-align: center;
    }

    .titulo {
        font-size: 2rem;
    }

    .sm-titulo {
        font-size: 1.5rem;
    }
    </style>
    <div class="progressmodule">
        <div class="titulo">Progresso do seu produto</div><br>
        <div class="sm-titulo">Estampagem de ol</div>
        <div class="progress_bars">
            <div class="progresses">

            </div>
            <div class="progress_bar"></div>
        </div>
    </div>
</body>
<script src="../Jquery/jquery.js"></script>
<script src="../Jquery/loginsignin.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>