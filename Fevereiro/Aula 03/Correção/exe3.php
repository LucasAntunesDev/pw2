<?php

//Crie um programa que tenha uma função que recebe 1 valor por referêcia, se for maior que 10 ele incrementa, se for menor decrementa. Se não for informado, por padrão, ele será igual a 5

function referencia(&$val1 = 5){
    $val1 = ($val1>10)?$val1+=1:$val1-=1;
    return $val1;
}

$m = 12;
$m = referencia($m);
echo "<p>Passei 12 e retornou $m";

$m = 4;
$m = referencia($m);
echo "<p>Passei 4 e retornou $m";
