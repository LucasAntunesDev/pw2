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
        //Criando filme e personagens
        $murphy = new Ator('Cillian Murphy', 47);
        $rdj = new Ator('Robert Downey Jr.', 58);
        $oppenheimer = new Personagem('Oppenheimer', $murphy, true);
        $filme = new Filme('Oppenheimer', [$oppenheimer], 180, 10.00);

        $strauss = new Personagem('Levi Strauss', $rdj, false);
        $filme->addPersonagem($strauss);

        echo '<h2>Filme: ' . $filme->getNome() . '</h2>';

        //Testando filme com mais 1 personagem adicionado
        echo '<h3>Personagens: </h3>';
        // echo '<pre>';
        foreach ($filme->getPersonagens() as $personagem) {
            // print_r($personagem);
            echo '- ';
            echo $personagem->getNome();
            echo '<br>';
        }

        //Testando filme com protagonistas
        echo '<h3>Protagonistas:</h3>';
        foreach ($filme->obterProtagonistas() as $protagonista) {
            echo '- ' . $protagonista->getNome();
        }

        echo '<h3>Duração do filme</h3>';
        echo $filme->getDuracao() . ' minutos';

        echo '<h3>Nota:</h3>';
        echo $filme->obterNota();

        //Criação de série
        $ator1 = new Ator('Ator 1', 25);
        $personagem1 = new Personagem('Personagem 1', $ator1, 1);

        $episodio1 = new Episodio(3, 'ep1', 60);
        $episodio2 = new Episodio(1, 'ep2', 50);
        $temporada1 = new Temporada(1, 9.5, [$episodio1]);

        $temporada1->addEpisodio($episodio2);
        $serie = new Serie('The Last of Us', [$personagem1], [$temporada1]);

        $temporada2 = new Temporada(2, 5.5, [$episodio1]);
        $serie->addTemporada($temporada2);

        echo '<h2>Série: </h2>';
        echo $serie->getNome();

        echo '<br>
        <h3>Número de Temporadas:</h3>';
        echo count($serie->getTemporadas());
        echo ' temporadas';


        echo '<br><h3>Duração: </h3>';
        echo EstatisticasDeSeries::obterDuracaoDaSerie($serie);

        echo '<br><h3>Total de Episódios: </h3>';
        echo EstatisticasDeSeries::obterTotalDeEpisodios($serie);

        echo '<h3>Nota</h3>';
        // echo $serie->obterNota();
        echo $serie->obterNota();
        ?>
    </main>
</body>

<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
        background: #151515;
        color: whitesmoke;
    }

    h2{
        text-align: center;
        font-size: 28px;
    }

    main {
        display: flex;
        flex-direction: column;
        /* align-items: center; */
        /* justify-content: center; */
        width: 50vw;
        margin-inline: auto;
    }
</style>

</html>