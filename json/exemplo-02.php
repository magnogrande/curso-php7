<?php

// JSON - json_decode - Transforma objeto JSON em array

$json = '[{"nome":"joão","0":"idade=>20"},{"nome":"Magno","0":"idade=>37"}]';
$pessoas = json_decode($json);

var_dump($pessoas);
