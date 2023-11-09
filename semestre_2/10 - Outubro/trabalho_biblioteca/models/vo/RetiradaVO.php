<?php

namespace Model\VO;

date_default_timezone_set("America/sao_paulo");

final class RetiradaVO extends VO {
    private $id_aluno;
    private $id_livro;
    private $data_retirada;
    private $data_devolucao;


    public function __construct(
        $id = 0,
        $id_aluno = 0,
        $id_livro = 0,
        $data_retirada = '',
        $data_devolucao = 0,
    ) {
        parent::__construct($id);
        $this->id_aluno = $id_aluno;
        $this->id_livro = $id_livro;
        $this->data_retirada = $data_retirada;
        $this->data_devolucao = date('Y-m-d', strtotime(date('Y-m-d') . ' + 1 week'));
    }

    public function getIdAluno() {
        return $this->id_aluno;
    }

    public function setIdAluno($id_aluno) {
        $this->id_aluno = $id_aluno;
    }

    public function getIdLivro() {
        return $this->id_livro;
    }

    public function setIdLivro($id_livro) {
        $this->id_livro = $id_livro;
    }

    public function getDataRetirada() {
        return $this->data_retirada;
    }
    
    public function setDataRetirada($data_retirada) {
        $this->data_retirada = $data_retirada;
    }

    public function getDataDevolucao() {
        return $this->data_devolucao;
    }
}
