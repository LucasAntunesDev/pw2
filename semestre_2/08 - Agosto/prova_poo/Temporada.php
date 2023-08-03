<?php 

include_once('Episodio.php');

class Temporada{
    private int $numero;
    private float $nota;
    private $episodios = array();

    public function __construct($numero, $nota, $episodios){
        $this->numero = $numero;
        $this->nota = $nota;
        array_push($this->episodios, $episodios);
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

    public function addEpisodio(Episodio $episodio){
        // var_dump($this->episodios);
        array_push($this->episodios, $episodio);
        
        // echo '<pre> TESTE';
        // var_dump($this->episodios);
        // print_r($this->episodios);
        // echo '</pre>';

        // echo '<br>';
        // print_r($this->episodios);
    }

}
