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
        $frase = "Eu vou estudar PHP";
        echo "str_word_count — Retorna informação sobre as palavras usadas em uma string. <br/><br/>";
        echo $q = str_word_count($frase);
      ?>
    </div>
  </body>
</html>