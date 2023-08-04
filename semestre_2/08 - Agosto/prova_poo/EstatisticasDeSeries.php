<?php

include_once('Serie.php');

class EstatisticasDeSeries
{

    public static function obterDuracaoDaSerie(Serie $serie)
    {
        $duracaoTotal = 0;
        
        foreach($serie->getTemporadas() as $temporada){
            foreach($temporada->getEpisodios() as $episodio){
                $duracaoTotal += $episodio->getDuracao();
            }
        }
        return $duracaoTotal . ' minutos';
        
        }

    public static function obterTotalDeEpisodios(Serie $serie)
    {
        $total = 0;
        foreach($serie->getTemporadas() as $temporada){
            foreach($temporada->getEpisodios() as $episodio){
                $total += 1;
            }
        }
        return $total . ' episódios';
        
    }
}
