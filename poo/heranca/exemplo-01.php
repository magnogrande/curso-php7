<?php

// Orientação a Objetos - Herança

class Documento
{
    private $numero; // Acessado apenas por métodos da própria classe

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $this->numero = $numero;
    }
}

class CPF extends Documento
{
    public function validar():bool
    {
        return true;
    }
}

$meuDocumento = new CPF();
echo "<br>";
$meuDocumento->setNumero("1234567810");
echo $meuDocumento->getNumero("1234567810");
echo "<br>";
var_dump($meuDocumento->validar());
