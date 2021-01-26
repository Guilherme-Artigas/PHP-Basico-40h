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
                $inicio = isset($_GET["inicio"])?$_GET["inicio"]:0;
                $fim = isset($_GET["fim"])?$_GET["fim"]:0;
                $inc = isset($_GET["inc"])?$_GET["inc"]:1;
                if ($inicio < $fim) {
                    while ($inicio <= $fim) {
                        echo "$inicio ";
                        $inicio += $inc;
                    }
                }
                else {
                    while ($inicio >= $fim) {
                        echo "$inicio ";
                        $inicio -= $inc;
                    }
                }
                echo "<br/>";
            ?>
            <a href="exercicio-03.html"><input type="submit" value="Voltar"></a>
        </div>
    </body>
</html>