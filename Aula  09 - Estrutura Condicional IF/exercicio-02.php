<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
        <?php
            $nota1 = isset($_GET["n1"])?$_GET["n1"]:"Nenhum valor Recebido!";
            $nota2 = isset($_GET["n2"])?$_GET["n2"]:"Nenhum valor Recebido!";
            $media = ($nota1+$nota2)/2;
        ?>
        <style>
            span.cor {color: #CC0000;}
        </style>
    </head>
    <body>
        <div>
            <?php
                echo "A média entre <span class='cor'>$nota1</span> e <span class='cor'>$nota2</span> é igual a <span class='cor'>$media</span><br/>";
                if ($media > 7) {
                    echo "Situação do aluno: <span class='cor'>APROVADO!</span>";
                }
                    elseif ($media < 5) {
                        echo "Situação do aluno: <span class='cor'>REPROVADO!</span>";
                    }
                else {
                    echo "Situação do aluno: <span class='cor'>RECUPERAÇÃO!</span>";
                }    
            ?>
            <br/>
            <a href="exercicio-02.html"><input type="submit" value="Voltar"/></a>
        </div>
    </body>
</html>