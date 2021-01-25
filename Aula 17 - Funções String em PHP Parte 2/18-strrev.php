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
                echo "<p>strrev — Escreve uma string de traz para frente...</p>";
                $nome = "guilherme artigas";
                echo "<p>Seu nome sem usar a função strrev é $nome</p>";
                echo "<p>Seu nome usando a função strrev é ".strrev($nome)."</p>";
            ?>
        </div>
    </body>
</html>