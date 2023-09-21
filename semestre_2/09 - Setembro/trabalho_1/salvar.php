<?php
//salvar.php

require_once('Database.php');
$db = new Database();

if ($_POST['id'] > 0) {

    // if(!isset($_GET['tipo'])) {
    //     header('location:index.php');
    //     die;
    // }

    $query = 'UPDATE obras 
    SET 
        nome = :nome,
        sinopse = :sinopse,
        tipo = :tipo,
        genero =  :genero,
        assistida = :assistida
    WHERE 
        id = :id';

    $binds = [
        ':nome' => $_POST['nome'],
        ':sinopse' => $_POST['sinopse'],
        ':tipo' => $_POST['tipo'],
        ':genero' => $_POST['genero'],
        ':assistida' => $_POST['assistida'],
        ':id' => $_POST['id']
    ];
} else {
    $query = 'INSERT INTO obras 
        (nome, sinopse, tipo, genero, assistida, cor)
    VALUES 
        (:nome, :sinopse, :tipo, :genero, :assistida, :cor)';

    $binds = [
        ':nome' => $_POST['nome'],
        ':sinopse' => $_POST['sinopse'],
        ':tipo' => $_POST['tipo'],
        ':genero' => $_POST['genero'],
        ':assistida' => $_POST['assistida']
    ];
}

$success = $db->execute($query, $binds);

echo $success ? header('location:index.php') : 'Deu erro :(';