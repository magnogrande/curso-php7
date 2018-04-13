<?php

// Função date()

// Converte uma string para o timestamp do dia
$ts = strtotime("2001-09-11");

echo $ts;

echo "<br>";

// Exibe o dia da semana com base no timestamp convertido a partir de uma string
echo date("l, d/m/Y", $ts);

echo "<br>";
