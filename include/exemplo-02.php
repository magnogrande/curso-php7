<?php

// Include
// include "inc/exemplo-01.php";

// Require - è obrigadtório a existência do arquivo e interrompe o programa caso o arquivo não exita.
// require "inc/exemplo-01.php";
require_once "inc/exemplo-01.php"; // Não interrompe a execução do programa
require_once "inc/exemplo-01.php";

$resultado = somar(10, 20);

// Imprime o valor da variável.
var_dump($resultado);
echo "<br/>";
echo $resultado;
