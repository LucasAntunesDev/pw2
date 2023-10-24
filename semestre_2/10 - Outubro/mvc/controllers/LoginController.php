<?php

namespace Controller;

use Model\UsuarioModel;
use Model\VO\UsuarioVO;

final class LoginController extends Controller {

    public function __construct(){
        parent::__construct(false);
    }

    public function login() {
        $this->loadView('login');
    }

    public function fazerLogin() {
        $vo = new UsuarioVO(0, '', $_POST['login'], $_POST['senha']);
        $model = new UsuarioModel();

        $success = $model->doLogin($vo);

        if ($success) {
            $this->redirect('disciplinas.php');
        } else {
            $this->redirect('login.php');
        }
    }
}
