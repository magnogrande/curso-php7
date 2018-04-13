<?php

// Orientação a Objetos - Classes em PHP

class Carro
{
    private $ano; // Atributo
    private $motor; // Atributo
    private $modelo; // Atributo

    public function getModelo()
    {
        return $this->modelo;
    }

    public function setModelo($modelo)
    {
        $this->modelo = $modelo;
    }

    // Método getMotor com cast para converter a String para float
    public function getMotor():float
    {
        return $this->motor;
    }

    public function setMotor($motor)
    {
        $this->motor = $motor;
    }

    // Método getAno com cast para converter a String para Int
    public function getAno():int
    {
        return $this->ano;
    }

    public function setAno($ano)
    {
        $this->ano = $ano;
    }

    public function exibir()
    {
        return array(
        "modelo" => $this->getModelo(),
        "motor" => $this->getMotor(),
        "ano" => $this->getAno()
      );
    }
}

$veiculo = new Carro();
$veiculo->setModelo("Gol");
$veiculo->setMotor("1.2");
$veiculo->setAno("2018");
// print_r($veiculo->exibir());
var_dump($veiculo->exibir());
