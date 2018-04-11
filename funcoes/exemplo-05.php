<?php

// Funções - parâmetros

$a = 10;

// Para acessar a referência da variável deve utilizar o & comercial
function trocaValor(&$b)
{
    $b += 50;
    return $b;
}

echo trocaValor($a) . "<br>";
echo $a . "<br>";
echo trocaValor($a) . "<br>";
