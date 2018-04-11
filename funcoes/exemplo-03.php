<?php

// Funções - parâmetros
//

function ola($texto = "mundo", $periodo = "Bom dia")
{
    return "Olá $texto! $periodo! <br>";
}

echo ola("Mundo", "Boa tarde");
echo "<br>";
echo ola("", "Boa noite");
echo "<br>";
echo ola("Magno", "Boa Tarde");
echo "<br>";
echo ola("Aline", "Bom te ver");
echo "<br>";
