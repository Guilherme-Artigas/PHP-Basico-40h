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
                $n = isset($_GET["numero"])?$_GET["numero"]:0;
                $operador = isset($_GET["oper"])?$_GET["oper"]:1;                
                switch ($operador) {
                    case 1:
                        echo "Valor digitado $n... Operação escolhida: * DOBRO *<br/>";
                        $r = $n * 2;
                        break;
                    case 2:
                        echo "Valor digitado $n... Operação escolhida: * CUBO *<br/>";
                        $r = pow($n,3);
                        break;
                    case 3:
                        echo "Valor digitado $n... Operação escolhida * Raiz Quadrada *<br/>";
                        $r = sqrt($n);
                        break;
                }
                echo "Resultado da operação: $r<br/>";
            ?>
            <br/>
            <a href="exercicio-01.html"><input type="submit" value="Voltar"></a>
        </div>
    </body>
</html>