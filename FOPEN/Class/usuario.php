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

    // Método que carrega um usuário do banco de Dados para a memória do sistema
    public function loadById($id)
    {
        $sql = new SQL();
        $results = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = :ID", array(":ID"=>$id));

        if (count($results) > 0) {
            # code...
            $this->setData($results[0]);
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
            $this->setData($results[0]);
        } else {
            # code...
            throw new Exception("Login ou senha inválido", 1);
        }
    }

    // Método para carregar os dados na memória
    public function setData($data)
    {
        $this->setIdusuario($data['idusuario']);
        $this->setDeslogin($data['deslogin']);
        $this->setDessenha($data['dessenha']);
        $this->setDtcadastro(new DateTime($data['dtcadastro']));
    }

    // Método para inserir um novo usuário no banco de dados
    public function insert()
    {
        $sql = new SQL();
        $results = $sql->select("call sp_usuarios_insert (:LOGIN, :PASSWORD)", array(
          ":LOGIN"=>$this->getDeslogin(),
          ":PASSWORD"=>$this->getDessenha()
        ));

        if (count($results) > 0) {
            # code...
            $this->setData($results[0]);
        }
        // else {
        //     # code...
        //     throw new Exception("Login ou senha inválido", 1);
        // }
    }

    // Método para atualizar um novo registro no banco de dados
    public function update($login, $password)
    {
        $this->setDeslogin($login);
        $this->setDessenha($password);

        $sql = new SQL();
        $results = $sql->select("update tb_usuarios set deslogin = :LOGIN, dessenha = :PASSWORD where idusuario = :ID", array(
          ":LOGIN"=>$this->getDeslogin(),
          ":PASSWORD"=>$this->getDessenha(),
          ":ID"=>$this->getIdusuario()
        ));

        if (count($results) > 0) {
            # code...
            $this->setData($results[0]);
        }
        // else {
        //     # code...
        //     throw new Exception("Login ou senha inválido", 1);
        // }
    }

    // Método para atualizar um novo registro no banco de dados
    public function delete()
    {
        $sql = new SQL();
        $results = $sql->select("delete from tb_usuarios where idusuario = :ID", array(
          ":ID"=>$this->getIdusuario()
        ));

        // Limpando as variáveis do sistema
        $this->setIdusuario(0);
        $this->setDeslogin("");
        $this->setDessenha("");
        $this->setDtcadastro(new DateTime());
    }

    // Método construtor para incializar as variáveis deslogin e dessenha
    // public function __construct($login="", $password="")
    // {
    //     $this->setDeslogin($login);
    //     $this->setDessenha($password);
    // }

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
