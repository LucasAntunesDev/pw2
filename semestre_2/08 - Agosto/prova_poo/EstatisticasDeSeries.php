<?php

include_once('Serie.php');

class EstatisticasDeSeries
{

    public static function obterDuracaoDaSerie($serie)
    {
        // $duracaoTotal = 0;
        // return $serie->getTemporadas();
        foreach($serie->getTemporadas() as $temporada){
            print_r($temporada);
            // foreach($serie->getTemporadas()->getEpisodios() as $episodio){
            // $duracaoTotal += $episodio->getDuracao();
            // return $temporada;
        }
        // }
        // return $temporada;
        // return $duracaoTotal;

        
        }

    public static function obterTotalDeEpisodios($serie)
    {
        $total = 0;
        $total = count($serie->getTemporadas()->getEpisodios());
        return $total;
    }
}
