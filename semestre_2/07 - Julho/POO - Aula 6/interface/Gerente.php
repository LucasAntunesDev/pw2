<?php

include_once('Funcionario.php');
include_once('FuncionarioAutenticavel.php');

class Gerente extends Funcionario
    implements FuncionarioAutenticavel
{
    public function login()
    {
        return true;    
    }
}
