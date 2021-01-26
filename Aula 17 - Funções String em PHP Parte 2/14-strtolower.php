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
                echo "<p>strtolower — Converte uma string para minúsculas...</p>";
                $nome = "Guilherme Artigas";
                echo ("Seu nome é ".strtolower($nome));
            ?>
        </div>
    </body>
</html>