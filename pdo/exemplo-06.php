<?php

// PDO - Usando transações

//SQLSERVER
$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
// MySQL
// $conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

// Desabilita o commit atuomático, permitindo um controle melhor sobre a execução de transações
//
$conn->beginTransaction();

// $stmt = $conn->prepare("SELECT * FROM tb_usuarios order by deslogin");
// $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES (:LOGIN, :PASSWORD)");
// $stmt = $conn->prepare("UPDATE tb_usuarios SET deslogin = :LOGIN, dessenha = :PASSWORD WHERE idusuario = :ID");

$stmt = $conn->prepare("DELETE FROM tb_usuarios WHERE idusuario = ?");

// $login = "magnogrande";
// $password = "qwerty";
$id = 4;

// $stmt->bindParam(":LOGIN", $login);
// $stmt->bindParam(":PASSWORD", $password);
// $stmt->bindParam(":ID", $id);

// A primeira interrogação na query corresponde ao primeiro item do Array
$stmt->execute(array($id));

// Comando usado para cancelar a execução da transação
// $conn->rollBack();

// Comando usado para confirmar a execução da transação
$conn->commit();
echo "Dados excluídos com sucesso!";
