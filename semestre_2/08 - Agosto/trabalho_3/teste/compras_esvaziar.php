<?php
    //compras_esvaziar.php
    
    //1ª forma: apagar a sessão
    session_start();
    session_destroy();
    
    header('location:compras.php');
    