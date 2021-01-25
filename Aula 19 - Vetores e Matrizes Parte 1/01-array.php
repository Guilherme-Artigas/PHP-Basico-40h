<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>    
            <?php
                /*
                    O construtor foreach fornece uma maneira fácil deiterar sobre arrays. O foreach funciona somente em arrayse objetos,
                    e emitirá um erro ao tentar usá-lo em uma variávelcom um tipo de dado diferente ou em uma variável não inicializada. 
                    Possuiduas sintaxes: 

                    foreach (array_expression as $value) {

                    }

                    foreach (array_expression as $key => $value) {

                    }

                    A primeira forma, itera sobre arrays informados na array_expression. A cada iteração, o valor do elemento atual é atribuído
                    a $value eo ponteiro interno do array avança uma posição (então, na próxima iteração, se estará olhando para o próximo elemento).

                    A segunda forma var, adicionalmente, atribuir a chave do elemento corrente avariável $key a cada iteração.
                */

                $v = array(3, 5, 8, 2);
                foreach($v as $valor) {
                    echo "$valor, ";
                }
            ?>
        </div>
    </body>
</html>