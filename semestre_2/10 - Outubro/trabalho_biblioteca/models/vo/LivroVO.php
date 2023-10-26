<?php
namespace Model\VO;

final class LivroVO extends VO {
    private $titulo;
    private $autores;
    private $editora;
    private $qtd_exemplares;
    private $data_retirada;
    private $data_devolucao;
    private $isbn;

    public function __construct(
                                $id = 0, $titulo = '', $autores = '', $editora = '', 
                                $qtd_exemplares = '', $data_retirada = '', $data_devolucao = '', $isbn = ''
                                ) {
        parent::__construct($id);
        $this->titulo = $titulo;
    }

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutores() {
        return $this->autores;
    }

    public function setAutores($autores) {
        $this->autores = $autores;
    }
    public function getEditora() {
        return $this->editora;
    }

    public function setEditora($editora) {
        $this->editora = $editora;
    }

    public function getQuantidadeExemplares() {
        return $this->qtd_exemplares;
    }

    public function setQuantidadeExemplares($qtd_exemplares) {
        $this->qtd_exemplares = $qtd_exemplares;
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

    public function setDataDevolucao($data_devolucao) {
        $this->data_devolucao = $data_devolucao;
    }

    public function getISBN() {
        return $this->isbn;
    }

    public function setISBN($isbn) {
        $this->isbn = $isbn;
    }
}
