<?php
//Filme.php
require_once('Personagem.php');
class Filme {
    private $nome;
    private $duracao;
    private $personagens;

    public function __construct($nome, $duracao, $personagens) {
        $this->nome = $nome;
        $this->duracao =  $duracao;
        $this->personagens =  $personagens;
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

    public function addPersonagem($personagem) {
        array_push($this->personagens, $personagem);
    }

    public function obterProtagonistas() {
        $protagonistas = array();

        foreach ($this->getPersonagens() as $personagem) {

            if ($personagem->isProtagonista()) array_push($protagonistas, $personagem);
        }
        return $protagonistas;
    }
}
