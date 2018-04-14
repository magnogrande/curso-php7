<?php

// namespace - Permite organizar classes em um diretório específico

class Cadastro
{
    private $nome;
    private $email;
    private $senha;

    // GET
    public function getNome():string
    {
        return $this->nome;
    }
    public function getEmail():string
    {
        return $this->email;
    }
    public function getSenha():string
    {
        return $this->senha;
    }

    // SET
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }

    // Método para criar uma string com os parâmentros da classe
    // Retornando em formato JSON
    public function __toString()
    {
        return json_encode(array(
        'nome' => $this->nome,
        'email' => $this->email,
        'senha' => $this->senha
      ));
    }
}
