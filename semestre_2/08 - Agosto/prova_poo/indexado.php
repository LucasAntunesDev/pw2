<?php

// include_once('Personagem.php');

include_once('Serie.php');
include_once('Episodio.php');
include_once('Filme.php');
include_once('EstatisticasDeSeries.php');

// //Criando filme e personagens
// $murphy = new Ator('Cillian Murphy', 47);
// $rdj = new Ator('Robert Downey Jr.', 58);
// $oppenheimer = new Personagem('Oppenheimer', $murphy, true);
// $obra = new Filme('Oppenheimer', $oppenheimer, 180, 10.00);

// //Testando filme com 1 personagem
// echo '<pre>';
// foreach ($array = $obra->getPersonagens() as $personagem) {
//     print_r($personagem);
//     echo '<br>';
// }
// echo '</pre>';

// $strauss = new Personagem('Levi Strauss', $rdj, false);
// $obra->addPersonagem($strauss);

// //Testando filme com mais 1 personagem adicionado
// echo '<br>Personagens</br>';
// echo '<pre>';
// foreach ($array = $obra->getPersonagens() as $personagem) {
//     print_r($personagem);
//     echo '<br>';
// }

//Testando filme com protagonistas
// echo '<br>Protagonistas:</br>';
// print_r($obra->obterProtagonistas());

//Criação de série
$rgb = new Ator('Bolaños', 40);
$chaves = new Personagem('Chaves', $rgb, 1);
$temp = new Temporada(1, 9.5,1);
$serie = new Serie('Chaves', $chaves, 5);
$serie->addTemporada($temp);
$ep1 = new Episodio(3, 'bla', 60);
$temp->addEpisodio($ep1);
$ep2 = new Episodio(1, 'bf', 50);
$temp->addEpisodio($ep2);
// $ep1->setDuracao(60);



echo '<pre>';
$duracaoSerie = EstatisticasDeSeries::obterDuracaoDaSerie($serie);
echo '<br></br>Temporadas:';
// print_r( $serie->getTemporadas());
// print_r($serie->getTemporadas()->getEpisodios());
// print_r($temp->getEpisodios());
echo '</pre>';


echo "<br></br><pre>";
echo '<br></br>Duração:';
// print_r(($ep1->getDuracao()) + ($ep2->getDuracao()));
print_r(EstatisticasDeSeries::obterDuracaoDaSerie($serie));
// print_r( $serie->getTemporadas());
// echo $duracaoSerie;
echo '</pre>';