<?php

class Pessoa
{
    public $nome;
    public $idade;

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
