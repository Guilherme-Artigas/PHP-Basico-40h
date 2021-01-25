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
                $n = isset($_GET["num"])?$_GET[("num")]:2;
                for ($c = 1; $c <= 10; $c++) {
                    $r = $n * $c;
                    echo "$n X $c = $r<br/>";
                }
            ?>
            <a href="02-index.php"><input type="submit" value="<"></a>
        </div>
    </body>
</html>