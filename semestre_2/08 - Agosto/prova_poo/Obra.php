<?php

include_once('Personagem.php');

abstract class Obra
{
    protected string $nome;
    // protected $personagens = [];
    protected $personagens = array();
    // protected array $personagens;

    public function __construct($nome, $personagens)
    {
        $this->nome = $nome;
        // $this->personagens = $personagens;
        array_push($this->personagens, $personagens);
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
        // $personagensArray = 
        $protagonistas = array();

        foreach ($this->getPersonagens() as $personagem) {
            echo 'PERSONAGEM:';
            print_r($personagem);
            echo '<br>';
            if($personagem[2])array_push($protagonistas, $personagem);
            // foreach($personagem as $p){
            //     if ($p->isPotagonista) {
            //         array_push($protagonistas, $p);
            //     }
            // }

        }

        return $protagonistas;
    }

    abstract function obterNota();
}
