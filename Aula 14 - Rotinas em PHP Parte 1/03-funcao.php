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
        function soma () {
            $p = func_get_args();     // Retorna um array contendo uma lista de argumentos da função.
            $total = func_num_args(); // Retorna o número de argumentos passados para a função.
            $soma = 0;
            for ($c = 0; $c < $total; $c++) { // preste atenção nessa linha, nao temos <= e sim sómente <
              $soma += $p[$c];
            }
            return $soma;
        }
        $resultado = soma(2, 5, 9, 7, 8, 12, 15);
        echo $resultado;
      ?>
    </div>
  </body>
</html>

<!--
  Dentro desse exercicio a varialvel $c esta procurando a posição 7 dentro do vetor $p, porem nao esta encontrando.
  por isso quando colocamos <= aparece o erro de que a posição 7 não esta definida, para o erro nao acontecer, nós devemos
  definir a estrutura do for sómente com o sinal de < ... (enquanto for menor execute o código, e não menor igual (<=)).
-->