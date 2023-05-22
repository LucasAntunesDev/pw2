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

foreach ($ginastas as $index) {
    array_push($nomes, $index['nome']);
    array_push($notas, $index['nota']);
}

$maior_nota = max($notas);

echo "<h1>Ginastas:</h1>";
foreach ($nomes as $nome) echo "<li>$nome</li>";


echo "<h1>Média das notas:</h1>";
$soma = 0;
foreach ($notas as $nota) $soma += $nota;
echo round($soma / sizeof($notas), 2) . '<br/>';

echo "<h1>Atletas com nota acima de 13:</h1>";
foreach ($ginastas as $valor) {
    if ($valor['nota'] > 13) {
        echo '<li>' . $valor['nome'] . '</li>';
    }

    if ($valor['nota'] === $maior_nota) {
        $atleta_maior_nota = $valor['nome'];
    }
};

echo "<h1>Ginasta com a maior nota:</h1>";
echo $atleta_maior_nota;
