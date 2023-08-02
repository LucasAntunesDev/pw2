<?php

include_once('Obra.php');
include_once('Midia.php');

class Filme extends Obra
implements Midia{
    private int $duracao;
    private float $nota;

    public function __construct($nome, $personagens, $duracao, $nota){
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

    public function setNota($nota){
        $this->nota = $nota;
    }
    public function obterNota(){
        return $this->nota;
    }
}