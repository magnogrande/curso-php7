
<?php
// Error - Tratamento de erros -

// Cria uma função para manipulação de erro.
function error_handler($code, $message, $file, $line)
{
    echo json_encode(
    array(
      'code' => $code,
      'message' => $message,
      'file' => $file,
      'line' => $line
    )
  );
}

// Passa o nome da função como string
set_error_handler("error_handler");

$total = 10/0;
