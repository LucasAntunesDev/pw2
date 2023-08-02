<?php

// include_once('Personagem.php');

include_once('Filme.php');

$murphy = new Ator('Cillian Murphy', 47);
$rdj = new Ator('Robert Downey Jr.', 58);
$oppenheimer = new Personagem('Oppenheimer', $murphy, true);
$obra = new Filme('Oppenheimer', $oppenheimer, 180, 10.00);

echo '<pre>';
foreach ($array = $obra->getPersonagens() as $personagem) {
    print_r($personagem);
    echo '<br>';
}
echo '</pre>';

$strauss = new Personagem('Levi Strauss', $rdj, false);
$obra->addPersonagem($strauss);

echo '<br></br>';
echo '<pre>';
foreach ($array = $obra->getPersonagens() as $personagem) {
    print_r($personagem);
    echo '<br>';
}

print_r($obra->obterProtagonistas());