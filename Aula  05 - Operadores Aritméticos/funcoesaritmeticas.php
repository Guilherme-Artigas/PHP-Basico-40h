<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Funções Aritméticas</title>
        <link rel="stylesheet" href="_css/estilo.css">
        <style>
            h2 {font: 15pt arial; color: #171559; font-weight: bold;}
        </style>
    </head>
    <body>
        <div>
            <?php
                $valor1 = $_GET["par1"];
                $valor2 = $_GET["par2"];
                echo "<h2>Valores recebidos: $valor1 e $valor2</h2>";
                echo "O valor absoluto de -3 é 3";
                echo "<br/> O valor de $valor1<sup>$valor2</sup> é ".pow($valor1, $valor2);
                echo "<br/> Raiz de $valor1: ".sqrt($valor1);
                echo "<br/> Valor de $valor2 arredondado: ".round($valor2); // ceil(sempre arredonda pra cima). floor(sempre arredonda para baixo)
                echo "<br/> Parte inteiro da variavel $valor2: ".intval($valor2);
                echo "<br/> Valor de $valor1 em moeda é: R$ ".number_format($valor1,2);
            ?>
        </div>
    </body>
</html>