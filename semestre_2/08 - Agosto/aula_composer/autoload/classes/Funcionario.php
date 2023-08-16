<?php
namespace App;

class Funcionario extends Pessoa implements Colaborador {

    public function trabalhar() {
        echo $this->nome . " está trabalhando <br>";
    }

}