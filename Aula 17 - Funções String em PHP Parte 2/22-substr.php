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
                echo "<p>substr — Retorna uma parte de uma string, com a passagem de 2 parâmetros...</p>";
                echo $nome = "guilherme artigas";
                echo "<p>".substr($nome, 0, 9)."</p>";
            ?>
        </div>
    </body>
</html>