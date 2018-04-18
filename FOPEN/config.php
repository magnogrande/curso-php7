<?php

// namespace - Permite organizar classes em um diretório específico
// Autoload criado para ser utilizado com NAMESPACE
spl_autoload_register(
  // Função anômina que recebe o nome da classe
  function ($nomeClasse) {
      // var_dump($nomeClasse);
      // echo "<br>";
      // echo "Autoload - spl_autoload_register <br>";

      $dirClass = "Class";
      $fileName = $dirClass . DIRECTORY_SEPARATOR . $nomeClasse . ".php";

      if (file_exists($fileName)) {
          # code...
          require_once($fileName);
      }
  }
);
