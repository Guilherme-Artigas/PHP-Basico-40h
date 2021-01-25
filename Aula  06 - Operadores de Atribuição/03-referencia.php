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
                $a = 3;
                $b = &$a;
                $b += 5;
                echo "Variável A vale: $a";
                echo "<br/> Variável B vale: $b";
            ?>
        </div>
    </body>
</html>