<?php

include_once('Midia.php');

class Episodio
implements Midia{
    private int $numero;
    private string $nome;
    private int $duracao;
    public function __construct($numero, $nota, $duracao){
        $this->numero = $numero;
        $this->nota = $nota;
        $this->duracao = $duracao;
    }

    public function getNumero(){
        return $this->numero;
    }

    public function setNumero($numero){
        $this->numero = $numero;
    }

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }
    
    public function getDuracao(){
        return $this->duracao;
    }

    public function setDuraca($duracao){
        $this->duracao = $duracao;
    }


}