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
                $valor = $_GET["v"];
                for ($c = 1; $c <= 10; $c++) {
                    echo "$c x $valor = ".($c*$valor)."<br/>";
                }
            ?>
            <a href="exercicio-02.html"><input type="submit" value="<"/></a>
        </div>
    </body>
</html>