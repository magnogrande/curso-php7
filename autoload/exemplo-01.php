<?php

// Orientação a Objetos - Autoload - A função autoload permite carregar pastas com arquivos relacionados ao projeto, tornando a estrutura do projeto
// mais organizada

function __autoload($nomeClasse)
{
    var_dump($nomeClasse);
    require_once("$nomeClasse.php");
}

$meuVeiculo = new DelRey();
echo "<br>";
$meuVeiculo->acelerar("100km");



// $meuVeiculo = new DelRey();
// $meuVeiculo = new Automovel();
// echo "<br>";
// $meuVeiculo->trocarMarcha("1234567810");
// echo "<br>";
// $meuVeiculo->acelerar("100km");
// echo "<br>";
// $meuVeiculo->frenar("70km");
