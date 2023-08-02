<?php

include_once('Midia.php');

class Episodio
implements Midia{
    private int $numero;
    private string $nome;
    private int $duracao;
    
    //Professor se passou
    // public function __construct(int $numero, float $nota, Episodio $episodios){
    public function __construct(int $numero, string $nome, int $duracao){
        $this->numero = $numero;
        $this->nome = $nome;
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

    public function setDuracao($duracao){
        $this->duracao = $duracao;
    }


}