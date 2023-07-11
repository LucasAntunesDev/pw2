<?php

class Professor
{

    private $nome;
    private $areaAtucao;

    public function __construct($nome, $areaAtucao)
    {
        $this->nome = $nome;
        $this->areaAtucao = $areaAtucao;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getAreaAtuacao()
    {
        return $this->areaAtucao;
    }
    public function setAreaAtuacao($areaAtucao)
    {
        $this->areaAtucao = $areaAtucao;
    }

}
