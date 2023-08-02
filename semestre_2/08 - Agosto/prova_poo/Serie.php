<?php

include_once('Temporada.php');
include_once('Obra.php');

class Serie extends Obra
{
    private Temporada $temporadas;

    public function __construct($nome, $personagens, $temporadas)
    {
        $this->nome = $nome;
        $this->personagens = $personagens;
        $this->$temporadas = $temporadas;
    }

    public function getTemporadas(){
        return $this->temporadas; 
    }

    public function addTemporada(Temporada $temporada){
        $this->temporadas = $temporada; 
    }

    public function obterNota(){

    }

}
