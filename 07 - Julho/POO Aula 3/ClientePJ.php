<?php

require_once('Cliente.php');

class ClienteJF extends Cliente
{
    private $cnpj;

    public function __construct($nome, $email, $cnpj)
    {
        parent::__construct($nome, $email);

        $this->cnpj = $cnpj;
    }

    public function getCPNPJ(){
        return $this->cnpj;
    }

    public function setCPNPJ($cnpj){
        $this->cnpj = $cnpj;
    }
}
