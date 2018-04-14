<?php

// PDO - Conexão com banco de dados SQLSERVER usando PDO - DELETE

//SQLSERVER
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
// MySQL
// $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// $stmt = $conn->prepare("SELECT * FROM tb_usuarios order by deslogin");
// $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
// $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");
$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = :ID");

// $login = "magnogrande";
// $password = "qwerty";
$id = 5;

// $stmt->bindParam(":LOGIN", $login);
// $stmt->bindParam(":PASSWORD", $password);
$stmt->bindParam(":ID", $id);
$stmt->execute();

echo "Dados excluídos com sucesso!";
