<?php

include_once('Obra.php');
include_once('Midia.php');

class Filme extends Obra
implements Midia{
    private int $duracao;
    private int $nota;

    public function __construct($nome, $personagens, $duracao, $nota){
        parent::__construct($nome,$personagens);
        $this->duracao = $duracao;
        $this->nota = $nota;
    }

    public function getDuracao(){
        
    }

    public function setDuracao(){

    }

    public function setNota(){


    }
    public function obterNota(){
        
    }
}