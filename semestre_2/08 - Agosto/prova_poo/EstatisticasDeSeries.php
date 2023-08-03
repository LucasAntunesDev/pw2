<?php

include_once('Serie.php');

class EstatisticasDeSeries
{

    public static function obterDuracaoDaSerie($serie)
    {
        $episodios = $serie->getTemporadas()->getEpisodios();

        return $episodios;
        $temporadas = array();
        //Percorrer o vetor de temporadas 
        //Percorrer o vetor de episódios 
        //Somar a duração de todos 

        foreach($serie->getTemporadas() as $temporada){
            array_push($temporadas, $temporada);
        }

        
        }

    public static function obterTotalDeEpisodios($serie)
    {
        //Percorrer o vetor de temporadas 
        //Percorrer o vetor de episódios 
        //Somar a duo total
        $temporadas = $serie->getTemporadas();
        // $episodios = $temporadas->getEpisodios();

        return $serie;
    }
}
