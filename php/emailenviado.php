<?php include ("navbar/navbar.php"); ?>

<body>
    <div class="blueacc_menu login">
        <div class="menu login">
            <?php $resultado=$_GET["result"];
      if($resultado == 1)
      {
        echo "<div class='email_enviado'> Email enviado";
      }
      if($resultado == 0)
      {
        echo "<div class='email_enviado'> Tente outra vez - email incorreto";
      }
      if($resultado == 2)
      { 
        echo "<div class='email_enviado'> Password modificada ";
      }
      if($resultado == 3)
      {
        echo "<div class='email_enviado'> Erro - email não enviado";
      }
     if($resultado>=2)
     {
echo " <br>
<h4><a href='login'>login</a></h4>
</div>";
     }
     else
    {
      echo " <br>
<h4><a href='https://pixelprints.pt/php'>Inicio</a></h4>
</div>";
    } 
 ?>
        </div>
    </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.js">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
    <script src="../Jquery/loginsignin.js"></script>
</body>

</html>
<div style='display:none'>

    <script src="../Jquery/jquery.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
    AOS.init();
    </script>
</div>