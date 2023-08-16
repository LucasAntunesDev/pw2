<?php

session_start();


if(isset($_GET['link'])){
    
    $link = $_GET['link'];

    $_SESSION['links'] = array();

    $sessao = $_SESSION['links'];
    
    array_push($sessao, $link);

    // $_GET['link']['teste'] = $link;
}

// print_r($sessao);



header('location:index.php');

// $link = $_GET['link'];

// $teste = array();

// array_push($teste, $link);

// $_SESSION['links'] = $teste;

// print_r($_SESSION['links']);

// header('location:index.php');