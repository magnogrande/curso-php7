<?php

// Variáveis de Sessão

// Requisita o arquivo config.php no lugar do comando session_start()
// session_start();
require_once("config.php");

$_SESSION["nome"] = "Magno";
