<?php

namespace App;

class Empresa implements Proprietario {

    private $razaoSocial;

    public function __construct($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function getRazaoSocial() {
        return $this->razaoSocial;
    }

    public function setRazaoSocial($razaoSocial) {
        $this->razaoSocial = $razaoSocial;
    }

    public function obterLucros() {
        echo $this->razaoSocial . " está obtendo lucros <br>";
    }

}