<?php
//index.php

$frutas = [];
#$frutas = array();

$frutas[] = 'Maçã'; //adiciona na próxima posição disponível
print_r($frutas);
echo '<br>';
echo $frutas[0];

echo '<br>';
array_push($frutas, 'Laranja');
print_r($frutas);

echo '<br>';
echo $frutas[1];

unset($frutas[0]);
echo '<br>';
print_r($frutas);

echo '<br>';
print_r(array_values($frutas)); //Retrona um array considerando apenas os valores (ignorando as chaves)

$frutas[] = 'Abacaxi';
$frutas[] = 'Morango';
echo '<br>';
print_r($frutas);

echo '<br>';
foreach($frutas as $fruta){
    echo '<br>';
    echo $fruta;
}