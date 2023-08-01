<?php

include_once("Pessoa.php");
include_once("Colaborador.php");

class Funcionario extends Pessoa
implements Colaborador
{
    public function trabalhar()
    {
        echo 'Fulano está trabalhando';
    }
}
