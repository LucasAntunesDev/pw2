<?php 

require_once('SmartTV.php');

$tv = new SmartTV('Samsung', 70, 'Tizen');

$tv->ligar();

echo 'Marca: ';
echo $tv->getMarca();

echo '<br>Polegadas: ';
echo $tv->getPolegadas();

echo '<br>Sistema Operacional: ';
echo $tv->getSistemaOpercaional();

echo '<br>Volume: ';
echo $tv->getVolume();

echo '<br>Aumentou o volume em 15: ';
echo $tv->aumentarVolume(15);
echo $tv->getVolume();

echo '<br> Diminuiu o volume me 8: ';
echo $tv->diminuirVolume(8);
echo $tv->getVolume();

echo '<br>Canal: ';
echo $tv->getCanal();

echo '<br>Trocou de canal: ';
echo $tv->trocarCanal(5);
echo $tv->getCanal();
