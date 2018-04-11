<?php

// Estruturas de controle de fluxo

$valorProduto = 14500;
$desconto = 5;

// if ($valorProduto > 10000) {
//     echo $valorProduto = $valorProduto / ($desconto * 100);
//     echo "<br/>";
//     echo "<hr/>";
// }
if ($valorProduto > 10000) {
    echo $valorProduto = $valorProduto - ($valorProduto * ($desconto / 100));
    echo "<br/>";
    echo "<hr/>";
}
