<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $valor = $_GET["v"];
                echo "Raiz Quadrada de $valor = ".sqrt($valor);
            ?>
            <a href="01-exercicio.html">Voltar</a>
        </div>
    </body>
</html>