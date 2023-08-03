<?php

include_once('Serie.php');
include_once('Episodio.php');
include_once('Filme.php');
include_once('EstatisticasDeSeries.php');

//Criando filme e personagens
$murphy = new Ator('Cillian Murphy', 47);
$rdj = new Ator('Robert Downey Jr.', 58);
$oppenheimer = new Personagem('Oppenheimer', $murphy, true);
$obra = new Filme('Oppenheimer', [$oppenheimer], 180, 10.00);

//Testando filme com 1 personagem
echo '<pre>';
foreach ($array = $obra->getPersonagens() as $personagem) {
    print_r($personagem);
    echo '<br>';
}
echo '</pre>';

$strauss = new Personagem('Levi Strauss', $rdj, false);
$obra->addPersonagem($strauss);

//Testando filme com mais 1 personagem adicionado
echo '<br>Personagens</br>';
echo '<pre>';
foreach ($array = $obra->getPersonagens() as $personagem) {
    print_r($personagem);
    echo '<br>';
}

//Testando filme com protagonistas
// echo '<br>Protagonistas:</br>';
// print_r($obra->obterProtagonistas());

//Criação de série
$ator1 = new Ator('Ator 1', 25);
$personagem1= new Personagem('Personagem 1', $ator1 ,1);

$episodio1 = new Episodio(3, 'ep1', 60);
$temporada1 = new Temporada(1, 9.5,$episodio1);
$serie = new Serie('Série 1', [$personagem1], [$temporada1]);

// $episodio2 = new Episodio(1, 'ep2', 50);
// $episodio1->setDuracao(60);
// $temporada2 = new Temporada(2, 5.5,[$episodio1]);
// $serie->addTemporada($temporada2);



echo '<pre>';
echo '<br></br>Temporadas:';
// var_dump($serie->getTemporadas()->getEpisodios());
// print_r($serie->getTemporadas()->getEpisodios());
// print_r($temporada1->getEpisodios());
echo '</pre>';


echo "<br></br><pre>";
echo '<br></br>Duração:';
// print_r(($episodio1->getDuracao()) + ($episodio2->getDuracao()));
// $episodioisodios = $serie->getTemporadas();
// var_dump($episodioisodios);
// EstatisticasDeSeries::obterDuracaoDaSerie($serie);
// print_r(EstatisticasDeSeries::obterDuracaoDaSerie($serie));
// var_dump(EstatisticasDeSeries::obterTotalDeEpisodios($serie));


// echo '<br> <strong>Nota: </strong>';
// $serie->obterNota();
// echo '</pre>';