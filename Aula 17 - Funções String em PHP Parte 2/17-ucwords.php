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
                echo "<p>ucwords — Converte para maiúsculas o primeiro caractere de cada palavra</p>";
                $nome = "guilherme artigas";
                echo "<p>Seu nome sem usar a função ucwords é $nome</p>";
                echo "<p>Seu nome usando a função ucwords é ".ucwords($nome)."</p>";
            ?>
        </div>
    </body>
</html>