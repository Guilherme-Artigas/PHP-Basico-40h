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
            Os arquivos são incluídos baseando-se no caminho do arquivo informado ou, se não informado, o include_path especificado.
            Se o arquivonão for encontrado no include_path, a declaração include checará no diretório do script que o executa
            e no diretório de trabalho corrente, antes de falhar. O construtor include emitirá um aviso senão localizar o arquivo;
            possui um comportamento diferente do construtor require, que emitirá um erro fatal.

            * A declaração include_once inclui e avaliao arquivo informado durante a execução do script.
            Este é um comportamento similar a declaração include,com a única diferença que, se o código do arquivo já foi incluído, 
            não o fará novamente, e o include_once retornará TRUE. Como o nome sugere,o arquivo será incluído somente uma vez.

            * A declaração require_once é idêntica a require exceto que o PHP verificaráse o arquivo já foi incluído, e em caso afirmativo,
            não o incluirá (exigirá) novamente. 
        */
        
        include "funcoes.php";
        echo "<h1>Testando novas funções</h1>";
        ola();
        mostrarValor(4);
        echo "<h2>Finalizando programa...</h2>";
      ?>
    </div>
  </body>
</html>
 