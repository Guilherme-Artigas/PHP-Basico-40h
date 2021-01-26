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
                echo "<p>str_replace — Substitui todas as ocorrências da string de procura com a string de substituição...</p>";
                // Fornece: <body text='black'>
                $bodytag = str_replace("%body%", "black", "<body text='%body%'>");

                // Fornece: hll wrld f PHP
                $vogais = array("a", "e", "i", "o", "u", "A", "E", "I", "O", "U");
                echo $soconsoantes = str_replace($vogais, "", "ola mundo do PHP");
            ?>
        </div>
    </body>
</html>