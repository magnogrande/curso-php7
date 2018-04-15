<?php

// DAO - Data Access Object - Permite abstrair melhor o código
// e sua interação com o Banco de dados
require_once("config.php");

// Usando um NAMESPACE - Utilizando a classe SQL dentro do diretório Class.
// use sql;

// $sql = new SQL();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

$root = new Usuario();

// Chama o método usado para carregar um usuário pelo ID na mamória
// $root->loadById(2);

// Chama o método estatico getList() para exibir a lista de usuários na tabela
// $root->getList();

//Método getList(), por ser estático pode ser chamado diretamente através da
//classe sem a necessidade de instanciar um novo objeto.
// $lista = Usuario::getList();

//Carrega uma lista de usuários pesquisando pelo campo LOGIN
// $search = Usuario::search("e");
// Utiliza o método mágico __toString para imprimir o resutado da consulta na
// em formato JSON

// Chama o método usado para carregar um usuário pelo login e senha  na mamória
$root->login("user", "123456");
echo $root;
// echo json_encode($search);
