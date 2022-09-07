<?php include ("navbar/navbar.php"); ?>

<style>
.grid-container {
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

    <h1>A Five Items Grid Layout</h1>

    <div class="grid-container">
        <div class="grid-item item1">1</div>
        <div class="grid-item item3">3</div>
        <div class="grid-item item4">4</div>
        <div class="grid-item item5">5</div>
    </div>

    <p>Direct child elements(s) of the grid container automatically becomes grid items.</p>

    <p>Item 1, 2, and 5 are set to span multiple columns or rows.</p>

</body>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<script>
AOS.init();
</script>
<script src="../Jquery/jquery.js"></script>

</html>
<script>
</script>