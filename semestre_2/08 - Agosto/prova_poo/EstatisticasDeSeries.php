<?php

include_once('Serie.php');

class EstatisticasDeSeries
{

    public static function obterDuracaoDaSerie($serie)
    {
        $duracaoTotal = 0;
        $temporadas = [];
        // return $serie->getTemporadas();
        
        // echo count($serie->getTemporadas()) . '<br>'; #N de temporadas
        foreach($serie->getTemporadas() as $temporada){
            // print_r($temporada->getEpisodios()->getDuracao);
            print_r($temporada->getEpisodios());
            #Pegando duração do episódio
            foreach($temporada->getEpisodios() as $episodio){
                // print_r($episodio->getDuracao());
                $duracaoTotal += $episodio->getDuracao();
                print_r($duracaoTotal);
            }
            // array_push($temporada, $temporadas);
        }
        // return $duracaoTotal;

        
        }

    // public static function obterTotalDeEpisodios($serie)
    // {
    //     $total = 0;
    //     $total = count($serie->getTemporadas()->getEpisodios());
    //     return $total;
    // }
}
