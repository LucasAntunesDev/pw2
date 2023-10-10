<?php
namespace Model\VO;

final class UsuarioVO extends VO {
    private $nome;
    private $login;
    private $senha;

    public function __construct($id = 0, $nome = '', $login, $senha) {
        parent::__construct($id);
        $this->nome = $nome;
        $this->login = $login;
        $this->senha = $senha;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getLogin() {
        return $this->login;
    }

    public function setLogin($login) {
        $this->login = $login;
    }

    public function getSenha() {
        return $this->senha;
    }

    public function setSenha($senha) {
        $this->senha = $senha;
    }
}
