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
                echo "<p>ucfirst — Converte para maiúscula o primeiro caractere de uma string</p>";
                $nome = "guilherme artigas";
                echo "<p>Seu nome sem usar a função ucfirst é $nome</p>";
                echo "<p>Seu nome usando a função ucfirst é ".ucfirst($nome)."</p>";
            ?>
        </div>
    </body>
</html>