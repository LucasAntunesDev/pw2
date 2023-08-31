<?php
//index.php

echo 'Início do arquivo <br>';

try {
    $x = 8 / 0;
    echo $x;
} catch (Error $e) {
    echo 'Erro: '. $e->getMessage();
}finally{
    echo '<br> Fim do arquivo';
}