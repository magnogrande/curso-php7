
<?php
// Try - Tratamento de exceções
// Simulando o tratamento de uma exceção

function trataNome($name)
{
    if (!$name) {
        # code...
        // Parametrizando o lançamento de uma exceção
        throw new Exception("Nenhum nome foi informado.", 1);
    }
    echo ucfirst($name) . "<br>";
}

try {
    trataNome("Joao");
    trataNome(""); // Simulando erro para forçar a Exceção
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    // Opcionalmente, o envio de uma e-mail poderia ser executado
    // a partir daqui
    echo "Executou o Try.";
}
