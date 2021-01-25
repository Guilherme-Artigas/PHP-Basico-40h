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
                $c = 1;
                $tabuada = $_GET["valor"];
                echo "<h3>Tabuada do Nº $tabuada</h3>";
                do {
                    echo "$tabuada X $c = ".($tabuada*$c)."<br/>";
                    $c++;
                } while ($c <= 10);
            ?>
            <br/>
            <a href="exercicio-03.html"><input type="submit" value="<"></a>
        </div>
    </body>
</html>