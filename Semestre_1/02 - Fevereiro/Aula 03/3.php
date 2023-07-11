<?php
// Crie um programa que tenha uma função que recebe 1 valor por referêcia, se for
// maior que 10 ele incrementa, se for menor decrementa. Se não for informado, por padrão, ele
// será igual a 5

function funcao(&$valor = 5){
    if($valor>10) $valor++;
    else $valor--;
    return $valor;
}
#A refrência muda o $valor baseado na variável $value, que foi criada fora da função

$value = 40; #Valor que será incrementado ou drecementado

$chama_funcao = funcao($value);
echo $chama_funcao;
