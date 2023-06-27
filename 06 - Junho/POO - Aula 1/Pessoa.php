<?php

class Pessoa
{
    private $nome;
    private $idade;
    // private $cpf;

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    
    public function getIdade()
    {
        return $this->idade;
    }

    // public function cpf()
    // {
        // return $this->cpf;
    // }

    // public function setCpf($cpf)
    // {
        // $this->cpf = $cpf;
    // }

    public function __construct($nome, $idade = 0)
    {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function fazerAniversario()
    {
        $this->idade++;
        //this se comporta como uma variável
    }
}
