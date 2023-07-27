<?php

include_once('Pessoa.php');
include_once('Propietario.php');
include_once('Colaborador.php');

class Socio extends Pessoa
implements Propietario, Colaborador {
    public function obterLucros(){
        echo  "$this->nome está obtendo lucros";
    }

    public function trabalhar(){
        echo  "$this->nome está trabalhando";
    }

}