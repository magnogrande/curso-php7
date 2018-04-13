<?php

// Classes em PHP - Orientação a Objetos - Métodos Mágicos

class Endereco
{
    private $logradouro;
    private $cidade;
    private $numero;

    public function __construct($a, $b, $c)
    {
        $this->logradouro = $a;
        $this->cidade = $b;
        $this->numero = $c;
    }

    public function __desstruct()
    {
        var_dump('DESTRUIR');
    }

    public function __toString()
    {
        return $this->logradouro.", ".$this->cidade.", ".$this->numero;
    }
}



$meuEndereco = new Endereco("Av. Dorival Caymmi", "Salvador", "3191");
var_dump($meuEndereco);
echo "<br>";
// echo $meuEndereco->__toString();
// Classes em PHP - O método mágico __toString() é chamado sem a necessidade de invocar ele através do objeto da classe.
// O PHP entende que ele é o único método capaz de retornar uma string para a chama de impressão na tela.
echo "string: ". $meuEndereco;
unset($meuEndereco);
