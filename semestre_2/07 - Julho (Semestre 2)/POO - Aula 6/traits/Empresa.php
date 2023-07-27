<?php

include_once('Propietario.php');

class Empresa
{
    private $razaoSocial;

    public function __construct($razao)
    {
        $this->razaoSocial = $razao;
    }

    public function getRazao()
    {
        return $this->razaoSocial;
    }

    public function setRazao($razao)
    {
        $this->razaoSocial = $razao;
    }

    public function obterLucros(){
        echo 'XCorp LTDA está obtendo lucros';
    }
}
