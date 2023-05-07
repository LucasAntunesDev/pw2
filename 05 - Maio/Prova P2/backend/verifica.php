<?php
session_start();

if (!isset($_SESSION['nome'])){
    $_SESSION['nome'] = "";
}

$nome = $_POST['nome'];
$_SESSION['nome'] = $nome;

header('location:../frontend/votar.php');