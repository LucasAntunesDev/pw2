<?php

// include_once('Personagem.php');
include_once('Obra.php');

$murphy = new Ator('Cillian Murphy', 47);
$rdj = new Ator('Robert Downey Jr.', 58);
$oppenheimer = new Personagem('Oppenheimer', $murphy, true);
$obra = new Obra('Oppenheimer', $oppenheimer);

$array = $obra->getPersonagens();

echo '<pre>';
var_dump($array);
echo '</pre>';

// $obra->addPersonagem('a');

// var_dump($obra->getPersonagens());

// echo '<br></br>';
// $strauss = new Personagem('Levi Strauss', $rdj, false);
// $obra->addPersonagem($strauss);

// echo '<pre>';
// var_dump($array);
// echo '</pre>';

echo '<br></br>';
foreach($array as $p){
    echo $p .'<br>';
}
// echo '<br></br>';
// echo '<pre>';
// var_dump($obra->obterProtagonistas());
// echo '</pre>';