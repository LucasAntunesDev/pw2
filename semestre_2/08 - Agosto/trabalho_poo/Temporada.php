<?php

include_once('Episodio.php');

class Temporada {
    private $numero;
    private $nota;
    private $episodios;

    public function __construct($numero, $nota, $episodios) {
        $this->numero = $numero;
        $this->nota = $nota;
        $this->episodios = $episodios;
    }

    public function getNumero() {
        return $this->numero;
    }

    public function setNumero($numero) {
        $this->numero = $numero;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }

    public function getEpisodios() {
        return $this->episodios;
    }

    public function addEpisodio($episodio) {
        array_push($this->episodios, $episodio);
    }
}
