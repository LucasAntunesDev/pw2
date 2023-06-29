<?php

require_once('Funcionario.php');
require_once('CalculadoraImpostos.php');

$funcionario = new Funcionario('Lucas', 7000);

echo "Nome: ";
echo $funcionario->getNome();
echo "<br>";
echo "Salario: ";
echo $funcionario->getSalario();

echo "<br></br>";

$calculadora = new CalculadoraImpostos();
echo "IFFR: ";
echo $calculadora->calculaIRRF($funcionario);
echo "<br>INSS: ";
echo $calculadora->calculaINSS($funcionario);