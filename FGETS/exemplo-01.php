<?php

// FGETS - Lendo arquivos CSV no sistema operacional

$filename = "usuários.csv";

if (file_exists($filename)) {
    $file = fopen($filename, "r"); // fopen com o parâmetro "r" indica que o arquivo é aberto para leitura

    // explode() Transforma em um array cada linha encontrada no arquivo
    // usando a virgula como separador de campos/índices do array
    $headers = explode(",", fgets($file));

    $data = array(); // Array para receber todos os dados finais colunas e linhas

    // Percorrendo as linhas do arquivo
    while ($row = fgets($file)) {
        # code...
        // Recebe cada linha do arquivo com e explode em um array
        $rowData = explode(",", $row);

        $linha = array();
        // Percorerndo as linhas do arquivo
        for ($i = 0 ; $i < count($headers) ; $i++) {
            // Pega a posição inicial da coluna e usa como chave
            // no array linha. Adiciona o valor do primeiro indice
            // do array $rowData() para a chave do array linha()
            $linha[$headers[$i]] = $rowData[$i];
        }
        // Adiciona o array de linhas ao array principal dos dados
        array_push($data, $linha);
    }

    fclose($file);

    echo json_encode($data);
}
