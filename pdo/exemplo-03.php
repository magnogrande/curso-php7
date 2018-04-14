<?php

// PDO - Conexão com banco de dados SQLSERVER usando PDO - INSERT

//SQLSERVER
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
// MySQL
// $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// $stmt = $conn->prepare("SELECT * FROM tb_usuarios order by deslogin");
$stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");

$login = "Magno";
$password = "1234567890";

$stmt->bindParam(":LOGIN", $login);
$stmt->bindParam(":PASSWORD", $password);
$stmt->execute();

echo "Dados Inseridos com sucesso!";
