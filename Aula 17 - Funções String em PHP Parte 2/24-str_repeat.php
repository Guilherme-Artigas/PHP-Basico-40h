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
                echo "<p>str_repeat — Repete uma string...</p>";
                $divisor = "*_";
                echo "<p>".str_repeat($divisor, 10)."</p>";
            ?>
        </div>
    </body>
</html>