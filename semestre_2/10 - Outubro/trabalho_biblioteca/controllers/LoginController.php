<?php

namespace Controller;

use Model\UsuarioAdmnistrativoModel;
use Model\VO\UsuarioAdmnistrativoVO;

final class LoginController extends Controller {

    public function __construct(){
        parent::__construct(false);
    }

    public function login() {
        $this->loadView('login');
    }

    public function fazerLogin() {
        $vo = new UsuarioAdmnistrativoVO(0, '', $_POST['login'], $_POST['senha']);
        $model = new UsuarioAdmnistrativoModel();

        $success = $model->doLogin($vo);

        if ($success) {
            $this->redirect('disciplinas.php');
        } else {
            $this->redirect('login.php');
        }
    }
    
    public function logout(){
        $model = new UsuarioAdmnistrativoModel();
        $model->logout();
        $this->redirect('login.php');
    }

}
