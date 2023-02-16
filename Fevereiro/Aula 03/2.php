<?php
// Crie um programa que tenha uma função que recebe 5 valores e retorne o maior
// deles

function maior_valor($v1, $v2, $v3, $v4, $v5)
{
    $valores = array($v1, $v2, $v3, $v4, $v5);
    return max($valores);
}

$valor1 = 6;
$valor2 = 8;
$valor3 = 10;
$valor4 = 100;
$valor5 = 250;

$maior = maior_valor($valor1, $valor2, $valor3, $valor4, $valor5);
echo "O maior valor é $maior!";
