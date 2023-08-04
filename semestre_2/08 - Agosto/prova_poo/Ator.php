<?php

class Ator{
    private string $nome;
    private int $idade;

    public function __construct(string $nome, int $idade)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome(): string{
        return $this->nome;
    }
    
    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getIdade(): int{
        return $this->idade;
    }
    
    public function setIdade($idade){
        $this->idade = $idade;
    }
}