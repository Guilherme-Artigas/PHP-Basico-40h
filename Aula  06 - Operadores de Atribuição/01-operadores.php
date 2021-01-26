<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $preco = $_GET["p1"];
                echo "O preço do produto é R$ ".(number_format($preco,2));
                echo "<br/> R$$preco com 10% de aumento é igual: R$".number_format($preco += $preco*10/100,2);
                echo "<br/> R$".number_format($preco,2)." com 25% de desconto é igual: R$".number_format($preco -= $preco*25/100,2);
            ?>
        </div>
    </body>
</html>