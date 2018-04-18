
<!--  O tributo enctype permite definir o tipo de dado que será enviado-->
<!--  multipart/form-data usado para dados binários-->
<form method="POST" enctype="multipart/form-data">

  <input type="file" name="fileupload"></input>
  <br>
  <button type="submit">Send</button>

</form>

<?php

// Upload de arquivos

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    # code...
    $file = $_FILES["fileupload"]; // Array super global

    if ($file["error"]) {
        # code...
        throw new Exception("Error: ". $file["error"]);
    }

    $dirUploads = "Uploads"; // Nome do diretório destinado ao upload dos arquivos

    // Verifica se o diretório para uploads existe no servidor
    if (!is_dir($dirUploads)) {
        # code...
        mkdir($dirUploads); // Cria o diretório
        echo "Diretório " .$dirUploads . "Criado com sucesso <br>";
    }

    // Processando o upload
    // Verifica se o processamento ocorreu sem falhas
    // O método move_uploaded_file aguarda a origem pasta temporária no servidor
    // e o local de destino
    if (move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"])) {
        # code
        echo "Upload do arquivo realizado com sucesso!";
    } else {
        throw new Exception("Não foi possível realizar o upload");
    }
}
?>
