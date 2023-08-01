<?php

include_once('Temporada.php');
include_once('Obra.php');

class Serie extends Obra
{
    private $temporada;

    public function __construct($nome, $personagens, $temporadas)
    {
        $this->nome = $nome;
        $this->personagens = $personagens;
        $this->$temporadas = $temporadas;
    }

    public function addTemporada($temporada){
        $this->temporadas = 
    }
}
