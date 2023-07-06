<?php

require_once('Pirulito.php');
require_once('Bombom.php');

echo 'Pirulito - Sabor: ';
$pirulito = new Pirulito('Morango');
echo $pirulito->getSabor();
echo '<br><br>';

echo 'Bombom - Sabor: ';
$bombom = new Bombom('Chocolate preto', 'Chocolate branco');
echo $bombom->getSabor();
echo '<br>';

echo 'Recheio: ';
echo $bombom->getRecheio();
echo '<br>';