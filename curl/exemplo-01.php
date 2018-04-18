
<?php
// Utilizando a biblioteca cURL

$cep = "01310100";
$link = "https://viacep.com.br/ws/$cep/json/";

// Cria uma variável de chamada de comunicação dom o webservice através do
// link passado como parâmetro
$ch = curl_init($link);

// Configura a operação de chamada indicando e necessidade de resposta com o
// parâmetro 1
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// Configura a operação de modo a não verificar se a autoridade certificadora
// é válida
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Executa a chamada ao webservice pelo CEP informado
$response = curl_exec($ch);

curl_close($ch);

// Decodifica os dados em formato JSON para array
$data =  json_decode($response, true);

// Imprime o vetor na tela com os dados do CEP
print_r($data);
