
<?php
// GD - Criando um novo stream de imagem GD e mostrando uma imagem.

$image = @imagecreate(256, 256)
    or die("Cannot Initialize new GD image stream");

$black = imagecolorallocate($image, 0, 0, 0);
$red = imagecolorallocate($image, 255, 0, 0);

imagestring($image, 5, 60, 120, "Curso de PHP 7", $red);

header("Content-type: image/png");

imagepng($image, "Certificado".date("d-m-Y").".png");

imagedestroy($image);
