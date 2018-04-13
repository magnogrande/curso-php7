<?php
// Função setlocale

setlocale(LC_ALL, "pt_BR", "pt_BR-utf-8", "portuguese");

// strftime()s Formata uma hora/data local de acordo com a configuração do idioma.
echo strftime("%A %B");

echo "<br>";
