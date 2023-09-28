<?php
//salvar.php

require_once('../Database.php');
$db = new Database();

if ($_POST['id'] > 0) {

    $query = 'UPDATE avaliacoes 
    SET 
        obras_id = :obras_id,
        nota = :nota,
        observacoes = :observacoes
    WHERE 
        id = :id';

    $binds = [
        ':obras_id' => $_POST['obras_id'],
        ':nota' => $_POST['nota'],
        ':observacoes' => $_POST['observacoes'],
        ':id' => $_POST['id']
    ];
} else {
    $query = 'INSERT INTO avaliacoes 
        (obras_id, nota, observacoes)
    VALUES 
        (:obras_id, :nota, :observacoes)';

    $binds = [
        ':obras_id' => $_POST['obras_id'],
        ':nota' => $_POST['nota'],
        ':observacoes' => $_POST['observacoes']
    ];
}

$success = $db->execute($query, $binds);

echo $success ? header('location:../index.php') : 'Deu erro :(';