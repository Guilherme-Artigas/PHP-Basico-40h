<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <pre>
                <?php
                    $matriz = array(array(2,3),
                                    array(5,8),
                                    array(7,1));

                    $matriz[0][1] = $matriz[2][0];
                    //     [L][C]          [L][C] ..... L = Linha, C = Coluna
                    print_r($matriz);
                ?>
            </pre>
        </div>
    </body>
</html>