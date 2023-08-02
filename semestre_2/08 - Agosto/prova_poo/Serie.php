<?php

include_once('Temporada.php');
include_once('Obra.php');

class Serie extends Obra
{
    private $temporadas = array();

    public function __construct($nome, $personagens, $temporadas)
    {
        $this->nome = $nome;
        $this->personagens = $personagens;
        array_push($this->temporadas);
    }

    public function getTemporadas(){
        return $this->temporadas; 
    }

    public function addTemporada($temporada){
        $this->temporadas = $temporada; 
    }

    public function obterNota(){

    }

}
