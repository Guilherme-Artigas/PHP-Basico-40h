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
                $nome = isset($_GET["nome"])?$_GET["nome"]:"Nome não informado.";
                $ano = isset($_GET["ano"])?$_GET["ano"]:"0";
                $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"Inválido";
                $idade = date("Y") - $ano;
                echo "$nome tem $idade anos.";
            ?>
            <a href="02-exercicio.html">Voltar</a>
        </div>
    </body>
</html>