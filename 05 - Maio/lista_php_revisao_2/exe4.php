<?php
$funcionarios[0]["nome"] = "João";
$funcionarios[0]["salario"] = 2000;
$funcionarios[1]["nome"] = "Maria";
$funcionarios[1]["salario"] = 2500;
$funcionarios[2]["nome"] = "Pedro";
$funcionarios[2]["salario"] = 1800;

$salarios = [];
$salarios_maiores_iguais_2000 = [];

#Salário de Maria
foreach ($funcionarios as $valor) {
    array_push($salarios, $valor['salario']);
    if($valor['salario'] >= 2000) {
        array_push($salarios_maiores_iguais_2000, $valor['nome']);
    }

    if (array_key_exists('nome', $valor) && $valor['nome'] == 'Maria') {
        echo "- O salário de Maria é <b>" . $valor['salario'] . " </b>";
    }
};

#Tabela
echo "<table border='1'>";
echo "<tr>";
echo "<th>Nome</th>";
echo "<th>Salário</th>";
echo "</tr>";

foreach ($funcionarios as $valor) {
    echo "<tr>";
    foreach ($valor as $item) echo "<td>$item</td>";
    echo "</tr>";
}
echo "</table>
<br>";

#Media dos salários
$soma = 0;
foreach ($salarios as $salario) {
    $soma += $salario;
}
echo "<h1> A média dos salários é: <b></h1>".
round(($soma/sizeof($salarios)),2).
"</b><br>";

#Soma dos salários
echo "<h1> A soma dos salários é:</h1> <b>$soma</b>";


echo "<h1> Funcionários com salários maiores ou iguais a R$2000,00:</h1>"; 
foreach ($salarios_maiores_iguais_2000 as $nome) {
    echo "<li>$nome</li>";
}