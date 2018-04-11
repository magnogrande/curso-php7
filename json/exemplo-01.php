<?php

// JSON - json_encode - Transforma array em objeto JSON

$pessoas = array();

array_push($pessoas, array(
  'nome'=>'João',
  'idade=>20'
));

array_push($pessoas, array(
  'nome'=>'Magno',
  'idade=>37'
));

echo json_encode($pessoas);
echo "<br>";
print_r($pessoas);
