<?php include ("navbar/navbar.php");
$codigo_folha = $_GET["cod"];

?>

<body>
    <style>
    svg.radial-progress {
        height: auto;
        max-width: 200px;
        padding: 1em;
        transform: rotate(-90deg);
        width: 100%;
    }

    svg.radial-progress circle {
        fill: rgba(0, 0, 0, 0);
        stroke: #fff;
        stroke-dashoffset: 219.91148575129;
        stroke-width: 10;
    }

    svg.radial-progress circle.incomplete {
        opacity: 0.25;
    }

    svg.radial-progress circle.complete {
        stroke-dasharray: 219.91148575129;
    }

    svg.radial-progress text {
        fill: #fff;
        text-anchor: middle;
    }

    .progress_bar {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
        justify-content: center;
        column-gap: 2rem;
    }


    .titulo {
        font-size: 2rem;
        text-align: center;
    }

    .sm-titulo {
        font-size: 2rem;
    }

    .percentage {
        width: fit-content;
        position: absolute;
    }

    .progress {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .progressmodule {
        width: fit-content;
        text-align: center;
        background: #f1ac1db3;
        width: 100%;
        margin-top: 10rem;
        padding-top: 2rem;
        padding-bottom: 2rem;
    }

    .estado_act {
        border: 3px solid wheat;
        height: 3rem;
        display: flex;
        align-items: center;
        justify-content: center;
    }


    .estado {
        display: flex;
        flex-direction: column;
    }

    .state {
        font-size: 2rem;
        height: 3rem;
        color: white;
        border: 3px solid wheat;
        border: 3px solid wheat;
        border-bottom: none;
    }

    svg.radial-progresscircle {
        stroke: #a2ed56;
    }

    .titleanddescription {}
    </style>
    <div class="progressmodule">

        <div class="titulo">Progresso do seu produto</div><br>
        <div class="progress_bar">

            <div class="progress">

                <svg class="radial-progress" data-percentage="0" viewBox="0 0 80 80">
                    <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                    <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;">
                    </circle>
                    <text class="percentage" x="0%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">82%</text>
                </svg>
            </div>
            <div class="titleanddescription">
                <div class="sm-titulo">Nome do produto</div><br><br>
                <div class="estado">
                    <div class="state">Estado</div>
                    <div class="estado_act">A fazer</div>
                </div>
            </div>
        </div>
    </div>
</body>
<script src="../Jquery/jquery.js"></script>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha384-tsQFqpEReu7ZLhBV2VZlAu7zcOV+rXbYlF2cqB8txI/8aZajjp4Bqd+V6D5IgvKT" crossorigin="anonymous">
</script>

<script src="../Jquery/loginsignin.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
AOS.init();
</script>
<script>
$('svg.radial-progress').find($('circle.complete')).removeAttr('style');
$('svg.radial-progress').each(function(index, value) {


    percent = 0;
    $(".percentage").text(percent + "%");
    console.log(percent);
    // Get radius of the svg's circle.complete
    radius = $(this).find($('circle.complete')).attr('r');
    // Get circumference (2πr)
    circumference = 2 * Math.PI * radius;
    // Get stroke-dashoffset value based on the percentage of the circumference
    strokeDashOffset = circumference - ((percent * circumference) / 100);
    // Transition progress for 1.25 seconds
    $('svg.radial-progress').find($('circle.complete')).animate({
        'stroke-dashoffset': strokeDashOffset
    }, 1250);
});
</script>