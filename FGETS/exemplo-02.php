<?php

// FGETS - Lendo arquivos de imagem no sistema operacional
// Converter um arquivo binário de imagem em base64
$filename = "logo.png";

$base64 = base64_encode(file_get_contents("$filename"));

//Montando padrão de exibição do base64

// FILEINFO_MIME_TYPE - constante que define o tipo do arquivo como mime type
$fileinfo = new finfo(FILEINFO_MIME_TYPE);

// O método file() obtem o tipo do arquivo
$mimetype = $fileinfo->file($filename);

// Padrão de exibição em modo dinâmico
$base64econde = "data:" . $mimetype . ";base64," . $base64;

// Padrão de exibição em modo estático
echo "data:image/png;base64," . $base64;

?>
 <!-- Padrão de exibição em modo dinâmico -->
<a href="<?=$base64econde?>" target="_blank"> Link para Imagem </a>

<img src="<?=$base64econde?>" alt="">
