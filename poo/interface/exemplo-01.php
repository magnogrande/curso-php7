<?php

// Orientação a Objetos - Interface

interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

// Classe implementada a partir da interface Veiculo.
class Civic implements Veiculo
{
    public function acelerar($velocidade)
    {
        echo "O Veículo acelerou: " . $velocidade;
    }
    public function frenar($velocidade)
    {
        echo "O Veículo frenou: " . $velocidade;
    }
    public function trocarMarcha($marcha)
    {
        echo "O Veículo engatou a marcha: " . $marcha;
    }
}

$meuVeiculo = new Civic();
echo "<br>";
$meuVeiculo->trocarMarcha("1234567810");
echo "<br>";
$meuVeiculo->acelerar("100km");
echo "<br>";
$meuVeiculo->frenar("70km");
