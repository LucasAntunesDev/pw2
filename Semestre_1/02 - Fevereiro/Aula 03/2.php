<?php
// Crie um programa que tenha uma função que recebe 5 valores e retorne o maior
// deles

function maior_valor($v1, $v2, $v3, $v4, $v5)
{
    $valores = array($v1, $v2, $v3, $v4, $v5);
    return max($valores);
}

#Valores:
$valor1 = random_int(0,1000);
$valor2 = random_int(0,1000);
$valor3 = random_int(0,1000);
$valor4 = random_int(0,1000);
$valor5 = random_int(0,1000);

$maior = maior_valor($valor1, $valor2, $valor3, $valor4, $valor5);
echo "Os valores são: $valor1, $valor2, $valor3, $valor4 e $valor5</br>";
echo "O maior valor é $maior!";
