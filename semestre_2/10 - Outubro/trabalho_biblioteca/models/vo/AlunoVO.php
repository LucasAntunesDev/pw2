<?php

namespace Model\VO;

final class AlunoVO extends VO {
    private $nome;
    private $curso;
    private $matricula;
    private $cpf;

    public function __construct(
        $id = 0,
        $nome = '',
        $curso = '',
        $matricula = '',
        $cpf = ''
    ) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->curso = $curso;
        $this->matricula = $matricula;
        $this->cpf = $cpf;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getCurso() {
        return $this->curso;
    }

    public function setCurso($curso) {
        $this->curso = $curso;
    }

    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }

    public function getCPF() {
        return $this->cpf;
    }

    public function setCPF($cpf) {
        $this->cpf = $cpf;
    }
}
