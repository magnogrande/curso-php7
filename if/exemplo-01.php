<?php

// Estruturas de controle de fluxo

$qualASuaIdade = 67;
$idadeCrianca = 12;
$idadeMaior = 18;
$melhorIdade = 65;

if ($qualASuaIdade < $idadeCrianca) {
    echo "Criança";
    echo "<br/>";
} elseif ($qualASuaIdade < $idadeMaior) {
    echo "Adolecente";
    echo "<br/>";
} elseif ($qualASuaIdade < $melhorIdade) {
    echo "Adulto";
    echo "<br/>";
} else {
    echo "Idoso";
    echo "<br/>";
}

// Operador ternário
echo ($qualASuaIdade < $idadeMaior)?"Menor de Idade" : "Maior de Idade";
        echo "<br/>";
