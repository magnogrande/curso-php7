<?php

// Classes em PHP - Orientação a Objetos -  estático para validar CPF

class Documento
{
    private $numero; // Atributo

    public function getNumero()
    {
        return $this->numero;
    }

    public function setNumero($numero)
    {
        $result = Documento::validaCPF($numero);

        if ($result === false) {
            # code...
            throw new Exception("CPF informado não é válido", 1);
        }

        $this->numero = $numero;
    }

    public function exibir()
    {
        return array(
        "numero" => $this->getNumero()
      );
    }

    // Método estático para validar CPF
    public static function validaCPF($cpf):bool
    {
        if (empty($cpf)) {
            return false;
        }

        $cpf = preg_match('/[0-9]/', $cpf)?$cpf:0;

        $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);


        if (strlen($cpf) != 11) {
            echo "length";
            return false;
        } elseif ($cpf == '00000000000' ||
             $cpf == '11111111111' ||
             $cpf == '22222222222' ||
             $cpf == '33333333333' ||
             $cpf == '44444444444' ||
             $cpf == '55555555555' ||
             $cpf == '66666666666' ||
             $cpf == '77777777777' ||
             $cpf == '88888888888' ||
             $cpf == '99999999999') {
            return false;
        } else {
            for ($t = 9; $t < 11; $t++) {
                for ($d = 0, $c = 0; $c < $t; $c++) {
                    $d += $cpf{$c} * (($t + 1) - $c);
                }
                $d = ((10 * $d) % 11) % 10;
                if ($cpf{$c} != $d) {
                    return false;
                }
            }

            return true;
        }
    }
}

$cpf = new Documento();
$cpf->setNumero("32914989091");

echo $cpf->getNumero();
echo "<br> Método Valida CPF sem criar uma instância da classe Documento";
echo "<br>";
var_dump(Documento::validaCPF(32914989091));
