<?php

include_once('Serie.php');

class EstatisticasDeSeries
{

    public static function obterDuracaoDaSerie($serie)
    {
        $duracaoTotal = 0;

        foreach($serie->getTemporadas()->getEpisodios() as $episodio){
            $duracaoTotal += $episodio->getDuracao();
        }
        return $duracaoTotal;

        
        }

    public static function obterTotalDeEpisodios($serie)
    {
        $total = 0;
        $total = count($serie->getTemporadas()->getEpisodios());

        // foreach($serie->getTemporadas()->getEpisodios() as $t){
        //     $total += 1;
        // }
        return $total;
    }
}
