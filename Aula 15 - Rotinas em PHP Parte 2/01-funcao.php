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
        /*
            Passagem de parametro por valor, 
            quer dizer que o conteudo da variavel $a permanece intacto, 
            e só é alterado dentro da função.
        */
        function teste ($x) {
            $x += 2;
            echo "<p>O valor de X é $x</p>";
        }
        $a = 3;
        teste($a);
        echo "<p>O valor de A é $a</p>";
        // ------------------------------

        /*
            Passagem de parametro por referencia, colocando o & na frente da varial,
            manipulamos tambem o valor da varial original.
        */
        function teste2 (&$par1) {
            $par1 += 5;
            echo "<p>O valor de par1 é $par1</p>";
        }
        $w = 6;
        teste2($w);
        echo "<p>O valor de w é $w</p>";
      ?>
    </div>
  </body>
</html>
 