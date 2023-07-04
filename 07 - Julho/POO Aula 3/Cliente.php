<?php

class Cliente {
    
    protected $nome;
    protected $email;

    public function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome(){
        return $this->nome;       
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getEmail(){
        return $this->nome;       
    }

    public function Email($email){
        $this->email = $email;
    }
}