<?php

// namespace - Permite organizar classes em um diretório específico

class Usuario
{
    private $idusuario;
    private $deslogin;
    private $dessenha;
    private $dtcadastro;

    // GET
    public function getIdusuario()
    {
        return $this->idusuario;
    }
    public function getDeslogin()
    {
        return $this->deslogin;
    }
    public function getDessenha()
    {
        return $this->dessenha;
    }
    public function getDtcadastro()
    {
        return $this->dtcadastro;
    }

    // SET
    public function setIdusuario($value)
    {
        $this->idusuario = $value;
    }
    public function setDeslogin($value)
    {
        $this->deslogin = $value;
    }
    public function setDessenha($value)
    {
        $this->dessenha = $value;
    }
    public function setDtcadastro($value)
    {
        $this->dtcadastro = $value;
    }

    // Preenche os atributos com as informações recebidas do banco de dados
    public function loadById($id)
    {
        $sql = new SQL();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

        if (count($results) > 0) {
            # code...
            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        }
    }
    // Método mágico para criar uma string com os parâmentros da classe
    // Retornando em formato JSON
    public function __toString()
    {
        return json_encode(array(
        'idusuario' => $this->getIdusuario(),
        'deslogin' => $this->getDeslogin(),
        'dessenha' => $this->getDessenha(),
        'dtcadastro' => $this->getDtcadastro()->format("d/m/Y H:i:s")
      ));
    }
}
