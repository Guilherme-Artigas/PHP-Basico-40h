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
                $anoN = isset($_GET["ano"])?$_GET["ano"]:"Nenhum valor foi digitado!";
                $idade = date("Y")-$anoN;
                echo "Você nasceu em $anoN e tem $idade anos.<br/>";
                if ($idade >= 18) {
                    echo "você pode vota e dirigir.<br/>";
                }
                    elseif ($idade >= 16) {
                        echo "Você pode votar, mais ainda nao pode dirigir.<br/>";
                    }
                else {
                    echo "Você ainda é um pichuleco! não pode votar e nem dirigir...<br/>";
                }
            ?>
            <a href="exercicio-01.html">Voltar</a>
        </div>
    </body>
</html>