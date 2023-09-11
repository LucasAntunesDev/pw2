<?php
//Filme.php
require_once('Personagem.php');
class Filme {
    private string $nome;
    private int $duracao;
    private $personagens;

    public function __construct(string $nome, $personagens) {
        $this->nome = $nome;
        $this->personagens=  $personagens;
    }
    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getDuracao() {
        return $this->duracao;
    }
    public function setDuracao($duracao) {
        $this->duracao = $duracao;
    }

    public function getPersonagens() {
        return $this->personagens;
    }

    public function addPersonagem($personagem){
        // $this->personagens = $personagem;
        array_push($this->personagens, $personagem);
    }

    public function obterProtagonistas() {
        // return $this->$protagonistas;
        $protagonistas = array();

        foreach ($this->getPersonagens() as $personagem) {

            if ($personagem->isProtagonista()) array_push($protagonistas, $personagem);
        }
        return $protagonistas;
    }
}
