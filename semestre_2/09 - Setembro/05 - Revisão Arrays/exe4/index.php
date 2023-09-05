<?php
//index.php

require_once('Pessoa.php');

$p1 = new Pessoa('João', 20);
$p2 = new Pessoa('Maria', 16);

//Vetor de objetos (tipos complexos)
$pessoas = [$p1, $p2];
array_push($pessoas, new Pessoa('Pedro', 18));

echo '<pre>';
print_r($pessoas);
echo '</pre>';

foreach ($pessoas as $pessoa) {
    echo $pessoa->getNome() . '<br>';
}
