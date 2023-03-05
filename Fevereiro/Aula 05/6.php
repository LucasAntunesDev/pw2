<!-- Faça um programa que preencha uma matriz n x m com valores inteiros no
intervalo entre 1 e 100 , calcule e mostre:
a. a quantidade de elementos pares;
b. a soma dos elementos ímpares;
c. a média de todos os elementos. -->
<?php
//Definição do tamanho do array através de variáveis
$n = 20;
$m = 10;
//Criação inicial do array
$array = [];
$soma_impares = 0;
//Variável p/ armazenar a soma de todos os números
$soma = 0;
$pares = 0;
//Contagem de quantos números há no array
$contagem = 0;

for ($i = 0; $i < $n; $i++) {
    $array[$i] = [];
    for ($j = 0; $j < $m; $j++) {
        $array[$i][$j] = rand(0, 100);
    }
}

foreach($array as $chave => $numero){
    foreach($numero as $num){
        //Define o número de pares/soma dos ímpares
        $num % 2 == 0 ? $pares++ : $soma_impares += $num;
        //Soma geral dos números
        $soma += $num;
        //Contagem dos números presentes no array
        $contagem++;
    }
}

$media = $soma / $contagem;

echo "<pre>";
echo "<p>São <b>$pares</b> números pares</p>";
echo "<p>A soma dos números ímpares é <b>$soma_impares</b></p>";
echo "<p>A média de todos os elementos é <b>$media</b></p>";
echo "</pre>";