<?php

// Orientação a Objetos - namespace - Permite organizar classes em um diretório específico
require_once("config.php");

// Usando um NAMESPACE - Utilizando a classe Cadastro dentro do diretório Cliente.
use Cliente\Cadastro;

$cad = new Cadastro();

$cad->setNome("Magno Almeida");
$cad->setEmail("magnogrande@gmail.com");
$cad->setSenha("123456");

// O método mágico __toString será invocado para exibir o resultado na tela convertido em JSON
// echo $cad;
echo "<br>";
echo $cad->registrarVenda();
