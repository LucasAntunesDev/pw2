<?php
namespace Model\VO;

final class NotaVO extends VO {
    private $id_aluno;
    private $id_disciplina;
    private $nota;

    public function __construct($id = 0, $id_aluno = 0, $id_disciplina = 0, $nota = 0) {
        parent::__construct($id);
        $this->id_aluno = $id_aluno;
        $this->id_disciplina = $id_disciplina;
        $this->nota = $nota;
    }

    public function getIdAluno() {
        return $this->id_aluno;
    }

    public function setIdAluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }

    public function getIdDisciplina() {
        return $this->id_disciplina;
    }

    public function setIdDisciplina($id_disciplina) {
        $this->id_disciplina = $id_disciplina;
    }

    public function getNota() {
        return $this->nota;
    }

    public function setNota($nota) {
        $this->nota = $nota;
    }
}
