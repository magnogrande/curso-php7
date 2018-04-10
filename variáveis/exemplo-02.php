<?php

$anoNascimento = 1990;

$anoCompleto = "Magno Almeida";

$nome = "João";
$sobreNome = "Rangel";
$nomeCompleto = $nome ." ". $sobreNome;

echo $nomeCompleto;

exit;

// Declaração de variável inválida ou com nomes reservados
// $1nome
// $%nome
// $this

// Exibe o tipo de dado dentro da variável

echo $nome;

echo "<br/>";

unset($nome);

echo "<br/>";

// Verifica se a variável foi definida com o comando isset
if (isset($nome)) {
    echo $nome;

    var_dump($nome);
}
