<?php

// Tipos básicos
$nome = "hcode";
$site = "www.msaconsultoria.com";

$ano = 1990;
$salario = 5590.09;
$bloqueado = false;
$nome = "hcode";

//  Tipos compostos
//  //variável do tipo array
$frutas = array("abacaxi", "laranja", "manga");

echo $frutas[2];

echo "<br/>";

//variável do tipo objeto
$nascimento = new DateTime();

echo "<br/>";

var_dump($nascimento);

echo "<br/>";

//variável do tipo resource
$arquivo = fopen("exemplo-03.php", "r");

var_dump($arquivo);

echo "<br/>";

//variável do tipo nulo
$nulo = null;

var_dump($arquivo);

echo "<br/>";
