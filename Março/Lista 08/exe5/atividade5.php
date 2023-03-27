<?php
for ($i = 0; $i < 15; $i++) {
    $array[$i] = rand(1, 100);
}

echo "<pre>";
print_r($array);
echo "</pre>";
$i = 0;

foreach ($array as $valor) {
    echo $valor % 2 == 0 ? "[$i]  O número $valor é par<br>" : "[$i] O número $valor é ímpar<br>";
    $i++;
}
