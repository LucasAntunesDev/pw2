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

    public function getCpf(){
        return $this->cpf;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

        public function enviarEmail(){
            echo 'Enviando e-mail para '. $this->email . ' ...';
        }
}
