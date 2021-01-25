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
                echo "<p>str_pad — Preenche uma string para um certo tamanho com outra string...</p>";
                $nome = "guilherme";
                echo "<p>".str_pad($nome, 15, "_", STR_PAD_BOTH)."</p>";
                echo "<p>".str_pad($nome, 15, "*", STR_PAD_LEFT)."</p>";
                echo "<p>".str_pad($nome, 15, "#", STR_PAD_RIGHT)."</p>";
            ?>
        </div>
    </body>
</html>