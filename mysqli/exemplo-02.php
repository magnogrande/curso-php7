<?php

// MySQLi - Conexão com banco de dados MySQL - Query - SELECT


$conn = new mysqli("localhost", "root", "", "dbphp7");

if ($conn->connect_error) {
    # code...
    echo "Error: <br>" . $conn->connect_error;
}

$result = $conn->query("SELECT * FROM dbphp7.tb_usuarios order by deslogin");

// Variável array criada para armazenar os dados do result e em seguida convertê-lo para o formato JSON
$data = array();

while ($row = $result->fetch_assoc()) {
    # code...
    array_push($data, $row);
    // var_dump($row);
}

echo json_encode($data);
