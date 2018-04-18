
<?php
// Renomeando e movendo arquivos
//
$dir1 = "folder_01"; // Nome do diretório
$dir2 = "folder_02"; // Nome do diretório

// Verifica se o diretório para uploads existe no servidor
if (!is_dir($dir1)) {
    # code...
    mkdir($dir1); // Cria o diretório
    echo "Diretório " . $dir1 . " criado com sucesso <br>";
}
if (!is_dir($dir2)) {
    # code...
    mkdir($dir2); // Cria o diretório
    echo "Diretório " . $dir2 . " criado com sucesso <br>";
}

$filename = "readme.txt";

if (!file_exists($dir1 . DIRECTORY_SEPARATOR . $filename)) {
    # code...
    $file = fopen($dir1 . DIRECTORY_SEPARATOR . $filename, "w+");

    // Escrevendo o conteúdo produzido pelo método date() no arquivo
    fwrite($file, date("Y-m-d H:i:s"));
    echo "Arquivo " . $file . " Criado com sucesso <br>";
    fclose($file);
}
// Função usada para renomear arquivo
// A função renomea na prática o nome do caminho do arquivo
rename(
  $dir1 . DIRECTORY_SEPARATOR . $filename, // origem
  $dir2 . DIRECTORY_SEPARATOR . $filename // destino
);
echo "Arquivo " . $filename . " renomeado com sucesso <br>";
