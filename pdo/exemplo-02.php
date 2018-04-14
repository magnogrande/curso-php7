<?php

// PDO - Conexão com banco de dados SQLSERVER usando PDO

$conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios order by deslogin");

$stmt->execute();

$result = $stmt->fetchall(PDO::FETCH_ASSOC);

echo json_encode($result);
