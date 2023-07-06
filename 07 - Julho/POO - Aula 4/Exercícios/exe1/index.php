<?php

require_once('Bicicleta.php');
require_once('Automovel.php');
require_once('Oficina.php');

$bike = new Bicicleta();
$carro = new Automovel();
// echo $bike->ajustar();
// echo '<br>';
// echo $bike->limpar();

// echo '<br></br>';

// $carro = new Automovel();
// echo $carro->ajustar();
// echo '<br>';
// echo $carro->limpar();
// echo '<br>';
// echo $carro->trocarOleo();

$manutencao = new Oficina();

echo '<br>';
echo $manutencao->manutencao($bike);
echo '<br>';
echo $manutencao->manutencao($carro);
// var_dump($bike instanceof Bicicleta);