<?php 

class Temporada{
    private int $numero;
    private float $nota;
    private int Episodio $episodios;

    public function __construct($numero, $nota, $episodio){
        $this->numero = $numero;
        $this->nota = $nota;
        $this->episodio = $episodio;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }
    
    public function getNota(){
        return $this->nota;
    }

    public function setNota($nota){
        $this->nota = $nota;
    }
    
    public function getEpisodios(){
        return $this->episodios;
    }

    public function addEpisodio($episodio){
        $this->episodio = $episodio;
    }

}
