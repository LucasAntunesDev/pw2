<?php
//index.php
$pdo = new PDO("mysql:host=localhost;dbname=detran","root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$query = 'SELECT * FROM CARROS';
$statement = $pdo->prepare($query);
$statement->execute();
$carros = $statement->fetchAll();
print_r($carros);