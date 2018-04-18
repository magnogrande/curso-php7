
<?php
// Error - Tratamento de erro -

// Suprimindo mensagens de erro específicas com error_reporting
error_reporting(E_ALL & ~E_NOTICE);

// Simulando o erro: Executa o exemplo-02 sema passagem de parâmetros na
// barra de navegação: exemplo-02.php?nome=MSA
$nome = $_GET["nome"];

echo $nome;
