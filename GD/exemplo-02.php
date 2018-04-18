
<?php
// GD - Trabalhando com imagens através da biblioteca GD - Graphic Design

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

imagestring($image, 5, 450, 10, "CERTIFICADO", $titleColor);
imagestring($image, 5, 440, 350, "Magno dos Santos Almeida", $titleColor);
imagestring($image, 3, 440, 150, utf8_decode("Concluído em: "). date("d-m-Y"), $titleColor);

header("Content-Type: image/jpeg");

imagejpeg($image, "Certificado".date("d-m-Y").".jpg");

imagedestroy($image);
