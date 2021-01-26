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
        $p = "Leite";
        $v = 4.5;
        echo "O $p custa R$ ".number_format($v,2);
        echo "<br/>";
        printf("O %s custa R$ %.2f", $p, $v);
        // usando o printf, as duas linhas trazem exatamente o mesmo resultado.

        /*
            %d - valor decimal (positivo ou negativo)
            %u - valor decimal sem sinal (apenas positivos)
            $f - valor real
            %s - string
        */
      ?>
    </div>
  </body>
</html>
 