<?php
//atividade5.php
$array = [36, 6, 7, 9, 87, 21, 32, 31, 33, 44, 55, 66, 77, 98, 12, 123, 229, 17, 75, 22];

sort($array);

$maior = '';
$menor = $array[1];
$soma = 0;
$media = 0;

foreach($array as $valor){
    $valor < $menor ? $menor = $valor : '';
    $valor > $maior ? $maior = $valor : '';
    $soma += $valor;
}

$media = round($soma/count($array), 2);

echo '<pre>';
echo "<p>O maior valor é $maior</p>";
echo "<p>O menor valor é $menor</p>";
echo "<p>A média é $media</p>";
echo '</pre>';