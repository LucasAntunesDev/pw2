<?php
//salvar.php

//Verificando se recebeu dados do form (trataemnto de segurança)
#errors first
if (empty($_POST['marca'])) {
    echo 'Dados não informados';
    die;
}

$pdo = new PDO("mysql:host=localhost;dbname=detran", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'INSERT INTO carros 
(marca, modelo, ano, placa, chassi, cor) 
VALUES 
(:marca, :modelo, :ano, :placa, :chassi, :cor)';

$statement = $pdo->prepare($query);
$statement->bindValue(':marca', $_POST['marca']);
$statement->bindValue(':modelo', $_POST['modelo']);
$statement->bindValue(':ano', $_POST['ano']);
$statement->bindValue(':placa', $_POST['placa']);
$statement->bindValue(':chassi', $_POST['chassi']);
$statement->bindValue(':cor', $_POST['cor']);

//Roda a query de fato
$sucesso = $statement->execute();

echo $sucesso ? header('location:index.php') . $pdo->lastInsertId() : 'Deu erro :( <br>';
