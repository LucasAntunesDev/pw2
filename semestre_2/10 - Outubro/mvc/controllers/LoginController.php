<?php

namespace Controller;

use Model\UsuarioModel;
use Model\VO\UsuarioVO;

final class LoginController extends Controller {

    public function login() {
        $this->loadView('login');
    }

    public function fazerLogin() {
        $vo = new UsuarioVO(0, '', $_POST['login'], $_POST['senha']);
        $model = new UsuarioModel();

        $success = $model->doLogin($vo);

        $success ? $this->redirect('disciplinas') : $this->redirect('login');
    }
}
