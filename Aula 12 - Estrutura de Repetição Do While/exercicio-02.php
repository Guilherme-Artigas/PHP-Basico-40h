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
                $c = $_GET["n1"];
                $fatorial = 1;
                do {
                    $fatorial *= $c;
                    $c--;
                } while ($c >= 1);
                echo "Fatorial de ".$_GET["n1"]." = ".number_format($fatorial,0);
            ?>
            <br/>
            <a href="exercicio-02.html"><input type="submit" value="<"></a>
        </div>
    </body>
</html>