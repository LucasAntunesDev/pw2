<?php

include_once('Serie.php');

class EstatisticasDeSeries
{

    public static function obterDuracaoDaSerie($serie)
    {
        $episodios = $serie->getTemporadas()->getEpisodios();
        $duracaoTotal = 0;

        // return $episodios;
        // return $episodios;
        // $temporadas = array();
        //Percorrer o vetor de temporadas 
        //Percorrer o vetor de episódios 
        //Somar a duração de todos 

        foreach($serie->getTemporadas()->getEpisodios() as $episodio){
            $duracaoTotal += $episodio->getDuracao();
            // return $episodio->getDuracao();
            // array_push($temporadas, $temporada);
        }
        return $duracaoTotal;

        
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
