<?php

class Aluno
{

    private $nome;
    private $professor;

    public function __construct($nome, $professor)
    {
        $this->nome = $nome;
        $this->professor = $professor;
    }

    public function getNome()
    {
        return $this->nome;
    }
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getProfessor()
    {
        return $this->professor;
    }
    public function setProfessor($professor)
    {
        $this->professor = $professor;
    }
}
