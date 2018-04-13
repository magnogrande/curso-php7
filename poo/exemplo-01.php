<?php

// Orientação a Objetos - Classes em PHP

class Pessoa
{
    public $nome; // Atributo

    public function falar() // Método
    {
        return "O meu nome é: " . $this->nome;
    }
}

$magno = new Pessoa();
$magno->nome = "Magno Almeida";
echo $magno->falar();
