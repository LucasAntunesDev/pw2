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
    //Validação de URL
    if (filter_var($_POST['link'], FILTER_VALIDATE_URL)) {
        $_SESSION['links'][] = $_POST['link'];
    }
}

header('location:index.php');
