<?php

// Funções - parâmetros

$pessoa = array(
  'Nome' => 'João',
  'Idade' => 20
);

// Acessando a referência do valor em um foreach ($variable as $key => $value)
foreach ($pessoa as &$value) {
    # code...
    if (gettype($value) === 'integer') {
        # code...
        $value += 10;
    }
    echo $value . '<br>';
}

print_r($pessoa);
