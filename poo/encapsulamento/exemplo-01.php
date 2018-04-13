<?php

// Orientação a Objetos - Encapsulamento

class Pessoa
{
    public $nome = "Rasmus Lerdorf"; // Todos métodos internos e externos podem acessar
    protected $idade = 48; // Acessado apenas por métodos dentro da própria classe e objetos podem herdar esse atributo
    private $senha = "123456"; // Acessado apenas por métodos da própria classe

    public function verDados()
    {
        echo $this->nome  . "<br>";
        echo $this->idade  . "<br>";
        echo $this->senha  . "<br>";
    }
}



$eu = new Pessoa();
var_dump($eu);
echo "<br>";
// echo "Nome: ". $eu->nome . "<br>";
// echo "Idade: ". $eu->idade . "<br>";
// echo "Senha: ". $eu->senha . "<br>";
echo $eu->verDados();
unset($eu);
