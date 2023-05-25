<?php

function adicao ($x, $y) {return $x + $y;}

function subtracao ($x, $y) {return $x - $y;}

function multiplicacao ($x, $y) {return $x * $y;}

function divisao ($x, $y) {return $x / $y;}

echo "<h1>Operações</h1>";
echo "<b>5 + 2</b> = ". adicao(5, 2)."<br>";
echo "<b>10 - 8</b> = ". subtracao(10, 8)."<br>";
echo "<b>7 * 4</b> = ". multiplicacao(7, 4)."<br>";
echo "<b>6 / 3</b> = ". divisao(6, 3);