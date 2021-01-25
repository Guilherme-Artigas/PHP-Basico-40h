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
                    // vetor associativo

                    $cadastro = array("nome" => "Guilherme", "idade" => 28, "peso" => 96.5);
                    $cadastro["fuma"] = true;
                    
                    //print_r($cadastro);

                    foreach($cadastro as $campo => $valor) {
                        echo "O valor de $campo é $valor <br/>";
                    }
                ?>
            </pre>    
        </div>
    </body>
</html>