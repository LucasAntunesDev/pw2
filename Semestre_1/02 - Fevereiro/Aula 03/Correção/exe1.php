<?php

// Crie um programa que tenha uma função que recebe 4 valores e retorne a média deles

function media($val1,$val2,$val3,$val4){
    $m = ($val1+$val2+$val3+$val4)/4;
    return $m;
}

$r1 = media(1,2,3,4);
echo "<p>Média de 1,2,3,4 é $r1</p>";

$r2 = media(10,21,43,5);
echo "<p>Média de 10,21,43,5 é $r2</p>";

$r3 = media(3,22,8,76);
echo "<p>Média de 3,22,8,76 é $r3</p>";