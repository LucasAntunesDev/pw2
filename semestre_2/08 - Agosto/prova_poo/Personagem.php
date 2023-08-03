<?php

include_once('Ator.php');

class Personagem{

    private $nome;
    private $ator;
    private $protagonista;

    public function __construct($nome, $ator, $protagonista){
        $this->nome = $nome;
        $this->ator = $ator;
        $this->protagonista = $protagonista;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getAtor(){
        return $this->ator;
    }

    public function setAtor($ator){
        $this->ator = $ator;
    }

    public function isProtagonista(){
        return $this->protagonista;
    }

    public function setProtagonista($protagonista){
        $this->protagonista = $protagonista;
    }

}