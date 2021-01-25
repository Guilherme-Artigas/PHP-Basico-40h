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
                $dia = isset($_GET["dia-semana"])?$_GET["dia-semana"]:0;
                switch ($dia) {
                    case 1: case 2: case 3: case 4: case 5:
                    echo "você deve ir a escola<br/>";
                    break;
                    case 6: case 7:
                    echo "Hoje é dia de descansar!<br/>";
                }
            ?>
            <a href="exercicio-02.html"><input type="submit" value="<"></a>
        </div>
    </body>
</html>