<?php
session_start();
if (
    isset($_POST['link']) &&
    !empty($_POST['link'])
    && !in_array(
        $_POST['link'],
        $_SESSION['links']
    )
) {
    //garante que só sejam adicionados links válidos na sessão
    $_SESSION['links'][] = $_POST['link'];
}

header('location:index.php');
