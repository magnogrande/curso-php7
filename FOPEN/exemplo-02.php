<?php

// Manipulando arquivos no sistema operacional - Arquivo CSV

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * from tb_usuarios order by deslogin");

// Convertendo para CSV
// Definido as colunas do arquivo CSV
$headers = array();

foreach ($usuarios[0] as $key => $value) {
    # code...
    array_push($headers, ucfirst($key));
}

$file = fopen("usuários.csv", "w+");

// Escrevendo o cabeçalho com quebra de linha
fwrite($file, implode(",", $headers) . "\r\n");

foreach ($usuarios as $row) {
    # code...
    $data = array();
    foreach ($row as $key => $value) {
        # code...
        array_push($data, $value);
    }
    // Escrevendo abaixo do cabeçalho com quebra de linha
    fwrite($file, implode(",", $data) . "\r\n");
}

fclose($file);
// Exibindo a estrutura do arquivo CSV na tela
// echo implode(",", $headers); // Função usada para montar a estrutura do CSV
// print_r($headers);
