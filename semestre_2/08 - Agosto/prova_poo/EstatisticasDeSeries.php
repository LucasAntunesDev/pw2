<?php

include_once('Serie.php');
include_once('Temporada.php');

class EstatisticasDeSeries
{

    public static function obterDuracaoDaSerie(Serie $serie)
    {
        $episodios = array();
        //Percorrer o vetor de temporadas 
        //Percorrer o vetor de episódios 
        //Somar a duração de todos 
        // return $serie->getTemporadas()->getEpisodios();
        array_push($episodios, $serie->getTemporadas()->getEpisodios());
        // $total = count($episodios);
        foreach($episodios as $p){
            foreach($p as $e){
                
            }
            return $p;
        }
        // return $episodios;
        // foreach($serie->getTemporadas() as $temporada){
            // $episodios = count($temporada->getEpisodios());
            // var_dump($temporada->getEpisodios());
            // return $temporada;
        }

        

        // return $temporadas;
        // return $episodios;
    // public static function obterDuracaoDaSerie(Serie $serie)
    // {
    //   $duracaoTotal = 0;
    //   foreach ($serie->getTemporadas() as $temporada) {
    //     $duracaoTotal += $temporada->getEpisodios()->count();
    //   }
    //   return $duracaoTotal;
    // }

    public static function obterTotalDeEpisodios(Serie $serie)
    {
        //Percorrer o vetor de temporadas 
        //Percorrer o vetor de episódios 
        //Somar a duo total
        $temporadas = $serie->getTemporadas();
        // $episodios = $temporadas->getEpisodios();

        return $serie;
    }
}
