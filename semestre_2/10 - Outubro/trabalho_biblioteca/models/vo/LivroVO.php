<?php

namespace Model\VO;

date_default_timezone_set("America/sao_paulo");

final class LivroVO extends VO {
    private $titulo;
    private $autores;
    private $editora;
    private $qtd_exemplares;
    private $isbn;

    public function __construct(
        $id = 0,
        $titulo = '',
        $autores = '',
        $editora = '',
        $qtd_exemplares = '',
        $isbn = ''
    ) {
        parent::__construct($id);
        $this->titulo = $titulo;
        $this->autores = $autores;
        $this->editora = $editora;
        $this->qtd_exemplares = $qtd_exemplares;
        $this->isbn = $isbn;
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


    public function getISBN() {
        return $this->isbn;
    }

    public function setISBN($isbn) {
        $this->isbn = $isbn;
    }
}
