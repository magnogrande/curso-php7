<?php

// namespace - Permite organizar classes em um diretório específico


// Usando o NAMESPACE da classe Cliente
namespace Cliente;

// Hendando os atributos da classe Cadastro encontrada na raiz do projeto (\Cadastro)
class Cadastro extends \Cadastro
{
    public function registrarVenda()
    {
        echo "Foi registrada uma venda para o cliente: " . $this->getNome();
    }
}
