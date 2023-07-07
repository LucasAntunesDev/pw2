<?php

include_once('Pessoa.php');

$pessoa = new Pessoa('Fulano', 45.67);

echo "Nome: ";
echo $pessoa->getNome();
echo '<br>';

echo "Peso inicial: ";
echo $pessoa->getPeso();

echo '<br>';
echo "Emagreceu 10.5 kg: ";
$pessoa->emagrecer(10.5);
echo $pessoa->getPeso();
echo '<br>';

echo "Engordou 2.3 kg: ";
$pessoa->engordar(2.3);
echo $pessoa->getPeso();


