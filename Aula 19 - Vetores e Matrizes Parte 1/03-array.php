<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <pre>    
                <?php
                    $v = array(3, 5, 8, 2);
                    print_r($v);
                    $v[] = 9;
                    print_r($v);

                    // --------

                    array_push($v, 7); // array_push — Adiciona um ou mais elementos no final de um array
                    array_pop($v); // array_pop — Extrai um elemento do final do array

                    // --------

                    array_unshift($v, 7); // array_unshift — Adiciona um ou mais elementos no início de um array
                    array_shift($v); // array_shift — Retira o primeiro elemento de um array

                    // --------

                    sort($v); // sort — Ordena um array
                    rsort($v); // rsort — Ordena um array em ordem descrescente
                    asort($v); // asort — Ordena um array mantendo a associação entre índices e valores
                    arsort($v); // arsort — Ordena um array em ordem descrescente mantendo a associação entre índices e valores

                    ksort(); // ksort — Ordena um array pelas chaves/indices.
                ?>
            </pre>    
        </div>
    </body>
</html>