<?php
//Filme.php

class Filme {
    private $nome;
    private $duracao;
    private $personagens;

    public function __construct($nome, $duracao, $personagens) {
        $this->nome = $nome;
        $this->duracao =  $duracao;
        $this->personagens =  $personagens;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDuracao() {
        return $this->duracao;
    }
    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    public function getPersonagens() {
        return $this->personagens;
    }

    public function addPersonagem($personagem) {
        array_push($this->personagens, $personagem);
    }

    function teste() {
        return $this->getPersonagens()->isProtagonista();
    }
    public function obterProtagonistas() {
        $protagonistas = [];

        $protagonistas = array_filter($this->getPersonagens(), "teste");
        // $teste = $this->getPersonagens()->isProtagonista();
       /* foreach ($this->getPersonagens() as $personagem) {

            if ($personagem->isProtagonista()) 
            array_push($protagonistas, $personagem);
        }*/
        return $protagonistas;
        // return $teste;
    }
}
