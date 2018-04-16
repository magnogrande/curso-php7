<?php

// Manipulando arquivos e diretórios

$images = scandir("images");


$data = array();

foreach ($images as $img) {
    # code...
    if (in_array($img, array(".", ".."))) {
        # code...
        $filename = "images". DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);

        $info['size'] = filesize($filename);
        $info['modified'] = date("d/m/Y H:i:s", filemtime($filename));
        $info['url'] = "http://localhost:8012/curso-php7/dir/".str_replace("\\", "/", $filename);

        // Inserindo no array $data os dados da variável $info
        array_push($data, $info);
    }
}
// var_dump($images);
echo json_encode($data);
