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
                echo "<p>substr_count — Conta o número de ocorrências de uma substring...</p>";
                echo $nome = "guilherme artigas";
                echo "<p>A letra 'e' foi encontrada ".substr_count($nome,"e")."x, dentro da variavel.</p>";
            ?>
        </div>
    </body>
</html>