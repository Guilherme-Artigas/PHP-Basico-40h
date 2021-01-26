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
                echo "<p>strpos — Encontra a posição da primeira ocorrência de uma string...</p>";
                echo $nome = "guilherme artigas";
                echo "<p>A letra R esta na posição... ".strpos($nome,"r").", iniciando em 0</p>";
            ?>
        </div>
    </body>
</html>