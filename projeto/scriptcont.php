<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="Assets/CSS/estilopaginas.css" />
        <meta charset="UTF-8"/>
        <title>SC TURISMO - CONTATO CONFIRMADO</title>
    </head>
    <body>
           <div class="scripts">
            <?php
                $nome=$_POST["nome"];
                echo "</br><b>&nbsp;&nbsp;&nbsp;&nbsp;Nome informado:</b> </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nome";
                $sobrenome=$_POST["sobrenome"];
                echo "</br><b>&nbsp;&nbsp;&nbsp;&nbsp;Sobrenome informado:</b> </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$sobrenome";
                $email=$_POST["email"];
                echo "</br><b>&nbsp;&nbsp;&nbsp;&nbsp;Email para contato informado:</b> </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$email";
                $telefone=$_POST["telefone"];
                echo "</br><b>&nbsp;&nbsp;&nbsp;&nbsp;Telefone para contato informado:</b> </br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$email";
                $duvida=$_POST["duvida"];
                echo "</br><b>&nbsp;&nbsp;&nbsp;&nbsp;Texto enviado:</b> </br></br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$duvida";
            ?>
            </div>
    </body>
</html>