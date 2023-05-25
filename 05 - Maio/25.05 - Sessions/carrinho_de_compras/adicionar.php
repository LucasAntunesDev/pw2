<?php
//adicionar.php
session_start();

$produtos = [
    1 => 'Camisa Internacional Home 2023',
    2 => 'Camisa Internacional Away 2023',
    3 => 'Camisa Internacional Third 2023',
];

if(!isset($_GET['id'])){
    echo 'Nenhum produto foi informado para compra';
    die;
};

if(!array_key_exists($_GET['id'], $produtos)){
    echo 'O produto informado não existe!';
    die;
}

$_SESSION['carrinho'][] = $produtos[$_GET['id']];

header('location:carrinho.php');