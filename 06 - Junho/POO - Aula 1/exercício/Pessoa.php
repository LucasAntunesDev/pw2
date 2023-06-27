<?php

class Pessoa {
    private $nome;
    private $peso;

    public function __construct($nome, $peso = 0)
    {
        $this->nome = $nome;
        $this->peso = $peso;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }
    public function getNome()
    {
        return $this->nome;
    }

    public function setPeso($peso)
    {
        $this->peso = $peso;
    }
    public function getPeso()
    {
        return $this->peso;
    }

    public function emagrecer(){
        $this->peso--;
    }

    public function engordar(){
        $this->peso++;
    }
}