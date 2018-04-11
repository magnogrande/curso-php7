<?php

// Variáveis de Sessão

// Requisita o arquivo config.php no lugar do comando session_start()
// session_start();
require_once("config.php");

// Exibe o ID da sessão entre o usuário e o servidor
echo session_id();
