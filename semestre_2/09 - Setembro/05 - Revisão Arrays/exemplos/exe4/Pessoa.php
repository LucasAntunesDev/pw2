<?php
//Pessoa.php

class Pessoa {
    private  $nome;
    private  $idade;

    public function __construct($nome, $idade = 0) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getIdade() {
        return $this->idade;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function fazerAniversario() {
        $this->idade++;
    }
}
