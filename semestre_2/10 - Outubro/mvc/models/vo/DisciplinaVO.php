<?php
//DisciplinaVO.php

namespace Model\VO;

final class DisciplinaVO extends VO {
    private $nome;

    public function __construct($id, $nome) {
        parent::__construct($id);
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
}
