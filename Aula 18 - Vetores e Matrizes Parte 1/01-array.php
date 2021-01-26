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
                <table border="1"><tr>
                <?php
                    $v = array(3, 5, 8, 2);
                    $v[] = 9;
                    print_r($v);

                    $c = range(5, 20, 5); // range(inicio, fim, salto)...
                    // print_r($c);

                    foreach($c as $valor) {
                        echo "<td>$valor ";
                    }
                ?>
                </table>
            </pre>
        </div>
    </body>
</html>