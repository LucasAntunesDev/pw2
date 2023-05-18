<?php
$ginastas[0]["nome"] = "Jade";
$ginastas[0]["nota"] = 12.95;
$ginastas[0]["pais"] = "Brasil";
$ginastas[1]["nome"] = "Shawn";
$ginastas[1]["nota"] = 13.50;
$ginastas[1]["pais"] = "EUA";
$ginastas[2]["nome"] = "Daiane";
$ginastas[2]["nota"] = 14.35;
$ginastas[2]["pais"] = "Brasil";
$ginastas[3]["nome"] = "Nadia";
$ginastas[3]["nota"] = 12.90;
$ginastas[3]["pais"] = "Romênia";

$nomes = [];
$notas = [];
$acima_de_13 = [[]];

foreach ($ginastas as $index) {
    if (array_key_exists('nome', $index)) array_push($nomes, $index['nome']);
    if (array_key_exists('nota', $index)) array_push($notas, $index['nota']);
}

echo "<b>Nomes:</b> <br>";
foreach ($nomes as $nome) {
    echo "- $nome";
    echo "<br>";
}

echo "<br>";
echo "<b>Notas:</b> <br>";
foreach ($notas as $nota) {
    for($i = 0; $i <= 2; $i++){
        if($nota > 13) {
            $acima_de_13[$i] = $nomes[$i];
        }
    }

    echo "- $nota";
    echo "<br>";
}

$maior_nota = sort($acima_de_13);

echo "<br>";
echo "<b>Atletas com nota acima de 13:</b> <br>";
foreach ($acima_de_13 as $nome) {
    echo "- $nome";
    echo "<br>";
}

echo "<br>";
echo "<b>Atletas com a maior nota:</b> <br> $maior_nota[2]";



// print_r($ginastas[0]);
// print_r($nomes);
// echo "</pre>";

print_r($notas);