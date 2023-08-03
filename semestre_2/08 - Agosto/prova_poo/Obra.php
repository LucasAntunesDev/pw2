<?php

include_once('Personagem.php');

abstract class Obra
{
    protected $nome;
    protected $personagens;

    public function __construct($nome, $personagens)
    {
        $this->nome = $nome;
        // array_push($this->personagens, $personagens);
        $this->personagens =$personagens;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getPersonagens()
    {
        return $this->personagens;
    }

    public function addPersonagem(Personagem $personagem)
    {
        array_push($this->personagens, $personagem);
    }

    public function obterProtagonistas()
    {

        $protagonistas = array();

        foreach ($this->getPersonagens() as $personagem) {

            if($personagem->isProtagonista()) array_push($protagonistas, $personagem);

        }
        
        return $protagonistas;
    }

    abstract function obterNota();
}
