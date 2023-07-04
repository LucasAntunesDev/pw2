<?php

require_once('Cliente.php');

class ClientePF extends Cliente
{
    private $cpf;

    public function __construct($nome, $email, $cpf)
    {
        parent::__construct($nome, $email);

        $this->cpf = $cpf;
    }

    public function getCPF(){
        return $this->cpf;
    }

    public function setCPF($cpf){
        $this->cpf = $cpf;
    }
}
