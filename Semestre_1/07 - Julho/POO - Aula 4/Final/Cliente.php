<?php

class Cliente
{

    protected $nome;
    protected $email;

    public function __construct($nome, $email)
    {
        $this->nome = $nome;
        $this->email = $email;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    final public function enviarEmail(){
        echo 'Enviando e-mail da classe pai';
    }
}
