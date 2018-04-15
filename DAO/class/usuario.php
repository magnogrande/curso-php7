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

    // Método que um usuário usuário da tabela de banco de Dados
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

    // Método que cria uma lista com todos os usuários da tabela de banco de Dados
    public static function getList()
    {
        $sql = new SQL();
        return $sql->select("SELECT * FROM tb_usuarios order by deslogin;");
    }

    // Método que cria uma lista de usuários da tabela de banco de Dados
    public static function search($login)
    {
        $sql = new SQL();
        return $sql->select("SELECT * FROM tb_usuarios where deslogin like :SEARCH order by deslogin", array(
          ':SEARCH'=>"%".$login."%"
        ));
    }

    // Método que carrega o na memória o usuário pelo login e senha
    public function login($login, $password)
    {
        $sql = new SQL();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE deslogin = :LOGIN and dessenha = :PASSWORD", array(
        ":LOGIN"=>$login,
        ":PASSWORD"=>$password
      ));

        if (count($results) > 0) {
            # code...
            $row = $results[0];

            $this->setIdusuario($row['idusuario']);
            $this->setDeslogin($row['deslogin']);
            $this->setDessenha($row['dessenha']);
            $this->setDtcadastro(new DateTime($row['dtcadastro']));
        } else {
            # code...
            throw new Exception("Login ou senha inválido", 1);
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
