<?php
//Database.php

require_once('config.php');

final class Database {

    private $connection;

    public function __construct() {
        //criando a conexão com o bd
        $this->connection = new PDO('mysql:host=' . HOST . ';dbname=' . BASE, USER, PASS);
        //tratando erros
        $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function select($query, $binds = []) {
        $stmt = $this->connection->prepare($query);

        foreach ($binds as $attr => $value) {
            /*
            [
                ':marca' => marca,
                ':modelo' => modelo,
                ...
            ]
            */
            $stmt->bindValue($attr, $value);
        }

        $stmt->execute();

        return $stmt->fetchAll();
    }

    public function execute($query, $binds = []) {
        $stmt = $this->connection->prepare($query);

        foreach ($binds as $attr => $value) $stmt->bindValue($attr, $value);
        
        return $stmt->execute();
    }
}
