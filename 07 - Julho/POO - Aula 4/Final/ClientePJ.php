<?php

require_once('Cliente.php');

final class ClientePJ extends Cliente
{
    private $cnpj;

    public function __construct($nome, $email, $cnpj)
    {
        parent::__construct($nome, $email);

        $this->cnpj = $cnpj;
    }

    public function getCnpj(){
        return $this->cnpj;
    }

    public function setCnpj($cnpj){
        $this->cnpj = $cnpj;
    }
    
}
