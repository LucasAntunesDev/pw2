<?php
//DisciplinaController.php

namespace Controller;

use Model\DisciplinaModel;
use Model\VO\DisciplinaVO;


final class DisciplinaController extends Controller {
    public function list() {
        $model  = new DisciplinaModel();
        $data = $model->selectAll();

        $this->loadView('listaDisciplinas', [
            'disciplinas' => $data
        ]);
    }

    //monta o formulário
    public function get() {
        
    }

    public function save() {
    }

    public function remove() {
    }
}
