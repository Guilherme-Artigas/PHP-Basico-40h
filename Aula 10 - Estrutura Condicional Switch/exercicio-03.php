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
                $regiao = isset($_GET["distrito"])?$_GET["distrito"]:0;
                switch ($regiao) {
                    case 1:
                    echo "Você é da região <span class='foco'>NORTE</span> do Brasil!<br/>";
                    break;

                    case 2:
                    echo "Você é da região <span class='foco'>NORDESTE</span> do Brasil!<br/>";
                    break;

                    case 3:
                    echo "Você é da região <span class='foco'>CENTRO-OESTE</span> do Brasil!<br/>";
                    break;

                    case 4:
                    echo "Você é da região <span class='foco'>SUDESTE</span> do Brasil!<br/>";
                    break;

                    case 5:
                    echo "Você é da região <span class='foco'>SUL</span> do Brasil!<br/>";
                    break;
                }
            ?>
            <br/>
            <a href="exercicio-03.html"><input type="submit" value="<"></a>
        </div>
    </body>
</html>