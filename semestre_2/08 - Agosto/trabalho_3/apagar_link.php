<?php
    session_start();
    
    $_SESSION['links'] = array_diff($_SESSION['links'], [$_GET['link']]);

    header('location:index.php');