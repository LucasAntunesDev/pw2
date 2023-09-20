<?php
//excluir.php

require_once('Database.php');
$db = new Database();

$query = 'DELETE FROM carros WHERE id = :id';

$binds = [':id' => $_GET['id']];

$success = $db->execute($query, $binds);

echo $success ? header('location:index.php') : 'Deu erro :(';
