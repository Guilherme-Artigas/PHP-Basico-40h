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
                    $v = array(9=>3, 2=>7, 5=>6, 8=>8);
                    print_r($v);
                    
                    // unset — Destrói a variável especificada
                    unset($v[2]);
                    print_r($v);
                ?>
            </pre>
        </div>
    </body>
</html>