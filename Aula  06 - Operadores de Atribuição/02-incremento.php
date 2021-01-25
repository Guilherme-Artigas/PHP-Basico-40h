<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - cursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $ano_Atual = $_GET["p1"]; // pegando valor apartir da URL
                echo "Ano digitado foi $ano_Atual";
                echo "<br/> Ano anterior é ".(--$ano_Atual);
            ?>
        </div>
    </body>
</html>