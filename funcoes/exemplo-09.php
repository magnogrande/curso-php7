<?php

// Funções - Anônimas


function test($callback)
{
    // Processo lentoS
    $callback();
}

test(function () {
    echo "Terminou";
});
