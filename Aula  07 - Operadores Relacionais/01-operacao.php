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
                $valor1 = $_GET["p1"];
                $valor2 = $_GET["p2"];
                $r;
                // Operador Ternário
                $r = $valor1 > $valor2 ? $valor1 / $valor2 : $valor1 * $valor2;
                echo $r;
            ?>
        </div>
    </body>
</html>