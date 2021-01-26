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
                $nota1 = $_GET["p1"];
                $nota2 = $_GET["p2"];
                $media = ($nota1 + $nota2) / 2;
                echo $media > 6?"Aprovado":"Reprovado";
            ?>
        </div>
    </body>
</html>