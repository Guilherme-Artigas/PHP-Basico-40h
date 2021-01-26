<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">    
        <title>Curso de PHP - Cursoemvideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $ano = $_GET["p1"];
                $idade = 2020-$ano;
                echo "Quem nasceu em $ano, tem $idade anos.<br/>";
                echo "Nesse caso, ".($idade >= 18 && $idade <= 64 ?"VOTO OBRIGATÓRIO.":"VOTO NÃO OBRIGATÓRIO.");
            ?>
        </div>
    </body>
</html>