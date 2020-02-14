<?php


class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function selectAll($table, $intoClass){
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS, $intoClass);
    }

    public function addTodo($name, $tableName){
        $statement = $this->pdo->prepare(
            "INSERT INTO $tableName (description, completed) VALUES ('$name', 0)"
        );

        var_dump($statement);

        $statement->execute();
    }
}