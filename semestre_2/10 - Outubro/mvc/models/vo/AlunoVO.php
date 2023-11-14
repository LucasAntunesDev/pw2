<?php
namespace Model\VO;

final class AlunoVO extends VO {
    private $nome;
    private $matricula;
    private $url_foto;

    public function __construct($id = 0, $nome = '', $matricula = 0, $url_foto = '') {
        parent::__construct($id);
        $this->nome = $nome;
        $this->matricula = $matricula;
        $this->url_foto= $url_foto;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }
    
    public function getMatricula() {
        return $this->matricula;
    }

    public function setMatricula($matricula) {
        $this->matricula = $matricula;
    }
    public function getURLFoto() {
        return $this->url_foto;
    }

    public function setURLFoto($url_foto) {
        $this->url_foto = $url_foto;
    }
}
