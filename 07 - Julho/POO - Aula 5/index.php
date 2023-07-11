<?php

include_once('SmartTV.php');

$tv = new TV('Samsung', 40);
echo 'Marca: ';
echo $tv->getMarca();
echo '<br>';
echo 'Polegadas: ';
echo $tv->getPolegadas();
echo '<br>';
echo 'Está ligada?: ';
var_dump($tv->isLigada());
echo '<br>';
echo 'Canal: ';
echo $tv->getCanal();
echo '<br>';
echo 'Volume: ';
echo $tv->getVolume();
echo '<br>';
echo 'Ligar: ';
echo $tv->ligar();
var_dump($tv->isLigada());
echo '<br>';