<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Operações Aritméticas</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <?php
                $n1 = $_GET["a"];
                $n2 = $_GET["b"];
                echo "<h2>Valores recebidos: $n1 e $n2</h2>";
                $media = ($n1 + $n2) / 2;
                echo "A soma entre $n1 e $n2: ".($n1+$n2);
                echo "<br/>Subtração entre $n1 e $n2: ".($n1-$n2);
                echo "<br/>Multiplicação entre $n1 e $n2: ".($n1*$n2);
                echo "<br/>Divisão entre $n1 e $n2: ".($n1/$n2);
                echo "<br/>Resto da divisão entre $n1 e $n2: ".($n1%$n2);
                echo "<br/>Média entre $n1 e $n2: $media";

                // -------------------------------------------------------------
                // Ordem de Precedência dos operadores aritméticos dentro do PHP
                // -------------------------------------------------------------
                // Parênteses ()
                // ----------------
                // Multiplicação * ... O que aparecer primeiro.
                // Divisão       / ... O que aparecer primeiro.
                // Módulo        % ... O que aparecer primeiro.
                // ----------------
                // Adição    + ... O que aparecer primeiro.
                // Subtração - ... O que aparecer primeiro.
            ?>
        </div>
    </body>
</html>