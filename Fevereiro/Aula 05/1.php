<?php
$numero = 10;
for ($i = 0; $i < $numero; $i++) {
    $vetor[$i] = null;
}

$pares = 0;
$impares = 0;

foreach ($vetor as $chave => $valor) {
    $num = rand(1, 10);
    if ($num % 2 == 0) {
        $pares++;
    } else {
        $impares++;
    }
    $vetor[$chave] = $num;
}
echo "<pre>";
print_r($vetor);
echo "O número de pares é $pares<br>";
echo "O número de ímpares é $impares";
echo "</pre>";
