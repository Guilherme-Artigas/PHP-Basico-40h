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
            wordwrap
            Quebra uma string em um dado número de caracteres
            
            wordwrap( string $str[, int $width = 75[, string $break = "\n"[, bool $cut = false]]] ) : string
            Quebra uma string em um dado número de caracteres usando um caractere dequebra de string.

            Parâmetros

            str
            A string de entrada.

            width
            A coluna de largura. O padrão é 75.

            break
            A linha é quebrada usando o parâmetro opcional break.O padrão é "\n".

            cut
            Se cut é setado para TRUE, a string é semprequebrada na largura especificada ou antes. Então se você tem umapalavra que é mais larga que a largura dada, ela é sempre quebrada.
        */

        $txt = "Nessa aula, veremos uma lista de funções para Strings usando PHP. São funções internas que já existem na linguagem. A lista de funções de manipulação de Strings que serão vistas nessa aula é composta pelas instruções.";
        $r = wordwrap($txt, 45, "<br/>\n", true);
        echo $r;
      ?>
    </div>
  </body>
</html>
 