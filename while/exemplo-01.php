
  <?php
  // Estruturas de repetição - While
$condicao = true;
  while ($condicao) {
      # ramd
      $numero = rand(1, 10);
      if ($numero === 3) {
          # code...
          echo "Três: " . $numero ;
          echo "<br>";
          echo "<hr>";
          $condicao = false;
      }
      echo $numero;
      echo "<br>";
  }
