
// Formulário em HTML para exemplificar o uso de foreach

<form>
  <input type="text" name="nome">
  <input type="date" name="nascimento">
  <input type="submit" name="OK">
</form>

// Estruturas de repetição - FOREACH
  <?php
  if (isset($_GET)) {
      foreach ($_GET as $key => $value) {
          # code...
          echo "Nome do campo: " . $key;
          echo "<br>";
          echo "Valor do campo: " . $value;
          echo "<hr>";
      }
  }
