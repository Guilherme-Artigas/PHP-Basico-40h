<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Curso de PHP - CursoemVideo.com</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
    <body>
        <div>
            <?php
                for ($c = 1; $c <= 10; $c++) {
                    echo "$c, ";
                }
                echo "<br/>";
                for ($c = 10; $c >= 1; $c--) {
                    echo "$c, ";
                }
                echo "<br/>";
                for ($c = 0; $c <= 50; $c += 5) {
                    echo "$c, ";
                }
                echo "<br/>";
                for ($c = 20; $c >= 0; $c -= 2) {
                    print "$c, "; // outra opção para escrever comandos na tela com PHP
                }
            ?>
        </div>
    </body>
</html>