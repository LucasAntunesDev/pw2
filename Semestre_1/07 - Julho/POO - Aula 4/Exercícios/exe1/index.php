<?php

require_once('Bicicleta.php');
require_once('Automovel.php');
require_once('Oficina.php');

$bike = new Bicicleta();
$carro = new Automovel();

$manutencao = new Oficina();

echo 'Veículo = bicicleta: <br>';
echo $manutencao->manutencao($bike);
echo '<br></br>';
echo 'Veículo = automóvel: <br>';
echo $manutencao->manutencao($carro);
