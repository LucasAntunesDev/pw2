<?php

namespace Controller;

use Model\UsuarioAdmnistrativoModel;
use Model\VO\UsuarioAdmnistrativoVO;

abstract class Controller {
    public function __construct($obrigaLogin = true) {
        session_start();

        if ($obrigaLogin) {
            $model = new UsuarioAdmnistrativoModel();

            if (!$model->checkLogin()) $this->redirect('login.php');
            
        }
    }

    public function redirect($url) {
        header("location: $url");
    }

    public function loadView($view, $data = []) {
        #Esse método cria automaticamente variáveis baseados nos indexes do array
        extract($data);
        include("views/$view.php");
    }
}
