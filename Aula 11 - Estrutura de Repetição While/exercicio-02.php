<!DOCTYPE html>
<html lang="PT-BR">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <form method="" action="get">
                <?php
                    $c = 1;
                    while ($c <= 5) {
                        echo "Valor $c: <input type='number' name='v$c' min='0' max='100' value='0'/><br/>";
                        $c++;
                    }
                ?>
                <input type="submit" value="Enviar"/>
            </form>
        </div>
    </body>
</html>