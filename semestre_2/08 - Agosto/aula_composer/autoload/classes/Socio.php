<?php

namespace App;

class Socio extends Pessoa implements Proprietario, Colaborador {

    public function obterLucros() {
        echo $this->nome . " está obtendo lucros <br>";
    }

    public function trabalhar() {
        echo $this->nome . " está trabalhando <br>";
    }

}