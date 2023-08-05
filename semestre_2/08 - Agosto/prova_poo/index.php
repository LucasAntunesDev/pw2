<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trabalho 2 - POO</title>
</head>

<body>
    <main>

        <?php
        include_once('Serie.php');
        include_once('Episodio.php');
        include_once('Filme.php');
        include_once('EstatisticasDeSeries.php');

        $atorFilme1 = new Ator('Cillian Murphy', 47);
        $atorFilme2 = new Ator('Robert Downey Jr.', 58);

        $oppenheimer = new Personagem('Oppenheimer', $atorFilme1, true);

        $filme = new Filme('Oppenheimer', [$oppenheimer], 180, 9.5);

        $strauss = new Personagem('Levi Strauss', $atorFilme2, false);
        $filme->addPersonagem($strauss);

        echo '<h2>Filme: ' . $filme->getNome() . '</h2>';

        echo '<h3>Personagens: </h3>';
        foreach ($filme->getPersonagens() as $personagem) {
            echo '<p> - ';
            echo $personagem->getNome();
            if($personagem->isProtagonista()) echo ' (protagonista)';
            echo '</p>';
        }

        echo '<h3>Duração do filme:</h3>';
        echo $filme->getDuracao() . ' minutos';

        echo '<h3>Nota:</h3>';
        echo $filme->obterNota();

        echo '<hr>';

        $atorSerie = new Ator('Bella Ramsey', 19);
        $personagem1 = new Personagem('Ellie', $atorSerie, true);

        $episodio1 = new Episodio(1, 'Episódio 1', 80);
        $episodio2 = new Episodio(2, 'Episódio 2', 52);
        $episodio3 = new Episodio(3, 'Episódio 3', 75);
        $episodio4 = new Episodio(4, 'Episódio 4', 45);
        $episodio5 = new Episodio(5, 'Episódio 5', 59);
        $episodio6 = new Episodio(6, 'Episódio 6', 58);
        $episodio7 = new Episodio(7, 'Episódio 7', 55);
        $episodio8 = new Episodio(8, 'Episódio 8', 50);
        $episodio9 = new Episodio(9, 'Episódio 9', 43);
        $temporada1 = new Temporada(1, 9.2, [$episodio1]);

        $temporada1->addEpisodio($episodio2);
        $temporada1->addEpisodio($episodio3);
        $temporada1->addEpisodio($episodio4);
        $temporada1->addEpisodio($episodio5);
        $temporada1->addEpisodio($episodio6);
        $temporada1->addEpisodio($episodio7);
        $temporada1->addEpisodio($episodio8);
        $temporada1->addEpisodio($episodio9);

        $serie = new Serie('The Last of Us', [$personagem1], [$temporada1]);

        echo '<h2>Série: ' . $serie->getNome() . '</h2>';

        echo '<h3>Personagens: </h3>';
        foreach ($serie->getPersonagens() as $personagem) {
            echo '<p> - ';
            echo $personagem->getNome();
            if($personagem->isProtagonista()) echo ' (protagonista)';
            echo '</p>';
        }

        echo '
        <h3>Número de Temporadas:</h3>';
        echo count($serie->getTemporadas());
        echo ' temporadas';


        echo '<h3>Duração: </h3>';
        echo EstatisticasDeSeries::obterDuracaoDaSerie($serie) . ' minutos';

        echo '<h3>Total de Episódios: </h3>';
        echo EstatisticasDeSeries::obterTotalDeEpisodios($serie) . ' episódios';

        echo '<h3>Nota:</h3>';
        echo $serie->obterNota();
        ?>
    </main>

    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #151515;
            color: whitesmoke;
        }

        h2 {
            text-align: center;
            font-size: 28px;
        }

        main {
            display: flex;
            flex-direction: column;
            width: 50vw;
            margin-inline: auto;
        }

        hr {
            width: -webkit-fill-available;
            border: solid 1px gray;
            margin-top: 2.25rem;
        }
    </style>

</body>

</html>