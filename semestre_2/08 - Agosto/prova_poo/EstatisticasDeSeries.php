<?php

include_once('Serie.php');

class EstatisticasDeSeries {

    public static function obterDuracaoDaSerie($serie) {
        $duracaoTotal = 0;

        foreach ($serie->getTemporadas() as $temporada) {
            foreach ($temporada->getEpisodios() as $episodio) {
                $duracaoTotal += $episodio->getDuracao();
            }
        }
        return $duracaoTotal;
    }

    public static function obterTotalDeEpisodios($serie) {
        $total = 0;
        foreach ($serie->getTemporadas() as $temporada) {
            foreach ($temporada->getEpisodios() as $episodio) {
                $total++;
            }
        }
        return $total;
    }
}
