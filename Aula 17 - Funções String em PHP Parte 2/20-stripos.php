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
                echo "<p>stripos — Encontra a primeira ocorrencia de uma string sem diferenciar maiúsculas e minúsculas...</p>";
                echo $nome = "guilherme artigas";
                echo "<p>A letra R esta na posição... ".stripos($nome,"R").", iniciando em 0</p>";
            ?>
        </div>
    </body>
</html>