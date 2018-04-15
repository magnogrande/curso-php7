<?php

// DAO - Data Access Object - Permite abstrair melhor o código
// e sua interação com o Banco de dados
require_once("config.php");

// Usando um NAMESPACE - Utilizando a classe SQL dentro do diretório Class.
// use sql;

$sql = new SQL();

// $usuarios = $sql->select("SELECT * FROM tb_usuarios");

$root = new Usuario();

// Chama o método usado para consultar o usuário pelo ID no banco de dados
$root->loadById(2);

// Utiliza o método mágico __toString para imprimir o resutado da consulta na
// em formato JSON
echo $root;
