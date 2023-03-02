<?php

$numero = 5;

for ($i = 0; $i < $numero; $i++) {
    $vetor[$i] = rand(1, 100);
}

foreach ($vetor as $chave => $valor) {
    $divisores = 0;
    echo "<p>Lendo o número $valor</p>";
    for ($num = $valor; $num >= 1; $num--) {
        $valor % $num == 0 ? $divisores++ : '';
   
        if ($divisores > 2) {
            echo "<p>O num $valor não é primo";
            break;
        }
    }

    $divisores == 2 ? $primo[] = $valor : '';
    // if ($divisores == 2) {
    //     $primo[] = $valor;
    // }
}

echo "<p>Os números primos são:</p>";
foreach ($primo as $chave => $valor) {
    echo "$valor - ";
}
