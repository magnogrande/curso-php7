
<?php
// GD - Trabalhando com imagens através da biblioteca GD - Graphic Design
// Criando thumbnail

$file = "wallpaper.jpg";

$new_width = 256;
$new_height = 256;

// $data = getimagesize($file);

list($old_width, $old_height) = getimagesize($file);

$new_image = imagecreatetruecolor($new_width, $new_height);
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

imagejpeg($new_image, "imagem-".date("d-m-Y").".jpg");
imagejpeg($new_image, "imagem_".date("d-m-Y").".jpg");

imagedestroy($new_image);
imagedestroy($old_image);
