<?php
if(!isset($_SESSION['nome'])){
    // $_SESSION['nome'] = [];
    echo "Erro 404";
}else{
    header('location:../frontend/votar.php');
}