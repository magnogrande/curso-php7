<?php

// Variáveis de Sessão
//

// Recupera os dados da sessão desejada
session_id('77f3iv8h64q0ae4859t9p36c8r');

// Requisita o arquivo config.php no lugar do comando session_start()
// session_start();
require_once("config.php");

// Renova o ID da sessão para evitar roubo de sessão por usuário mau intencionado
session_regenerate_id();

// Exibe o ID da sessão entre o usuário e o servidor
echo session_id();

echo "<br>";

// Exibe um array com os dados da sessão criadas no arquivo exemplo-01.php
var_dump($_SESSION);
