<?php

include_once('Serie.php');

class EstatisticasDeSeries
{
    // public static function obterDuracaoDaSerie(Serie $serie)
    // {
    //     //Percorrer o vetor de temporadas 
    //     //Percorrer o vetor de episódios 
    //     //Somar a duração de todos 
    //     $temporadas = $serie->getTemporadas();
    //     $episodios = $temporadas->getEpisodios();

        

    //     return $temporadas;
    //     // return $episodios;
    // }
    public static function obterDuracaoDaSerie(Serie $serie)
    {
      $duracaoTotal = 0;
      foreach ($serie->getTemporadas() as $temporada) {
        foreach($temporada->getEpisodios() as $ep){
            return $ep;
            // $duracaoTotal += $ep;
        }
        
        // aqui você precisa acessar o elemento do array que é um objeto da classe Temporada
        // $duracaoTotal += $temporada->getEpisodios()->getDuracao();
      }
    //   return $duracaoTotal;
    }

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
