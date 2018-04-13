<?php

// Orientação a Objetos - Autoload - Exemplo utilizando a função spl_autoload_register()
// Essa função pode ser usada passando uma string ou uma função anônima como parâmetro

function incluirClasses($nomeClasse)
{
    if (file_exists("$nomeClasse".".php") === true) {
        # code...
        require_once("$nomeClasse".".php");
    }
}

// Utilizando a função spl_autoload_register para registrar a classe DelRey implementada no arquivo DelRey.php no diretório raiz.
spl_autoload_register("incluirClasses");

// Utilizando a função spl_autoload_register para registrar a classe Automovel implementada no arquivo Automovel.php disponível no localizado
// um nível abaixo do diretório raiz.
spl_autoload_register(
  function ($nomeClasse) {
      if (file_exists("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse".".php") === true) {
          # code...
          require_once("abstratas" . DIRECTORY_SEPARATOR . "$nomeClasse".".php");
      }
  }
);

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
