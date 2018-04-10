<?php

// Precendencia de Operadores

$resultado = 10 + 3 / 2;

// Imprime o valor da variável.
echo $resultado;
echo "<br/>";

$resultado = (10 + 3) / 2;

// Imprime o valor da variável.
echo $resultado;
echo "<br/>";

// Avaliando a Precendencia em comparação
$resultado = (10 + 3) / 2 > 5 && 10 + 3 / 2 < 3;
// Imprime o valor da variável.
var_dump($resultado);
echo "<br/>";

// Avaliando a Precendencia em comparação
$resultado = (10 + 3) / 2 > 5 || 10 + 3 / 2 < 3;
// Imprime o valor da variável.
var_dump($resultado);
echo "<br/>";
