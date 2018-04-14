<?php

// MySQLi - Conexão com banco de dados MySQL - QUERY INSERT


$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {

  # code...
    echo "Error: <br>" . $conn->connect_error;
}

$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");

// Preparando os parâmetros e seus tipos para inserção no banco de dados
// Duas Strings sendo passadas: ss
// Em seguida executa o comando bind_param() sobre com os parâmetros separados por vírgula
$stmt->bind_param("ss", $login, $pass);

$login="user";
$pass="12345";

$stmt->execute();
