<?php

// Variáveis super Globais
// Método GET - Obtem o valor de uma variável através do navegador
$nome = $_GET["a"];

echo "Recebeu String <br/>";
var_dump($nome);

echo "<br/>";
// Método GET - Convertendo para inteiro
echo "Converteu para interio <br/>";
var_dump((int)$_GET["a"]);

echo "<br/>";
// Obtendo o IP do usuário
$ip = $_SERVER["REMOTE_ADDR"];
echo "Obtendo o IP do usuário <br/>";
echo $ip;

echo "<br/>";
// Obtendo o IP do usuário
$script_name = $_SERVER["SCRIPT_NAME"];
echo "Obtendo o caminho que o usuário acessou <br/>";
echo $script_name;
