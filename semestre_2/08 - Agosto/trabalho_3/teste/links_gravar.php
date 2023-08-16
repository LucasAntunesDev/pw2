<?php
//links_gravar.php
    //Adiciona o item na lista
    session_start();
    if (isset($_POST['link']) && 
        !empty($_POST['link'])
        && !in_array($_POST['link'],
        $_SESSION['links'])) {
        $_SESSION['links'][] = $_POST['link'];
    }

    //Manda a pessoa para a página links.php (redirecionamento)
    header('location:index.php')
    
?>