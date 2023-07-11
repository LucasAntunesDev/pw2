<?php

require_once('Cambio.php');

$cambio = new Cambio();

$realDolar = $cambio->realParaDolar(1);
$dolarReal = $cambio->dolarParaReal(1);
$realBitcoin = $cambio->realParaBitcoin(1);
$bitcoinReal = $cambio->bitcoinParaReal(1);

echo "Real para Dólar: $realDolar<br>";
echo "Dólar para Real: $dolarReal<br>";
echo "Real para Bitcoin: $realBitcoin<br>";
echo "Bitcoin para Real: $bitcoinReal<br>";