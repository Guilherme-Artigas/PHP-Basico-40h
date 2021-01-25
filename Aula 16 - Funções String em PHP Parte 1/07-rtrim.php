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
        $nome = "  Guilherme Artigas     ";
        $nomeF = rtrim($nome);
        echo "rtrim — Retira espaço no fim de uma string <br/><br/>";
        echo strlen($nome)."<br/>";
        echo strlen($nomeF)."<br/>";
      ?>
    </div>
  </body>
</html>
 