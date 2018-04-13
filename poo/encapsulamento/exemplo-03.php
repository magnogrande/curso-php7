<?php

// Orientação a Objetos - Herança

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

class Programador extends Pessoa
{
    public function verDados()
    {
        echo "Classe do método: " . get_class($this) .  "<br>";
        echo $this->nome  . "<br>";
        echo $this->idade  . "<br>";
        echo $this->senha  . "<br>"; // Essa propriedade não será exibida porque o método não visualiza. Não foi herdado.
    }
}

// $eu = new Pessoa();
$euProgramador = new Programador();
// var_dump($eu);
// echo "<br>";
// unset($eu);
// var_dump($euProgramador);
echo "<br>";
echo $euProgramador->verDados();

// echo "Nome: ". $eu->nome . "<br>";
// echo "Idade: ". $eu->idade . "<br>";
// echo "Senha: ". $eu->senha . "<br>";
// echo $eu->verDados();
