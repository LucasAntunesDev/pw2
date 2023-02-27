<?php

$numero = 10;
for ($i = 0; $i < $numero; $i++) {
    $vetor[$i] = null;
}

foreach ($vetor as $chave => $valor) {
    $num = rand(1, 10);

    $vetor[$chave] = $num;
    echo $vetor[$i];
}
echo "<pre>";

echo "</pre>";
