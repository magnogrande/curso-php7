<?php

// Manipulando arquivos no sistema operacional - Removendo arquivos do SO

// UNLINK - Remove arquivos do sistema
// $file = fopen("log.txt", "w+"); Com o parâmetro w+ apenas cria o arquivo e escreve na primeira linha
$file = fopen("teste.txt", "w+"); // Com o parâmetro a+ o arquivo e adiciona conteúdo ao final da primeira linha

// FWRITE aguarda dois parâmentros: Resource e o conteúdo
// Esse manipulador é usado para criar o arquivo
fwrite($file, date("Y-m-d H:i:s") . "\r\n"); // Com o parâmetro "\r\n" adiciona conteúdo na próxima linha

// FCLOSE aguarda um parâmentro: Resource
// Esse manipulador é usado para fechar o arquivo
fclose($file);

echo "Arquivo criado com sucesso! <br>";

// UNLINK - Remove arquivos do sistema
unlink("teste.txt");
echo "Arquivo removido com sucesso! <br>";
