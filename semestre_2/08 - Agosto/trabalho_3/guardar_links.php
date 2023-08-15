<?php

session_start();

$link = $_POST['link'];

// array_push($_SESSION['links'] , $link);
$_SESSION['links'] = $link;

header('location:index.php');
// header('location:acessar_links.php');

// foreach($_SESSION['links'] as $link){
//     echo $link. '<br>';
// }