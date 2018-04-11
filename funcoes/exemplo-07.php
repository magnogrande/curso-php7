<?php

// Funções - parâmetros

// Definindo array de parâmetro com tipos de retorno específico para função
function soma(int ...$valores):string
{
    return array_sum($valores);
}

var_dump(soma(2, 2));
echo "<br>";
echo soma(2, 2) . '<br>';
echo soma(1.5, 3.2) . '<br>';
echo soma(22, 52) . '<br>';
