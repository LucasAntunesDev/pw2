<?php
//excluir.php

require_once('Database.php');
$db = new Database();

if(!isset($_GET['id'])) {
    header('location:index.php');
    die;
}

$query = 'DELETE FROM carros WHERE id = :id';

$binds = [':id' => $_GET['id']];

$success = $db->execute($query, $binds);

echo $success ? header('location:index.php') : 'Deu erro :(';
