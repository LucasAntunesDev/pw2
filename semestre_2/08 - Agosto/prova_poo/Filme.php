<?php

include_once('Obra.php');
include_once('Midia.php');

class Filme extends Obra
implements Midia{
    private $duracao;
    private float $nota;

    public function __construct($nome, $personagens, $duracao, 
    float $nota){
        parent::__construct($nome,$personagens);
        $this->duracao = $duracao;
        $this->nota = $nota;
    }

    public function getDuracao(){
        return $this->duracao;
    }

    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }

    public function setNota(float $nota){
        $this->nota = $nota;
    }
    public function obterNota(){
        return $this->nota;
    }
}