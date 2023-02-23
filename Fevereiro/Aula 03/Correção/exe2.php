<?php

// Crie um programa que tenha uma função que recebe 5 valores e retorne o maior deles

function maior($val1,$val2,$val3,$val4,$val5){
    $m = max($val1,$val2,$val3,$val4,$val5);
    return $m;
}

$r1 = maior(1,2,3,4,5);
echo "<p>O maior número entre 1,2,3,4,5 é $r1</p>";

$r2 = maior(10,21,43,5,1);
echo "<p>O maior número entre 10,21,43,5,1 é $r2</p>";

$r3 = maior(3,22,8,76,4);
echo "<p>O maior número entre 3,22,8,76,4 é $r3</p>";