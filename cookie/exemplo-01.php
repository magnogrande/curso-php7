
<?php
// Cookie - Criando um Cookie

$data = array('empresa' => "MSA CONSULTORIA");

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600);

echo "OK - Cookie criado";
