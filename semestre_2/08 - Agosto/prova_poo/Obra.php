<?php

include_once('Personagem.php');

class Obra
{
    protected string $nome;
    protected Personagem $personagens = [];

    public function __construct($nome, $personagens)
    {
        $this->nome = $nome;
        $this->personagens = $personagens;
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
        array_push($personagens, $personagem);
    }

    public function obterProtagonistas($personagens)
    {
        $protagonistas = [];

        foreach ($personagens as $personagem) {

            if ($personagem->isPotagonista) {
                array_push($protagonistas, $personagem);
            }
        }

        return $protagonistas;
    }

    public function obterNota()
    {
    }
}
