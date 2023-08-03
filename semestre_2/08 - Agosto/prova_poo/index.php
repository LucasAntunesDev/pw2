<?php

include_once('Serie.php');
include_once('Episodio.php');
include_once('Filme.php');
include_once('EstatisticasDeSeries.php');

//Criando filme e personagens
$murphy = new Ator('Cillian Murphy', 47);
$rdj = new Ator('Robert Downey Jr.', 58);
$oppenheimer = new Personagem('Oppenheimer', $murphy, true);
$obra = new Filme('Oppenheimer', [$oppenheimer], 180, 1000);

$strauss = new Personagem('Levi Strauss', $rdj, false);
$obra->addPersonagem($strauss);

//Testando filme com mais 1 personagem adicionado
echo '<br><strong>Personagens: </strong></br>';
echo '<pre>';
foreach ($array = $obra->getPersonagens() as $personagem) {
    // print_r($personagem);
    echo '- ';
    echo $personagem->getNome();
    echo '<br>';
}

//Testando filme com protagonistas
// echo '<br>Protagonistas:</br>';
// print_r($obra->obterProtagonistas());

//Criação de série
$ator1 = new Ator('Ator 1', 25);
$personagem1= new Personagem('Personagem 1', $ator1 ,1);

$episodio1 = new Episodio(3, 'ep1', 60);
$episodio2 = new Episodio(1, 'ep2', 50);
$temporada1 = new Temporada(1, 9.5,[$episodio1]);
// $temporada1->addEpisodio([$episodio2]);
$temporada1->addEpisodio($episodio2);
$serie = new Serie('Série 1', [$personagem1], [$temporada1]);

$temporada2 = new Temporada(2, 5.5,[$episodio1]);
$serie->addTemporada($temporada2);



echo '<pre>';
echo '<br>
<strong>Número de Temporadas:</strong>';
// var_dump($serie->getTemporadas());
echo count($serie->getTemporadas());
// print_r($serie->getTemporadas());
echo ' temporadas</pre>';


echo '<br><strong>Duração:</strong>';
echo EstatisticasDeSeries::obterDuracaoDaSerie($serie);

echo '<br><strong>Total de Episódios:</strong>';
echo EstatisticasDeSeries::obterTotalDeEpisodios($serie);