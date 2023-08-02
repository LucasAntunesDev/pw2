<?php

class Ator{
    private string $nome;
    private int $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(){
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(){
        return $this->nome;
    }
    
    public function setIdade($idade){
        $this->idade = $idade;
    }
}