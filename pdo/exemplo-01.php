<?php

// PDO - Conexão com banco de dados MySQL usando PDO

$conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");

$stmt = $conn->prepare("SELECT * FROM dbphp7.tb_usuarios order by deslogin");

$stmt->execute();

$result = $stmt->fetchall(PDO::FETCH_ASSOC);

foreach ($result as $row) {
    # code...
    foreach ($row as $key => $value) {
        # code...
        echo "<Strong> KEY: ". $key . "</strong>" .$value. "<br>";
    }
    echo "###################################################<br>";
}

echo json_encode($result);

// if ($conn->connect_error) {
//     # code...
//     echo "Error: <br>" . $conn->connect_error;
// }

// $stmt = $conn->prepare("INSERT INTO tb_usuarios (deslogin, dessenha) VALUES(?, ?)");
//
// // Preparando os parâmetros e seus tipos para inserção no banco de dados
// // Duas Strings sendo passadas: ss
// // Em seguida executa o comando bind_param() sobre com os parâmetros separados por vírgula
// $stmt->bind_param("ss", $login, $pass);
//
// $login="user";
// $pass="12345";
//
// $stmt->execute();
