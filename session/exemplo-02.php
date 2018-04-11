<?php

// Variáveis de Sessão
// Exibindo conteúdo da variável criada no arquivo exemplo-01.php

// Requisita o arquivo config.php no lugar do comando session_start()
// session_start();
require_once("config.php");

// Usado para limpar variáveis de sessão
session_unset();

echo $_SESSION["nome"];
