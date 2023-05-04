<?php
session_start();
if(!isset($_SESSION['nome'])){
    $_SESSION['nome'] = [];
}

$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$tel = $_POST['cpf'];
$email = $_POST['cpf'];

$_SESSION['nome'] = $nome;
header('location:../frontend/votar.php');
