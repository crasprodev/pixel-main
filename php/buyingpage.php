<?php include ("navbar/navbar.php"); ?>

<style>
.grid-container-shop {
    display: grid;
    gap: 10px;
    background-color: #2196F3;
    padding: 10px;

}

.grid-item {
    background-color: rgba(255, 255, 255, 0.8);
    text-align: center;
    padding: 20px;
    font-size: 30px;
}

.item1 {
    grid-column: 1;
    grid-row: span 2;
}


.item5 {
    grid-column: 1 / span 2;
    grid-row: 3;
}
</style>
</head>

<body>
    <div class="grid-container-shop">
        <div class="grid-item item1">1</div>
        <div class="grid-item item3">3</div>
        <div class="grid-item item4">4</div>
        <div class="grid-item item5">5</div>
    </div>
</body>
<script>
AOS.init();
</script>
<script src="../Jquery/jquery.js"></script>

</html>
<script>
</script>