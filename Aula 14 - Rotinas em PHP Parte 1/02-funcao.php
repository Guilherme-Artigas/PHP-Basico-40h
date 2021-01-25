<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
  </head>
  <body>
    <div>
      <?php
        function soma ($a, $b) {
            $soma = $a + $b;
            return $soma;
        }
        //$x = 3;
        //$y = 5;
        $res = soma(5,6);
        echo $res;
      ?>
    </div>
  </body>
</html>
 