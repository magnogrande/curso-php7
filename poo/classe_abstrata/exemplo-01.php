<?php

// Orientação a Objetos - Interface

interface Veiculo
{
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
}

// Classe abstrata usada para definir os requisitos que os métodos precisam ter para que possam ser implementados
abstract class Automovel implements Veiculo
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

class DelRey extends Automovel
{
    public function empurrar()
    {
    }
}

// $meuVeiculo = new DelRey();
$meuVeiculo = new Automovel();
echo "<br>";
$meuVeiculo->trocarMarcha("1234567810");
echo "<br>";
$meuVeiculo->acelerar("100km");
echo "<br>";
$meuVeiculo->frenar("70km");
