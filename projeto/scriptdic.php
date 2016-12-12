<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Assets/CSS/estilopaginas.css" />
        <meta charset="UTF-8"/>
        <title>SC TURISMO - DICA REGISTRADA</title>
    </head>
    <body>
           <div class="scripts">
            <?php
                $nome=$_POST["nome"];
                echo "</br><b>&nbsp;&nbsp;&nbsp;&nbsp;Nome informado:</b> </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nome";
                $regiao=$_POST["regiao"];
                echo "</br><b>&nbsp;&nbsp;&nbsp;&nbsp;Regiao selecionada:</b> </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$regiao";
                $dica=$_POST["dica"];
                echo "</br><b>&nbsp;&nbsp;&nbsp;&nbsp;Dica enviada:</b> </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$dica";
            ?>
            </div>
    </body>
</html>