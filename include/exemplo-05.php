<?php

// Funções de Sessão

// Requisita o arquivo config.php no lugar do comando session_start()
// session_start();
require_once("config.php");

// Exibe o ID da sessão entre o usuário e o servidor
echo session_save_path();

echo "<br>";

var_dump(session_status());

switch (session_status()) {
  case PHP_SESSION_DISABLED:
    # code...
    echo "as sessões estiverem desabilitadas. <br>";
    break;
  case PHP_SESSION_NONE:
    # code...
    echo "as sessões estiverem habilitadas, mas nenhuma existir. <br>";
    break;
  case PHP_SESSION_ACTIVE:
    # code...
    echo "as sessões estiverem habilitadas, e uma existir. <br>";
    break;

  default:
    # code...
    break;
}
