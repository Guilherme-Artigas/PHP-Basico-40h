<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.coom</title>
        <link rel="stylesheet" href="_css/estilo.css">
        <?php
            $txt = isset($_GET["t"])?$_GET["t"]:"Blá Blá Blá...";
            $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
            $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
        ?>
        <style>
            span.texto {font-size: <?php echo $tam;?>; color: <?php echo $cor;?>; }
        </style>
    </head>
    <body>
        <div>
            <?php
                echo "<span class='texto'>$txt</span>";
            ?>
            <a href="03-exercicio.html">Voltar</a>
        </div>
    </body>
</html>