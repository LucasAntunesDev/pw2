<?php

class Pessoa
{
    private string $nome;
    private float $peso;
    
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
    public function getPeso()
    {
        return $this->peso;
    }
    public function emagrecer($quilos)
    {
        $this->peso = $this->peso-$quilos;
    }
    public function engordar($quilos)
    {
        $this->peso = $this->peso+$quilos;
    }
}
