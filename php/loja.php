<?php include ("navbar/navbar.php"); ?>


<body>

    <div class="image_total">
        <div class="imgshop"></div>
        <div class="shoptitle">
            <div class="txtbig"> Bem vindo</div> á nossa loja online!
        </div>
    </div>
    <div class="shoppingstore">
        <div class="selectfiltro">
            <div class="selectcat">
                <div class="aroundselect">
                    <div class="textselect" aes-prop="VER TUDO">VER TUDO</div>
                </div>
                <div class="aroundselect">
                    <div class="textselect" aes-prop="GRANDE FORMATO">GRANDE FORMATO</div>
                </div>
                <div class="aroundselect">
                    <div class="textselect" aes-prop="PEQUENO FORMATO">PEQUENO FORMATO</div>
                </div>
                <div class="aroundselect">
                    <div class="textselect" aes-prop="VINIL">VINIL</div>
                </div>
                <div class="aroundselect">
                    <div class="textselect" aes-prop="TÊXTIL">TÊXTIL</div>
                </div>
                <div class="aroundselect">
                    <div class="textselect" aes-prop="BRINDES">BRINDES</div>
                </div>

            </div>
            <div class="filtro">
                Filtro
            </div>
            <div class="grid-container">
                <div class="product-grid">
                    <div class="img-container">
                        <div alt="" class='imgshop-product'></div>
                    </div>
                    <div class="description-container">
                        <div class="name">Nome</div>
                        <div class="preco">Preço</div>
                        <div class="descricaoshop">descricao descricao descricao descricao descricao descricao descricao
                            descricao descricao descricao descricao descricao
                        </div>
                        <div class="cartbtn">Adicionar ao cart</div>
                    </div>

                </div>
                <div class="product-grid">
                    <div class="img-container">
                        <div alt="" class='imgshop-product'></div>
                    </div>
                    <div class="description-container">
                        <div class="name">Nome</div>
                        <div class="preco">Preço</div>
                        <div class="descricaoshop">descricao descricao descricao descricao descricao descricao descricao
                            descricao descricao descricao descricao descricao
                        </div>
                        <div class="cartbtn">Adicionar ao cart</div>

                    </div>
                </div>
                <div class="product-grid">
                    <div class="img-container">
                        <div alt="" class='imgshop-product'></div>
                    </div>
                    <div class="description-container">
                        <div class="name">Nome</div>
                        <div class="preco">Preço</div>
                        <div class="descricaoshop">descricao descricao descricao descricao descricao descricao descricao
                            descricao descricao descricao descricao descricao
                        </div>
                        <div class="cartbtn">Adicionar ao cart</div>
                    </div>

                </div>
                <div class="product-grid">
                    <div class="img-container">
                        <div alt="" class='imgshop-product'></div>
                    </div>
                    <div class="description-container">
                        <div class="name">Nome</div>
                        <div class="preco">Preço</div>
                        <div class="descricaoshop">descricao descricao descricao descricao descricao descricao descricao
                            descricao descricao descricao descricao descricao
                        </div>
                        <div class="cartbtn">Adicionar ao cart</div>
                    </div>

                </div>
                <div class="product-grid">
                    <div class="img-container">
                        <div alt="" class='imgshop-product'></div>
                    </div>
                    <div class="description-container">
                        <div class="name">Nome</div>
                        <div class="preco">Preço</div>
                        <div class="descricaoshop">descricao descricao descricao descricao descricao descricao descricao
                            descricao descricao descricao descricao descricao
                        </div>
                        <div class="cartbtn">Adicionar ao cart</div>

                    </div>
                </div>
                <div class="product-grid">
                    <div class="img-container">
                        <div alt="" class='imgshop-product'></div>
                    </div>
                    <div class="description-container">
                        <div class="name">Nome</div>
                        <div class="preco">Preço</div>
                        <div class="descricaoshop">descricao descricao descricao descricao descricao descricao descricao
                            descricao descricao descricao descricao descricao
                        </div>
                        <div class="cartbtn">Adicionar ao cart</div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="totalproducts" style='display:none'>
        <div class="closebtn">+</div>
        <div class="section-total">
            <div class="section-img">
                <div class="image-containertotal">
                    <div class="imgtotalcss"></div>
                </div>
                <div class="imgslider-total">
                    <div class="arrow-left"></div>
                    <div class="arrow-right"></div>
                    <div class="totalimgsm">
                        <div class="freerangeimg">
                            <div class="imgtotalsm"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="sectiontext">
                <div class="text_title"></div>
                <div class="text-description"></div>
            </div>
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
    <script>
    function GetURLParameter(sParam) {
        var sPageURL = window.location.search.substring(1);
        var sURLVariables = sPageURL.split('&');
        for (var i = 0; i < sURLVariables.length; i++) {
            var sParameterName = sURLVariables[i].split('=');
            if (sParameterName[0] == sParam) {
                return decodeURIComponent(sParameterName[1]);
            }
        }
    }

    function inserturl(value) {
        var currentURL = window.location.protocol + "//" + window.location.host + window
            .location.pathname + "?" + value;
        window.history.pushState({
            path: currentURL
        }, '', currentURL);
    }

    $(".textselect").on("click", function() {
        const textselect = $(this).attr("aes-prop");
        var link = "categoria=" + textselect;
        console.log(link);
        inserturl(link);
    });
    </script>
</div>