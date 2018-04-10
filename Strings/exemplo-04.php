<?php

// String

$frase = "A repetição é a mãe da retenção";
$palavra = "mãe";
// Procura caracteres em uma string.
$q = strpos($frase, $palavra);
echo $frase;
echo "<br/>";
echo var_dump($q);
echo "<br/>";

// Recupera um substring de uma variável.
$texto = substr($frase, 0, $q);
echo "<br/>";
echo $texto;
echo "<br/>";
var_dump($texto);
echo "<br/>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
var_dump($texto2);
echo "<br/>";
echo $texto2;
