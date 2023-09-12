<?php
//index.php
$pdo = new PDO("mysql:host=localhost;dbname=detran", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'INSERT INTO carros 
(marca, modelo, ano, placa, chassi, cor) 
VALUES 
(:marca, :modelo, :ano, :placa, :chassi, :cor)';

$statement = $pdo->prepare($query);
$statement->bindValue(':marca', 'Hyundai');
$statement->bindValue(':modelo', 'HB20');
$statement->bindValue(':ano', 2018);
$statement->bindValue(':placa', 'WW8=9W88');
$statement->bindValue(':chassi', 'dfdfg');
$statement->bindValue(':cor', 'Branco');

//Roda a query de fato
$sucesso = $statement->execute();

echo $sucesso ? 'Inserido com sucesso =D <br>'. $pdo->lastInsertId() 
: 'Deu erro :( <br>';
