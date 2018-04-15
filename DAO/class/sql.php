<?php

// DAO - Data Access Object - Permite abstrair melhor o código
// e sua interação com o Banco de dados
//
// Classe SQL

// Classe SQL que extende da classe PDO nativa do PHP, Herdando seus métodos e atributos
class Sql extends PDO
{
    private $conn;
    private $email;
    private $senha;

    //Construtor da Classe que inicializa o objeto de conexão com os parâmetros de conxão com o banco
    public function __Construct()
    {

        //SQLSERVER
        $this->conn = new PDO("sqlsrv:Database=dbphp7;server=localhost\SQLEXPRESS;ConnectionPooling=0", "sa", "root");
        // MySQL
        // $this->conn = new PDO("mysql:dbname=dbphp7;host=localhost", "root", "");
    }

    // Método esponsável pela atribuição de cada parâmetro com os campos informados na query
    private function setParams($statement, $parameters = array())
    {
        foreach ($parameters as $key => $value) {
            # code...
            $this->setParam($statement, $key, $value);
        }
    }

    // Método esponsável pelo bindParams de cada parâmetro com os campos informados na query
    private function setParam($statement, $key, $value)
    {
        $statement->bindParam($key, $value);
    }

    // Método Query para processar as queries no banco de dados
    // O método Query recebe uma query em SQL e um array com os parâmentros para execução da Query
    public function Query($rawQuery, $params = array())
    {
        // Cria uma Statement com a $rawQuery
        $stmt = $this->conn->prepare($rawQuery);
        // Passa o statment e os parâmetros para execução da query para o método setParams(), responsável pela atribuição de cada parâmetro
        // com os campos informados na query
        $this->setParams($stmt, $params);
        $stmt->execute();

        return $stmt;
    }

    // Método Select com declaração de retorno indicando o tipo de retorno
    public function Select($rawQuery, $params = array()):array
    {
        $stmt = $this->Query($rawQuery, $params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
