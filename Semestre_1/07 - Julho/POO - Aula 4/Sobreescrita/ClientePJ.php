<?php

require_once('Cliente.php');

class ClientePJ extends Cliente
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
    
    public function enviarEmail()
    {
     echo 'Enviando e-mail da classe filha ClientePJ';
    }
}
