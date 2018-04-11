<?php

// Funções - parâmetros
//

function ola()
{
    $argumentos = func_get_args();
    return $argumentos;
}

var_dump(ola("Mundo", "Boa tarde"));
