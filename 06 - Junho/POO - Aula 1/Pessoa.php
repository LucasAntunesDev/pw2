<?php

class Pessoa
{
    public $nome;
    public $idade;

    public function fazerAniversario()
    {
        $this->idade++;
        //this se comporta como uma variável
    }
}
