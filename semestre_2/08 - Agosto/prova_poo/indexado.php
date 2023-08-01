<?php

// include_once('Personagem.php');
include_once('Obra.php');

// $personagens = new Personagem('aa','aa'','aa');
$obra = new Obra('Obra', 'a');

var_dump($obra->getPersonagens());
$obra->addPersonagem('a', 'ator', true);
var_dump($obra->getPersonagens());
