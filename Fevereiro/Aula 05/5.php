<!-- Faça um programa que leia dois números n e m e:
a. Crie e leia um vetor de inteiros de n posições;
b. Crie e leia um vetor de inteiros de m posições;
c. Crie e construa um vetor de inteiros que seja a interseção entre os dois
vetores anteriores, ou seja, que contém apenas os números que estão em ambos os
vetores. Não deve conter números repetidos. Imprima os três vetores criados. -->
<?php
$n = 20;
$m = 10;
//Criação dos arrays m e n
for ($i = 0; $i < $n; $i++) {
    $array_n[$i] = rand(0, 150);
}

for ($i = 0; $i < $m; $i++) {
    $array_m[$i] = rand(0, 100);
}
//Interseção dos dois arrays
$intersecao = array_intersect($array_n, $array_m);
sort($intersecao);

echo "<pre>";
echo '$array_n: ';
print_r($array_n);

echo '$array_m: ';
print_r($array_m);

if($intersecao != null){
    echo '$intersecao: ';
    print_r($intersecao);
}else{
    echo '<strong>Não há números comuns entre os arrays</strong>';
}

echo "</pre>";
