<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $n1 = 5;
                $n2 = "5";
                $r = $n1==$n2?"sim":"nao";
                echo "As variáveis armazenam o mesmo valor? [Sim/Não]: $r";
            ?>
        </div>
    </body>
</html>