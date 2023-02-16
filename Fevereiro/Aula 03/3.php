<?php
// Crie um programa que tenha uma função que recebe 1 valor por referêcia, se for
// maior que 10 ele incrementa, se for menor decrementa. Se não for informado, por padrão, ele
// será igual a 5

function funcao(&$valor = 5){
    if($valor>10) $valor++;
    else $valor--;
    return $valor;
}

$value = 18;

$funcao2 = funcao($value);
echo $funcao2;