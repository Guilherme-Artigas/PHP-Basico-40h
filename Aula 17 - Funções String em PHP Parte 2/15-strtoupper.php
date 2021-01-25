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
                echo "<p>strtoupper — Converte uma string para maiúsculas...</p>";
                $nome = "guilherme artigas";
                echo "<p>seu nome sem a função strtoupper é $nome</p>";
                echo "<p>seu nome com a função strtoupper é ".strtoupper($nome)."</p>";
            ?>
        </div>
    </body>
</html>