<?php

class Pessoa
{
    private $nome;
    private $idade;

    //setter
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    //getter
    public function getNome()
    {
        return $this->nome;
    }
    
    public function getIdade()
    {
        return $this->idade;
    }

    public function __construct($nome, $idade = 0)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function fazerAniversario()
    {
        $this->idade++;
        //this se comporta como uma variável (parâmetro)
    }
}
