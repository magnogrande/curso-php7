<?php

// Estruturas de repetição - FOREACH

$meses = array(
"Janeiro", "Fevereiro", "Março",
"Abril", "Maio", "Junho",
"Julho", "Agosto", "Setembro",
"Outubro", "Novembro", "Dezembro");

foreach ($meses as $key => $mes) {
    echo "Indice: " . $key;
    echo "<br>";
    echo "<br>";
    echo "O Mês é: " . $mes;
    echo "<br>";
    # code...
}
