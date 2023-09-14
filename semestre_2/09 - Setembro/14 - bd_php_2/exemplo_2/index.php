<?php
//index.php

require_once('Database.php');

$db = new Database();

#selecionar todos os carros
/*
$query = 'SELECT * FROM carros';
$carros = $db->select($query);
echo '<pre>';
    print_r($carros);
echo '</pre>';
*/

#selecionar carro com o ID 1
/*
$carro = $db->select('SELECT * FROM carros WHERE id = :id', [':id' => 1]);
echo '<pre>';
    print_r($carro);
echo '</pre>';
*/

#inserindo um carro no banco
/*
$sucesso = $db->execute(
    'INSERT INTO carros (marca, modelo, ano, placa, chassi, cor)
    VALUES
    (:marca, :modelo, :ano, :placa, :chassi, :cor)',
    [
        ':marca' => 'Volkswagen',
        ':modelo' => 'Gol',
        ':ano' => 2020,
        ':placa' => 'RET790',
        ':chassi' => 'wasgf46',
        ':cor' => 'Vermelho',
    ]
);
var_dump($sucesso);
*/