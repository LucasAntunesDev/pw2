<?php
session_start();
$nome = $_POST['nome'];
$rg = $_POST['rg'];
$cpf = $_POST['cpf'];
$tel = $_POST['cpf'];
$email = $_POST['cpf'];

// if(!isset($_SESSION['nome'])){
//     $_SESSION['nome'] = [];
// }
//gravar_nome.php
file_put_contents('../nome.json', $nome,);
// print_r($_SESSION);
// echo $nome;
// $_SESSION['nome'] = $nome;
header('location:../votar.php');
