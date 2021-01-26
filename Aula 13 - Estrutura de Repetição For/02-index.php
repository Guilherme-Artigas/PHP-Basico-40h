<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - CursoemVideo.com</title>
        <link rel="stylesheet" href="_css/estilo.css">
    </head>
    <body>
        <div>
            <h1>Tabuada</h1>
            <form action="02-tabuada.php" method="get">
                <select name="num">
                    <?php
                        for ($c =2; $c <= 9; $c++) {
                            echo "<option>$c</option>";
                        }
                    ?>
                </select>
                <input type="submit" value=">"/>
            </form>
        </div>
    </body>
</html>