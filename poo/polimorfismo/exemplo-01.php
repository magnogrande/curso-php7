<?php

// Orientação a Objetos - Polimorfismo - Métodos herdados da classe pai, mas que funcionam de maneira diferente em cada instância de objeto


abstract class Animal
{
    public function falar()
    {
        return "Som";
    }
    public function mover()
    {
        return "Anda";
    }
}

class Cachorro extends Animal
{
    public function falar()
    {
        return "late";
    }
}

class Gato extends Animal
{
    public function falar()
    {
        return "Mia";
    }
}

class Passaro extends Animal
{
    public function falar()
    {
        return "Canta";
    }
    public function mover()
    {
        // Com Polimorfismo através do método mover é possível definir que o passaro voa, uma forma de locomoção
        // Além de Andar, uma forma de locomoção específica de locomoção da classe Abstrata Animal
        // O comando parent invoca o método mover() da Animal
        return "Voa e " . parent::mover();
    }
}

$pluto = new Cachorro();
echo $pluto->falar();
echo "<br>";
echo $pluto->mover();
echo "<br>";
echo "........................................<br>";
$garfield = new Gato();
echo $garfield->falar();
echo "<br>";
echo $garfield->mover();
echo "<br>";
echo "........................................<br>";
$ave = new Passaro();
echo $ave->falar();
echo "<br>";
echo $ave->mover();
echo "<br>";
echo "........................................<br>";
