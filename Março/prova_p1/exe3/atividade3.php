<?php
$array = [50, 60, 2, 989, 82, 21, 320, 31, 15, 44, 8, 66, 77, 98, 12,57, 238, 17, 459, 687];

$maior = $array[0];
$menor = $array[0];
$soma = 0;
$pares = 0;
$impares = 0;

foreach($array as $valor){
    $valor > $maior ? $maior = $valor : '';
    $valor < $menor ? $menor = $valor : '';
    $soma += $valor;
    $valor % 2 == 0 ? $pares++ : $impares++;
}
echo "- O maior número é $maior<br>";
echo "- O menor número é $menor<br>";
echo "- A soma é $soma<br>";
echo "- São $pares números pares<br>";
echo "- São $impares números ímpares<br>";
echo "<pre>";
print_r($array);
echo "</pre>";