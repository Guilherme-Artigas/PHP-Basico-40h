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
                $n = isset($_GET["numero"])?$_GET["numero"]:5;
                $totalM = 0;
                echo "<h2>Analisando o número $n...</h2>";
                echo "Valores múltiplos: ";
                for ($c = 1; $c <= $n; $c++) {
                    if ($n % $c == 0) {
                        echo "$c ";
                        $totalM += 1;
                    }
                }
                echo "<br/>";
                echo "Total de mútiplos: $totalM <br/>";
                if ($totalM == 2) {
                    echo "Resultado: $n <span class='foco'>É PRIMO!</span>";
                }
                else {
                    echo "Resultado: $n <span class='foco'>NÃO É PRIMO</span>";
                }
            ?>
            <br/>
            <a href="exercicio-03.html"><input type="submit" value="<"></a>
        </div>
    </body>
</html>