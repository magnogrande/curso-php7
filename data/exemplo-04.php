<?php
// Usando a classe DateTime com outros obejetos como parâmetro
// Função setlocale
setlocale(LC_ALL, "pt_BR", "pt_BR-utf-8", "portuguese");

$dt = new DateTime();

$periodo = new DateInterval("P15D");

echo $dt->format("d/m/y H:i:s");
echo "<br>";
// Adiciona um perído de mais 15 dias conforme padrâmentro na passado no objeto DateInterval()
$dt->add($periodo);

echo $dt->format("d/m/y H:i:s");

echo "<br>";
