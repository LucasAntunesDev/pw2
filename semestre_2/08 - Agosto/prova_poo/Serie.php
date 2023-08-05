<?php

include_once('Temporada.php');
include_once('Obra.php');

class Serie extends Obra {
    private $temporadas;

    public function __construct($nome, $personagens, $temporadas) {
        $this->nome = $nome;
        $this->personagens = $personagens;
        $this->temporadas = $temporadas;
    }

    public function getTemporadas() {
        return $this->temporadas;
    }

    public function addTemporada($temporada) {
        array_push($this->temporadas, $temporada);
    }

    public function obterNota() {

        $soma = 0;

        foreach ($this->getTemporadas() as $temporada) {
            $soma += $temporada->getNota();
        }

        return ($soma / count($this->getTemporadas()));
    }
}
