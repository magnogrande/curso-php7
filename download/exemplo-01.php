
<?php
// Download de arquivos

$link = "https://www.google.com.br/images/branding/googlelogo/2x/googlelogo_color_120x44dp.png";

// Pega o conteúdo do contido no link
$content = file_get_contents($link);

// Estrutura a url para ser usada com o método basename()
$parse = parse_url($link);

// Método basename() obtem o nome do arquivo na chave "path"
$basename = basename($parse["path"]);

//  Utiliza o método fopen() com parâmetro w+ para abrir o arquivo,
//  em modo de escrita
$file = fopen($basename, "w+");

// Escreve o arquivo com o conteúdo extraído do link
fwrite($file, $content);

// Fecha o arquivo
fclose($file);

?>
<img src="<?=$basename?>">
